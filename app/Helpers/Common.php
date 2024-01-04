<?php

use App\Models\Category;
use App\Models\Keyword;
use App\Models\MappingKeyword;
use App\Models\Project;
use App\Models\SubCategory;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

$i = 0;

function prx($data)
{
    echo "<pre>";
    print_r($data);
    die;
}
function uploadImage($file, $path)
{
    try {
        $destinationPath = public_path($path);
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $path . '/' . $filename;
        $filename = str_replace(" ", "", $filename);
        $file->move($destinationPath, $filename);
        return $filename;
    } catch (Exception $ex) {
        return $ex->getMessage();
    }
}
function AddDateTime($data, $action = 'store')
{
    $data = $data->except('_token');
    $time = GetDateTime();
    $data['updated_at'] = $time;
    if ($action == 'store') {
        $data['created_at'] = $time;
    }
    return $data;
}
function AddDateTimeInArray(array $data, string $action = 'store'): array
{
    $time = GetDateTime();
    $data['updated_at'] = $time;
    if ($action == 'store') {
        $data['created_at'] = $time;
    }
    return $data;
}
function GetDateTime()
{
    $date_time = date('Y-m-d H:i:s');
    return $date_time;
}
function CheckPermissionForUser($module, $operation)
{
    $role_data = Auth::user()->role()->first();
    // $role_data = Auth::user();
    if ($role_data) {
        $role = json_decode($role_data->permissions);
        if (property_exists($role, $module) && in_array($operation, $role->$module)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function GetSubCategory($id): array
{
    $subcategory = SubCategory::where('sub_category_id', $id);
    $subcategory_data['data'] = $subcategory->get();
    $subcategory_data['count'] = $subcategory->count();
    return $subcategory_data;
}



function TreeView($project_id, array $filterType = ['all']): string
{
    $projectData = Project::with(['color'])->find($project_id);
    $color = 'red';
    if ($projectData->color->color_name) {
        $color = $projectData->color->color_name;
    }
    $arr = [];
    $categorylist = Category::where('project_id', $project_id)->get();
    if (count($categorylist) <= 0) {
        return null;
    }
    foreach ($categorylist as $row) {
        $arr[$row->id]['id'] = $row->id;
        $arr[$row->id]['description'] = $row->description;
        $arr[$row->id]['name'] = $row->name;
        $arr[$row->id]['sub_category_id'] = $row->sub_category_id;
        $arr[$row->id]['slug'] = $row->slug;
    }

    $str = buildTreeView($arr, 0, 0, -1, $color, $filterType);
    $str .= "</table>";

    return $str;
}

function buildTreeView($arr, $parent, $level = 0, $prelevel = -1, $color, $filterType): string
{
    global $html;
    global $i;
    $th = true;
    foreach ($arr as $id => $data) {

        $str = "";

        if ($parent == $data['sub_category_id']) {

            if ($parent == 0) {

                $keywords = GetKeyWordData($data['id']);

                if (count($keywords) > 0) {
                    $volumeString = GetKeywordVolume($keywords);
                    $str .= "<tr><td>" . $volumeString . "</td></tr>";
                }

                foreach ($keywords as $key =>  $value) {
                    if ($value !== null) {
                        if (in_array('all', $filterType)) {
                            $keyword = $value['index_id'] . ' ' . $value['keyword'] . '(' . $value['count'] . ')';
                        } elseif (in_array('volume', $filterType)) {
                            $keyword =   $value['count'];
                        } else if (in_array('keyword', $filterType)) {
                            $keyword = $value['keyword'];
                        }
                        $str .= "<tr><td class='arrow-cell' style='color: orange;'  title=" . $data['description'] . "> <input style='margin-right: 7px;margin-left: 11px;' type='checkbox' value='" . $value['keyword_id'] . "' class='keyword-check-box'> " . $keyword . "&nbsp<i class='fa fa-undo specific-category-undo' title='Undo category' data-id=" . $data['id'] . "  style='cursor: pointer;'></i></td></tr>";
                    }
                }
                if ($i == 0) {
                    $html .= "<table class='table table-bordered'><tr><th style='color: orange; font-weight: 500;' class='arrow-cell' data-category-id='" . $data['id'] . "' title='" . $data['description'] . "'><div class='arrow down' data-type='down' data-category-id='" . $data['id'] . "' title='Add Subcategory'></div><div class='arrow right' data-type='right' data-category-id='" . $data['id'] . "' title='Map Keyword'></div>" . $data['name'] . " </th></tr>" . $str . "<tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>";

                    $i++;
                    $th = false;
                } else {
                    $html .= "</table><table class='table table-bordered'><tr><th style='color: orange;font-weight: 500;' class='arrow-cell' data-category-id=" . $data['id'] . " title='" . $data['description'] . "' ><div class='arrow down' data-type='down'  data-category-id=" . $data['id'] . "></div><div class='arrow right' data-type='right' data-category-id=" . $data['id'] . "></div>" . $data['name'] . " </th></tr>" . $str . "<tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>";
                    $th = false;
                }
            }
            if ($data['name'] != "") {


                if ($th == true) {

                    $keywords = GetKeyWordData($data['id']);

                    if (count($keywords) > 0) {
                        $volumeString = GetKeywordVolume($keywords);
                        $str .= "<tr><td>" . $volumeString . "</td></tr>";
                    }
                    foreach ($keywords as $key =>  $value) {
                        if ($value !== null) {

                            if (in_array('all', $filterType)) {
                                $keyword = $value['index_id'] . ' ' . $value['keyword'] . '(' . $value['count'] . ')';
                            } elseif (in_array('volume', $filterType) && !in_array('keyword', $filterType)) {
                                $keyword =   $value['count'];
                            } else if (in_array('keyword', $filterType) && !in_array('volume', $filterType)) {
                                $keyword = $value['keyword'];
                            } else if (in_array('keyword', $filterType) && in_array('volume', $filterType)) {
                                $keyword = $value['keyword'] . '(' . $value['count'] . ')';
                            }

                            $str .= "<tr><td class='arrow-cell' style='color: $color;' ><input style='margin-right: 7px;margin-left: 11px;' type='checkbox' value='" . $value['keyword_id'] . "' class='keyword-check-box'>" . $keyword . "&nbsp&nbsp<i class='fa fa-undo undo-keyword' title='Undo keyword' data-keyword-id=" . $value['id'] . " ></i></td></tr>";
                        }
                    }

                    $html .= '
                <tr><td class="arrow-cell" style="font-weight: 400;color: orange" title="' . $data['description'] . '">
                <div class="arrow down" data-type="down"  data-category-id="' . $data['id'] . '" title="Add Subcategory"></div>
                <div class="arrow left" data-type="left" data-category-id="' . $data['id'] . '" title="Add Category"></div>
                <div class="arrow right" data-type="right" data-category-id="' . $data['id'] . '" title="Map Keyword" ></div>
                <div class="arrow top" data-type="top"  data-category-id="' . $data['id'] . '" data-category-name="' . $data['name'] . '" title="Edit Category" ></div>
                ' . $data['name'] . ' &nbsp<i class="fa fa-undo specific-category-undo" title="Undo category" data-id="' . $data['id'] . '"  style="cursor: pointer;"></i></td>
                </tr>' . $str . '<tr><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>';
                }

                if ($level > $prelevel) {
                    $level = $prelevel;
                }
                $level++;
                buildTreeView($arr, $id, $level, $prelevel, $color, $filterType);
                $level--;
            }
        }
    }
    // $html .= "<tr><td></td></tr><tr><td></td></tr>";
    return $html;
}
function GetKeyWordData($category_id)
{
    try {

        $map_keyword =  MappingKeyword::with(['keyword', 'category', 'createdUser', 'updatedUser'])
            ->where('category_id', $category_id)
            ->get()->map(function ($map_keyword) {
                if ($map_keyword->keyword) {
                    return [
                        'id' => $map_keyword->id,
                        'keyword_id' => $map_keyword->keyword_id,
                        'keyword' => $map_keyword->keyword->keyword_name,
                        'index_id' => $map_keyword->keyword->index_id,
                        'count' => $map_keyword->keyword->count,
                        'category' => $map_keyword->category->name,
                        'created_by' => $map_keyword->createdUser->username,
                        'updated_by' => $map_keyword->updatedUser->username,
                    ];
                }
            });

        return $map_keyword;
    } catch (Exception $e) {
        prx($e->getMessage());
    }
}
function GetKeywordVolume($keywords)
{
    $countOfKeyword = count($keywords);
    $total = 0;

    foreach ($keywords as $key => $value) {
        if ($value !== null) {
            $total = $total + $value['count'];
        }
    }

    return  '(' . $countOfKeyword . ') ' . $total;
}
function GetSetting($key)
{
    $settingData = Setting::where('key', $key)->get(['value']);
    if (isset($settingData[0])) {
        $value = $settingData[0]->value;
    } else {
        $value = '';
    }
    return  $value;
}
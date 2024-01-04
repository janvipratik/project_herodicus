<?php

namespace App\DataTables;

use App\Models\User;
use App\Models\TeamMember;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        // return datatables()
        //     ->eloquent($query)
        //     ->addColumn('action', 'userdatatable.action');

        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($row) {
                return $this->checkrights($row);
            })
            ->editColumn('status', function ($row) {
                return $this->Status($row);
            })
            ->editColumn('username', function ($row) {
                $Username = '';
                $registerForm = route('user.edit', ['id' => $row->id]);
                $Username = '<a href="' . $registerForm . '"class="" style="font-weight: bold;">'
                    . $row->username . '</i></a><br><span style="text-align: center;">' . Carbon::parse($row->created_at)->format('d-m-y, h:i A') . '</span>';
                return $Username;
            })
            ->editColumn('name', function ($row) {
                $Name = '';
                if ($row->first_name != '' && $row->last_name != '') {
                    $Name = '<td>' . $row->first_name . ' ' . $row->last_name . '</td>';
                } else {
                    $Name = '<td>-</td>';
                }
                return $Name;
            })
            ->addColumn('recruiting_platform', function ($row) {
                $platform = '';
                if ($row->recruiting_platform != '') {
                    $platform = '<td>' . $row->recruiting_platform .  '</td>';
                } else {
                    $platform = '<td>-</td>';
                }
                return $platform;
            })
            ->addColumn('handle_on_upwork', function ($row) {
                $platform = '';
                if ($row->handle_on_upwork != '') {
                    $platform = '<td>' . $row->handle_on_upwork .  '</td>';
                } else {
                    $platform = '<td>-</td>';
                }
                return $platform;
            })
            ->addColumn('negotiated_compensation', function ($row) {
                $platform = '';
                if ($row->negotiated_compensation != '') {
                    $platform = '<td>' . $row->negotiated_compensation .  '</td>';
                } else {
                    $platform = '<td>-</td>';
                }
                return $platform;
            })
            ->addColumn('applying_for', function ($row) {
                $platform = '';
                if ($row->applying_for != '') {
                    $platform = '<td>' . $row->applying_for .  '</td>';
                } else {
                    $platform = '<td>-</td>';
                }
                return $platform;
            })
            ->addColumn('additional_user_tags', function ($row) {
                $tagName = TeamMember::with('teamName')->where('user_id', $row->id)->get()->pluck('teamName.team_name', 'id')->toArray();
                if (count($tagName) > 1) {
                    $workStatus = implode(', ', $tagName);
                } else {
                    $workStatus = reset($tagName); // Get the first (and only) element
                }
                $tag = '';
                if ($workStatus != '') {
                    $tag = '<td>' . $workStatus . '</td>';
                } else {
                    $tag = '<td>-</td>';
                }
                return $tag;
            })
            ->addColumn('rating', function ($row) {
                $rating = '';
                if ($row->rating != '') {
                    $rating = '<td>' . $row->rating . '/100</td>';
                } else {
                    $rating = '<td>-</td>';
                }
                return $rating;
            })
            ->rawColumns([
                'invite',
                'action',
                'status',
                'username',
                'name',
                'recruiting_platform',
                'handle_on_upwork',
                'negotiated_compensation',
                'applying_for',
                'additional_user_tags',
                'rating'
            ]);
    }

    public function checkrights($row)
    {
        $menu = '';
        $editurl = route('user.edit', ['id' => $row->id]);
        $deleteurl = route('user.delete', ['id' => $row->id]);
        $undourl = route('user.undo', ['id' => $row->id]);

        $menu .= '<div class="btn-group">'; // Wrap the buttons in a div with the "btn-group" class

        if ($row->deleted_at == '') {
            $menu .= '<a href="' . $editurl . '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details"><i class="la la-edit"></i></a>';
            $menu .= '<form action="' . $deleteurl . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md deleteRecord"><i class="la la-trash"></i></button></form>';
        } else {
            $menu .= '<a href="' . $undourl . '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Undo deleted user">Undo</a>';
            // $menu .= '<a href="' . $undourl . '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details"><i class="la la-fast-backward"></i></a>';
        }
        $menu .= '</div>';

        return $menu;
    }

    public function Status($row)
    {
        $status = '';
        $selectedValue = $row->status;
        // style='width: 170%;'
        // $status = "
        //     <div class='form-group row' >
        //         <select class = 'form-control change-status' data-id=" . $row->id . " >
        //             <option value=''> -- Select Status -- </option>
        //             <option value='0' " . ($selectedValue == 0 ? "selected" : "") . ">Inactive</option>
        //             <option value='1' " . ($selectedValue == 1 ? "selected" : "") . ">Active</option>
        //             <option value='2' " . ($selectedValue == 2 ? "selected" : "") . ">Block</option>
        //         </select>
        //     </div>
        //     ";
        $status = "
        <div class='form-group row'>
            <select class='form-control change-status' data-id='" . $row->id . "'>
                <option value=''> -- Select Status -- </option>
                <option value='0' " . ($selectedValue == 0 ? "selected" : "") . ">Inactive</option>
                <option value='1' " . ($selectedValue == 1 ? "selected" : "") . ">Active</option>";

        // if ($selectedValue == 2) {
        //     $status .= "<option value='3'>Unblock</option>";
        // } elseif ($selectedValue == 3) {
        //     $status .= "<option value='2'>Block</option>";
        // }
        if ($selectedValue == 2) {
            $status .= "<option value='2' selected>Blocked</option>";
        } else {
            $status .= "<option value='2'>Block</option>";
        }

      
        $status .= "
            </select>
        </div>
         ";


        return $status;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UserDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(UserDatatable $model)
    {
        // return $model->newQuery();
        $models = User::select();

        if (request()->get('archive') == 1) {
            $models->onlyTrashed()->whereNotNull('users.deleted_at');
        } elseif (request()->get('archive') == 0) {
            $models->whereNull('users.deleted_at');
        }

        if (request()->get('username', false)) {
            $models->where('users.username', 'like', '%' . request()->get('username') . '%');
        }
        if (request()->get('email', false)) {
            $models->where('users.email', 'like', '%' . request()->get('email') . '%');
        }
        if (request()->get('mobile_number', false)) {
            $models->where('users.mobile_number', 'like', '%' . request()->get('mobile_number') . '%');
        }
        if (!request()->has('order')) {
            $models->where('users.role_id', '!=', 1)->orderBy('users.updated_at', 'DESC');
        }

        return $this->applyScopes($models);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('userdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('add your columns'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User_' . date('YmdHis');
    }
}

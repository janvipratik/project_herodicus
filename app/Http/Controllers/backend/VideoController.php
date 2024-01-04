<?php


namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use carbon\carbon;

use Illuminate\Http\Request;
use App\Models\Video;
use App\DataTables\VideoDatatable;
use App\Models\User;

class VideoController extends Controller
{
    public $modual_name = "";
    public $title = "";
    public $view = "";

    public function __construct()
    {
        $this->view = 'backend.Video.';
        $this->title = 'videos';
    }
    public function index(VideoDatatable $datatable)
    {
        $return_data = [];
        $return_data['site_title'] = trans($this->title);
        return $datatable->render($this->view . 'index', array_merge($return_data));
    }

    public function create()
    {
        $return_data['users'] =  User::get()->pluck('username', 'id');
        return view($this->view .'create', array_merge($return_data));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:videos',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        $dateTime = Carbon::now();

        $data = [
            'title' => request()->title,
            'user_id' => request()->user_id,
            'created_at' => $dateTime,
            'updated_at' => $dateTime
        ];

        Video::create($data);

        session()->flash('success', 'User created successfully');
        return redirect()->route('videos.index');
    }

    public function edit($id)
    {
        $return_data['users'] = User::get()->pluck('username', 'id');
        $return_data['video'] = Video::find($id);
        return view($this->view .'edit', array_merge($return_data));
    }


    public function Update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:videos,title,' . $id,
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dateTime = Carbon::now();
        $video =  Video::find($id);

        $data =  [
            'title' => request()->title,
            'user_id' => request()->user_id,
            'updated_at' => $dateTime,
        ];

        $video->update($data);

        session()->flash('success', 'User updated successfully');
        return redirect()->route('videos.index');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return response()->json([
            'status' => 200,    
            'message' => 'User deleted successfully',
        ]);
    }


    public function ChangeStatusVideo(Request $request)
    {
        $video = Video::where('id', $request->row_id)->update(['status' => $request->value]);
        if ($video) {
            session()->flash('success', 'Status updated successfully');
        } else {
            session()->flash('error', "There is some thing went, Please try after some time.");
        }
        return redirect()->route('videos.index');
    }
}

<?php


namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use carbon\carbon;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\ManageUserDatatable;
use App\Models\Service;
use App\Models\UserService;

class UserController extends Controller
{
    public $modual_name = "";
    public $title = "";
    public $view = "";

    public function __construct()
    {
        $this->view = 'backend.User.';
        $this->title = 'Users';
    }
    public function index(ManageUserDatatable $datatable)
    {


        $return_data = [];
        $return_data['site_title'] = trans($this->title);
        return $datatable->render($this->view . 'index', array_merge($return_data));
    }


    public function create()
    {
        $return_data = [];
        $site_title = trans($this->title);
        $service = Service::get()->pluck('name', 'id');
        return view($this->view . 'create', compact('site_title', 'service'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required|regex:/^[0-9]{10,15}$/',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = ['email' => request()->email, 'mobile_number' => request()->mobile_number, 'role_id' => request()->usertype];

        if ($request->hasFile('profile_video')) {
            $filename = ImageUploadTrait::uploadImage($request->file('profile_video'), 'videos');
            $data['profile_video'] = $filename;
        }

        $user = User::create($data);

        if (request()->has('services')) {
            $services = [];
            foreach (request()->services as $key => $value) {
                $services[] = ['user_id' => $user->id, 'service_id' => $value];
            }
            UserService::insert($services);
        }

        session()->flash('success', 'user created successfully');
        return redirect()->route('user.index');
    }
    public function edit(User $user)
    {
        $return_data = [];
        $site_title = trans($this->title);
        $service = Service::get()->pluck('name', 'id');
        return view($this->view . 'edit', compact('site_title', 'service','user'));    
    }

    public function ChangeStatusUser(Request $request)
    {
        $user = User::where('id', $request->row_id)->update(['status' => $request->value]);
        if ($user) {
            session()->flash('success', 'Status updated successfully');
        } else {
            session()->flash('error', "There is some thing went, Please try after some time.");
        }
        return redirect()->route('user.index');
    }


    public function GetProfileVideo(Request $request)
    {
        $dataId = $request->input('id');
        
        $dataId = User::where('id',$dataId)->first();
        $video =$dataId->video;
        // prx($message);
        return response()->json(['data'=> $video ],200);    
    }
}

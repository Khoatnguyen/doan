<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //user
    public function index(){
        $user = UserInfo::with('user.role')->get();
        return view('admin.manager.user.list-user')->with([
            'user'=>$user,
        ]);
    }
    public function getEditUser($id){
        $user = User::with('user_info','role')->where('id',$id)->first();
        $role=Roles::all();
        return view('admin.manager.user.edit-user')->with([
            'user'=>$user,
            'role'=>$role,
        ]);
    }
    public function EditUser(Request $request, $id){

        $image = array();
        if ($files = $request->file('library_images')){
            foreach ($files as $file){
                $image_name= md5(rand(1000, 10000));
                $ext= strtolower($file->getClientOriginalExtension());
                $file_name= $image_name.'-'.'imageTour.'.$ext;
                $image_url = $file_name;
                $file-> move(public_path('storage'),$file_name);
                $image[]=$image_url;
            }
        }
        $detail_user= UserInfo::where('user_id',$id);
        $user= User::where('id',$id);
        $datainput = array(
            "full_name"=>$request->full_name,
            "gender"=>$request->gender,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "avatar"=>$image,
        );
        $dataUser = array(
            "email"=>$request->email,
            "role_id"=>$request->role_id,
        );
        $detail_user->update($datainput);
        $user->update($dataUser);
        if ($detail_user) {
            $user = UserInfo::with('user.role')->get();
            return view('admin.manager.user.list-user')->with([
                'user'=>$user,
            ]);
        } else {
            return 'Thêm không thành công';
        }
    }
    //role
    public function role(){
        $role = Roles::all();
        return view('admin.manager.role.list-role')->with([
            'role'=>$role,
        ]);
    }
    public function getAddRole(){
        return view('admin.manager.role.add-role');
    }
    public function addRole(Request $request){
        $createRole = array(
            'name' => $request->name,
        );
        $saveRole = Roles::create($createRole);
        //dd($saveTour);
      
        if ($saveRole) {
            $role = Roles::all();
            return redirect()->route('list.role')->with(['role'=>$role]);
        } else {
            return 'Không thành công';
        }
    }
    public function dateleRole($id){
        $datadelete = Roles::findOrFail($id);
        $datadelete->delete();
        $role = Roles::all();
        return redirect()->route('list.role')->with(['role'=>$role]);
    }
}

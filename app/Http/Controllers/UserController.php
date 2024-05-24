<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $getid = Auth::id();
        $getUser = User::with(['user_info'])->where('user.id', "=" ,$getid)->first();

        return view('user.user')->with(["getUser"=>$getUser]);
    }
    public function records(){
        $getid = Auth::id();
        $userInfo= UserInfo::with('user')->where('user_id','=',$getid)->first();
        return view('user.records-manage')->with(["userInfo"=>$userInfo]);
    }
    public function updateUser(Request $request){
        $id = Auth::id();
        $userInfo = UserInfo::where('user_id','=',$id)->first();
        if ($request->has('avatar')){
            $file = $request->avatar;
            $ext = $request->avatar->extension();
            $file_name= time().'-'.'imageUser.'.$ext;
           $file-> move(public_path('storage'),$file_name);
        }
        $request->merge(['image'=>$file_name]);
        if ($userInfo){
            //to do update
            $dataUpdateInfo = array(
                "full_name"=>$request->name,
                "gender"=>$request->gender,
                "avatar"=>$request->image,
                "phone"=>$request->phone,
                "address"=>$request->address,
            );
            $dataUpdateUser = array(
                "name"=>$request->name,
                "email"=>$request->email,
            );
            $userInfo->update($dataUpdateInfo);
            $user =User::findOrFail($id);
            $user->update($dataUpdateUser);

            if ($userInfo){
                return redirect()->route('records');
            }else{
                return 'Thêm không thành công';
            }
        }else{
            //to do create
            $dataCreate = array(
                "full_name"=>$request->full_name,
                "user_id"=>$id,
                "gender"=>$request->gender,
                "avatar"=>$request->image,
                "phone"=>$request->phone,
                "address"=>$request->address,
            );
            $createUser = UserInfo::create($dataCreate);
            if ($createUser){
                return redirect()->route('records');
            }else{
                return 'Thêm không thành công';
            }
        }

    }

    public function createUser(Request $request){
        $id = Auth::id();
        $dataInput = array(
            'user_id'=> $id,
            'full_name'=>$request->full_name,
            'gender'=>$request->gender,
            'avatar'=>$request->avatar,
            'phone'=>$request->phone,
            'address'=>$request->gender,
        );
        $useInfo = UserInfo::create($dataInput);
        if ($useInfo) {
            return redirect()->route('update-user');
        }else{
            return "Cập nhật không thành công!";
        }
    }
}

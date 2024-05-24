<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function postRegister(Request $request){
        $request ->validate([
            'name'=> 'required|unique:user',
            'email'=>'required|unique:user',
            'password'=>'required|required_with:rePassword|same:rePassword'
        ],[
            'name.required'=>'Tên không được để trống',
            'name.unique'=>'Tên đã tồn tại',
            'email.required'=>'Email không được để trống',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Password không được để trống',
            'password.same'=>'Password không trùng khớp',
        ]);
        $dataInput=[
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'status' => 0
        ];
        $data = User::create($dataInput);
        if ($data){
            return redirect()->route('login');
        }else{
            return "Đăng ký không thành công";
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $request -> validate([
            'name'=>'required',
            'password'=>'required',
        ],[
            'name.required'=>'Tên đăng nhập không được để trống',
            'password.required'=>'Password không được để trống'
        ]);
        $dataInput = [
            'name'=>$request->name,
            'password'=>$request->password
        ];
        if (Auth::attempt($dataInput)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors([
            'name'=>'tên dăng nhập không thành công',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

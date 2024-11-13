<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $user = UserInfo::with('user.role');
        return view('admin.manager.user.list-user')->with([
            'user'=>$user,
        ]);
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

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\admin\AdminUser;
use App\admin\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminLoginController extends Controller {

    public function adminUserList(){
        $userlist = AdminUser::GetAdminUserList();
        $result = array(
            'userlist'      => $userlist,
        );
        return view('admin.adminuser.list', compact('result'));
    }

    public static function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public static function editUser($id){
        $userlist = User::findOrFail($id);
        $rolelist = Role::GetRoleList();
         $result = array(
            'record'      => $userlist,
            'rolelist'    =>$rolelist,
        );
        return view('admin.adminuser.edit', compact('result'));
    }

    public function updateuser(Request $request, $id){
        $adminuser = User::findOrFail($id);
        if (isset($request->changepwd) && $request->changepwd == 'on') { 
            $this->validate($request, [
                'name'                  => 'required|string|min:6',
                'email'                 => 'required|string|min:6|email',
                'password'              => 'required|string|min:6|confirmed',
            ]);
            $adminuser->password = bcrypt($request->password);
            $adminuser->name = $request->name;
            $adminuser->email = $request->email;
            $adminuser->roles()->sync($request->roleid);
            $adminuser->save();
        } else{
             $this->validate($request, [
                'name'                  => 'required|string|min:6',
                'email'                 => 'required|string|min:6|email',
            ]);
            $adminuser->name = $request->name;
            $adminuser->email = $request->email;
            $adminuser->roles()->sync($request->roleid);
            $adminuser->save();
        }
       Session::flash('done','User successfully updated');
        return redirect('/my-admin/user/list');
    }
}
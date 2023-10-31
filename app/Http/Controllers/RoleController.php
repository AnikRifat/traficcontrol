<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index(){
        return view('admin.createRole');
    }
    public function create(Request $req){
        $data=new Role();
        $data->name=$req->name;
        $data->display_name=$req->display_name;
        $data->save();
        return redirect('/roles');

    }
    public function view(){
        $roles=Role::all();
        return view('admin.roles',compact('roles'));
    }
    public function details($id){
        $roleDetails=Role::find($id);
        return view('admin.roleDetails',compact('roleDetails'));
    }
    public function update($id){
        $role=Role::find($id);
        return view('admin.roleUpdate',compact('role'));

    }
    public function edit($id,Request $req){
       $data=Role::find($id);
       $data->name=$req->name;
       $data->display_name=$req->display_name;
       $data->save();
       return redirect('/roles');
    }
    public function delete($id){
        $data=Role::find($id);
        $data->delete();
        return redirect('/roles');

    }
     public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

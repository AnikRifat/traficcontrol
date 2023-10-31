<?php

namespace App\Http\Controllers;

use App\Models\NormalUser;
use App\Models\User;
use Illuminate\Http\Request;

class NormalUsersController extends Controller
{
    public function index(){
        return view('admin.createnewUser');
       }
       public function create(Request $req){
        $data=new User();
        $data->name = $req->name;
        $data->email = $req->email;

        $data->password = $req->password;

        $data->save();

     return redirect('/users');
       }
public function users(){
    $users=  User::where('role_id', '1')->get();
    return view('admin.users',compact('users'));
}
public function update($id){
    $user=User::find($id);
    return view('admin.user',compact('user'));
}
public function edit(Request $req,$id){
    $data=User::find($id);
    $data->name = $req->name;
    $data->email = $req->email;
    $image=$req->avatar;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->avatar->move('images',$imagename);
        $data->avatar=$imagename;
    }
    
    $data->settings = $req->settings;
    $data->password = $req->password;

    $data->save();
    return redirect('/users');
}
public function delete($id){
    $user=User::find($id);
    $user->delete();
    return redirect('/users');
}
}

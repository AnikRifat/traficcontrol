<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\PhoneEmail as ModelsPhoneEmail;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class PhoneEmail extends Controller
{
    public function index(){
        return view('admin.phoneEmail');

    }
    public function create(Request $req){
        $data=new ModelsPhoneEmail();
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->save();
        return redirect('/');
    }
   
    public function update($id){
        $phoneEmail=ModelsPhoneEmail::find($id);
        return view('admin.updatePhoneEmail',compact('phoneEmail'));
    }
    public function edit(Request $req,$id){
        $phoneEmail=ModelsPhoneEmail::find($id);
        $phoneEmail->phone = $req->phone;
        $phoneEmail->email=$req->email;
        $phoneEmail->save();
        return redirect('/');
    }

}

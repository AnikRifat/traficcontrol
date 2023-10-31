<?php

namespace App\Http\Controllers;

use App\Models\LoginImage;
use Illuminate\Http\Request;

class LoginImageController extends Controller
{
    public function index(){
        return view('admin.createLoginImage');
    }
    public function create(Request $req){
        $data=new LoginImage();
        $image=$req->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
        $data->save();
        return redirect('/logout');
    }
    public function update($id){
        $login_image=LoginImage::find($id);
        return view('admin.updateLoginImage',compact('login_image'));
    }
    public function edit($id,Request $req){
        $data=LoginImage::find($id);
        $image=$req->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $req->image->move('images',$imagename);
            $data->image=$imagename;
        }
       
        $data->save();
        return redirect('/logout');
    }

   
}

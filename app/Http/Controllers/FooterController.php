<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        return view('admin.footer');
    }
    public function create(Request $req){
        $data=new Footer();
        $data->description=$req->description;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->save();
        return redirect('/');

    }
    public function update($id){
        $footer=Footer::find($id);
        return view('admin.updateFooter',compact('footer'));
    }
    public function edit(Request $req,$id){
        $data=Footer::find($id);
        $data->description = $req->description;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->save();
        return redirect('/');
    }
 
    
}

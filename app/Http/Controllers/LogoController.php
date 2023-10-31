<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index(){
        return view('admin.createLogo');
    }
    public function create(Request $req){
        $data=new Logo();
        $image=$req->logo;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
    $req->logo->move('images',$imagename);
    $data->logo=$imagename;
        }
    
        $data->save();
        return redirect('/');
    }
    public function update($id){
        $logo=Logo::find($id);
        return view('admin.updateLogo',compact('logo'));
    }
    public function edit($id,Request $req){
        $data=Logo::find($id);
        $image=$req->logo;
        if($image){
           $imagename=time().'.'.$image->getClientOriginalExtension();
           $req->logo->move('images',$imagename);
           $data->logo=$imagename;
        }
        $data->save();
        return redirect('/');
    }

}

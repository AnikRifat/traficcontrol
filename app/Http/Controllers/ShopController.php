<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Logo;
use App\Models\PhoneEmail;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('admin.createShop');
    }
    public function create(Request $req){
     $data=new Shop();
     $data->title=$req->title;
     $data->description=$req->description;
     $image=$req->image;
     if($image)
     {
        $imagename=time().'.'.$image->getClientOriginalExtension();
     $req->image->move('images',$imagename);
     $data->image=$imagename;
     }
     
     $data->download_url=$req->download_url;
     $data->google_play_url=$req->google_play_url;
     $data->app_url=$req->app_url;
     $data->save();
     return redirect('/shops');


    }
    public function view(){
        $shops=Shop::all();
        $phonesandEmails=PhoneEmail::all();
        $logos=Logo::all();
        $footer=Footer::all();
        return view('shops',compact('shops','phonesandEmails','logos','footer'));
    }
    public function update($id){
        $shop=Shop::find($id);
        return view('admin.updateShop',compact('shop'));
    }
    public function edit(Request $req,$id){
        $data=Shop::find($id);
        $data->title=$req->title;
     $data->description=$req->description;
     $image=$req->image;
     if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
     }
    
     $data->download_url=$req->download_url;
     $data->google_play_url=$req->google_play_url;
     $data->app_url=$req->app_url;
     $data->save();
     return redirect('/shops');
    }
}

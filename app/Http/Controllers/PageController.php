<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Logo;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Topdata;
use App\Models\Post;
use App\Models\Slider;
class PageController extends Controller
{
    public function index(){
        return view('admin.page');
       }
       public function create(Request $req){
        $data=new Page();
        $data->author_id = $req->author_id;
       
        $data->title=$req->title;
       
        $data->excerpt=$req->excerpt;
        $data->body=$req->body;
        $image=$req->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
        }
        
        $data->slug=$req->slug;
        $data->meta_description=$req->meta_description;
        $data->meta_keywords=$req->meta_keywords;
        $data->status=$req->status;
        
        $data->save();
        return redirect('/pages');
    }
    public function pages(){
        $pages=Page::all();
        return view('admin.pages',compact('pages'));
    }
    public function delete($id)
{
     $page=Page::find($id);
     $page->delete();
     return redirect('/pages');
}
public function update($id){
    $page=Page::find($id);
    return view('admin.pageUpdate',compact('page'));
}
public function edit(Request $req,$id){
    $data=Page::find($id);
    $data->author_id = $req->author_id;
       
    $data->title=$req->title;
   
    $data->excerpt=$req->excerpt;
    $data->body=$req->body;
    $image=$req->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
    }
   
    $data->slug=$req->slug;
    $data->meta_description=$req->meta_description;
    $data->meta_keywords=$req->meta_keywords;
    $data->status=$req->status;
    
    $data->save();
    return redirect('/pages');
}
public function view($id){
    $page=Page::find($id);
    return view('admin.pageDetails',compact('page'));
}


 public function welcome(){
        $ph_email=Topdata::find(1);
        $footer=Footer::find(1);
        $slides=Slider::all();
        $post=Post::orderBy('id', 'DESC')->paginate(7);
        $pagename=Page::all();
        $logos=Logo::all();
        $shops=Shop::all();
       
    return view('index',compact('ph_email','footer','slides','post','pagename','logos','shops'));
    }


}
 
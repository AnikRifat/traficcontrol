<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\PhoneEmail;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
    return view('admin.post');
   }
   public function create(Request $req){
    $data=new Post();
    $data->author_id = $req->author_id;
    $data->category_id=$req->category_id;
    $data->title=$req->title;
    $data->seo_title=$req->seo_title;
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
    $data->featured=$req->featured;
    $data->save();
    return redirect('/posts');
}
public function posts(){
    $posts=Post::all(); 
    $pagename=Page::all();
    return view('admin.posts',compact('posts','pagename'));
}
public function delete($id)
{
     $post=Post::find($id);
     $post->delete();
     return redirect('/posts');
}
public function update($id){
    $post=Post::find($id);
    return view('admin.update',compact('post'));
}
public function edit(Request $req,$id){
    $data=Post::find($id);
    $data->author_id = $req->author_id;
    $data->category_id=$req->category_id;
    $data->title=$req->title;
    $data->seo_title=$req->seo_title;
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
    $data->featured=$req->featured;
    $data->save();
    return redirect('/posts');
}
public function view($id){
    $post=Post::find($id);
    return view('admin.postDetails',compact('post'));
}
public function postDetails($id){
    $post=Post::find($id);
    $footer=Footer::all();
    $phonesandEmails=PhoneEmail::all();
    return view('postDetails',compact('post','footer','phonesandEmails'));
}
}

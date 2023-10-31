<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Backimage;

use App\Models\Policy;

use Auth;

use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $post=Post::orderBy('id', 'DESC')->paginate(7);

        $pagename=Page::all();


        return view('index',compact('post','pagename'));
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('voyager.login');
    }

    public function page($id)
    {
        
         $pagename=Page::all();

         $pagedetail=Page::find($id);

        return view('page',compact('pagename','pagedetail'));
    }



    public function post($id)
    {
        
         $pagename=Page::all();

         $post=Post::find($id);

        return view('postdetails',compact('pagename','post'));
    }


    public function contact()
    {

        $pagename=Page::all();

        return view('home.contact',compact('pagename'));
    }


    public function policy()
    {

        $pagename=Page::all();

        $policy=Policy::all();

        return view('home.policy',compact('pagename','policy'));
    }


    public function search(Request $request)
    {       
        $search=$request->search;

         $post=Post::where('title','LIKE',"%$search%")->orWhere('body','LIKE',"$search")->orderby('id','desc')->paginate(6);

        $pagename=Page::all();


        return view('index',compact('post','pagename'));

        
    }

    public function blog()
    {

         $post=Post::orderBy('id', 'DESC')->paginate(12);

        $pagename=Page::all();


        return view('home.all_blog',compact('post','pagename'));
    }



    public function blog_search(Request $request)
    {       
        $search=$request->search;

         $post=Post::where('title','LIKE',"%$search%")->orWhere('body','LIKE',"$search")->orderby('id','desc')->paginate(6);

        $pagename=Page::all();


        return view('home.all_blog',compact('post','pagename'));

        
    }


    public function shop()
    {
         

        $pagename=Page::all();


        return view('home.shop',compact('pagename'));
    }


}

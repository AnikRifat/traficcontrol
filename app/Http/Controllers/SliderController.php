<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
   public function index(){
    return view('admin.createSlider');
   }
   public function create(Request $req){
    $data=new Slider();
    $data->title=$req->title;
    $data->text=$req->text;
    $data->save();
    return redirect('/');
   }
   public function view(){
    $sliders=Slider::all();
    return view('admin.sliders',compact('sliders'));
   }
   public function update($id){
    $slider=Slider::find($id);
    return view('admin.sliderUpdate',compact('slider'));
}
public function edit(Request $req,$id){
    $data=Slider::find($id);
    $data->title=$req->title;
    $data->text=$req->text;
    $data->save();
    return redirect('/');
}
}

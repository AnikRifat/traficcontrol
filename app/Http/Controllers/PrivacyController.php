<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\PhoneEmail as ModelsPhoneEmail;
use App\Models\Policy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index(){
        return view('admin.createPrivacyPolicy');
    }
    public function create(Request $req){
        $data=new Policy();
        $data->title=$req->title;
        $data->description=$req->description;
        $data->save();
        return redirect('/privacyPolicy');
    }
    public function view(){
        $privacyPolicies=Policy::all();
        $phonesandEmails=ModelsPhoneEmail::all();
        $footer=Footer::all();

        return view('privacyPolicy',compact('privacyPolicies','phonesandEmails','footer'));
    }
    public function update($id){
        $privacyPolicy=Policy::find($id);
        return view('admin.privacyUpdate',compact('privacyPolicy'));
    }
    public function edit(Request $req,$id){
        $data=Policy::find($id);
        $data->title=$req->title;
        $data->description=$req->description;
        $data->save();
        return redirect('/privacyPolicy');
    }

}

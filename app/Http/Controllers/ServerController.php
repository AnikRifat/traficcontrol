<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Country;
use App\Server;

use Validator;

class ServerController extends Controller
{

    public function all(Request $request){

        $response = array();
        $tv_categories = Server::where("active", 1)->orderBy("id","ASC")->get();
         $i              =   0;
         foreach ($tv_categories as $tv_category):
		$hi = Country::where("id", $tv_category['country'])->first();
		
                 $response[$i]['id']                    = $tv_category['id'];
                 $response[$i]['name']                    = $tv_category['name'];
                 $response[$i]['country']                          = $hi->name;
                 $response[$i]['flagLogo']                    = strtolower($hi->flag);
                 $response[$i]['username']                    = $tv_category['username'];
                 $response[$i]['password']                    = $tv_category['password'];
		 $response[$i]['configScriptTCP']            =  base64_encode($tv_category['openvpn']);
               //$response[$i]['configScriptTCP']            = str_replace(["\r\n", "\r", "\n"], " ", $tv_category['openvpn']);
					 
					// str_replace(array("\n", "\r"), '',$tv_category['openvpn']);
		//preg_replace( "/\r|\n/", "", $tv_category['openvpn'] ); //$tv_category['openvpn'];
                 $i++;
         endforeach;
         //return $response;

         return response()->json([
            'vpns'=> $response,
        ]);

        // return response()->json(
        //     $response,
        // );

    }


}

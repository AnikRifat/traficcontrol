<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NormalUsersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneEmail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class,'welcome']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});













//Slider routes


Route::get('/sliders',[SliderController::class,'view']);



Route::get('contact',[HomeController::class,'contact']);

Route::get('private-policy',[HomeController::class,'policy']);

Route::get('blog-search',[HomeController::class,'search']);

Route::get('blog-page-search',[HomeController::class,'blog_search']);

Route::get('shop',[HomeController::class,'shop']);

Route::get('blog',[HomeController::class,'blog']);

Route::get('page/{id}',[HomeController::class,'page']);

Route::get('post_details/{id}',[HomeController::class,'post']);

 Route::get('/logo',[LogoController::class,'index']);


Route::get('/logout',[RoleController::class,'logout']);

 route::get('/link',function(){


Artisan::call('storage,link');

 });


 Route::get('/shops',[ShopController::class,'view']);



 

<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('UserSite.home');
});

Route::get('/project', function () {
    return view('UserSite.project');
});

Route::get('/about',function (){
    return view('UserSite.aboutMe');
});

Route::get('/service',function (){
    return view('UserSite.service');
});
Route::get('/blog',function (){
    return view('UserSite.blog');
});
Route::get('/shop',function (){
    return view('UserSite.shop');
});
Route::get('/contact',function (){
    return view('UserSite.contact');
});
Route::get('/productDetails',function (){
    return view('UserSite.productDetailsPage');
});

Route::get('/addToCart',function (){
    return view('UserSite.AddToCart');
})->middleware('isLogin');
Route::get('/checkOutPage',function (){
    return view('UserSite.checkOutPage');
})->middleware('isLogin');

Route::get('/login',[CustomAuthController::class,"Login"])->name("login");
Route::get('/res',[CustomAuthController::class,"resistration"])->name('resistration');

Route::post('/res-user',[CustomAuthController::class, "Resister_User"])->name('res-user');
Route::post('/login-user',[CustomAuthController::class, "Login_user"])->name('login-user');
Route::get('/Dashbord',[CustomAuthController::class, "Dashbord"])->name('Dashbord')->middleware('isAdmin');


Route::get('/logout',[CustomAuthController::class,'logout']);
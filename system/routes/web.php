<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/template', function (){
    return view("template.base");
});

Route::get('/home', function (){
    return view("home");
});

Route::get('/menu', function (){
    return view("menu");
});


Route::get('/about', function (){
    return view("about");
});

Route::get('/contact', function (){
    return view("contact");
});

Route::get('/login', function (){
    return view("login");
});

Route::get('/register',function(){
    return view("register");
});

Route::get('/beranda',function(){
    return view("beranda");
});

Route::get('/product-detail',function(){
    return view("product-detail");
});

Route::get('/product-list',function(){
    return view("product-list");
});

Route::get('/product-cart',function(){
    return view("product-cart");
});

Route::get('/product-payment',function(){
    return view("product-payment");
});

Route::get('/inbox',function(){
    return view("inbox");
});

Route::get('/view-mail',function(){
    return view("view-mail");
});

Route::get('/compose',function(){
    return view("compose");
});

Route::get('/women',function(){
    return view("women");
});

Route::get('/men',function(){
    return view("men");
});

Route::get('/sale',function(){
    return view("sale");
});
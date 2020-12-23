<?php

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

/*HOME*/

Route::get('/index', function(){
   return view('index');
});


Route::get('/',function(){
    return view('index');
});

/*BARRA NAV*/

Route::get('/contact', function (){
    return view('contact');
});



Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

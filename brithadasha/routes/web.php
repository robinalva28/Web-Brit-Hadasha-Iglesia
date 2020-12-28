<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

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






Route::get('/home', 'HomeController@index')->name('home');

/*SUBMENU*/
Route::get('/mirol', function(){
    return view('myrol');
});

Route::get('/agenda', function(){
    return view('agenda');
});



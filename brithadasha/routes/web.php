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

/*RUTAS DE ADMIN*/
Route::group(['middleware' => 'admin',
    'prefix' => 'admin',],function(){
    #ADMIN SERVICIOS
    Route::get('/servicios','RolController@adminIndexUsers');
    Route::get('/servicios/index', 'RolController@adminIndex');
    Route::get('/servicios/add', function(){
        return view('formAgregarServicio');
    });
    Route::post('/servicios/add','RolController@store' );

});






Route::get('/home', 'HomeController@index')->name('home');

/*SUBMENU*/
Route::get('/miservicio', 'RolController@index');


Route::get('/agenda', function(){
    return view('agenda');
});



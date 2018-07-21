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



    Route::get('/','PostsController@index');

    Route::get('/register','PostsController@register');

    Route::post('/login','loginController@login');



    Route::get('login',array('as'=>'login',function(){

        return view('welcome');

    }));

    Route::post('/insert','insertController@insert');


Route::group(['middleware'=>'auth'],function (){

    Route::get('/home','PostsController@home');

    Route::get('/calculator','PostsController@calculator');

    Route::get('/utilizatori','PostsController@user');

    Route::post('/insertC','insertController@insertCheltuieli');

    Route::get('/logout','logoutController@logout');

    Route::get('/delete/{id}','UserController@delete');

    Route::get('/update/{id}','UserController@delete');
});


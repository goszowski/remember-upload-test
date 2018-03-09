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

Route::group(['middleware'=>['remember.files']], function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('test', ['as'=>'test', 'uses'=>'TestController@store']);
});

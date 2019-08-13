<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get( '/user', 'Controller@AuthApi');

Route::post('/register', 'Api\AuthAdController@register');

Route::post('/login', 'Api\AuthAdController@login');

Route::post('/test', function (){
    return \App\Admin::all();
});

Route::group(['middleware' => 'jwt.auth'], function () {

    Route::resource('/user', 'Api\UserController');
    Route::post('/logout', 'Api\AuthAdController@logout');

});


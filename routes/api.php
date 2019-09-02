<?php

use App\User;
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

//Route::get('/test', function (){
//    return \App\User::with('profile')->where('username','sbumphreyci')->get();
//});

Route::get('/hanh-chinh-viet-nam', function (){
    $path = storage_path() . "/json/hanhchinhvietnam.json";
    return response(file_get_contents($path));
});

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('/user', 'Api\UserController');
//    Route::get('/data', function (){
//        $data = ->get();
//        return response($data);
//    });
    Route::post('/logout', 'Api\AuthAdController@logout');
//    Route::get('/dataStock', 'Api\UserController@getDataStock');
});


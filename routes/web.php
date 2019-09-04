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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function (){
    return view('home');
})->name('home');

Route::get('/ad', function (){
    return view('admin');
});

Route::view('/ad/{any}', 'admin')
    ->where('any', '.*');

Route::resource('/user','UserController');

Route::get('/menu', function (){
    return view('menu');
})->name('menu');

Route::get('/about-us', function (){
    return view('about-us');
})->name('about-us');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/profile', function (){
    return view('profile-user');
})->name('profile');


//Route::get('/test', function (){
//    $data = \App\Dish::find(2)->sets()->get();
//    return response($data);
//});


//Route::group(['prefix' => 'admin'], function () {
//  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
//  Route::post('/login', 'AdminAuth\LoginController@login');
//  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
//
//  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'AdminAuth\RegisterController@register');
//
//  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
//  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
//});

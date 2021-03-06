<?php

use App\Set;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

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

Route::post('/upload-image', 'Api\UploadImageController@upload');

Route::get('/dashboard/total','Api\DashboardController@getDataTotal');

Route::get('/get-data-percent','Api\DashboardController@getDataToTime');

Route::get('/hanh-chinh-viet-nam', function () {
    $path = storage_path() . "/json/hanhchinhvietnam.json";
    return response(file_get_contents($path));
});

Route::get('test_data',function (){
    $data = DB::table('orders')
        ->select(DB::raw('DATE(created_at) as date'), DB::raw('sum(amount) as totalAmount'))
        ->groupBy('date')
        ->orderBy('date')
        ->get();
    return $data;
});

Route::post('upload', 'Api\UploadImageController@upload');
Route::resource('food', 'Api\FoodController');
Route::resource('set', 'Api\SetController');
Route::resource('order', 'Api\OrderController');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('/user', 'Api\UserController');
    Route::post('/logout', 'Api\AuthAdController@logout');
});


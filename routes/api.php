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

Route::get('/convert-data', function () {
    $data = [

//            ['set_id' => 1, 'food_id' => 2],
//            ['set_id' => 1, 'food_id' => 1],
//            ['set_id' => 1, 'food_id' => 3]
        ['set_id' => 1, 'food_id' => 1],
        ['set_id' => 1, 'food_id' => 3],
        ['set_id' => 1, 'food_id' => 8],

        ['set_id' => 2, 'food_id' => 1],
        ['set_id' => 2, 'food_id' => 9],
        ['set_id' => 2, 'food_id' => 5],

        ['set_id' => 3, 'food_id' => 1],
        ['set_id' => 3, 'food_id' => 10],
        ['set_id' => 3, 'food_id' => 3],

        ['set_id' => 4, 'food_id' => 1],
        ['set_id' => 4, 'food_id' => 11],

        ['set_id' => 5, 'food_id' => 1],
        ['set_id' => 5, 'food_id' => 2],
        ['set_id' => 5, 'food_id' => 12],

        ['set_id' => 6, 'food_id' => 1],
        ['set_id' => 6, 'food_id' => 4],
        ['set_id' => 6, 'food_id' => 15],

        ['set_id' => 7, 'food_id' => 1],
        ['set_id' => 7, 'food_id' => 13],
        ['set_id' => 7, 'food_id' => 15],

        ['set_id' => 8, 'food_id' => 1],
        ['set_id' => 8, 'food_id' => 16],
        ['set_id' => 8, 'food_id' => 4],

        ['set_id' => 9, 'food_id' => 1],
        ['set_id' => 9, 'food_id' => 4],
        ['set_id' => 9, 'food_id' => 17],

        ['set_id' => 10, 'food_id' => 1],
        ['set_id' => 10, 'food_id' => 18],

        ['set_id' => 11, 'food_id' => 1],
        ['set_id' => 11, 'food_id' => 5],
        ['set_id' => 11, 'food_id' => 19],
        ['set_id' => 11, 'food_id' => 6],
        ['set_id' => 11, 'food_id' => 20],

        ['set_id' => 12, 'food_id' => 21],
        ['set_id' => 12, 'food_id' => 16],

        ['set_id' => 13, 'food_id' => 21],
        ['set_id' => 13, 'food_id' => 13],
        ['set_id' => 13, 'food_id' => 22],

        ['set_id' => 14, 'food_id' => 1],
        ['set_id' => 14, 'food_id' => 3],
        ['set_id' => 14, 'food_id' => 31],

        ['set_id' => 15, 'food_id' => 21],
        ['set_id' => 15, 'food_id' => 23],
        ['set_id' => 15, 'food_id' => 24],
        ['set_id' => 15, 'food_id' => 4],
        ['set_id' => 15, 'food_id' => 25],

        ['set_id' => 16, 'food_id' => 1],
        ['set_id' => 16, 'food_id' => 12],
        ['set_id' => 16, 'food_id' => 23],
        ['set_id' => 16, 'food_id' => 14],

        ['set_id' => 17, 'food_id' => 1],
        ['set_id' => 17, 'food_id' => 23],
        ['set_id' => 17, 'food_id' => 26],
        ['set_id' => 17, 'food_id' => 27],

        ['set_id' => 18, 'food_id' => 1],
        ['set_id' => 18, 'food_id' => 23],
        ['set_id' => 18, 'food_id' => 28],

        ['set_id' => 19, 'food_id' => 1],
        ['set_id' => 19, 'food_id' => 29],
        ['set_id' => 19, 'food_id' => 3],
        ['set_id' => 19, 'food_id' => 14],

        ['set_id' => 20, 'food_id' => 1],
        ['set_id' => 20, 'food_id' => 19],
        ['set_id' => 20, 'food_id' => 14],
        ['set_id' => 20, 'food_id' => 7],

        ['set_id' => 21, 'food_id' => 1],
        ['set_id' => 21, 'food_id' => 14],
        ['set_id' => 21, 'food_id' => 3],
        ['set_id' => 21, 'food_id' => 30],
    ];
    $newData = [];

    foreach ($data as $item) {
        $item['quantity'] = random_int(1, 3);
        array_push($newData, $item);
    }

    file_put_contents(storage_path() . '/foodSeeder.txt', var_export($newData, true));
    return 'done!';
});

//Route::get('/upload-image', function (Request $request){
//    Log::info($request);
//});

//Route::get('/test', function (){
//    return \App\User::with('profile')->where('username','sbumphreyci')->get();
//});

Route::get('/hanh-chinh-viet-nam', function () {
    $path = storage_path() . "/json/hanhchinhvietnam.json";
    return response(file_get_contents($path));
});
Route::post('/upload', 'Api\UploadImageController@upload');


Route::resource('food', 'Api\FoodController');

Route::resource('/set', 'Api\SetController');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('/user', 'Api\UserController');

    Route::post('/logout', 'Api\AuthAdController@logout');
//    Route::get('/dataStock', 'Api\UserController@getDataStock');
});


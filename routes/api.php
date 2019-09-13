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
//    $data = [
//
////            ['set_id' => 1, 'food_id' => 2],
////            ['set_id' => 1, 'food_id' => 1],
////            ['set_id' => 1, 'food_id' => 3]
//        ['set_id' => 1, 'food_id' => 1],
//        ['set_id' => 1, 'food_id' => 3],
//        ['set_id' => 1, 'food_id' => 8],
//
//        ['set_id' => 2, 'food_id' => 1],
//        ['set_id' => 2, 'food_id' => 9],
//        ['set_id' => 2, 'food_id' => 5],
//
//        ['set_id' => 3, 'food_id' => 1],
//        ['set_id' => 3, 'food_id' => 10],
//        ['set_id' => 3, 'food_id' => 3],
//
//        ['set_id' => 4, 'food_id' => 1],
//        ['set_id' => 4, 'food_id' => 11],
//
//        ['set_id' => 5, 'food_id' => 1],
//        ['set_id' => 5, 'food_id' => 2],
//        ['set_id' => 5, 'food_id' => 12],
//
//        ['set_id' => 6, 'food_id' => 1],
//        ['set_id' => 6, 'food_id' => 4],
//        ['set_id' => 6, 'food_id' => 15],
//
//        ['set_id' => 7, 'food_id' => 1],
//        ['set_id' => 7, 'food_id' => 13],
//        ['set_id' => 7, 'food_id' => 15],
//
//        ['set_id' => 8, 'food_id' => 1],
//        ['set_id' => 8, 'food_id' => 16],
//        ['set_id' => 8, 'food_id' => 4],
//
//        ['set_id' => 9, 'food_id' => 1],
//        ['set_id' => 9, 'food_id' => 4],
//        ['set_id' => 9, 'food_id' => 17],
//
//        ['set_id' => 10, 'food_id' => 1],
//        ['set_id' => 10, 'food_id' => 18],
//
//        ['set_id' => 11, 'food_id' => 1],
//        ['set_id' => 11, 'food_id' => 5],
//        ['set_id' => 11, 'food_id' => 19],
//        ['set_id' => 11, 'food_id' => 6],
//        ['set_id' => 11, 'food_id' => 20],
//
//        ['set_id' => 12, 'food_id' => 21],
//        ['set_id' => 12, 'food_id' => 16],
//
//        ['set_id' => 13, 'food_id' => 21],
//        ['set_id' => 13, 'food_id' => 13],
//        ['set_id' => 13, 'food_id' => 22],
//
//        ['set_id' => 14, 'food_id' => 1],
//        ['set_id' => 14, 'food_id' => 3],
//        ['set_id' => 14, 'food_id' => 31],
//
//        ['set_id' => 15, 'food_id' => 21],
//        ['set_id' => 15, 'food_id' => 23],
//        ['set_id' => 15, 'food_id' => 24],
//        ['set_id' => 15, 'food_id' => 4],
//        ['set_id' => 15, 'food_id' => 25],
//
//        ['set_id' => 16, 'food_id' => 1],
//        ['set_id' => 16, 'food_id' => 12],
//        ['set_id' => 16, 'food_id' => 23],
//        ['set_id' => 16, 'food_id' => 14],
//
//        ['set_id' => 17, 'food_id' => 1],
//        ['set_id' => 17, 'food_id' => 23],
//        ['set_id' => 17, 'food_id' => 26],
//        ['set_id' => 17, 'food_id' => 27],
//
//        ['set_id' => 18, 'food_id' => 1],
//        ['set_id' => 18, 'food_id' => 23],
//        ['set_id' => 18, 'food_id' => 28],
//
//        ['set_id' => 19, 'food_id' => 1],
//        ['set_id' => 19, 'food_id' => 29],
//        ['set_id' => 19, 'food_id' => 3],
//        ['set_id' => 19, 'food_id' => 14],
//
//        ['set_id' => 20, 'food_id' => 1],
//        ['set_id' => 20, 'food_id' => 19],
//        ['set_id' => 20, 'food_id' => 14],
//        ['set_id' => 20, 'food_id' => 7],
//
//        ['set_id' => 21, 'food_id' => 1],
//        ['set_id' => 21, 'food_id' => 14],
//        ['set_id' => 21, 'food_id' => 3],
//        ['set_id' => 21, 'food_id' => 30],
//    ];
//    $newData = [];
//
//    foreach ($data as $item) {
//        $item['quantity'] = random_int(1, 3);
//        array_push($newData, $item);
//    }
//
//    file_put_contents(storage_path() . '/foodSeeder.txt', var_export($newData, true));
//    return 'done!';
});

//Route::get('/upload-image', function (Request $request){
//    Log::info($request);
//});

Route::get('/test', function () {
    $data = array(
        0 =>
            array(
                'id' => 1,
                'name' => 'rice',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'ollmonnrrofgsh3t2lpo.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        1 =>
            array(
                'id' => 2,
                'name' => 'Fried rice, pickles, beef',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'qdbokkbwt2xxrbwbq0gs.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        2 =>
            array(
                'id' => 3,
                'name' => 'boiled cabbages',
                'category_id' => '4',
                'price' => 25000,
                'image' => 'w0ou4jdiuqlq1t3ehwx0.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        3 =>
            array(
                'id' => 4,
                'name' => 'Boiled Chinese cabbage',
                'category_id' => 4,
                'price' => 25000,
                'image' => 'nwansgfy24q05zcd2fye.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        4 =>
            array(
                'id' => 5,
                'name' => 'boiled vegetables',
                'category_id' => 4,
                'price' => 25000,
                'image' => 'vth6hgtqvomngxeo3dd1.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        5 =>
            array(
                'id' => 6,
                'name' => 'vegetable soup',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'xky0ikudcrviztv2mhzx.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        6 =>
            array(
                'id' => 7,
                'name' => 'salad',
                'category_id' => 4,
                'price' => 20000,
                'image' => 'qby9srczxxhlcrziwccq.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        7 =>
            array(
                'id' => 8,
                'name' => 'Five-flavored fried chicken',
                'category_id' => 4,
                'price' => 100000,
                'image' => 'xjbixmuximzwvmbwhbon.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        8 =>
            array(
                'id' => 9,
                'name' => 'boiled pork',
                'category_id' => 3,
                'price' => 50000,
                'image' => 'gfmwvlqfjvzd5j5guq3w.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        9 =>
            array(
                'id' => 10,
                'name' => 'Basa Frish',
                'category_id' => 3,
                'price' => 200000,
                'image' => 'vr7ta2uxigkczs99dyrj.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        10 =>
            array(
                'id' => 11,
                'name' => 'Stewed pork leg with bell peppers',
                'category_id' => 3,
                'price' => 150000,
                'image' => 'ljfckfcyrgmjuexosxqi.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        11 =>
            array(
                'id' => 12,
                'name' => 'bean sprouts',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'yiqgdenawgezfklpiu6p.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        12 =>
            array(
                'id' => 13,
                'name' => 'cowpea',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'kifo8ntlbqxotysa271j.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        13 =>
            array(
                'id' => 14,
                'name' => 'tofu in tomato sauce',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'cd5jrlkareyjaullgbts.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        14 =>
            array(
                'id' => 15,
                'name' => 'meat stock ship',
                'category_id' => 3,
                'price' => 100000,
                'image' => 'euqvry3g5ad6fjnzzgsk.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        15 =>
            array(
                'id' => 16,
                'name' => 'meat skewer',
                'category_id' => 3,
                'price' => 50000,
                'image' => 'yiumavebo4odyujwddte.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        16 =>
            array(
                'id' => 17,
                'name' => 'Meat rolls',
                'category_id' => 3,
                'price' => 40000,
                'image' => 'l7tfuc6vzgmfcdswy4rm.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        17 =>
            array(
                'id' => 18,
                'name' => 'sweet and sour ribs',
                'category_id' => 3,
                'price' => 80000,
                'image' => 'pn2rhxoqwpvr5qcty3ra.png',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        18 =>
            array(
                'id' => 19,
                'name' => 'Braised fish',
                'category_id' => 3,
                'price' => 150000,
                'image' => 'dxtun4oq04v8yferh79v.png',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        19 =>
            array(
                'id' => 20,
                'name' => 'Sesame',
                'category_id' => 2,
                'price' => 10000,
                'image' => 'n6sp7zqzw0bzbt2lm7re.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        20 =>
            array(
                'id' => 21,
                'name' => 'Brown rice',
                'category_id' => 1,
                'price' => 20000,
                'image' => 'uavculttzzphghklrms0.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        21 =>
            array(
                'id' => 22,
                'name' => 'Boiled cauliflower',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'o9cnpgeykz83sngs1s1d.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        22 =>
            array(
                'id' => 23,
                'name' => 'omelet',
                'category_id' => 3,
                'price' => 20000,
                'image' => 'yddhagtnxwe0olyajvwh.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        23 =>
            array(
                'id' => 24,
                'name' => 'groundnut',
                'category_id' => 2,
                'price' => 10000,
                'image' => 'lspwxz7cchuv18dfahfu.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        24 =>
            array(
                'id' => 25,
                'name' => 'Boiled carrots',
                'category_id' => 3,
                'price' => 20000,
                'image' => 'qco0zewd4gld5iqgpxlj.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        25 =>
            array(
                'id' => 26,
                'name' => 'boiled chicken',
                'category_id' => 3,
                'price' => 140000,
                'image' => 'twklrpvjof78m8lkabxd.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        26 =>
            array(
                'id' => 27,
                'name' => 'Fried sausage',
                'category_id' => 3,
                'price' => 40000,
                'image' => 'yjxsuydaipsqudgyosoy.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        27 =>
            array(
                'id' => 28,
                'name' => 'roasted meat with pan',
                'category_id' => 3,
                'price' => 60000,
                'image' => 'xscc0ekoqrgez8fq5zmb.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        28 =>
            array(
                'id' => 29,
                'name' => 'fish fry',
                'category_id' => 3,
                'price' => 100000,
                'image' => 'bbd199qwfhnke5faorsu.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        29 =>
            array(
                'id' => 30,
                'name' => 'fried meat',
                'category_id' => 3,
                'price' => 50000,
                'image' => 'mfqikojoqeiprxnbeyrp.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
        30 =>
            array(
                'id' => 31,
                'name' => 'kimchi',
                'category_id' => 4,
                'price' => 35000,
                'image' => 'uvkegromok7dfcv5wd6u.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'total_fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead',
            ),
    );
    $newData = [];
    $mineralsData = ['Ca', 'Cl', 'Mg', 'K', 'Na', 'Cr', 'Cu', 'F', 'I', 'Fe', 'Mn', 'Se', 'Zn'];
    $vitaminsData = ['B1', 'B2', 'B3', 'B5', 'B6', 'B9', 'B12', 'H', 'C', 'A', 'D', 'E', 'K'];

    foreach ($data as $item) {
        $item['price'] = mt_rand(0.5 * 10, 3 * 10) / 10;
        $item['calo'] = mt_rand(150, 280) * 10;
        $item['protein'] = mt_rand(0.8 * 10, 2 * 10) / 10;
        $item['dietary_fiber'] = mt_rand(16, 75);
        $item['carbohydrate'] = mt_rand(80, 530);
        $item['total_fat'] = mt_rand(25, 110);
        $item['vitamins'] = randomVR($vitaminsData);
        $item['minerals'] = randomVR($mineralsData);

        array_push($newData, $item);
    }

    file_put_contents(storage_path() . "/data.txt", var_export($newData, true));
});

function randomVR($dataIn)
{
    $re = [];

    $count = mt_rand(2, 5);
    for ($i = 0; $i < $count; $i++) {
        $index = mt_rand(0, count($dataIn) - 1);
        array_push($re, $dataIn[$index]);
    }
    return join(',', $re);
}


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


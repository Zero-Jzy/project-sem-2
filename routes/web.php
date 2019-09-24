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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use JD\Cloudder\Facades\Cloudder;

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout')->middleware('auth');

Route::resource('/order', 'OrderController');

//Route::get('/checkout-shipping',  )

Route::get('/ad', function () {
    return view('admin');
});

Route::view('/ad/{any}', 'admin')
    ->where('any', '.*');

Route::resource('/user', 'UserController');

Route::resource('menu/food', 'FoodController');

Route::resource('menu/set', 'SetController');

Route::resource('profile', 'ProfileController');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/checkout_success', function () {
    $type = Input::get('payment_success');
    $mes = 'Checkout successful!';
    if ($type) $mes = 'Transaction successful!';

    return view('checkout_success', ['mes' => $mes]);
});


Route::get('upload_test', function () {
    $data = array(
        31 =>
        array(
            'id' => 32,
            'name' => 'coca',
            'price' => 0.5,
            'image' => 'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/be-an-be-uong/nuoc-ngot-co-ga-cocacola-nhat-160ml-1.jpg',
            'calo' => 139,
            'protein' => 1.7,
            'dietary_fiber' => 31,
            'carbohydrate' => 0,
            'total_fat' => 42,
            'vitamins' => 'A,C,D',
            'minerals' => 'Na,K,Ca,C',
        ),
        32 =>
            array(
                'id' => 33,
                'name' => 'lemonade',
                'price' => 0.5,
                'image' => 'https://media.ex-cdn.com/EXP/media.cpcs.vn/files/f1/a799232428fa8334640045670a2cdd0b.jpg',
                'calo' => 23,
                'protein' => 0.4,
                'dietary_fiber' => 2.5,
                'carbohydrate' => 7,
                'total_fat' => 5,
                'vitamins' => 'A,C,E,K,B1,B2,B5,B6',
                'minerals' => 'Ca,Fe,Mg,P,K,Na,Cu,Mn',
            ),
        33 =>
            array(
                'id' => 34,
                'name' => 'orange juice',
                'price' => 0.5,
                'image' => 'https://pulcinelladubai.com/wp-content/uploads/2018/12/saladfusion-orange-juice.jpg',
                'calo' => 44,
                'protein' => 0.7,
                'dietary_fiber' => 2.5,
                'carbohydrate' => 10,
                'total_fat' => 6,
                'vitamins' => 'A,C,D,B6,B12',
                'minerals' => 'Ca,Fe,Mg',
            ),
        34 =>
            array(
                'id' => 35,
                'name' => 'apple juice',
                'price' => 0.5,
                'image' => 'https://pulcinelladubai.com/wp-content/uploads/2018/12/saladfusion-orange-juice.jpg',
                'calo' => 45,
                'protein' => 0.5,
                'dietary_fiber' => 2.5,
                'carbohydrate' => 11,
                'total_fat' => 10,
                'vitamins' => 'A,C,E,B1,B2,B6,K,Cu,Mn',
                'minerals' => 'Ca,Fe,Mg',
            ),
        35 =>
            array(
                'id' => 36,
                'name' => 'mineral water',
                'price' => 0.2,
                'image' => 'http://sangphatwater.com/upload/sanpham/thung-nuoc-khoang-lavie-750ml-4853.jpg',
                'calo' => 12,
                'protein' => 0.5,
                'dietary_fiber' => 1.5,
                'carbohydrate' => 10,
                'total_fat' => 10,
                'vitamins' => 'A,C,E,B1,B2,B6,K,Cu,Mn',
                'minerals' => 'I,Mg,K,Ca,F,Mn,Fe,Co,Cu',
            ),
        36 =>
            array(
                'id' => 37,
                'name' => 'iced tea',
                'price' => 0.1,
                'image' => 'https://olongha.cdn.vccloud.vn/wp-content/uploads/2018/02/IMG_7590-Copy-2808x1404.jpg',
                'calo' => 1,
                'protein' => 0.1,
                'dietary_fiber' => 0.5,
                'carbohydrate' => 10,
                'total_fat' => 0,
                'vitamins' => 'A,B2,B3,B5,C,E',
                'minerals' => 'Caffeine,Enzyme,Amino acids,Polyphenols',
            )
    );
    $newData = [];
    foreach ($data as $item){
        Cloudder::upload($item['image'], null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'] . '.' . $result['format'];
        $item['image'] = $image_id;

        array_push($newData, $item);
    }

    file_put_contents(storage_path().'/data.txt', var_export($newData, true));

});


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


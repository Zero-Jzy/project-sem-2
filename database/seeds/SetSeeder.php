<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sets')->truncate();
        DB::table('sets')->insert([

            ['id' => 1, 'name' => 'Five-flavored fried chicken', 'category_id' => 1, 'image' => 'http://resources.cook.beepot.vn/wp-content/uploads/2019/05/14153742/ga-ran-ngu-vi-e1557848311360.jpg'],
            ['id' => 2, 'name' => 'Meat rice with vegetables', 'category_id' => 2, 'image' => 'http://resources.cook.beepot.vn/wp-content/uploads/2019/05/14153450/com_chay_ram_trung_thu.jpg'],
            ['id' => 3, 'name' => 'Galangal fried saba fish', 'category_id' => 3, 'image' => 'http://resources.cook.beepot.vn/wp-content/uploads/2019/05/14152756/ca-basa-chien-rieng-me.jpg'],
            ['id' => 4, 'name' => 'Stewed pork leg with bell peppers', 'category_id' => 2, 'image' => 'http://resources.cook.beepot.vn/wp-content/uploads/2019/05/14153242/thit-chan-gio-ham-ot-chuong.jpg'],
            ['id' => 5, 'name' => 'Roasted rice with beef and bean sprouts', 'category_id' => 1, 'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2018_08_13/image005_13.jpg'],
            ['id' => 6, 'name' => 'Rice, Chinese cabbage, braised meat', 'category_id' => 3, 'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2018_08_13/image007_5.jpg'],
            ['id' => 7, 'name' => 'rice, beans, braised meat', 'category_id' => 2, 'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2018_08_13/image009_2.jpg'],
            ['id' => 8, 'name' => 'Rice, meat skewers, Chinese cabbage', 'category_id' => 1, 'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2018_08_13/image011_3.jpg'],
            ['id' => 9, 'name' => 'rice, Chinese cabbage, meat rolls', 'category_id' => 1, 'image' => 'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2018_08_13/image013_2.jpg'],
            ['id' => 10, 'name' => 'Rice with sweet and sour ribs', 'category_id' => 3, 'image' => 'http://afamilycdn.com/2018/photo-1-1515510431316.jpg'],
            ['id' => 11, 'name' => 'rice, vegetables of all kinds, braised fish, vegetable soup, sesame salt', 'category_id' => 1, 'image' => 'http://afamilycdn.com/2018/photo-2-1515510431318.jpg'],
            ['id' => 12, 'name' => 'Brown rice, meat skewers', 'category_id' => 2, 'image' => 'http://afamilycdn.com/2018/photo-12-1515510460916.jpg'],
            ['id' => 13, 'name' => 'Brown rice, cauliflower, beans', 'category_id' => 1, 'image' => 'http://afamilycdn.com/2018/photo-13-1515510460917.jpg'],
            ['id' => 14, 'name' => 'Vegetable rice with kimchi', 'category_id' => 3, 'image' => 'http://afamilycdn.com/2018/photo-18-1515510460923.jpg'],
            ['id' => 15, 'name' => 'Brown rice, eggs, peanuts, vegetables, carrots', 'category_id' => 1, 'image' => 'http://afamilycdn.com/2018/183018313285943408917255008522108708168556n-1515513398873.jpg'],
            ['id' => 16, 'name' => 'Rice, eggs, beans, bean sprouts', 'category_id' => 2, 'image' => 'http://afamilycdn.com/2018/be3-1515513221246.jpg'],
            ['id' => 17, 'name' => 'Rice, eggs, boiled chicken, sausages', 'category_id' => 2, 'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/qhj_pwqvdvicbu/2018_08_30/40330400_1384763948325773_9062794075924594688_o.jpg'],
            ['id' => 18, 'name' => 'Rice, eggs, roasted meat', 'category_id' => 1, 'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/qhj_pwqvdvicbu/2018_08_30/7.jpg'],
            ['id' => 19, 'name' => 'Rice, fried fish, vegetables, beans', 'category_id' => 3, 'image' => 'http://channel.mediacdn.vn//thumb_w/640/prupload/164/2015/09/img20150915220739926.jpg'],
            ['id' => 20, 'name' => 'Rice, braised fish, beans, salad', 'category_id' => 2, 'image' => 'http://channel.mediacdn.vn//thumb_w/640/prupload/164/2015/09/img20150915220740737.jpg'],
            ['id' => 21, 'name' => 'Rice, beans, vegetables, fried meat', 'category_id' => 1, 'image' => 'http://channel.mediacdn.vn//thumb_w/640/prupload/164/2015/09/img20150915220740893.jpg'],

        ]);
    }
}

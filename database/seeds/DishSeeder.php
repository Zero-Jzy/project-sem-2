<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->truncate();
        DB::table('dishes')->insert([
            [
                'id' => 1,
                'name' => 'rice',
                'category_id' => 4, //là cái id của bảng category ý để xem nó loại gì !! ví dụ 1 là water!!
                'price' => 30000,
                'image' => 'https://vinid.net/wp-content/uploads/2019/06/com.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 2,
                'name' => 'Fried rice, pickles, beef',
                'category_id' => 4,
                'price' => 30000,
                'image' => 'http://noidientot.com/wp-content/uploads/2016/08/com-rang-dua-bo.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 3,
                'name' => 'boiled cabbages',
                'category_id' => '2',
                'price' => 25000,
                'image' => 'http://dauanvichat.vn/wp-content/uploads/2014/08/thuc-don-cho-bua-toi1.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 4,
                'name' => 'Boiled Chinese cabbage',
                'category_id' => 1,
                'price' => 25000,
                'image' => 'https://appapi.hellomam.vn/uploads/filecloud/2018/December/21/7939-290191545378145-1545378145.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 5,
                'name' => 'boiled vegetables',
                'category_id' => 4,
                'price' => 25000,
                'image' => 'https://2sao.vietnamnetjsc.vn/images/2018/05/31/19/14/1.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 6,
                'name'=> 'vegetable soup',
                'category_id' => 2,
                'price' => 30000,
                'image' => 'http://sotaynauan.com/wp-content/uploads/2014/07/canh-rau-cai-nau-thit.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 7,
                'name'=>'salad',
                'category_id' => 3,
                'price' =>20000 ,
                'image' => 'https://media.lamsao.com//Data//trangbh/04032015/cach_lam_salad_xa_lach_tron_sua_chua_1.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 8,
                'name'=>'Five-flavored fried chicken',
                'category_id' =>4 ,
                'price' => 100000,
                'image' => 'http://ohgaran.net/uploads/ga-ran-ngu-vi-huong-2.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 9,
                'name'=>'boiled pork',
                'category_id' => 3,
                'price' => 50000,
                'image' => 'https://cdn.tgdd.vn/Files/2017/05/04/979325/meo-che-bien-mon-thit-luoc-ngon-dung-chuan-5_760x506.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 10,
                'name'=>'Basa Frish',
                'category_id' => 1,
                'price' => 200000,
                'image' => 'https://www.iunauan.com/images/400x-1/anh1_770297.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],

            [
                'id' => 11,
                'name'=>'Stewed pork leg with bell peppers',
                'category_id' => 1,
                'price' => 150000,
                'image' => 'https://wikiohana.net/wp-content/uploads/2019/08/cach-lam-chan-gio-ham-thuoc-bac.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 12,
                'name'=>'bean sprouts',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'https://sohanews.sohacdn.com/thumb_w/660/2017/photo1513073311783-1513073311784.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 13,
                'name'=>'cowpea',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'https://dulichsuckhoe.com/wp-content/uploads/2018/10/cach-lam-mon-dau-dua-chien-bot-ngon-va-la-mieng-042317.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 14,
                'name'=>'tofu in tomato sauce',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'https://giadinh.tv/wp-content/uploads/2016/07/dau-sot-ca-chua-1-e1468975694840.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 15,
                'name'=>'meat stock ship',
                'category_id' => 1,
                'price' => 100000,
                'image' => 'https://image-us.eva.vn/upload/3-2018/images/2018-07-30/ava-1532942175-858-width640height480.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 16,
                'name'=>'meat skewer',
                'category_id' => 1,
                'price' => 50000,
                'image' => 'https://ameovat.com/wp-content/uploads/2018/04/cach-lam-thit-xien-nuong-4.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 17,
                'name'=>'Meat rolls',
                'category_id' => 1,
                'price' => 40000,
                'image' => 'https://thucthan.com/media/2018/05/cha-la-lot/cha-la-lot.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 18,
                'name'=>'sweet and sour ribs',
                'category_id' => 1,
                'price' => 80000,
                'image' => 'https://ameovat.com/wp-content/uploads/2018/10/Cach-lam-suon-xao-chua-ngot-chay-01.png',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 19,
                'name'=>'Braised fish',
                'category_id' => 1,
                'price' => 150000,
                'image' => 'https://ameovat.com/wp-content/uploads/2016/01/cach-kho-ca-ngon-8-600x443.png',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 20,
                'name'=>'Sesame',
                'category_id' => 1,
                'price' => 10000,
                'image' => 'https://ameovat.com/wp-content/uploads/2017/07/cach-lam-muoi-vung-5-600x399.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 21,
                'name'=>'Brown rice',
                'category_id' => 1,
                'price' => 20000,
                'image' => 'http://img.tinbaihay.net/ThumbImages/2014/04/26/cach-che-bien-gao-lut-thanh-mon-ngon-bo-duong-2816_450.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 22,
                'name'=>'Boiled cauliflower',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'https://media.ex-cdn.com/EXP/media.phunutoday.vn/files/hoantran/2018/04/02/img_8163-1317.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 23,
                'name'=>'omelet',
                'category_id' => 1,
                'price' => 20000,
                'image' => 'https://anh.24h.com.vn/upload/3-2017/images/2017-07-07/1499422713-trung3-1499067174689.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 24,
                'name'=>'groundnut',
                'category_id' => 1,
                'price' => 10000,
                'image' => 'https://i.ytimg.com/vi/KlMC9xlHMuo/hqdefault.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 25,
                'name'=>'Boiled carrots',
                'category_id' => 1,
                'price' => 20000,
                'image' => 'https://emvaobep.com/wp-content/uploads/2017/03/cach-lam-sinh-to-ca-rot-sua-chua-1.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 26,
                'name'=>'boiled chicken',
                'category_id' => 1,
                'price' => 140000,
                'image' => 'https://media.ex-cdn.com/EXP/media.phunutoday.vn/files/thanh.le/2016/09/22/cach-luoc-thit-ga-1-1045.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 27,
                'name'=>'Fried sausage',
                'category_id' => 1,
                'price' => 40000,
                'image' => 'https://maythaithit.vn/wp-content/uploads/2019/05/IMG_1620-crop2.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 28,
                'name'=>'roasted meat with pan',
                'category_id' => 1,
                'price' => 60000,
                'image' => 'https://photo-3-baomoi.zadn.vn/w1000_r1/2018_04_20_181_25746071/d2e975609021797f2030.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 29,
                'name'=>'fish fry',
                'category_id' => 1,
                'price' => 100000,
                'image' => 'http://www.monngon.tv/uploads/images/2017/03/01/e7c73fe14a24f5c76c900c5d57b3cd01-ca-ran-gion.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],
            [
                'id' => 30,
                'name'=>'fried meat',
                'category_id' => 1,
                'price' => 50000,
                'image' => 'https://i.ytimg.com/vi/ZcvbRBfP0D8/maxresdefault.jpg',
                'calo' => 923.3,
                'protein' => 23.1,
                'dietary_fiber' => 12.2,
                'carbohydrate' => 23.3,
                'fat' => 43.23,
                'vitamins' => 'A,C',
                'minerals' => 'Iron,lead'
            ],

        ]);

    }
}

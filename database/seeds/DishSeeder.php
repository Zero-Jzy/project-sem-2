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
                'name' => 'canh cua nấu đậu',
                'category_id' => 4, //là cái id của bảng category ý để xem nó loại gì !! ví dụ 1 là water!!
                'price' => 100000,
                'image' => 'https://anh.eva.vn/upload/2-2017/images/2017-05-08/canh-rieu-cua-dau-phu-bun-rieu-cua-dau-phu-6-1494257351-width500height375.jpg',
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
                'name' => 'sườn xaò chua ngot',
                'category_id' => '2',
                'price' => 60000,
                'image' => 'https://bloganchoi.com/wp-content/uploads/2017/02/mon-suon-xao-chua-ngot-ngon-1.jpg',
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
                'name' => 'súp lơ xanh',
                'category_id' => 1,
                'price' => 50000,
                'image' => 'https://kokotaru.com/wp-content/uploads/image/IMG_8163.jpg',
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
                'name' => 'cá sốt cà chua ',
                'category_id' => 4,
                'price' => 150000,
                'image' => 'https://kgiaitri.com/wp-content/uploads/2015/10/Cach-nau-ca-thu-chien-sot-ca-chua.jpg',
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
                'name'=> 'thịt bò xào hành răm ',
                'category_id' => 2,
                'price' => 70000,
                'image' => 'https://tinhot247.vn/uploads/2018/cach-xao-thit-bo-rau-ram-ngon-tuyet-cu-meo-3.jpg',
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
                'name'=>'gà luộc',
                'category_id' => 3,
                'price' =>100000 ,
                'image' => 'https://anh.24h.com.vn//upload/4-2017/images/2017-12-27/1514343108-518-thumbnail.jpg',
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
                'name'=>'canh ngao chua',
                'category_id' =>4 ,
                'price' => 10000,
                'image' => 'https://media.ex-cdn.com/EXP/media.phunutoday.vn/files/upload_images/2015/04/05/canh-ngao-nau-dua-1.jpg',
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
                'name'=>'vịt quoay',
                'category_id' => 3,
                'price' => 70000,
                'image' => 'https://thucthan.com/media/2018/03/vit-quay-la-moc-mat/vit-quay-la-moc-mat.jpg',
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
                'name'=>'bắp cải luộc',
                'category_id' => 1,
                'price' => 30000,
                'image' => 'https://media.ex-cdn.com/EXP/media.phunutoday.vn/files/upload_images/2015/11/22/cach-lam-bap-cai-luoc-1-phunutoday_vn.jpg',
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

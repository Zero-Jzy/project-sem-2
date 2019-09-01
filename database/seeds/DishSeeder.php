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
                'category_id' => 1, //là cái id của bảng category ý để xem nó loại gì !! ví dụ 1 là water!!
                'price' => 10,
                'image' => '', //tạm thời để link ảnh vào đây sau t làm cái up lên cloudinary rồi mình chỉ cho id ảnh vào đây thôi
                'calo' => 923.3, // lượng calo biết rồi nhé
                'protein' => 23.1, // lượng protein nè (g)
                'dietary_fiber' => 12.2, // cái này là lượng chất xơ (g)
                'carbohydrate' => 23.3, // cái này hinh như là tinh bột (g)
                'fat' => 43.23, // chất béo nè.
                'vitamins' => 'A,C', // mình chỉ lấy ra vài loại vitamin chính rồi cho vào ngăn bởi dấu "," (vậy có ổn k nhỉ @@)
                'mineral' => 'Iron,lead' // như thằng vitamins
            ],
            [
                // thêm thằng nứa dưới này nè.
            ]
        ]);
    }
}

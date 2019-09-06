<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->truncate();
        DB::table('food_categories')->insert([
            ['id' => 1, 'name' => 'rau củ ',
                'description' => ' rau củ chứa rất nhiều : vitamin, protein, khoáng chất quan trọng…,
                rau củ còn là thực phẩm chính cung cấp chất xơ giúp con người có thể dễ dàng tiêu hóa'],
            ['id' => 2, 'name' => 'thịt đỏ',
                'description' => 'Thịt đỏ là các loại thịt mang sắc đỏ khi còn tươi và không đổi thành màu trắng khi nấu chín,
                thịt đỏ chứa nhiều đạm và phù hợp cho sự phát triển của thể chất, loại thịt này chứa một hàm lượng đạm khá cao, rất tốt cho người ở tuổi thành niên.'],
            ['id' => 3, 'name' => 'thịt trắng',
                'description' => 'thịt nhẹ màu hay nhạt màu hơn của các loại gia cầm và tương phản với thịt đỏ (thịt đậm màu), Thịt trắng có chứa nhiều protein dễ được cơ thể hấp thụ,giàu chất béo không bão hòa'],
            ['id' => 4, 'name' => 'các loại,tôm,cua,ghẹ,...',
                'description' => 'giàu vitamin và khoáng chất tự nhiên…'],


        ]);

    }
}

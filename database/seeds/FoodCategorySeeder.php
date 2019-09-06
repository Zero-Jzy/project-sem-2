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
            ['id' => 1, 'name' => 'Gluxid/carbohydrat',
                'description' => 'Providing energy, the most important function,
                 accounting for 60-65% of the total dietary energy,
                  1 gram of carbohydrates provides 4 kcal of energy.
                  Structure of cells and tissues.
                  Support children\'s brain and nervous system development.
                  Điều hòa hoạt động của cơ thể.
                  Provide the necessary fiber.
                  Found in cereals, tubers: rice, noodles, bread, pasta, noodles, vermicelli, sweet potato, taro, sugar, corn, Moina, fruit ...'],
            ['id' => 2, 'name' => 'Lipid',
                'description' => 'Providing energy in the most concentrated form, 1g of fat provides 9 Kcal of energy.
                Energy reserve (adipose tissue).
                Helps absorb fat-soluble vitamins like vitamins A, D, E, K.
                Giúp sự phát triển các tế bào não và hệ thần kinh của bé.
               Found in oil, fat, butter ...
                '],
            ['id' => 3, 'name' => 'Protid',
                'description' => 'Is a building material for body cells, muscles, bones, teeth ...
                Raw materials create digestive juices, enzymes,
                 hormones in the body to help regulate the body\'s activities,
                  raw materials to create antibodies to help the body fight disease.
                  Transporting nutrients.
                  Regulate water balance.
                  Power supply: 1g of protein provides 4 Kcal of energy.
                  Found in meat, fish, eggs, milk, shrimp, crabs, chickpeas, black beans, red beans, soy beans, tofu ...'],
            ['id' => 4, 'name' => 'Minerals and vitamins(canxi, Iron, Zinc, Iodine, Vitamin A, Vitamin D, Vitamin nhóm B (B1, B2, B6, B12, PP...), Vitamin C, Axit folic)',
                'description' => 'Some essential minerals:canxi,Iron,Zinc,Iodine.
                Some essential vitamins:Vitamin A,Vitamin D,Vitamin nhóm B (B1, B2, B6, B12, PP...),Vitamin C,Axit folic'],
        ]);

    }
}

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
            ['id' => 1, 'name' => 'Vegetables',
                'description' => 'Vegetables come in a wide variety of colors, flavors, and textures. They’re also an important source of vitamins, minerals, and fiber. Dark green vegetables include broccoli, collard greens, spinach, and kale. Some red and orange vegetables are acorn squash, carrots, pumpkin, tomato, and sweet potato.
                                  Examples of starchy vegetables are foods like corn, green peas, and white potatoes. Other vegetables include eggplant, beets, cauliflower, Brussels sprouts, celery, artichokes, green beans, and onions. Beans and peas (legumes) include black beans, garbanzo beans (chickpeas), kidney beans, soybeans, and tofu. Legumes can also be counted in the protein foods group.'],
            ['id' => 2, 'name' => 'Fruits',
                'description' => 'Older Americans generally do not eat enough fruit. Yet, there are so many choices—citrus fruits like oranges and grapefruits; different kinds of berries; fruits that grow on trees such as apricots, cherries, peaches, and mangoes; and others like figs, raisins, and pineapples.
                                  Many fruits provide extra fiber that helps keep your digestive system moving. Just make sure you wash all fruits thoroughly before eating. Whole fruits are best, but 100% fruit juice also counts as fruit. When purchasing frozen, canned, or dried fruit, choose options that are lowest in added sugars.
                '],
            ['id' => 3, 'name' => 'Grains',
                'description' => 'Any food made from wheat, rye, rice, oats, cornmeal, barley, or another cereal grain is a grain product. In addition to bread and pasta, breakfast cereal, grits, tortillas, and even popcorn count.
                                  Look for grain choices that are low in saturated and added sugar and that have no trans fat. But be careful—low-fat baked goods can be high in added sugar.
                                  At least half of all grains eaten should be whole grains, which contain the entire grain kernel. Whole grains provide iron and many B vitamins, and they have fiber, too. Examples of whole grains include whole wheat, whole oats, whole bulgur (also known as cracked wheat), and whole cornmeal. For more on fiber, see Important Nutrients to Know.
                                  Some grain products are refined, which gives them a finer texture and a longer shelf life but removes fiber and nutrients. Most refined grains are enriched, which means that some nutrients are added back after processing. Examples of refined grain products include white flour, degermed cornmeal, white bread, and white rice.'],
            ['id' => 4, 'name' => 'Protein Food',
                'description' => 'Try to include a variety of nutrient-dense proteins in the foods you eat. Choose lean (low-fat) meats and poultry. Keep in mind that you can also get protein from seafood, eggs, beans, and peas, as well as nuts, seeds, and soy products.
                                  The Dietary Guidelines recommends that you eat 8 ounces per week of a variety of seafood, not only for the protein but also because seafood contains omega-3 fatty acids such as EPA and DHA, which are good for your heart. Seafoods that are higher in EPA and DHA include salmon, shad, and trout. These seafoods are also lower in mercury, which can be harmful, than other types of seafood.'],
            ['id' => 5, 'name' => 'Dairy',
                'description' => 'Most adults do not get enough dairy  in their diet. For your heart health, pick from the many low-fat or fat-free choices in the dairy group. Choosing fat-free or low-fat milk and yogurt, as well as lower-fat cheese, gives you important vitamins and minerals, with less fat.'],
            ['id' => 6, 'name' => 'Oils',
                'description' => 'Oils are high in calories, but they are also an important source of nutrients like vitamin E. For adults age 51 and older, the daily allowance for women is 5 teaspoons of oil and, for men, 6 teaspoons.
                                  If possible, use oils instead of solid fats, like butter, when cooking. Measuring your daily oils can be tricky—knowing what you add while cooking or baking is one thing. But, oil is naturally part of some foods.'],
            ['id' => 7, 'name' => 'Calories for other  uses',
                'description' => 'The “calories for other uses” category in the USDA Food Patterns gives you some leeway for eating more than the recommended amount of nutrient-dense foods. It also allows for some calories from foods and beverages that are not nutrient-dense, such as sweetened cereals, sodas, and alcoholic drinks.
                                  Read the ingredient list to see if the food you are eating has added sugar. Some key words to look for are: brown sugar, corn sweetener, corn syrup, dextrose, fructose, and high-fructose corn syrup. You can also look for “added sugars” on the Nutrition Facts label.
                                  “Calories for other uses” also applies to the saturated fats in your diet. These fats occur naturally in some foods, but they are also added to foods such as baked goods and potato chips. That’s why you should try to limit your intake of saturated fats.
                                   Also, keep trans fat intake as low as possible. Trans fats are harmful and are being removed from the food supply.
                                   Drinking coffee or tea barely provides any calories unless you add sugar or cream, which count as “calories for other uses.” Moderate coffee consumption of three to five 8-ounce cups per day can be part of a healthy eating pattern.
                                   As for alcohol, it is not nutrient-dense and is not part of the healthy eating patterns recommended in the Dietary Guidelines. It also has calories that count toward “calories for other uses.” If you consume alcohol, do so in moderation—up to one drink per day for women and up to two drinks per day for men.
                                   The important thing to remember is that “calories for other uses” includes all added sugars, saturated and trans fats, and alcohol that you consume. Pay attention to your consumption of these food components because the calories add up quickly.'],



        ]);

    }
}

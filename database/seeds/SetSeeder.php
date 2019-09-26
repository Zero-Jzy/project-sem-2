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
        DB::table('sets')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Five-flavored fried chicken',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'pu1geam0w9yo5no4zuyj.jpg',
                    'price' => rand(2,5),
                    'description'=>'Meals include: chicken, boiled greens, rice.
                     The meal provides enough nutrients and essential fiber for the body.'

                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Meat rice with vegetables',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'ypjsqs280nahdt9uphco.jpg',
                    'price' => rand(2,5),
                     'description'=>'đây là description'

                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Galangal fried saba fish',
                    'category_id' => 3,
                    'type' => 1,
                    'image' => 'bbtqehjqvjcg0hrcisq0.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Stewed pork leg with bell peppers',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'p6w6x5a1zlufgbc25yyf.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Roasted rice with beef and bean sprouts',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'lwtwmgjlfhzunyleys85.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'

                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Rice, Chinese cabbage, braised meat',
                    'category_id' => 3,
                    'type' => 1,
                    'image' => 'v5qqlso9glhtus3gncb0.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'rice, beans, braised meat',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'rohforomjjwmlzj2yaow.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Rice, meat skewers, Chinese cabbage',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'cgqhlicghps5esdajvd0.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'rice, Chinese cabbage, meat rolls',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'cfiac8ocokj3xckaqhql.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Rice with sweet and sour ribs',
                    'category_id' => 3,
                    'type' => 1,
                    'image' => 'mosmdiqdektc6gwkuxql.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'rice, vegetables of all kinds, braised fish, vegetable soup, sesame salt',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'wmbh76uwzmhxdtsogjkg.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Brown rice, meat skewers',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'j6g0ednhkehhglbrxuoc.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'

                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Brown rice, cauliflower, beans',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'aukvzqz8uibjfbedivn2.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Vegetable rice with kimchi',
                    'category_id' => 3,
                    'type' => 1,
                    'image' => 'nyipfcldxplgfjqcaoxu.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Brown rice, eggs, peanuts, vegetables, carrots',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'qvahsf02mni6lnqki8ph.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Rice, eggs, beans, bean sprouts',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'fjctutq81yp5pgdbvnzn.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Rice, eggs, boiled chicken, sausages',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'loism3qiuhnltrvtftip.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Rice, eggs, roasted meat',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'dwp822dx3nttwi6xgkr4.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Rice, fried fish, vegetables, beans',
                    'category_id' => 3,
                    'type' => 1,
                    'image' => 'exqjswohtjnrwlwjstry.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Rice, braised fish, beans, salad',
                    'category_id' => 2,
                    'type' => 1,
                    'image' => 'bedj7jvbnx5ggcvvtbkd.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Rice, beans, vegetables, fried meat',
                    'category_id' => 1,
                    'type' => 1,
                    'image' => 'beu9yd5l1jga6ztmqxxt.jpg',
                    'price' => rand(2,5),
                    'description'=>'đây là description'
                ),
        ));
    }
}

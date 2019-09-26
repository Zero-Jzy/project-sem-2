<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataOrder = [];
        $dataOrderDetail = [];
        $type = ['COD', 'VNPAY'];
        for ($i = 1; $i <= 1000; $i++) {
            $itemOrder = [
                'id' => $i,
                'user_id' => $i,
                'address_id' => $i,
                'amount' => rand(30, 50),
                'type' => $type[rand(0, 1)],
                'created_at' => date("Y-m-d H:i:s", rand(1548867600, 1569468279)),
                'status' => 1
            ];

            array_push($dataOrder, $itemOrder);
        }

        for ($j = 1; $j <= 1000; $j++) {
            $count = rand(2, 4);
            $sets = array_rand(range(1,21),$count);
            Log::info($sets[0]);
            for ($k = 1; $k <= $count; $k++) {
                if ($sets[$k - 1] === null) {
                    return;
                }
                $itemOdD = [
                    'order_id' => $j,
                    'set_id' => $sets[$k - 1],
                    'quantity' => rand(1, 4)
                ];
                array_push($dataOrderDetail, $itemOdD);
            };
        }

        DB::table('orders')->truncate();
        DB::table('orders')->insert($dataOrder);

        DB::table('order_detail')->truncate();
        DB::table('order_detail')->insert($dataOrderDetail);
    }

}

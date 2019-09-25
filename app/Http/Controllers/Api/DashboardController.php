<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\Set;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getDataTotal()
    {
        $userCount = User::count();
        $setCount = DB::table('order_detail')->sum('quantity');
        $orderCount = Order::count();
        $amount = DB::table('orders')->sum('amount');
        $res = [
            'userCount' => $userCount,
            'setCount' => $setCount,
            'orderCount' => $orderCount,
            'amount' => $amount
        ];
        return $res;
    }

    public function getDataToTime()
    {
        $setCount = DB::table('order_detail')->sum('quantity');

        $set = Set::whereRaw('type=1')->get();
        $ids = $set->pluck('id')->all();
        $chart_data = DB::table('order_detail')
            ->whereIn('set_id', $ids)
            ->select(DB::raw('(sum(quantity) * 100/' . $setCount . ') as total'), 'set_id')
            ->groupBy('set_id')
            ->get();

        $totalSetType2 = 100 - $chart_data->sum('total');

//        $nameSet =  $chart_data['set_id'];
        $res = [
            'totalSetType1' => $chart_data->sum('total'),
            'totalSetType2' => $totalSetType2
        ];
        return $res;
    }
}

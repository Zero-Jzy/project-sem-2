<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\OrderDetail;
use App\Set;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getDataTotal()
    {
        $userCount = User::count();
        $setCount = DB::table('order_details')->sum('quantity');
        $orderCount = Order::count();
        $revenue = DB::table('orders')->sum('amount');
        $res = [
            'userCount' => $userCount,
            'setCount' => $setCount,
            'orderCount' => $orderCount,
            'revenue' => (int)$revenue
        ];
        return $res;
    }

    public function getDataToTime()
    {
        $setCount = DB::table('order_details')->sum('quantity');

        $set = Set::whereRaw('type=1')->get();
        $ids = $set->pluck('id')->all();
        $chart_data = OrderDetail::with('set')->whereIn('set_id', $ids)
            ->select(DB::raw('ROUND((sum(quantity) * 100.0/' . $setCount . '),2) as percent'), 'set_id')
            ->groupBy('set_id')
            ->orderBy('percent', 'DESC')
            ->get();

        $percent2 = 100 - $chart_data->sum('percent');


        $res = [
            'data' => $chart_data,
            'percent2' => $percent2
        ];
        return $res;
    }
}

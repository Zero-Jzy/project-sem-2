<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Input::all();
        $results = $data['results'] ?? 10;
//        $nameSearch = $data['name'] ?? false;
//        $sortField = $data['sortField'] ?? false;
//        $sortOrder = $data['sortOrder'] ?? false;
        $filterAddress = $data['filterAddress'] ?? false;
        $filterDate = json_decode($data['filterDate'] ?? '{}', true);
        $page = ($data['page'] ?? 1) - 1;

        $orders = Order::with('user.profile', 'address', 'sets');

        $res['totalCount'] = $orders->count();

        if ($filterAddress) {
            $orders->whereHas('address', function($q) use ($filterAddress) {
                return $q->where('slug','like', $filterAddress.'%');
            });
        }

        if (!empty($filterDate)) {
            $from = date("Y-m-d H:i:s", $filterDate['start'] / 1000);
            $to = date("Y-m-d H:i:s", $filterDate['end'] / 1000);
            $orders->whereBetween('created_at', [$from, $to]);
        }


        $res['keys'] = $orders->get()->map(function ($values) {
            return $values->id;
        });

        $orders->skip($page * $results)->take($results);

        $res['orders'] = $orders->get();

        return response($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

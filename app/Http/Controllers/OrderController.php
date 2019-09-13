<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Mail::to(Auth::user()->email)->send(new OrderShipped());
//        return view('checkout');
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
     * @return string
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $listSet = $request->get('listSet');
        $address_id = $request->get('address_id');
        $order = Order::create([
            'user_id' => $user_id,
            'address_id' => $address_id,
        ]);
//        Log::info(gettype($listSet));
        foreach ($listSet as $set) {
            Log::info($set);
            $order->sets()->attach((integer)$set['id'], ['quantity' => $set['quantity']]);
        };

        $order->save();

//        Mail::send('send-email', array('email' => 'boydola.nvs@gmail.com', 'content'=>'Order thanh cong'), function($message){
//            dd(11111);
//            $message->to('sonnvth1807031@fpt.edu.vn')->subject('xax thuc don hang');
//        });

        return 'done';
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

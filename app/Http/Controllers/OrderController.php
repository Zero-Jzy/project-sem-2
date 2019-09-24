<?php

namespace App\Http\Controllers;

use App\Address;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Http\Requests;
use App\Order;
use OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        DB::beginTransaction();
        try{
            $user_id = Auth::user()->id;
            $listSet = $request->get('listSet');
            $address_id = $request->get('address_id');
            $type_payment = $request->get('type_payment');
            $amount = 0;

            foreach ($listSet as $set) {
                $amount += $set['quantity'] * $set['price'];
            };

            $order = Order::create([
                'user_id' => $user_id,
                'address_id' => $address_id,
                'amount' => $amount,
                'type' => $type_payment
            ]);

            foreach ($listSet as $set) {
                $order->sets()->attach((integer)$set['id'], ['quantity' => $set['quantity']]);
            };

            $order->save();

            if ($order['type'] === 'VNPAY') {
                return $this->createPayment($order);
            }
            Log::info($listSet);
            $address = Address::find($address_id);
            $data = ['order'=> $address, 'list' => $listSet,'amount' => $amount];
            Mail::send('send', $data, function($message) {
                $message->to(Auth::user()->email, Auth::user()->firstname)->subject('Thong bao xac nhan don hang');
                $message->from('boydola.nvs@gmail.com','Pato');
            });

            DB::commit();
            return 'done';}
            catch (Exception $e) {
            report($e);
            DB::rollBack();
            return false;
        }
    }

    function createPayment($order)
    {

        $vnp_TmnCode = "EB3XMLQV"; //Mã website tại VNPAY
        $vnp_HashSecret = "RUWYVMQXGGPAXVFSBPADIFHBJCWBTSYJ"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_ReturnUrl = "http://localhost:8000/checkout_success?payment_success=true";

        $vnp_TxnRef = $order['id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "demo thanh toan vnpay";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $order['amount'] * 1000 * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_IpnUrl" => "http://localhost:8000/test_ipn",
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);

        $order->update(['status' => 2]);

        return $returnData;
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

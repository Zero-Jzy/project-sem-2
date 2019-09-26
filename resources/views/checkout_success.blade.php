@extends('layouts.master', ['title' => 'checkout'])
@section('content')

    {{--<div class="container h-25" style="position: relative; top: 100px">--}}
    {{--    --}}

    {{--</div>--}}

    <div class="container h-auto" style="position: relative; top: 100px; margin-bottom: 150px">
        <div class="alert alert-success" role="alert">
            {{$mes}}
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h3>Thông tin đơn hàng</h3>
                    </div>
                    <div class="col-6 text-right">

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-order mb-5">
                    <h5>Thông tin đặt hàng</h5>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->sets as $set)
                            <tr>
                                <td>{{$set->id}}</td>
                                <td>{{$set->name}}</td>
                                <td>{{$set->price}}</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan=3></td>
                            <th>Phí vận chuyển</th>
                            <th class="text-right">Phí vận chuyển</th>
                        </tr>
                        <tr>
                            <td colspan=3></td>
                            <th>Tổng tiền</th>
                            <th class="text-right">Phí vận chuyển</th>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-customer mb-5">
                    <div class="row">
                        <div class="col-md-6 info-customer">
                            <h5 class="mb-md-1">Thông tin khách hàng</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td>{{$order->user->profile->first_name.$order->user->profile->first_name}}</td>
                                </tr>

                                <tr>
                                    <td>Điện thoại</td>
                                    <td>{{$order->user->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$order->user->email}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 address">
                            <h5 class="mb-md-1">Địa chỉ nhận khác (nếu có)</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td>{{$order->address->name}}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{$order->address->addressTxt}}</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại</td>
                                    <td>{{$order->address->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>Email654</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

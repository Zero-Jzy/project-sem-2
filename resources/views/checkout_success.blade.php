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
                        <button type="button" class="btn btn-danger">Hoàn tất đặt hàng</button>
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
                        <tr>
                            <td>123</td>
                            <td>Doe</td>
                            <td>270.000đ</td>
                            <td>2</td>
                            <td>540.000đ</td>
                        </tr>
                        <tr>
                            <td colspan=3></td>
                            <th>Phí vận chuyển</th>
                            <th class="text-right">0đ</th>
                        </tr>
                        <tr>
                            <td colspan=3></td>
                            <th>Tổng tiền</th>
                            <th class="text-right">540.000đ</th>
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
                                    <td>Lorem</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>Lorem</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại</td>
                                    <td>0973793711</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>Lorem@vhv.vn</td>
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
                                    <td>Lorem</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>Lorem</td>
                                </tr>
                                <tr>
                                    <td>Điện thoại</td>
                                    <td>0973793711</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>Lorem@vhv.vn</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-pay mb-5">
                    <h5 class="mb-md-1">Thông tin thanh toán</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div>Thanh toán</div>
                        </div>
                        <div class="col-md-9">
                            ....
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Ngày hẹn thanh toán</div>
                        <div class="col-md-9">20/9/2019</div>
                    </div>
                </div>
                <div class="card-note mb-5">
                    <h5 class="mb-md-1">Ghi chú đơn hàng</h5>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

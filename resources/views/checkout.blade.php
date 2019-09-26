@extends('layouts.master', ['title' => 'checkout'])
@section('content')
    <style>
        .list-address span {
            font-size: 18px;
            color: #ee4d2d;
        }

        .btn-outline-danger {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .wrapper {
            height: auto;
        }

        .wrapper .row {
            margin-left: -5px;
            margin-right: -5px;
            margin-bottom: 10px;
        }

        .wrapper .row .col-md-3, .wrapper .row .col-md-2, .wrapper .row .col-md-6 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .wrapper .item-block {
            padding-bottom: 5px;
            border-bottom: 1px solid #ccc;
        }

        .checkout-pay {
            margin-top: 50px;
            padding: 20px 10px 0 10px;
            background-color: #fff;
        }

        .list-address {
            background: #fff;
            padding-bottom: 20px;
            padding: 15px;
        }

        .aa {

        }

        .tab-content {
            border-top: 1px solid #ccc;
            padding-top: 30px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 30px;
        }

        .type-payments {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .type-payments label {
            padding: 10px;
        }

        .type-payments label input {
            margin-right: 10px;
        }
    </style>
    <div class="aa pb-3" style="background-color: #f2f2f2;">
        <div class="container" style="margin: 0 auto">
            <div class="checkout-main">
                <div class="row">
                    <div class="col-md-7">
                        <div class="list-address">
                            <div class="background-img container" style="height: .1875rem;
    width: 100%;
    margin: 10px auto;
    background-position-x: -1.875rem;
    background-size: 7.25rem .1875rem;
    background-image: repeating-linear-gradient(45deg,#6fa6d6,#6fa6d6 33px,transparent 0,transparent 41px,#f18d9b 0,#f18d9b 74px,transparent 0,transparent 82px);"></div>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Địa chỉ nhận hàng:</span>
                            {{--                                                        <form style="padding-top: 30px">--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <input type="text" class="form-control" id="staticEmail" placeholder="Email">--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="inputPassword" class="col-sm-4 col-form-label">User name</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <input type="text" class="form-control" id="inputPassword" placeholder="Họ Tên">--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Province / City</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <input type="text" class="form-control" id="inputPassword" placeholder="City">--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="inputPassword" class="col-sm-4 col-form-label">District</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <input type="text" class="form-control" id="inputPassword" placeholder="District">--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Phone number</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <input type="text" class="form-control" id="inputPassword" placeholder="Phone number">--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="form-group row">--}}
                            {{--                                                                <label for="inputPassword" class="col-sm-4 col-form-label">Address(apartment number)</label>--}}
                            {{--                                                                <div class="col-sm-8">--}}
                            {{--                                                                    <textarea class="form-control" rows="5" id="comment"></textarea>--}}
                            {{--                                                                </div>--}}
                            {{--                                                            </div>--}}
                            {{--                                                        </form>--}}
                            @foreach(Auth::user()->addresses as $index => $address)
                                @if($address->status === 0) @continue @endif
                                <div class="address-box my-3 position-relative">
                                    <div>
                                        <input @if($index ===0) checked @endif address-id="{{$address->id}}"
                                               name="address" type="radio">
                                    </div>
                                    <div>
                                        <h5>{{$address->name}}</h5>
                                        <address>Address: {{$address->addressTxt}}
                                        </address>
                                        <p>Phone: {{$address->phone}}</p>
                                    </div>
                                    <form method="POST" action="{{route('profile.destroy', $address->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="form-group">
                                            <button class="btn btn-link"
                                                    style="position: absolute; bottom: 5%;right: 2%"
                                            >
                                                delete
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            @endforeach
                            <div class="btn btn-outline-danger">
                                <button onclick="openModalAddress()">
                                    Add address
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="wrapper col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Card title</h4>
                            </div>
                            <div class="card-body" id="cart-body">
                                <div id="listcart">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">Total</div>
                                <div class="col-6 js-total text-right"> VND</div>
                            </div>
                            <div class="card-footer">
                                <a href="/menu/set" class="btn btn-outline-danger">
                                    <button>
                                        Continue
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--            <div id="cart-body col-md-5">--}}
            {{--            </div>--}}

            <div class="checkout-pay">
                <div class="row pb-sm-5">
                    <div class="col-md-4">Type payment</div>
                    <div class="col-md-4">
                        <div class="type-payments">
                            <label class="form-check-label">
                                <input checked name="type_payment" type="radio" class="form-check-input" value="COD">
                                Payment on delivery
                            </label>
                            <label class="form-check-label">
                                <input name="type_payment" type="radio" class="form-check-input" value="VNPAY">
                                Vnpay payment
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="checkout-btn d-flex justify-content-md-end p-2" style="background: #fffefb">
                            <button id="checkout" class="btn btn-danger" type="button">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>


            {{--            <div>--}}

            {{--                <input name="type_payment" value="COD" checked type="radio"/><label for="">thanh toan khi nhan--}}
            {{--                    hang</label>--}}

            {{--                <input name="type_payment" value="VNPAY" type="radio"/><label for="">thanh toan vnpay</label>--}}

            {{--                <button id="checkout" style="border: black solid 1px">Checkout</button>--}}
            {{--            </div>--}}
        </div>
    </div>
    <script>
        $(document).ready(function () {
            let listSet = Array.from(new Map(JSON.parse(localStorage.getItem('sets_in_bag'))).values());
            let htmlContent = '';
            let content = '';
            for (let cartItem of listSet) {
                htmlContent += `<div style="border: black solid 1px">
                            <p>Ten : ${cartItem.name}</p>
                            <img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${cartItem.image}"/>
                            <p>So luong : ${cartItem.quantity}</p>
                            <p>Tien : ${cartItem.quantity * cartItem.price}</p>
                        </div>`;

                content += `<div class="row item-block">
                            <div class="col-md-2">
                                <img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${cartItem.image}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="pro-title">${cartItem.name}</div>
                            </div>
                            <div class="col-md-2">
                                <div class="pro-quantity">x ${cartItem.quantity}</div>
                            </div>
                            <div class="col-md-2">
                                <div class="pro-price">${Math.round(cartItem.quantity * cartItem.price)}$</div>
                            </div>
                        </div>`;
            }

            var totalPrice = listSet.reduce((a, b) => {
                return a + b.quantity * b.price
            }, 0);
            totalPrice = new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'USD'}).format(totalPrice)
            $('.js-total').html(totalPrice);
            htmlContent += `${totalPrice}`;

            $('#listcart').html(htmlContent);
            $('#cart-body').html(content);

            $('#checkout').click(function () {
                let type_payment = $("input[name='type_payment']:checked").val();
                if (!type_payment) alert('Please chose type payments.');
                let address_id = $("input[name='address']:checked").attr('address-id');

                $.ajax({
                    method: 'post',
                    url: "/order",
                    data: {
                        '_token': `{{ csrf_token() }}`,
                        'address_id': address_id,
                        'listSet': listSet,
                        'type_payment': type_payment
                    },
                    success: function (res) {

                        if (res.status === 'success') {
                            localStorage.removeItem('sets_in_bag');
                            window.location.href = `/checkout_success?orderId=${res.orderId}`;
                            return;
                        }

                        if (res.code === '00') {
                            localStorage.removeItem('sets_in_bag');
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: res.data});
                            } else {
                                location.href = res.data;
                            }
                            return false;
                        } else {
                            alert('err :', res.Message);
                        }
                    },
                    error: function () {
                        alert('error');
                    }
                })
            });
        });
    </script>

@endsection

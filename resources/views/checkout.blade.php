@extends('layouts.master', ['title' => 'checkout'])
@section('content')

    <div class="aa ">
        <div class="container row">
            <div class="list-address">
                <span>Chọn địa chỉ giao hàng có sẵn bên dưới:</span>
                @foreach(Auth::user()->addresses as $index => $address)
                    <div class="address-box col-md-6" style="border: black solid 1px">
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

                        <button class="btn btn-link">
                            delete
                        </button>
                    </div>
                @endforeach
                <div class="add-new-address">
                    <button id="btn-add-address" style="border: black solid 1px">
                        them dia chi
                    </button>
                </div>
            </div>
            <div id="cart-body">
            </div>
            <div>

                <input name="type_payment" value="COD" checked type="radio"/><label for="">thanh toan khi nhan
                    hang</label>

                <input name="type_payment" value="VNPAY" type="radio"/><label for="">thanh toan vnpay</label>

                <button id="checkout" style="border: black solid 1px">Checkout</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            const add_address = $('#btn-add-address');
            add_address.click(function () {
                window.location.href = '/profile'
            });
            let listSet = Array.from(new Map(JSON.parse(localStorage.getItem('sets_in_bag'))).values());
            let htmlContent = '';
            for (let cartItem of listSet) {
                htmlContent += `<div style="border: black solid 1px">
                            <p>Ten : ${cartItem.name}</p>
                            <img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${cartItem.image}"/>
                            <p>So luong : ${cartItem.quantity}</p>
                            <p>Tien : ${cartItem.quantity * cartItem.price}</p>
                        </div>`
            }

            var totalPrice = listSet.reduce((a, b) => {
                return a + b.quantity * b.price
            }, 0);

            htmlContent += `${totalPrice}`;

            $('#cart-body').html(htmlContent);

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

                        if (res === 'done') {
                            localStorage.removeItem('sets_in_bag');
                            window.location.href = '/checkout_success';
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

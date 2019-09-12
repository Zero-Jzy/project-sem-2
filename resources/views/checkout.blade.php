@extends('layouts.master', ['title' => 'checkout'])
@section('content')
    <div class="aa ">
        <div class="container row">
            <div class="list-address">
                <span>Chọn địa chỉ giao hàng có sẵn bên dưới:</span>
                @foreach(Auth::user()->addresses as $address)
                    <div class="address-box col-md-6" style="border: black solid 1px">
                        <div>
                            <input address-id="{{$address->id}}"
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
            </div>
            <div id="cart-body">
            </div>
            <div>
                <button type="submit" style="border: black solid 1px">thanh toan khi nhan hang</button>
                <button type="submit" style="border: black solid 1px">thanh toan vnpay</button>
                <button class="add" type="submit" style="border: black solid 1px">Checkout</button>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                var gg = localStorage.getItem('sets_in_bag');
                var son = Array.from(new Map(JSON.parse(gg)).values());
                var htmlContent = '';
                for (var cartItem of son) {
                    htmlContent += `<div style="border: black solid 1px">
                            <p>Ten : ${cartItem.name}</p>
                            <img src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/${cartItem.image}"/>
                            <p>So luong : ${cartItem.quantity}</p>
                            <p>Tien : ${cartItem.quantity * cartItem.price}</p>
                        </div>`
                }

                var totalPrice = son.reduce((a,b)=>{
                    return a + b.quantity * b.price
                },0);
                htmlContent += `
                    ${totalPrice}
                `
                $('#cart-body').html(htmlContent);
                const btn = $('.add');
                btn.click(function () {
                    var address_id = $("input[name='address']:checked").attr('address-id');
                    $.ajax({
                        method: 'post',
                        url: "/order",
                        data: {
                            '_token': `{{ csrf_token() }}`,
                            'address_id': address_id,
                            'listSet' : son
                        },
                        success: function (res) {
                            if(res === 'done'){
                                localStorage.removeItem('sets_in_bag');
                                window.location.href = '/menu/food'
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

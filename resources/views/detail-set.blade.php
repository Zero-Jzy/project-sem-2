@extends('layouts.master', ['title' => 'Detail set'])
@section('content')
    <div class="container slide-thumbnail">
        <div class="row">
            <div class="col-md-6">
                <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">
                <p class="newarrival text-center">NEW</p>
                <h2>Healthy food</h2>
                <p>Product Code:dgjsgj</p>
                <img src="https://www.pinclipart.com/picdir/middle/230-2301560_rate-5-star-if-you-like-this-template.pnghttps://www.pinclipart.com/picdir/middle/230-2301560_rate-5-star-if-you-like-this-template.png" class="stars">
                <p class="price"> USD $15.00</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> XYZ Company</p>
{{--                <label>Quantity:</label>--}}
{{--                <div class="ann-quantity">--}}
{{--                    <input onchange="updateQuantityFood(1, withValue, this.value)" type="number" min="0" step="0" data-id="0" value="0">--}}
{{--                    <div class="nna-quantity-nav">--}}
{{--                        <div onclick="updateQuantityFood(1, increment)" class="nna-quantity-button quantity-up">+</div>--}}
{{--                        <div onclick="updateQuantityFood(1, decrement)" class="nna-quantity-button quantity-down">-</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <label>Quantity:</label>
                <input type="text" value="1">
                <button type="button" class="btn-btn-default cart"> Add to cart </button>
            </div>
        </div>
    </div>

<div class="nna-container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="card-img-top" alt="1">
                </div>

                <div class="card-body ">
                    <h5 class="card-title">Design</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="btn btn-success">Learn More...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="card-img-top" alt="2">
                </div>

                <div class="card-body ">
                    <h5 class="card-title">Design</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="btn btn-success">Learn More...</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="card-img-top" alt="3">
                </div>

                <div class="card-body ">
                    <h5 class="card-title">Design</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="btn btn-success">Learn More...</a>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

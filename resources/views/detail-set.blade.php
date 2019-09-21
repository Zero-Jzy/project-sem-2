@extends('layouts.master', ['title' => 'Detail set'])
@section('content')
    <div class="container slide-thumbnail">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"
                                class="d-block w-100" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"
                                class="d-block w-100" alt="2">
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"
                                class="d-block w-100" alt="3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-7">
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


    <div class="nna-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="d-block w-100" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="d-block w-100" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1" class="d-block w-100" alt="3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


@endsection

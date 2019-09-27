@extends('layouts.master', ['title' => 'Detail set'])
@section('content')
    <div style="padding-top: 120px" class="container slide-thumbnail">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/{{$set['image']}}"
                    class="nna-img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">


                <h4><b>{{$set ['name']}}</b></h4>
                <p class="price"> USD ${{$set['price']}}</p>

                <b>Nutritional Ingredients</b>
                <p><b>- Calo:</b> {{$set['calo']}},
                    <b>Protein:</b>{{$set['protein']}},
                    <b>Dietary fiber:</b>{{$set['dietary_fiber']}},</p>


{{--                <p><b>- Protein:</b>{{$set['protein']}}</p>--}}
{{--                <p><b>- Dietary fiber:</b>{{$set['dietary_fiber']}}</p>--}}
                <p><b>- Carbohydrate:</b> {{$set['carbohydrate']}},
                    <b>Total fat:</b>{{$set['total_fat']}}
                </p>
{{--                <p><b>- Total fat:</b>{{$set['total_fat']}}</p>--}}
                <p><b>- Vitamins:</b> {{$set['vitamins']}}</p>
                <p><b>- Minerals:</b>{{$set['minerals']}}</p>
                <p><b>- Description:</b>{{$set['description']}}</p>

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
                <button type="button" class="btn-btn-default cart"> Add to cart</button>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="owl-carousel owl-theme">
            @foreach($set['foods'] as $food)

                <div class="ml-2 mr-2" style="background-color: #ddd">
                    <div class="food-card">
                        <div class="food-card-content">
                            <img
                                src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/{{$food['image']}}"/>
                            <div class="info">
                                <div class="row amount-of-nutrition">
                                    <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                        <span class="nna-text-bold nna-font-size-14">Calo</span>
                                        <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food['calo']}}</span><small>&nbsp;(g)</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                        <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food['protein']}}</span><small>&nbsp;(g)</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                        <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food['dietary_fiber']}}</span><small>&nbsp;(g)</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                        <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food['carbohydrate']}}</span><small>&nbsp;(g)</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                        <div class="very-low">
                                            <span
                                                class="nna-font-size-14">{{$set['total_fat']}}</span><small>&nbsp;(g)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">{{$food['vitamins']}}</span>
                                    </div>
                                    <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">{{$food['minerals']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="food-card-footer">
                            <h6 class="py-2">{{$food['name']}}</h6>
                            <div class="d-flex justify-content-between nna-abs-bottom-10">
                                <p class="price">{{$food['price']}}</p>
                                <a class="btn-add btn-add-food ml-3" data-id="{{$food['id']}}">
                                    <i class="fal fa-plus"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{asset("lib/owl.carousel.min.js")}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            items: 4,
            nav: true,
            dots: true,
            loop: true,
        });
    </script>
@endsection

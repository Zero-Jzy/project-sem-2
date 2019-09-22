@extends('layouts.master', ['title' => 'Detail set'])



@section('content')
    <div class="container slide-thumbnail">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"
                    class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">
                <p class="newarrival text-center">NEW</p>
                <h3><b>Five flavored fried chicken</b></h3>

                <img
                    src="https://www.pinclipart.com/picdir/middle/230-2301560_rate-5-star-if-you-like-this-template.pnghttps://www.pinclipart.com/picdir/middle/230-2301560_rate-5-star-if-you-like-this-template.png"
                    class="stars">
                <p class="price"> USD $15.00</p>
                <b>Nutritional Ingredients</b>
                <p><b>- Calo:</b> 234.5</p>
                <p><b>- Protein:</b> 54.5</p>
                <p><b>- Dietary fiber:</b> 423.5</p>
                <p><b>- Carbohydrate:</b> 343.3</p>
                <p><b>- Total fat:</b> 232.2</p>
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

    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-sm-4 col-md-3">--}}
    {{--                <div class="food-card">--}}
    {{--                    <div class="food-card-content">--}}
    {{--                        <img--}}
    {{--                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/pu1geam0w9yo5no4zuyj.jpg"/>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="row amount-of-nutrition">--}}
    {{--                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">--}}
    {{--                                    <span class="nna-text-bold nna-font-size-14">Calo</span>--}}
    {{--                                    <div class="low">--}}
    {{--                                                                    <span--}}
    {{--                                                                        class="nna-font-size-14">123344</span><small>&nbsp;(g)</small>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-6">--}}
    {{--                                                                <span--}}
    {{--                                                                    class="nna-text-bold nna-font-size-14">Protein</span>--}}
    {{--                                    <div class="normal">--}}
    {{--                                                                    <span--}}
    {{--                                                                        class="nna-font-size-14">2344354</span><small>&nbsp;(g)</small>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-6">--}}
    {{--                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>--}}
    {{--                                    <div class="very-high">--}}
    {{--                                                                    <span--}}
    {{--                                                                        class="nna-font-size-14">2344354</span><small>&nbsp;(g)</small>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-6">--}}
    {{--                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>--}}
    {{--                                    <div class="high">--}}
    {{--                                                                    <span--}}
    {{--                                                                        class="nna-font-size-14">2344354</span><small>&nbsp;(g)</small>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-6">--}}
    {{--                                                                <span--}}
    {{--                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>--}}
    {{--                                    <div class="very-low">--}}
    {{--                                        <span--}}
    {{--                                            class="nna-font-size-14">2344354</span><small>&nbsp;(g)</small>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="row mt-3">--}}
    {{--                                <div class="col-sm-12">--}}
    {{--                                                                <span--}}
    {{--                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:2344354</span>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-sm-12">--}}
    {{--                                                                <span--}}
    {{--                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:2344354</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="food-card-footer">--}}
    {{--                        <h6 class="py-2">2344354</h6>--}}
    {{--                        <div class="d-flex justify-content-between nna-abs-bottom-10">--}}
    {{--                            <p class="price">2344354$</p>--}}
    {{--                            <a class="btn-add btn-add-food ml-3" data-id="2344354">--}}
    {{--                                <i class="fal fa-plus"></i>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-4">--}}
    {{--                <div class="card shadow" style="width: 20rem;">--}}
    {{--                    <div class="inner">--}}
    {{--                        <img--}}
    {{--                            src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"--}}
    {{--                            class="card-img-top" alt="2">--}}
    {{--                    </div>--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <h5 class="card-title">Design</h5>--}}
    {{--                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting--}}
    {{--                            industry.</p>--}}
    {{--                        <a href="#" class="btn btn-success">Learn More...</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-4">--}}
    {{--                <div class="card shadow" style="width: 20rem;">--}}
    {{--                    <div class="inner">--}}
    {{--                        <img--}}
    {{--                            src="https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/08/931/524/golden-retriever-istock.jpg?ve=1&tl=1"--}}
    {{--                            class="card-img-top" alt="3">--}}
    {{--                    </div>--}}

    {{--                    <div class="card-body ">--}}
    {{--                        <h5 class="card-title">Design</h5>--}}
    {{--                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting--}}
    {{--                            industry.</p>--}}
    {{--                        <a href="#" class="btn btn-success">Learn More...</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container mt-5 mb-5">
        <div class="owl-carousel owl-theme">
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/pu1geam0w9yo5no4zuyj.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/ypjsqs280nahdt9uphco.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/bbtqehjqvjcg0hrcisq0.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/p6w6x5a1zlufgbc25yyf.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/lwtwmgjlfhzunyleys85.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/mosmdiqdektc6gwkuxql.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/cgqhlicghps5esdajvd0.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/cfiac8ocokj3xckaqhql.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/mosmdiqdektc6gwkuxql.jpg"/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ml-2 mr-2" style="background-color: #ddd">
                <div class="food-card">
                    <div class="food-card-content">
                        <img
                            src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/wmbh76uwzmhxdtsogjkg.jpg "/>
                        <div class="info">
                            <div class="row amount-of-nutrition">
                                <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                    <span class="nna-text-bold nna-font-size-14">Calo</span>
                                    <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                    <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                    <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                    <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                    <div class="very-low">
                                        <span class="nna-font-size-14">343</span><small>&nbsp;(g)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins:343</span>
                                </div>
                                <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals:343</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <h6 class="py-2">343</h6>
                        <div class="d-flex justify-content-between nna-abs-bottom-10">
                            <p class="price">343$</p>
                            <a class="btn-add btn-add-food ml-3" data-id="343">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
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

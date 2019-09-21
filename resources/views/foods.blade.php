@extends('layouts.master', ['title' => 'Menu'])

@section('content')
    <div class="kc-col-container">

        <div class="kc-elm kc-css-246869 divider_line blogs_title" style="text-align: center;
    display: block;
    padding-top: 150px;
    margin-bottom: 0;">
            <div class="my-3">
{{--                <button href="{{route('food.index')}}" type="button" class="btn btn-default">food</button>--}}
{{--                -----}}
{{--                <button href="{{route('set.index')}}" type="button" class="btn btn-default">set</button>--}}
{{--                <button type="button" class="btn btn-primary btn-sm">{{'food'}}</button>--}}
{{--                <button type="button" class="btn btn-secondary btn-sm">{{set}}</button>--}}

{{--                <a class="{{Request::is('menu/food') ? 'active' : ''}}" href="{{route('food.index')}}">Foods</a>--}}
{{--                -----}}
{{--                <a class="{{Request::is('menu/set') ? 'active' : ''}}" href="{{route('set.index')}}">Sets</a>--}}
            </div>

            <div class="divider_inner divider_line3" style="
        width: 30%;
    margin: 0 auto;
        position: relative;
        /*background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/line_title.png');*/
    font-size: 18px;
    font-weight: 700;
    padding-right: 20px;
    padding-left: 20px;
    text-transform: uppercase;
    word-spacing: 6px;">
                <span class="line_text">Thực đơn</span>
            </div>
        </div>


        <div class="container kc-elm kc-css-410377 kc_tabs group tabs_thucdon">
            <div class="kc_wrapper ui-tabs kc_clearfix">
                <ul class="kc_tabs_nav ui-tabs-nav kc_clearfix d-flex justify-content-between py-5 px-3">
                    @foreach($categories as $category)
                    {{--                        <li class="ui-tabs-active"--}}
                    {{--                            style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_pizza_active.png')center top 10px no-repeat;height: 100px;">--}}
                    {{--                            <a href="#pizza" data-prevent="scroll">{{$category->name}}</a>--}}
                    </li>
                    @endforeach
                </ul>
                <div id="pizza"
                     class="kc-elm kc-css-122555 kc_tab ui-tabs-panel kc_ui-tabs-hide kc_clearfix tabs_pizza ui-tabs-body-active kc-section-active"
                     style="opacity: 1;">
                    <div class="kc_tab_content">
                        <div class="kc-elm kc-css-690017 kc-raw-code">
                            <div class="woocommerce columns-4 container">
                                <div class="row">
                                    @foreach($foods as $food)
                                        <div class="col-sm-4 col-md-3">
                                            <div class="food-card">
                                                <div class="food-card-content">
                                                    <img
                                                        src="https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/{{$food->image}}"/>
                                                    <div class="info">
                                                        <div class="row amount-of-nutrition">
                                                            <div class="col-sm-6 offset-3" style="Fmargin-left: 25%">
                                                                <span class="nna-text-bold nna-font-size-14">Calo</span>
                                                                <div class="low">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food->calo}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Protein</span>
                                                                <div class="normal">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food->protein}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span class="nna-text-bold nna-font-size-14">Dietary fiber</span>
                                                                <div class="very-high">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food->dietary_fiber}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span class="nna-text-bold nna-font-size-14">Carbohydrate</span>
                                                                <div class="high">
                                                                    <span
                                                                        class="nna-font-size-14">{{$food->carbohydrate}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span
                                                                    class="nna-text-bold nna-font-size-14">Total fat</span>
                                                                <div class="very-low">
                                                                    <span  class="nna-font-size-14">{{$food->total_fat}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Vitamins: {{$food->vitamins}}</span>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <span
                                                                    class="nna-font-size-14 nna-text-bold nna-text-gray">Minerals: {{$food->minerals}} </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="food-card-footer">
                                                    <h6 class="py-2">{{$food->name}}</h6>
                                                    <div class="d-flex justify-content-between nna-abs-bottom-10">
                                                        <p class="price">{{$food->price}}$</p>
                                                        <a class="btn-add btn-add-food ml-3"  data-id="{{$food->id}}">
                                                            <i class="fal fa-plus"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('aside')

@endsection

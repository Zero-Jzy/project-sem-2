@extends('layouts.master', ['title' => 'Menu'])

@section('content')
    <div class="kc-col-container">

        <div class="kc-elm kc-css-246869 divider_line blogs_title" style="text-align: center;
    display: block;
    padding-top: 150px;
    margin-bottom: 0;">
            <div class="my-3">
                <a class="{{Request::is('menu/food') ? 'active' : ''}}" href="{{route('food.index')}}">Foods</a>
                ---
                <a class="{{Request::is('menu/set') ? 'active' : ''}}" href="{{route('set.index')}}">Sets</a>
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
                    <li class="ui-tabs-active"
                        style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_pizza_active.png')center top 10px no-repeat;height: 100px;">
                        <a href="#pizza" data-prevent="scroll">Pizza</a>
                    </li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_myi.png') center top 10px no-repeat;">
                        <a href="#mi-y" data-prevent="scroll">Mì Ý</a></li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_salad.png')center top 10px no-repeat">
                        <a href="#salad" data-prevent="scroll">Salad</a></li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_khaivi.png')center top 10px no-repeat">
                        <a href="#khai-vi" data-prevent="scroll">Khai Vị</a></li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_douong.png')center top 10px no-repeat">
                        <a href="#do-uong" data-prevent="scroll">Đồ Uống</a></li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/icon_combo.png')center top 10px no-repeat">
                        <a href="#combo" data-prevent="scroll">Combo</a></li>
                    <li style="background: url('https://www.pizzaexpress.vn/wp-content/uploads/2019/07/icon-phomai-normal.png')center top 10px no-repeat">
                        <a href="#khac" data-prevent="scroll">Khác</a></li>
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
                                                            <div class="col-sm-6 offset-3" style="margin-left: 25%">
                                                                <span>Calo</span>
                                                                <div class="low">
                                                                    <span>{{$food->calo}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span>Protein</span>
                                                                <div class="normal">
                                                                    <span>{{$food->protein}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span>Dietary fiber</span>
                                                                <div class="very-high">
                                                                    <span>{{$food->dietary_fiber}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span>Carbohydrate</span>
                                                                <div class="high">
                                                                    <span>{{$food->carbohydrate}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <span>Total fat</span>
                                                                <div class="very-low">
                                                                    <span>{{$food->total_fat}}</span><small>&nbsp;(g)</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-12">
                                                                <span>Vitamins: {{$food->vitamins}}</span>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <span>Minerals: {{$food->minerals}} </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="food-card-footer">
                                                    <h6 class="py-2">{{$food->name}}</h6>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="price">{{$food->price}}$</p>
                                                        <a class="btn-add btn-add-food" data-id="{{$food->id}}">
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

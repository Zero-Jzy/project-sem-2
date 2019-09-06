@extends('layouts.master', ['title' => 'Menu'])

@section('content')
    <aside style="overflow: inherit" class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        {{--        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>--}}
        <button id="btn-control-sidebar" class="btn-show-sidebar m-l-33 trans-0-4" style="
        position: absolute;
        left: -83px;
        top: 15%;
        width: 50px;
        height: 50px;
box-shadow: -2px 0px 5px 0px rgba(0,0,0,0.25);
border-radius: 10px 0px 0px 10px;
background: white;
        border: none;
">
            <span><i class="fal fa-shopping-bag"></i></span>
        </button>

        <!-- - -->
        <div class="my-fill-tab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="active"
                       id="pills-food-tab"
                       data-toggle="pill"
                       href="#pills-food"
                       role="tab"
                       aria-controls="pills-food"
                       aria-selected="true">
                        foods
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                       id="pills-set-tab"
                       data-toggle="pill"
                       href="#pills-set"
                       role="tab"
                       aria-controls="pills-set"
                       aria-selected="false">
                        Sets
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-food" role="tabpanel" aria-labelledby="pills-food-tab">
                <div id="list-food" class="list-food scrollbar">
                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                        </div>
                        <div class="text-blo3 flex-col-l-m">
                            <a href="#" class="txt19 m-b-3">
                                Duis massa
                            </a>

                            <span class="txt10 m-t-20">
								$12.75
							</span>
                        </div>
                        <div class="ml-auto mr-4 my-2">
                            <button id="btn-delete-food ">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="total-box">
                    <div style="height: 30px">
                        <h5 class="text-center text-uppercase" style="line-height: 50px">Total</h5>
                    </div>
                    <div class="total-content">
                        <div class="row ml-0">
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn-incard btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto">
                        Create set
                    </button>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-set" role="tabpanel" aria-labelledby="pills-set-tab">
                <div class="list-food scrollbar">
                    <div class="food-item">
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                                <a href="#"><img src="{{asset('/template/images/lunch-05.jpg')}}" alt="IMG-MENU"></a>
                            </div>

                            <div class="text-blo3 flex-col-l-m">
                                <a href="#" class="txt19 m-b-3">
                                    Duis massa
                                </a>

                                <span class="txt10 m-t-20">
								$12.75
							</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total-box">
                    <div style="height: 30px">
                        <h5 class="text-center text-uppercase" style="line-height: 50px">Total</h5>
                    </div>
                    <div class="total-content">
                        <div class="row ml-0">
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                            <div class="col-6">
                                <br>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn-incard btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </aside>

    <div class="kc-col-container">
        <div class="kc-elm kc-css-246869 divider_line blogs_title" style="text-align: center;
    display: block;
    padding-top: 150px;
    margin-bottom: 0;">
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
                                    <div class="col-sm-4 col-md-3">
                                        <div class="food-card">
                                            <div class="food-card-content">
                                                <img src="https://via.placeholder.com/360"/>
                                                <div class="info">
                                                    <div class="row amount-of-nutrition">
                                                        <div class="col-sm-6 offset-3" style="margin-left: 25%">
                                                            <span>Calo</span>
                                                            <div class="low"><span>32487</span><small>&nbsp;(g)</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span>Proteint</span>
                                                            <div class="normal"><span>233</span><small>&nbsp;(g)</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span>Dietary fiber</span>
                                                            <div class="very-high">
                                                                <span>12</span><small>&nbsp;(g)</small></div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span>Carbohydrate</span>
                                                            <div class="high"><span>324</span><small>&nbsp;(g)</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span>Fat intaket</span>
                                                            <div class="very-low">
                                                                <span>12</span><small>&nbsp;(g)</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-sm-12">
                                                            <span>Viatmins:</span>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <span>Minerals:</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="food-card-footer">
                                                <h5>Name food</h5>
                                                <div class="d-flex justify-content-between">
                                                    <p class="price">12$</p>
                                                    <a class="btn-add-food">
                                                        <i class="fal fa-plus"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @foreach($foods as $food)
                                        <div class="col-sm-4 col-md-3">
                                            <div class="food-card">
                                                <div class="food-card-content">
                                                    <img src="{{$food->image}}"/>
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
                                                    <h5>{{$food->name}}</h5>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="price">{{$food->price}}$</p>
                                                        <a class="btn-add-food" data-id="{{$food->id}}">
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
        <section class="kc-elm kc-css-671686 kc_row kc-main-combo">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-elm kc-css-779759 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="kc-col-container">
                            <div class="combo_title">
                                <div class="combo_text"> Siêu tiết kiệm</div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-893995 kc-title-wrap ">
                            <h2 class="kc_title">Combo siêu hấp dẫn</h2>
                        </div>
                        <div class="kc-combo container">
                            <ul class="row">
                                <li class="col-md-3">
                                    <div class="kc-item">
                                        <div class="combo_thumb">
                                            <img class="img-fluid"
                                                 src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/combo-1-1.png"
                                                 alt="">
                                        </div>
                                        <div class="combo_title_addcart">
                                            <h3>Combo 01</h3>
                                            <a href="/?add-to-cart=415"
                                               class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua
                                                hàng</a>
                                        </div>
                                        <div class="combo_info_price"> Cho 2 người
                                            <span class="woocommerce-Price-amount amount">139.000
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                        </div>
                                        <div class="combo_desc"> 1 Pizza size S + 1 Salad + 1 Coca 390 ml</div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kc-item">
                                        <div class="combo_thumb">
                                            <img class="img-fluid"
                                                 src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/combo-1-1.png"
                                                 alt="">
                                        </div>
                                        <div class="combo_title_addcart">
                                            <h3>Combo 01</h3>
                                            <a href="/?add-to-cart=415"
                                               class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua
                                                hàng</a>
                                        </div>
                                        <div class="combo_info_price"> Cho 2 người
                                            <span class="woocommerce-Price-amount amount">139.000
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                        </div>
                                        <div class="combo_desc"> 1 Pizza size S + 1 Salad + 1 Coca 390 ml</div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kc-item">
                                        <div class="combo_thumb">
                                            <img class="img-fluid"
                                                 src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/combo-1-1.png"
                                                 alt="">
                                        </div>
                                        <div class="combo_title_addcart">
                                            <h3>Combo 01</h3>
                                            <a href="/?add-to-cart=415"
                                               class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua
                                                hàng</a>
                                        </div>
                                        <div class="combo_info_price"> Cho 2 người
                                            <span class="woocommerce-Price-amount amount">139.000
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                        </div>
                                        <div class="combo_desc"> 1 Pizza size S + 1 Salad + 1 Coca 390 ml</div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="kc-item">
                                        <div class="combo_thumb">
                                            <img class="img-fluid"
                                                 src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/combo-1-1.png"
                                                 alt="">
                                        </div>
                                        <div class="combo_title_addcart">
                                            <h3>Combo 01</h3>
                                            <a href="/?add-to-cart=415"
                                               class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua
                                                hàng</a>
                                        </div>
                                        <div class="combo_info_price"> Cho 2 người
                                            <span class="woocommerce-Price-amount amount">139.000
                                            <span class="woocommerce-Price-currencySymbol">₫</span>
                                        </span>
                                        </div>
                                        <div class="combo_desc"> 1 Pizza size S + 1 Salad + 1 Coca 390 ml</div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kc-elm kc-blog">
            <div class="container">
                <div class="combo_title">
                    <div class="combo_text" style="color: #333"> Blog</div>
                </div>
                <h2 class="kc_title">Blog Mới Nhất</h2>
                <div class="kc-list-blog">
                    <ul class="row">
                        <li class="col-md-4">
                            <div class="home_blog_img">
                                <img
                                    src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg"
                                    alt="">
                            </div>
                            <h3><a href="https://www.pizzaexpress.vn/my-y/"
                                   title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về
                                    các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
                            <div class="home_blog_des">Mỳ ý sốt bò băm, mỳ ý sốt kem, mỳ ý sốt thịt bò, mỳ...</div>
                            <div class="home_blog_info">
                                <div class="home_blog_cell">13/12/2018</div>
                                <div class="home_blog_cell">
                                    <span>0</span> Bình luận
                                </div>
                                <div class="home_blog_cell">
                                    <a href="#">Đọc chi tiết </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="home_blog_img">
                                <img
                                    src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg"
                                    alt="">
                            </div>
                            <h3><a href="https://www.pizzaexpress.vn/my-y/"
                                   title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về
                                    các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
                            <div class="home_blog_des">Mỳ ý sốt bò băm, mỳ ý sốt kem, mỳ ý sốt thịt bò, mỳ...</div>
                            <div class="home_blog_info">
                                <div class="home_blog_cell">13/12/2018</div>
                                <div class="home_blog_cell">
                                    <span>0</span> Bình luận
                                </div>
                                <div class="home_blog_cell">
                                    <a href="#">Đọc chi tiết </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="home_blog_img">
                                <img
                                    src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg"
                                    alt="">
                            </div>
                            <h3><a href="https://www.pizzaexpress.vn/my-y/"
                                   title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về
                                    các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
                            <div class="home_blog_des">Mỳ ý sốt bò băm, mỳ ý sốt kem, mỳ ý sốt thịt bò, mỳ...</div>
                            <div class="home_blog_info">
                                <div class="home_blog_cell">13/12/2018</div>
                                <div class="home_blog_cell">
                                    <span>0</span> Bình luận
                                </div>
                                <div class="home_blog_cell">
                                    <a href="#">Đọc chi tiết </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <script>

        const btnAddFood = $('.btn-add-food');
        var foodInBag = new Map(JSON.parse(localStorage.getItem('foods_in_bag'))) || new Map();
        const listFoodInBag = $('#list-food');
        renderFoodInBag();

        var spinner = $('.quantity'),
            inputQuantity = spinner.find('input[type="number"]');

        const btnUp = $('.quantity-up');
        const btnDown = $('.quantity-down');

        const increment = 'increment';
        const decrement = 'decrement';
        const deleteFood = 'deleteFood';

        btnAddFood.click(function () {
            const foodId = $(this).attr('data-id');
            updateQuantity(foodId, increment)
        });


        function updateQuantity(id, type) {
            id = parseInt(id);
            const food = foodInBag.get(id);
            var currentQuantity = food ? food.quantity : 0;
            switch (type) {
                case increment:
                    if (foodInBag.has(id)) {
                        foodInBag.set(id, {...food, quantity: currentQuantity + 1});
                    } else {
                        $.get(`/api/food/${id}`)
                            .done(function (res) {
                                foodInBag.set(res.id, {...res, quantity: 1})
                                localStorage.foods_in_bag = JSON.stringify(Array.from(foodInBag.entries()));
                                renderFoodInBag();
                            });
                    }
                    break;
                case decrement:
                    if (!foodInBag.has(id) || currentQuantity < 0) break;

                    if (currentQuantity === 1) {
                        foodInBag.delete(id)
                    } else {
                        foodInBag.set(id, {...food, quantity: currentQuantity - 1})
                    }
                    break;
                case deleteFood:
                    foodInBag.delete(id);
                    break;
                default:
                    break;
            }
            localStorage.foods_in_bag = JSON.stringify(Array.from(foodInBag.entries()));
            renderFoodInBag();
        }


        function renderFoodInBag(foods = Array.from(foodInBag.values())) {
            let listFoodsHtml = foods.map(food => (
                `<div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div style="width: 120px;height: 90px;" class="pic-blo3 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="#"><img src="${food.image}" alt="${food.name}"></a>
                    </div>
                    <div class="text-blo3 flex-col-l-m">
                        <a href="#" class="txt19 m-b-3">
                            ${food.name}
                        </a>
                        <div>
                            <div class="quantity">
                                 <input type="number" min="1" step="1" data-id="${food.id}" value="${food.quantity}">
                                 <div class="quantity-nav">
                                     <div onclick="updateQuantity(${food.id}, increment)" class="quantity-button quantity-up">+</div>
                                     <div onclick="updateQuantity(${food.id}, decrement)" class="quantity-button quantity-down">-</div>
                                 </div>
                            </div>
                            <span class="txt10 m-t-20">${food.price}</span>
                        </div>
                    </div>
                    <div class="ml-auto mr-4 my-2">
                        <button onclick="updateQuantity(${food.id}, deleteFood)">
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>`)
            );

            listFoodInBag.html(listFoodsHtml.join(''))
        }

    </script>
    {{--    <aside style="overflow: inherit" class="sidebar trans-0-4">--}}
    {{--        <!-- Button Hide sidebar -->--}}
    {{--        --}}{{--        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>--}}
    {{--        <button id="btn-control-sidebar" class="btn-show-sidebar m-l-33 trans-0-4" style="--}}
    {{--        position: absolute;--}}
    {{--        left: -83px;--}}
    {{--        top: 15%;--}}
    {{--        width: 50px;--}}
    {{--        height: 50px;--}}
    {{--        background: cadetblue;--}}
    {{--        border: none;--}}
    {{--">--}}
    {{--            <i class="fal fa-shopping-bag"></i>--}}
    {{--        </button>--}}

    {{--        <!-- - -->--}}
    {{--        <div class="my-fill-tab">--}}
    {{--            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">--}}
    {{--                <li>--}}
    {{--                    <a class="active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"--}}
    {{--                       aria-controls="pills-home" aria-selected="true">foods</a>--}}
    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"--}}
    {{--                       aria-controls="pills-profile" aria-selected="false">Sets</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}

    {{--        <div class="tab-content" id="pills-tabContent">--}}
    {{--            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">--}}
    {{--                <div class="list-food">--}}
    {{--                    <div class="food-item">--}}
    {{--                        <div class="img-box">--}}
    {{--                            <img width="70px"--}}
    {{--                                 src="https://i.pinimg.com/564x/c2/ff/3d/c2ff3d07a7abb23bc24c9f723d0cab75.jpg" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="left-content">--}}
    {{--                            <h6>Name</h6>--}}
    {{--                            <p>price</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="right-content">--}}
    {{--                            <p>calo</p>--}}
    {{--                            <p>dam</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="food-item">--}}
    {{--                        <div class="img-box">--}}
    {{--                            <img width="70px"--}}
    {{--                                 src="https://i.pinimg.com/564x/c2/ff/3d/c2ff3d07a7abb23bc24c9f723d0cab75.jpg" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="content">--}}
    {{--                            <div class="left-content">--}}
    {{--                                <h6>Name</h6>--}}
    {{--                                <p>price</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="right-content">--}}
    {{--                                <h6>calo</h6>--}}
    {{--                                <p>dam</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">--}}
    {{--                aaaaaaaaaaaaa--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </aside>--}}
@endsection

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
        background: cadetblue;
        border: none;
">
            <i class="fal fa-shopping-bag"></i>
        </button>

        <!-- - -->
        <div class="my-fill-tab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="active"
                       id="pills-dish-tab"
                       data-toggle="pill"
                       href="#pills-dish"
                       role="tab"
                       aria-controls="pills-dish"
                       aria-selected="true">
                        Dishs
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
            <div class="tab-pane fade show active" id="pills-dish" role="tabpanel" aria-labelledby="pills-dish-tab">
                <div class="list-dish scrollbar">
                    <div class="dish-item">
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
                    <div style="height: 50px">
                        <h4 class="text-center text-uppercase" style="line-height: 50px">Total</h4>
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

                </div>
                <div class="btn-button-card-box">
                    <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto">
                        Create set
                    </button>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-set" role="tabpanel" aria-labelledby="pills-set-tab">

                <div class="scrollbar">
                    <div class="dish-item">
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
                <div class="btn-button-card-box">
                    <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10 m-auto">
                        Check out
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
        <div data-open-on-mouseover="" data-tab-active="1" data-effect-option="yes"
             class="kc-elm kc-css-410377 kc_tabs group tabs_thucdon">
            <div class="kc_wrapper ui-tabs kc_clearfix">
                <ul class="kc_tabs_nav ui-tabs-nav kc_clearfix" style="display: flex;
    justify-content: space-between;
    margin-top: 50px;
    padding: 0 150px;">
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
                                <ul class="products dc_columns dc_columns-4 row">
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="product_item">
                                            <div class="product_img">
                                                <img width="260" height="204"
                                                     src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image lazyloaded"
                                                     alt="P1. Beefy Pizza" data-lazy-srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                              https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-lazy-sizes="(max-width: 260px) 100vw, 260px"
                                                     data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                     sizes="(max-width: 260px) 100vw, 260px"
                                                     srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w, https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                             https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                     data-was-processed="true">
                                                <noscript><img width="260" height="204"
                                                               src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg"
                                                               class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                               alt="P1. Beefy Pizza" srcset="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-260x204.jpg 260w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1-390x305.jpg 390w,
                                                       https://www.pizzaexpress.vn/wp-content/uploads/2018/06/P1.jpg 562w"
                                                               sizes="(max-width: 260px) 100vw, 260px"/></noscript>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_hover_cont"><h3
                                                        class="woocommerce-loop-product__title"
                                                        style="">
                                                        P1. Beefy Pizza</h3>
                                                    <p><strong>Thành phần</strong></p>
                                                    <p>Thịt bò xay, ngô, sốt BBQ, pho mai.</p>
                                                    <p><strong>Kích cỡ / Giá</strong></p>
                                                    <p><img class="alignnone wp-image-345 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            alt="Pizza Size S" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-345 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-S.png"
                                                             alt="Pizza Size S" width="25" height="25"/></noscript>&nbsp;
                                                    Size S / 20cm / 80.000đ</p>
                                                    <p><img class="alignnone wp-image-344 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            alt="Pizza Size M" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                            data-was-processed="true">
                                                    <noscript>
                                                        <img class="alignnone wp-image-344 size-full"
                                                             src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-M.png"
                                                             alt="Pizza Size M" width="25" height="25"/></noscript>&nbsp;
                                                    Size M / 24cm / 100.000đ</p>
                                                    <p><img class="alignnone wp-image-346 size-full lazyloaded"
                                                            src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            alt="Pizza Size L" width="25" height="25"
                                                            data-lazy-src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                            data-was-processed="true">
                                                    <noscript><img class="alignnone wp-image-346 size-full"
                                                                   src="https://www.pizzaexpress.vn/wp-content/uploads/2018/06/icon-P-L.png"
                                                                   alt="Pizza Size L" width="25" height="25"/>
                                                    </noscript>&nbsp;
                                                    Size L / 30cm / 140.000đ</p></div>
                                            </div>
                                            <h3 class="woocommerce-loop-product__title">P1. Beefy Pizza</h3> <span
                                                class="price">
                                        <span class="woocommerce-Price-amount amount">80.000<span
                                                class="woocommerce-Price-currencySymbol">₫</span>
                                        </span> – <span class="woocommerce-Price-amount amount">140.000<span
                                                        class="woocommerce-Price-currencySymbol">₫</span></span></span>
                                            <form action="" class="variations_form cart">
                                                <table class="variations">
                                                    <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value woo-variation-items-wrapper">
                                                            <select name="" id=""
                                                                    class="value woo-variation-items-wrapper"
                                                                    style="display: none">
                                                                <option value="">Chọn một tùy chọn</option>
                                                                <option value="s" class="attached enabled">S</option>
                                                                <option value="m" class="attached enabled">M</option>
                                                                <option value="l" class="attached enabled">L</option>
                                                            </select>
                                                            <ul class="variable-items-wrapperbutton-variable-wrapperreselect-clear">
                                                                <li data-wvstooltip="S"
                                                                    class="variable-item button-variable-item button-variable-item-s"
                                                                    title="S" data-value="s"><span
                                                                        class="variable-item-span variable-item-span-button">S</span>
                                                                </li>
                                                                <li data-wvstooltip="M"
                                                                    class="variable-item button-variable-item button-variable-item-m"
                                                                    title="M" data-value="m"><span
                                                                        class="variable-item-span variable-item-span-button">M</span>
                                                                </li>
                                                                <li data-wvstooltip="L"
                                                                    class="variable-item button-variable-item button-variable-item-l"
                                                                    title="L" data-value="l"><span
                                                                        class="variable-item-span variable-item-span-button">L</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"
                                                         style="display: none"></div>
                                                    <div
                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                        <div class="quantity">
                                                            <label class="screen-reader-text"
                                                                   for="quantity_5d659bfc5c52e">
                                                                Số lượng </label>
                                                            <div class="dc_quantity_input">
                                                                <input class="minus" type="button" value="-">
                                                                <input type="number" id="quantity_5d659bfc5c52e"
                                                                       class="input-text qty text" step="1" min="1"
                                                                       max=""
                                                                       name="quantity" value="1" title="SL" size="4"
                                                                       pattern="[0-9]*" inputmode="numeric"
                                                                       aria-labelledby="P1. Beefy Pizza số lượng">
                                                                <input class="plus" type="button" value="+">
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                                class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">
                                                            Mua hàng
                                                        </button>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
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
@endsection

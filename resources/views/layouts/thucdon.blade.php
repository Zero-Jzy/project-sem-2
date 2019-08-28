<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Sriracha&display=swap');

        body {
            font-family: Sriracha;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        body.kc-css-system .kc-css-246869 .divider_inner {
            width: 30%;
        }

        .blogs_title .divider_inner {
            height: 3px;
            background: url('https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/line_title.png');
        }

        .divider_line2 i, .divider_line3 .line_text {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            background: #fff;
            padding: 0 20px;
        }

        .kc_tab_content > ul > li {
            margin-bottom: 30px;
        }

        .kc_wrapper.ui-tabs.kc_clearfix ul li a {
            padding-top: 60px;
            display: inline-block;
            font-size: 30px;
            color: #c00a27;
            font-family: Sriracha;
        }

        .product_item {
            position: relative;
            border: 1px solid #e2e2e2;
            height: 100%;

        }

        .product_item .product_hover {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            background: #FFF;
            transition: 0.4s;
            width: 100%;
            height: 100%;
            border: 1px solid red;
            text-align: center;
        }

        .product_item .product_hover:hover {
            opacity: 0.9;
        }

        .product_item .product_img img {
            width: 100%;
            height: auto;
        }

        ul.dc_columns li .product_item .cart {
            width: 100%;
            float: left;
            display: block;
            clear: both;
            margin-bottom: 0;
            position: relative;
            z-index: 9999;
            padding: 0 10px;
        }

        ul.dc_columns li .product_item .variations_form.cart table.variations {
            width: 100%;
            background: #f5f5f5;
            border-radius: 25px;
            font-size: 12px;
            padding: 5px 0 5px 10px;
            line-height: 15px;
        }

        ul.dc_columns li .product_item .variations_form.cart table.variations .label {
            width: 30px;
        }

        ul.dc_columns li .product_item .variations_form.cart table.variations {
            width: 100%;
            background: #f5f5f5;
            border-radius: 25px;
            font-size: 12px;
            padding: 5px 0 5px 10px;
            line-height: 15px;
        }

        ul.dc_columns li .product_item .woocommerce-loop-product__title {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
            margin: 20px 0 10px;
            padding: 0;
            color: #000;
            width: 100%;
            float: left;
        }

        ul.dc_columns li .product_item span.price {
            font-weight: 600 !important;
            color: #c00a27 !important;
            font-size: 14px;
            display: block;
            float: left;
            width: 100%;
            clear: both;
            text-align: center;
            margin-bottom: 12px;
        }

        select {
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: black;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            -webkit-appearance: menulist;
            box-sizing: border-box;
            align-items: center;
            white-space: pre;
            -webkit-rtl-ordering: logical;
            background-color: rgb(248, 248, 248);
            cursor: default;
            margin: 0em;
            font: 400 11px system-ui;
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(166, 166, 166);
            border-image: initial;
        }

        option {
            font-weight: normal;
            display: block;
            white-space: pre;
            min-height: 1.2em;
            padding: 0px 2px 1px;
        }

        ul.dc_columns li.product_item .variations_form.cart table.variations .value ul {
            margin: 0;
            padding: 0;
            float: left;
            background: #FFF;
        }

        ul.dc_columns li .product_item .variations_form.cart table.variations .value ul li {
            float: left;
            width: 20px;
            text-align: center;
            color: #959595;
            padding-top: 2px;
            padding-bottom: 2px;
            cursor: pointer;
        }

        .woocommerce .products ul li, .woocommerce ul.products li {
            list-style: none outside;
        }

        .label label {
            display: inline-block;
            margin: 0;
            padding-left: 10px;
        }

        ul.dc_columns li .product_item .variations_form.cart table.variations .value ul {
            margin: 0;
            padding: 0;
            float: left;
            background: #FFF;
            margin: 5px 0;
            margin-left: 10px;
        }

        ul.dc_columns li .product_item .variations_form.cart .single_variation_wrap {
            display: block;
            position: relative;
        }

        ul.dc_columns li .product_item .variations_form.cart .woocommerce-variation-add-to-cart {
            text-align: center;
        }

        ul.dc_columns li .product_item .variations_form.cart .single_variation_wrap .quantity {
            position: absolute;
            top: -25px;
            right: 18px;
        }

        ul.dc_columns li .product_item .variations_form.cart .single_variation_wrap .screen-reader-text {
            position: relative !important;
            font-size: 12px;
        }

        ul.dc_columns li .product_item .variations_form.cart .single_variation_wrap .quantity .dc_quantity_input {
            display: inline-block;
            line-height: 1.2;
        }

        ul.dc_columns li .product_item .cart .quantity .dc_quantity_input {
            display: inline-block;
            background: #fff;
            padding: 0 5px;
        }

        .dc_quantity_input .minus, .dc_quantity_input .plus {
            border: none;
            background: none;
            margin: 0;
            padding: 0;
        }

        ul.dc_columns li .product_item .variations_form.cart .single_variation_wrap .quantity .qty {
            width: 20px;
            height: 10px;
            border: none;
            text-align: center;
        }

        ul.dc_columns li .product_item .variations_form.cart .woocommerce-variation-add-to-cart .button {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        ul.dc_columns li .product_item .variations_form.cart .button {
            float: inherit;
        }

        ul.dc_columns li .product_item .cart button.button {
            font-size: 12px;
            background: #b9b9b9;
            color: #fff;
            font-weight: 400;
            border-radius: 25px;
            opacity: 1;
        }

        .product_item button[type=submit] {
            padding: 5px 10px;
            /*display: block;*/
        }
        .kc-main-combo {
            background: transparent url(https://www.pizzaexpress.vn/wp-content/uploads/2018/06/combo_bg.jpg) center center/cover no-repeat scroll;
            padding-top: 60px;
            padding-bottom: 60px;
            margin: 30px 0;
        }
        .combo_title {
            width: 100%;
            display: block;
            float: left;
            text-align: center;
        }
        .combo_title .combo_text {
            display: inline-block;
            margin: auto;
            padding: 0 10px;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            color: #FFF;
            position: relative;
        }
        .combo_title .combo_text:before, .combo_title .combo_text:after {
            content: '';
            position: absolute;
            width: 105px;
            height: 100%;
            right: 100%;
            top: 0;
            background: url(https://www.pizzaexpress.vn/wp-content/themes/dinhcode/img/line_title.png) center center repeat-x;
        }
        .combo_title .combo_text:after {
            right: inherit;
            left: 100%;
        }
        .kc_title {
            color: #ff9c00;
            font-family: Sriracha;
            font-size: 40px;
            font-weight: 400;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 55px;
        }

        .kc-item .combo_title_addcart {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            float: left;
            padding: 20px 0;
            border-bottom: 1px solid #626262;
            margin-bottom: 20px;
        }
        .kc-item .combo_title_addcart h3 {
            display: block;
            float: left;
            font-size: 30px;
            font-weight: 400;
            color: #FFF;
            font-family: Sriracha;
            margin: 0;
            padding: 0;
        }
        .kc-item .combo_title_addcart > a {
            border: none;
            background: #c00a27;
            color: #FFF;
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 25px;
            /*float: right;*/
            position: relative;
        }
        .kc-item .combo_info_price {
            width: 100%;
            display: block;
            float: left;
            font-size: 18px;
            color: #FFF;
            margin-bottom: 20px;
            padding: 0 15px 0 0;
        }

        .kc-item .combo_info_price span.woocommerce-Price-amount {
            display: block;
            float: right;
            font-size: 24px;
            font-family: Sriracha;
            color: #fff600;
            line-height: 1;
        }
        .kc-item .combo_desc {
            display: block;
            clear: both;
            color: #FFF;
            font-size: 14px;
        }
        .kc-blog .home_blog_des {
            text-align: justify;
            margin-bottom: 20px;
            font-size: 14px;
            padding-top: 15px;
        }
        .home_blog_info {
            display: table;
            table-layout: auto;
            width: 100%;
            font-size: 12px;
        }
        .home_blog_info .home_blog_cell {
            display: table-cell;
            vertical-align: middle;
            width: 30%;
        }
        .kc-list-blog > ul > li h3 a {
            margin: 0 0 20px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 0;
        }
    </style>
</head>
<body>
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                            <div class="product_hover_cont"><h3 class="woocommerce-loop-product__title"
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
                                                               alt="Pizza Size L" width="25" height="25"/></noscript>&nbsp;
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
                                                        <select name="" id="" class="value woo-variation-items-wrapper"
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
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_5d659bfc5c52e">
                                                            Số lượng </label>
                                                        <div class="dc_quantity_input">
                                                            <input class="minus" type="button" value="-">
                                                            <input type="number" id="quantity_5d659bfc5c52e"
                                                                   class="input-text qty text" step="1" min="1" max=""
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
                                        <a href="/?add-to-cart=415" class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua hàng</a>
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
                                        <a href="/?add-to-cart=415" class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua hàng</a>
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
                                        <a href="/?add-to-cart=415" class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua hàng</a>
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
                                        <a href="/?add-to-cart=415" class="button add_to_cart_button product_type_simple ajax_add_to_cart">Mua hàng</a>
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
                            <img src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg" alt="">
                        </div>
                        <h3><a href="https://www.pizzaexpress.vn/my-y/" title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
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
                            <img src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg" alt="">
                        </div>
                        <h3><a href="https://www.pizzaexpress.vn/my-y/" title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
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
                            <img src="https://www.pizzaexpress.vn/wp-content/uploads/2018/11/Quick-Easy-Spaghetti-Bolognese2-1.jpg" alt="">
                        </div>
                        <h3><a href="https://www.pizzaexpress.vn/my-y/" title="Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express">Giới thiệu về các loại Mỳ đang được phục vụ bởi Pizza Express</a></h3>
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
</body>
</html>

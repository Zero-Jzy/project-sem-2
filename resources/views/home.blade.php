@extends('layouts.master', ['title' => 'Home page'])

@section('content')
    <!-- Slide1 -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url({{asset('/images/res11.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url({{asset('/images/res12.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url({{asset('/images/res13.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Pato Restaurant
						</span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            Welcome
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Welcome to Pato Restaurant - a quality standard restaurant for healthy nutritious food.						</p>

                        <a href="about.html" class="txt4">
                            Our Story
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{asset('/images/res14.jpg')}}" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="section-intro">
        <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url({{asset('/images/res15.jpg')}});">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                Pato Place
            </h3>
        </div>

        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="{{asset('/images/res16.jpg')}}" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Quality Restaurant
                                    </h4></a>

                                <p class="m-b-20">
                                    We only use clean food to make it into delicious dishes that serve consumers.
                                </p>

                                <a href="#" class="txt4">
                                    Learn More
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="{{asset('/images/res17.jpg')}}" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Delicious Food
                                    </h4></a>

                                <p class="m-b-20">
                                    The nutritious dishes we prepare every day ensure adequate nutrition to suit the taste of our customers.
                                </p>

                                <a href="#" class="txt4">
                                    Learn More
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="{{asset('/images/res18.jpg')}}" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Not just dishes
                                    </h4></a>

                                <p class="m-b-20">
                                    Comes with nutritious food of course, it is indispensable to accompany drinks to match the customer's nutritious meal.
                                </p>

                                <a href="#" class="txt4">
                                    Learn More
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our menu -->
    <section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Discover
				</span>

                <h3 class="tit5 t-center m-t-2">
                    Our Menu
                </h3>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res19.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size4">
                                    Breakfast
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res20.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size5">
                                    Lunch
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res21.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
                                    Dinner
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res22.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
                                    Drink
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res23.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size8">
                                    Dessert
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="{{asset('/images/res24.jpg')}}" alt="IMG-MENU">

                                <!-- Button2 -->
                                <a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
                                    Happy Hour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Event -->
    <section class="section-event">
        <div class="wrap-slick2">
            <div class="slick2">
                <div class="item-slick2 item1-slick2" style="background-image: url({{asset('/images/res25.jpg')}});">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcoming
								</span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg1-blo2" style="background-image: url({{asset('/images/res29.jpg')}});">
                                    <div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m t-center">
											23 August 2019 - 23 September 2019
										</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Pato Restaurant's Birthday Month
                                    </h4>

                                    <p class="t-center">
                                        On the occasion of Pato Restaurant's birthday, we jubilantly opened a series of events to reduce prices for each meal to thank our customers for the birthday of the restaurant.									</p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												30
											</span>

                                            <span class="dis-block t-center txt8">
												Days
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

                                            <span class="dis-block t-center txt8">
												Hours
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

                                            <span class="dis-block t-center txt8">
												Minutes
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

                                            <span class="dis-block t-center txt8">
												Seconds
											</span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 item2-slick2" style="background-image: url({{asset('/images/res26.jpg')}});">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcoming
								</span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="fadeInDown">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg2-blo2" style="background-image: url({{asset('/images/res30.jpg')}});">
                                    <div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m">
											23 August 2019 - 23 September 2019
										</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Pato Restaurant's Birthday Month
                                    </h4>

                                    <p class="t-center">
                                        On the occasion of Pato Restaurant's birthday, we jubilantly opened a series of events to reduce prices for each meal to thank our customers for the birthday of the restaurant.									</p>
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												30
											</span>

                                            <span class="dis-block t-center txt8">
												Days
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

                                            <span class="dis-block t-center txt8">
												Hours
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

                                            <span class="dis-block t-center txt8">
												Minutes
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

                                            <span class="dis-block t-center txt8">
												Seconds
											</span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 item3-slick2" style="background-image: url({{asset('/images/res27.jpg')}});">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcoming
								</span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Events
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="rotateInUpLeft">
                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg3-blo2" style="background-image: url({{asset('/images/res28.jpg')}});">
                                    <div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m">
											23 August 2019 - 23 September 2019
										</span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        Pato Restaurant's Birthday Month
                                    </h4>

                                    <p class="t-center">
                                        On the occasion of Pato Restaurant's birthday, we jubilantly opened a series of events to reduce prices for each meal to thank our customers for the birthday of the restaurant.									</p>
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												30
											</span>

                                            <span class="dis-block t-center txt8">
												Days
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

                                            <span class="dis-block t-center txt8">
												Hours
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

                                            <span class="dis-block t-center txt8">
												Minutes
											</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

                                            <span class="dis-block t-center txt8">
												Seconds
											</span>
                                        </div>
                                    </div>

                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick2-dots"></div>
        </div>
    </section>

    <!-- Booking -->


    <!-- Review -->
    <section class="section-review p-t-115">
        <!-- - -->
        <div class="title-review t-center m-b-2">
			<span class="tit2 p-l-15 p-r-15">
				Customers Say
			</span>

            <h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
                Review
            </h3>
        </div>

        <!-- - -->
        <div class="wrap-slick3">
            <div class="slick3">
                <div class="item-slick3 item1-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                                <img src="{{asset('/images/darwin.jpg')}}" alt="IGM-AVATAR">
                            </div>

                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ I like juice in Pato, specially is apple juice. It's so fresh and good for me. ”
                                </p>

                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>

                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                    Darwin Watterson ˗ California
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick3 item2-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                                <img src="{{asset('/images/ozawa.jpg')}}" alt="IGM-AVATAR">
                            </div>

                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ I am happy when I come to Pato. Foods are very delicious dishes that are nutritious. I promise I will comeback soon! ”
                                </p>

                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>

                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                    Maria Ozawa - Japan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick3 item3-slick3">
                    <div class="wrap-content-slide3 p-b-50 p-t-50">
                        <div class="container">
                            <div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
                                <img src="{{asset('/images/rolins.jpg')}}" alt="IGM-AVATAR">
                            </div>

                            <div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
                                <p class="t-center txt12 size15 m-l-r-auto">
                                    “ I really like meals to increase muscle in Pato. That makes me stronger and better to become a top superstar of WWE ”
                                </p>

                                <div class="star-review fs-18 color0 flex-c-m m-t-12">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                    <i class="fa fa-star p-l-1" aria-hidden="true"></i>
                                </div>

                                <div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
                                    Seth Rolins ˗ WWE Superstar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick3-dots m-t-30"></div>
        </div>
    </section>
@endsection

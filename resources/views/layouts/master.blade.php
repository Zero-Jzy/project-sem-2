<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/template/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/template/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/css/main.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/fontawesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/menu.css')}}">
    <script type="text/javascript" src="{{asset('/template/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

</head>
<body class="animsition">
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header {{Request::is(['/','contact','about-us']) ? 'gradient1' : 'box-shadow-header-custom'}}  trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset(Request::is(['/','contact','about-us']) ? '/template/images/icons/logo.png' : '/template/images/icons/logo2.png')}}" alt="IMG-LOGO"
                             data-logofixed="{{asset('/template/images/icons/logo2.png')}}">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a class="{{Request::is('/') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a class="{{Request::is('menu') ? 'active' : ''}}" href="{{route('menu')}}">Menu</a>
                            </li>
                            <li>
                                <a class="{{Request::is('about-us') ? 'active' : ''}}" href="{{route('about-us')}}">About</a>
                            </li>
                            <li>
                                <a class="{{Request::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Right Navbar -->
                <div class="right-navbar">
                    {{--    @if (Route::has('login'))--}}
                    {{--        <div class="top-right links">--}}
                    {{--            @auth--}}
                    {{--                <a href="{{ url('/home') }}">Home</a>--}}
                    {{--            @else--}}
                    {{--                <a href="{{ route('login') }}">Login</a>--}}

                    {{--                @if (Route::has('register'))--}}
                    {{--                    <a href="{{ route('register') }}">Register</a>--}}
                    {{--                @endif--}}
                    {{--            @endauth--}}
                    {{--        </div>--}}
                    {{--    @endif--}}

                    @if (Route::has('login'))
                        <ul class="top-right links">
                            @auth
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <span>Pato Test</span>
                                        <img class="avatar"
                                             src="https://i.pinimg.com/564x/5d/b8/a1/5db8a1d8d5da7010902c7d636766c5b9.jpg"
                                             alt="">
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fal fa-id-card-alt"></i> <span>My profile</span></a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fal fa-sign-out-alt"></i> <span>Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li>
{{--                                    <a href="{{ route('login') }}">Login</a>--}}
                                    <a href="#0" class="cd-signin">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li>
{{--                                        <a href="{{ route('register') }}" class="cd-signup">Register</a>--}}
                                        <a href="#0" class="cd-signup">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')


<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Contact Us
                </h4>

                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        8th floor, 379 Hudson St, New York, NY 10018
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        (+1) 96 716 6879
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        contact@site.com
                    </li>
                </ul>

                <!-- - -->
                <h4 class="txt13 m-b-32">
                    Opening Times
                </h4>

                <ul>
                    <li class="txt14">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class="txt14">
                        Every Day
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Latest twitter
                </h4>

                <div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>

                <div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
                    <a href="#" class="txt15">
                        @colorlib
                    </a>

                    <p class="txt14 m-b-18">
                        Activello is a good option. It has a slider built into that displays
                        <a href="#" class="txt15">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class="txt16">
							21 Dec 2017
						</span>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    Gallery
                </h4>

                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/17/6a/bd/3a/photo0jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/17/6a/bd/3a/photo0jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://product.hstatic.net/1000347095/product/rau-c_-lu_t-ch_m-kho-qu_t_large.jpg" data-lightbox="gallery-footer">
                        <img src="https://product.hstatic.net/1000347095/product/rau-c_-lu_t-ch_m-kho-qu_t_large.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-p/16/24/d9/11/photo0jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/16/24/d9/11/photo0jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/16/aa/78/2f/poke-hanoi.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/16/aa/78/2f/poke-hanoi.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-p/18/a0/9b/d1/photo1jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/18/a0/9b/d1/photo1jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/15/d3/03/3a/poke-hanoi-11b-hang-khay.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/15/d3/03/3a/poke-hanoi-11b-hang-khay.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-p/16/f5/03/30/poke-hanoi.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/16/f5/03/30/poke-hanoi.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-p/16/39/d6/67/poke-hanoi.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/16/39/d6/67/poke-hanoi.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/15/fa/7e/2f/photo0jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/15/fa/7e/2f/photo0jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-p/16/9a/86/a8/photo2jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/16/9a/86/a8/photo2jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/18/bd/16/9b/photo0jpg.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/18/bd/16/9b/photo0jpg.jpg" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="https://media-cdn.tripadvisor.com/media/photo-w/17/0f/03/c6/dinner-poke-hanoi.jpg" data-lightbox="gallery-footer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-w/17/0f/03/c6/dinner-poke-hanoi.jpg" alt="GALLERY">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    <a href="#" class="fs-15 c-white"> <i class="fab fa-tripadvisor"aria-hidden ="true"></i> </a>
                    <a href="#" class="fs-15 c-white"><i class="fab fa-facebook-f m-l-18"aria-hidden ="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fab fa-twitter m-l-18"></i></a>
                </div>

                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- =============================== MODAL ===============================--}}

{{-- Modal Login --}}
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">Register</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace " for="signup-first-name">First name</label>
                    <input class="full-width has-padding has-border" id="signup-first-name" type="text" placeholder="First Name">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace " for="ignup-last-name">Last Name</label>
                    <input class="full-width has-padding has-border" id="signup-last-name" type="text" placeholder="Last Name">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace " for="signup-email">Email</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email"  placeholder="Email">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace " for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace " for="signup-re-pass">Confirm Password</label>
                    <input class="full-width has-padding has-border" id="signup-re-pass" type="password"  placeholder="Confirm Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Register">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
{{-- =============================== END MODAL ===============================--}}

<script>

    var itemHeader =  $('.wrap_menu a, .wrap_menu li a');
    var rightNavbar =  $('.right-navbar a');
    var path = window.location.pathname;

    if(['/menu','/login','/register','/profile'].indexOf(path) !== -1){
        itemHeader.css('color','black');
        rightNavbar.css('color','#000')
    }
</script>


<!--===============================================================================================-->
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('/template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/template/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/template/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/template/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/template/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="{{asset('/js/my.js')}}"></script>
</body>
</html>

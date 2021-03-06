@extends('layouts.master', ['title' => 'Contact'])

@section('content')


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(https://thegioiamthuc.com/wp-content/uploads/2017/08/com-thit-bo-xao-hanh-tay-kieu-Nhat.jpg);">
    <h2 class="tit6 t-center">

    </h2>
</section>



<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <!-- Map -->
    <div class="container">
        <div class="map bo8 bo-rad-10 of-hidden">
            <div class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0931382861527!2d105.78042331414613!3d21.02895899314921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3285df81f%3A0x97be82a66bbe646b!2sDetech%20Building!5e0!3m2!1sen!2s!4v1566966566984!5m2!1sen!2s"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

    </div>

    <div class="container">
        <h3 class="tit7 t-center p-b-62 p-t-105">
            Send us a Message
        </h3>

        <form class="wrap-form-reservation size22 m-l-r-auto">
            <div class="row">
                <div class="col-md-4">
                    <!-- Name -->
                    <span class="txt9">
							Name
						</span>

                    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Email -->
                    <span class="txt9">
							Email
						</span>

                    <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Phone -->
                    <span class="txt9">
							Phone
						</span>

                    <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="col-12">
                    <!-- Message -->
                    <span class="txt9">
							Message
						</span>
                    <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
                </div>
            </div>

            <div class="wrap-btn-booking flex-c-m m-t-13">
                <!-- Button3 -->
                <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                    Submit
                </button>
            </div>
        </form>

        <div class="row p-t-135">
            <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <i class="fa-2x fas fa-map-marker-alt" ></i>
                    </div>

                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

                        <span class="txt23 size38">
                            379 Hudson St, New York, NY 10018
							</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <i class=" fa-2x fas fa-phone-alt"></i>
                    </div>


                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

                        <span class="txt23 size38">
								(+1) 96 716 6879
							</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <i class=" fa-2x fas fa-clock"></i>
                    </div>


                    <div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

                        <span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>Every Day
							</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>



@endsection

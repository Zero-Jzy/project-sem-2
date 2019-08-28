@extends('layouts.master')

@section('content')

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-w/17/cb/0d/9d/photo1jpg.jpg'); background-position: center">
    <h2 class="tit6 t-center">
        About Us
    </h2>
</section>


<!-- Our Story -->
<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Italian Restaurant
		</span>

    <h3 class="tit3 t-center m-b-35 m-t-5">
        Our Story
    </h3>

    <p class="t-center size32 m-l-r-auto">
        Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.
    </p>
</section>


<!-- Video -->
<section class="" style="background-image: url(https://znews-photo.zadn.vn/w660/Uploaded/rotntt/2015_10_19/hemquan20.jpg);">
    <div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>



{{--        <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">--}}
{{--            <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">--}}
{{--                <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>


<!-- Delicious & Romantic-->
<section class="bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <!-- Delicious -->
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							Delicious
						</span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        RECIPES
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                    </p>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="http://www.yeutretho.vn/files/2016/08/18/thuc-don-sieu-tiet-kiem-25-nghin-dongbua-cua-vo-chong-tre-gay-bao-mang-1.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>


        <!-- Romantic -->
        <div class="row p-t-170">
            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="https://hoamaifood.com/wp-content/uploads/2019/06/thuc_don_hap_dan_giup_ban_ngon_hon.png" alt="IMG-OUR">
                </div>
            </div>

            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Romantic
						</span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        Restaurant
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Banner -->
<div class="parallax0 parallax100" style="background-image: url(http://suatantuanh.com.vn/upload/files/baiviet/suat_an_5_1%5B1%5D.jpg);">
    <div class="overlay0-parallax t-center size33"></div>
</div>


<!-- Chef -->
<section class="section-chef bgwhite p-t-115 p-b-95">
    <div class="container t-center">
			<span class="tit2 t-center">
				Meet Our
			</span>

        <h3 class="tit5 t-center m-b-50 m-t-5">
            Chef
        </h3>

        <div class="row">
            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="https://nguoidothi.net.vn/Image/Y-2017-04/jack-lee1.jpg" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Peter Hart
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

                        <p class="t-center">
                            Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60 ">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="https://sthc.edu.vn/wp-content/uploads/2017/05/lop-bep-viet-nam.jpg" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Joyce Bowman
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

                        <p class="t-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                <!-- -Block5 -->
                <div class="blo5 pos-relative p-t-60">
                    <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                        <a href="#"><img src="https://icdn.dantri.com.vn/thumb_w/640/a96ec05089/2017/11/08/img20171108213857802-67793.jpg" alt="IGM-AVATAR"></a>
                    </div>

                    <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                        <a href="#" class="txt34 dis-block p-b-6">
                            Peter Hart
                        </a>

                        <span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

                        <p class="t-center">
                            Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Sign up -->
<div class="section-signup bg1-pattern p-t-85 p-b-85">
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
            <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Sign-up
        </button>
    </form>
</div>

<!-- Footer -->



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0">

            </div>
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



@endsection

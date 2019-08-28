@extends('layouts.master')

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
                <li>
                    <a class="active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                       aria-controls="pills-home" aria-selected="true">Dishs</a>
                </li>
                <li>
                    <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                       aria-controls="pills-profile" aria-selected="false">Sets</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="list-dish">
{{--                    <div class="dish-item">--}}
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
                    <div class="dish-item">
                        <div class="img-box">
                            <img width="70px"
                                 src="https://i.pinimg.com/564x/c2/ff/3d/c2ff3d07a7abb23bc24c9f723d0cab75.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="left-content">
                                <h6>Name</h6>
                                <p>price</p>
                            </div>
                            <div class="right-content">
                                <h6>calo</h6>
                                <p>dam</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                aaaaaaaaaaaaa
            </div>
        </div>
    </aside>
@endsection

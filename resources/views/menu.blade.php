@extends('layouts.master')

@section('content')
    <aside style="overflow: inherit" class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        {{--        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>--}}
        <button id="btn-control-sidebar" class="btn-show-sidebar m-l-33 trans-0-4" style="
        position: absolute;
        left: -80px;
        top: 15%;
        width: 50px;
        height: 50px;
        background: white;
        border: 1px solid black;
">
            <i class="fal fa-shopping-bag"></i>
        </button>

        <!-- - -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">sadsadsad</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">aaaaaaaaaaaaa</div>
        </div>
    </aside>
@endsection

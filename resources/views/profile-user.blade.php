@extends('layouts.master' , ['title' => 'Profile'])
@section('content')
    <style>

        * {
            box-sizing: border-box;
        }

        /*.content-right {*/
        /*    font-family: Sriracha, sans-serif !important;*/
        /*}*/
        .wrap {

            min-height: 500px;
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .container-full {
            width: 1270px;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
        }

        .menu-left {
            /*width: 250px;*/
            padding-right: 0;
            padding-left: 0;
            /*float: left;*/
            /*margin-right: 10px;*/
            padding-bottom: 20px;
        }

        .wrap .profiles {
            background: 0 0;
            color: #fff;
            padding: 10px 5px 5px;
        }

        .wrap .profiles .image {
            width: 45px;
            height: 45px;
            overflow: hidden;
            float: left;
            margin-right: 10px;
            margin-bottom: 0;
        }

        .wrap .profiles .name {
            font-size: 13px;
            margin-bottom: 5px;
            color: #242424;
            margin-top: 5px;
            font-weight: 300;
        }

        .wrap .profiles h6 {
            margin: 0;
            font-family: Roboto;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            color: #242424;
        }

        .content-right {
            /*width: 975px;*/
            /*float: left;*/
            margin-top: 5px;
            position: relative;
            padding: 20px;
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
            border-radius: 10px;
        }

        .wrap h1.have-margin {
            margin-bottom: 15px;
            font-size: 19px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            color: #242424;
        }

        .wrap .account-profile .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .wrap .account-profile .form-group .control-label {
            float: left;
            width: 20%;
            font-size: 13px;
            margin-bottom: 0;
        }

        .wrap .account-profile .form-group .input-wrap {
            float: left;
            width: 405px;
        }

        ul.nav.nav-tabs {
            padding-top: 30px;
            flex-direction: column;
            border: none;
        }

        ul.nav.nav-tabs > li {
            padding-top: 0 !important;
        }

        ul.nav.nav-tabs > li a.nav-link {
            border: none;
        }

        ul.nav.nav-tabs > li a.active {
            border: none;
            color: #ec1d25;
        }

        ul.nav.nav-tabs > li a:hover {
            border: none;
            color: #ec1d25;
        }

        .address-box {
            display: flex;
            /* border: 1px solid black; */
            /*justify-content: space-between;*/
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.35);
        }

        .address-box input[type="radio"] {
            margin: 0 15px;
            position: relative;
            top: 50%;
            transform: translateY(-50%)
            /* font-size: 24px; */
        }

        .address-box h5 {
            font-weight: 550;
        }

        .address-box p {
            margin-bottom: 5px;
        }

        .box-form-address {
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.35);
            display: none;
            padding: 30px 20px;
            border-radius: 5px;
            position: relative;
        }

        .box-form-address .btn-close {
            position: absolute;
            right: 1%;
            top: 1%;
            font-size: 24px;
        }
    </style>
    <section class="container" style="padding-top: 120px;">
        <div class="wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="menu-left col-md-3 container mt-3">
                        <div class="profiles">
                            <p class="image">
                                <img src="{{$user->profile->avatar}}" height="45" width="45"
                                     alt="">
                            </p>
                            <p class="name">Tài khoản của</p>
                            <h6>{{$user->profile->first_name .' '. $user->profile->last_name}}</h6>
                        </div>
                        <div class="">
                            {{--                            <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Danh mục--}}
                            {{--                                <span class="caret"></span>--}}
                            {{--                            </button>--}}
                            <ul class="nav nav-tabs" style="width: 100%;">
                                <li style="padding-top: 30px" class="">
                                    <a class="nav-link active" data-toggle="tab" href="#content"
                                       style="display: flex;align-items: center;"><i class="fas fa-user"
                                                                                     style="flex: 0 0 20%;text-align: center;padding-right: 26px;"></i>Thông
                                        tin tài khoản</a>
                                </li>
                                <li style="padding-top: 30px" class="">
                                    <a class="nav-link" data-toggle="tab" href="#content1"
                                       style="display: flex;align-items: center;"><i class="fas fa-map-marker-alt"
                                                                                     style="flex: 0 0 20%;text-align: center;padding-right: 26px;"></i>Sổđịa
                                        chỉ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--                    Thông tin tài khoản--}}
                    <div class="col-md-9 tab-content" style="padding-bottom: 10px;">
                        <div id="content" class="content-right container tab-pane active">
                            <div class="have-margin">
                                <h1 class="have-margin" style="font-size: 30px">Thông tin tài khoản</h1>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$user->profile->first_name .' '. $user->profile->last_name}}" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Điện thoại</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control"  name="phone" placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" value="vuhonghoaianh1609@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tuổi</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row" id="register_name">
                                    <label class="control-label col-sm-2 col-form-label" for="pasword">Giới tính</label>
                                    <div class="col-sm-10">
                                        <div class="input-wrap">
                                            <div class="row" style="margin: 0">
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input type="radio" name="gender" id="gender_male"
                                                               class="gender">
                                                        <span>
                                                 <i class="ico"></i>
                                            </span> Nam</label>

                                                </div>
                                                <div class="col-xs-4" style="margin-left: 60px">
                                                    <label>

                                                        <input type="radio" name="gender"  id="gender_female"
                                                               class="gender">
                                                        <span>
                                                 <i class="ico"></i>
                                            </span>
                                                        Nữ
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning mb-2" style="margin-left: 165px">Cập nhật
                                </button>
                            </form>
                        </div>

                        {{--                        Sổ địa chỉ--}}
                        <div id="content1" class="content-right container tab-pane">
                            <div class="have-margin">
                                <h1 class="have-margin" style="font-size: 30px">Sổ địa chỉ</h1>
                            </div>
                            <div class="list-address">
                                @foreach($user->addresses as $address)
                                    <div class="address-box my-2">
                                        <div>
                                            <input name="addressActive" type="radio" >
                                        </div>
                                        <div>
                                            <h5>{{$address->name}}</h5>
                                            <address>Address: {{$address->addressTxt}}
                                            </address>
                                            <p>Phone: {{$address->phone}}</p>
                                        </div>

                                        <button class="btn btn-link">
                                            delete
                                        </button>
                                    </div>
                                @endforeach

                            </div>
                            <div class="add-new-address" style="text-align: center">

                                <button id="btn-add-address">
                                    <i class="far fa-plus fa-2x"></i>
                                </button>
                            </div>
                            <div class="box-form-address">
                                <h3 class="text-center mb-4">Add address</h3>
                                <button class="btn btn-close">
                                    <i class="fal fa-minus"></i>
                                </button>
                                <form id="form-add-address" action="{{route('profile.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Họ tên</label>
                                        <div class="col-sm-10">
                                            <input name="name" type="text" class="form-control" id="name" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Điện thoại</label>
                                        <div class="col-sm-10">
                                            <input name="phone" type="number" class="form-control" value="0869699109">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tỉnh</label>
                                        {{--                                    <label for="sel1">Thành phố:</label>--}}
                                        <div class="col-md-10">
                                            <select name="tinh" class="form-control" id="tinh">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quận huyện</label>
                                        {{--                                    <label for="sel1">Thành phố:</label>--}}
                                        <div class="col-md-10">
                                            <select name="huyen" class="form-control" id="huyen">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phường xã</label>
                                        {{--                                    <label for="sel1">Thành phố:</label>--}}
                                        <div class="col-md-10">
                                            <select name="xa" class="form-control" id="xa">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row  has-feedback">
                                        <label for="address"
                                               class="col-lg-2 col-md-2 control-label visible-md-block visible-lg-block">Địa
                                            chỉ:</label>
                                        <div class="col-lg-10 col-md-10">
                                        <textarea class="form-control" name="address" cols="30" rows="10"
                                                  placeholder="Nhập địa chỉ"></textarea>
                                            <i class="form-control-feedback" style="display: none;"></i>
                                        </div>
                                    </div>
                                    <input type="hidden" name="profile_id" value="{{$user->profile->id}}">
                                    <button type="submit" class="btn btn-warning mb-2" style="margin-left: 165px">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        const tinh = document.getElementById('tinh');
        const huyen = document.getElementById('huyen');
        const xa = document.getElementById('xa');
        var data = [];

        $.ajax({
            url: '/api/hanh-chinh-viet-nam',
            method: 'get',
            success: res => {
                data = JSON.parse(res);
            },
            error: err => {
                alert('Có lỗi xảy ra!')
            },
            async: false
        });

        renderOption(tinh, data, 'Tỉnh/Thành Phố');

        var huyenData;
        tinh.onchange = function (e) {
            let currentValue = e.target.value.split('-')[0];
            huyenData = data.filter(item => item.value === currentValue)[0].children;
            renderOption(huyen, huyenData, 'Quận/Huyện');
            huyen.disabled = false;
            xa.innerHTML = '<option value="">Chọn Xã/Phường</option>';
            xa.disabled = true;
            huyen.click()
        };

        huyen.onchange = function (e) {
            let currentValue = e.target.value.split('--')[0];
            var xaData = huyenData.filter(item => item.value === currentValue)[0].children;
            renderOption(xa, xaData, 'Xã/Phường');
            xa.disabled = false;
        };

        function renderOption(select, data, type) {
            var htmlTxt = data.map(e => `<option value="${e.value}--${e.label}">${e.label}</option>`).join('');
            select.innerHTML = `<option value="">Chọn ${type}</option>` + htmlTxt
        }

        $('#btn-add-address').click(function () {
            $('.box-form-address').show();
            $(this).hide();
        });

        $('.btn-close').click(function () {
            $('#btn-add-address').show();
            $('.box-form-address').hide();
        })
    </script>
@endsection

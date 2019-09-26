@extends('layouts.master' , ['title' => 'Profile'])
@section('content')
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
                            <p class="name">Account </p>
                            <h6>{{$user->profile->first_name .' '. $user->profile->last_name}}</h6>
                        </div>
                        <div class="">
                            {{--                            <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Danh mục--}}
                            {{--                                <span class="caret"></span>--}}
                            {{--                            </button>--}}
                            <ul style="width: 100%;">
                                <li style="padding-top: 30px" class="">
                                    <a class="nav-link active" href="/profile"
                                       style="display: flex;align-items: center;"><i class="fas fa-user"
                                                                                     style="flex: 0 0 20%;text-align: center;padding-right: 26px;"></i>Account</a>
                                </li>
                                <li style="padding-top: 30px" class="">
                                    <a class="nav-link" href="/profile/address"
                                       style="display: flex;align-items: center;"><i class="fas fa-map-marker-alt"
                                                                                     style="flex: 0 0 20%;text-align: center;padding-right: 26px;"></i>Address</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--                    Thông tin tài khoản--}}
                    <div class="col-md-9" style="padding-bottom: 10px;">
                        <div id="content" class="content-right container tab-pane active">
                            <div class="have-margin">
                                <h1 class="have-margin" style="font-size: 30px">Information</h1>
                            </div>
                            <form action="{{route('profile.update', $user->profile->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="first_name"
                                               value="{{$user->profile->first_name}}"
                                               placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="last_name"
                                               value="{{ $user->profile->last_name}}"
                                               placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone number</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="{{$user->profile->phone}}" class="form-control" name="phone"
                                               placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" readonly class="form-control"
                                               value="{{$user->profile->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">D.O.B</label>
                                    <div class="col-sm-10">
                                        <input type="date" value="{{$user->profile->dob}}" name="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row" id="register_name">
                                    <label class="control-label col-sm-2 col-form-label"
                                           for="password">Gender</label>
                                    <div class="col-sm-10">
                                        <div class="input-wrap">
                                            <div class="row" style="margin: 0">
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input type="radio"  value="{{$user->profile->gender}}" name="gender" id="gender_male"
                                                               class="gender">
                                                        <span>
                                                 <i class="ico"></i>
                                            </span> Male</label>

                                                </div>
                                                <div class="col-xs-4" style="margin-left: 60px">
                                                    <label>

                                                        <input type="radio" value="{{$user->profile->gender}}" name="gender"  id="gender_female"
                                                               class="gender">
                                                        <span>
                                                 <i class="ico"></i>
                                            </span>
                                                        Female
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning mb-2" style="margin-left: 165px">Update
                                </button>
                            </form>
                        </div>

                        {{--                        Sổ địa chỉ--}}
                        {{--                        <div id="content1" class="content-right container tab-pane">--}}
                        {{--                            <div class="have-margin">--}}
                        {{--                                <h1 class="have-margin" style="font-size: 30px">Address</h1>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="list-address">--}}
                        {{--                                @foreach($user->addresses as $address)--}}
                        {{--                                    <div class="address-box my-2">--}}
                        {{--                                        <div>--}}
                        {{--                                            <input name="addressActive" type="radio" >--}}
                        {{--                                        </div>--}}
                        {{--                                        <div>--}}
                        {{--                                            <h5>{{$address->name}}</h5>--}}
                        {{--                                            <address>Address: {{$address->addressTxt}}--}}
                        {{--                                            </address>--}}
                        {{--                                            <p>Phone: {{$address->phone}}</p>--}}
                        {{--                                        </div>--}}

                        {{--                                        <button class="btn btn-link">--}}
                        {{--                                            delete--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                @endforeach--}}

                        {{--                            </div>--}}
                        {{--                            <div class="add-new-address" style="text-align: center">--}}

                        {{--                                <button id="btn-add-address">--}}
                        {{--                                    <i class="far fa-plus fa-2x"></i>--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="box-form-address">--}}
                        {{--                                <h3 class="text-center mb-4">Add address</h3>--}}
                        {{--                                <button class="btn btn-close">--}}
                        {{--                                    <i class="fal fa-minus"></i>--}}
                        {{--                                </button>--}}
                        {{--                                <form id="form-add-address" action="{{route('profile.store')}}" method="POST">--}}
                        {{--                                    @csrf--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label for="name" class="col-sm-2 col-form-label">Full name</label>--}}
                        {{--                                        <div class="col-sm-10">--}}
                        {{--                                            <input name="name" type="text" class="form-control" id="name" >--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label class="col-sm-2 col-form-label">Phone number</label>--}}
                        {{--                                        <div class="col-sm-10">--}}
                        {{--                                            <input name="phone" type="number" class="form-control" value="0869699109">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label for="email" class="col-sm-2 col-form-label">Email</label>--}}
                        {{--                                        <div class="col-sm-10">--}}
                        {{--                                            <input name="email" type="email" class="form-control" id="email">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label class="col-sm-2 col-form-label">Province</label>--}}
                        {{--                                        --}}{{--                                    <label for="sel1">Thành phố:</label>--}}
                        {{--                                        <div class="col-md-10">--}}
                        {{--                                            <select name="tinh" class="form-control" id="tinh">--}}

                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label class="col-sm-2 col-form-label">Districts</label>--}}
                        {{--                                        --}}{{--                                    <label for="sel1">Thành phố:</label>--}}
                        {{--                                        <div class="col-md-10">--}}
                        {{--                                            <select name="huyen" class="form-control" id="huyen">--}}

                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label class="col-sm-2 col-form-label">Wards</label>--}}
                        {{--                                        --}}{{--                                    <label for="sel1">Thành phố:</label>--}}
                        {{--                                        <div class="col-md-10">--}}
                        {{--                                            <select name="xa" class="form-control" id="xa">--}}

                        {{--                                            </select>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group row  has-feedback">--}}
                        {{--                                        <label for="address"--}}
                        {{--                                               class="col-lg-2 col-md-2 control-label visible-md-block visible-lg-block">Address:</label>--}}
                        {{--                                        <div class="col-lg-10 col-md-10">--}}
                        {{--                                        <textarea class="form-control" name="address" cols="30" rows="10"--}}
                        {{--                                                  placeholder="Nhập địa chỉ"></textarea>--}}
                        {{--                                            <i class="form-control-feedback" style="display: none;"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <input type="hidden" name="profile_id" value="{{$user->profile->id}}">--}}
                        {{--                                    <button type="submit" class="btn btn-warning mb-2" style="margin-left: 165px">Add</button>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button trigger modal -->

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

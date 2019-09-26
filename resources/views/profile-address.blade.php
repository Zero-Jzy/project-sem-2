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
                            <p class="name">Account</p>
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
                        {{--
                                                {{--                        Sổ địa chỉ--}}
                        <div id="content1" class="content-right container tab-pane">
                            <div class="have-margin">
                                <h1 class="have-margin" style="font-size: 30px">Address</h1>
                            </div>
                            <div class="list-address">
                                @foreach($user->addresses as $address)
                                    @if($address->status === 0) @continue @endif
                                    <div class="position-relative">
                                        <div class="address-box my-2">
                                            <div>
                                                <input name="addressActive" type="radio">
                                            </div>
                                            <div>
                                                <h5>{{$address->name}}</h5>
                                                <address>Address: {{$address->addressTxt}}
                                                </address>
                                                <p>Phone: {{$address->phone}}</p>
                                            </div>
                                        </div>

                                        <form method="POST" action="{{route('profile.destroy', $address->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-group">
                                                <button class="btn btn-link"
                                                        style="position: absolute; top: 50%;right: 2%;transform: translateY(-50%)"
                                                >
                                                    delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                @endforeach

                            </div>
                            <div class="add-new-address" style="text-align: center">

                                <button onclick="openModalAddress()" id="btn-add-address">
                                    <i class="far fa-plus fa-2x"></i>
                                </button>
                            </div>
                            <div class="box-form-address">
                                <h3 class="text-center mb-4">Add address</h3>
                                <button class="btn btn-close">
                                    <i class="fal fa-minus"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

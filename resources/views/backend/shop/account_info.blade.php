@extends('backend.layouts.master')
@section('content')
    @include('backend.shop.sidebar')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Thông tin tài khoản</li>
            </ol>
        </div>
        <form action="{{route('shop.account.post')}}" method="post">
            @csrf
            @method('put')
            <div class="row" style="margin-top: 15px;">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body" style="height: 500px;">
                        <div class="menu-setting mt-5">
                            <div class="menu-setting-img ml-2">
                                <img src="asset/images/a1.jpg" width="70" height="70">
                                <div class="menu-setting-img-content" style="margin-bottom:50px">
                                    <h4>{{$shop->name_shop}}</h4>
                                    <span>{{$shop->code}}</span>
                                </div>
                            </div>
                            <div class="menu-setting-content mt-5">
                                <div class="row" style="margin: 0">
                                    <div class="col-md-1"></div>
                                    <form action="{{route('shop.update',['id'=>$shop->id])}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-8">
                                            <div class="row mt-3">
                                                <div class="col-md-3" style="margin-top: 10px;">
                                                    <label for="usr">Tên Shop:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name_shop" id="usr"
                                                               value="{{old('name_shop') ?? $shop->name_shop}}">
                                                        {!! ShowError($errors,'name_shop') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3" style="margin-top: 10px;">
                                                    <label for="usr">Họ tên:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" id="usr"
                                                               value="{{old('name') ?? $shop->name}}">
                                                        @if ($errors->has('name'))
                                                            <div class="text text-danger">
                                                                {{ $errors->first('name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3" style="margin-top: 10px;">
                                                    <label for="usr">Số điện thoại:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="phone" id="usr"
                                                               value="{{old('phone') ?? $shop->phone}}">
                                                        @if ($errors->has('phone'))
                                                            <div class="text text-danger">
                                                                {{ $errors->first('phone') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3" style="margin-top: 10px;">
                                                    <label for="usr">Email:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="email" id="usr"
                                                               value="{{old('email') ?? $shop->email}}">
                                                        @if ($errors->has('email'))
                                                            <div class="text text-danger">
                                                                {{ $errors->first('email') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3" style="margin-top: 10px;">
                                                    <label for="usr">Địa chỉ:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="usr" name="address"
                                                               value="{{old('address') ?? $shop->address}}">
                                                        @if ($errors->has('address'))
                                                            <div class="text text-danger">
                                                                {{ $errors->first('address') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <button style="float: right" class="btn btn-primary" type="submit">
                                                Cập Nhật
                                            </button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </form>
    </div>

    <!--end main-->
@endsection

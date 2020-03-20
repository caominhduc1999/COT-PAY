@extends('frontend.layouts.master')
@section('title')
    Tạo tài khoản người dùng
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="content-info col-md-6">
                <h1 style="text-align:center">Tạo tài khoản User</h1>
                <form action="{{route('register.user.post')}}" method="post">
                    @csrf

                    <input class="form-control" type="text" name="name" placeholder="Họ tên" value="{{old('name')}}">
                    {!! showError($errors,'name') !!}
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                    {!! showError($errors,'email') !!}
                    <input class="form-control" type="text" name="phone" placeholder="Số điện thoại"
                           value="{{old('phone')}}">
                    {!! showError($errors,'phone') !!}
                    <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                    {!! showError($errors,'password') !!}
                    <input class="form-control" type="password" name="passwordConfirmation"
                           placeholder="Xác nhận mật khẩu">
                    {!! showError($errors,'passwordConfirmation') !!}
                    <input class="form-control" type="text" name="address" placeholder="Địa chỉ"
                           value="{{old('address')}}">
                    {!! showError($errors,'address') !!}
                    <select class="form-control js-location" data-type="city" name="city">
                        <option value="">Chọn Tỉnh/Thành phố</option>
                        @foreach($cities as $city)
                            <option value="{{$city->code}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-control js-location" name="district" id="district" data-type="district">
                        <option value="">Chọn Quận/Huyện</option>
                    </select>

                    <select class="form-control " id="wards" name="ward" data-type="wards">
                        <option value="">Chọn Xã/Phường</option>
                    </select>

                    <label class="container">Tôi đồng ý với tất cả điều khoản và điều kiện
                        <input type="checkbox" name="agree" @if(old('agree')) checked @endif>
                        <span class="checkmark"></span>

                    </label>
                    {!! showError($errors,'agree') !!}
                    <div class="agree-create-account">
                        <a title>
                            <button style="background: none; border: none; color: #ffffff" type="submit">Đồng ý và tạo
                                tài khoản
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


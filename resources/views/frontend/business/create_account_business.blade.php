@extends('frontend.layouts.master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="content-info col-md-6">
                <h1 style="text-align:center">Tạo tài khoản Business</h1>
                <form action="" method="post">
                    @csrf
                    <input class="form-control" type="text" name="name_company" placeholder="Tên doanh nghiệp" value="{{old('name_company')}}">
                        {!! ShowError($errors,'name_company') !!}
                    <input class="form-control" type="text" name="name_represent" placeholder="Họ tên người đại diện" value="{{old('name_represent')}}">
                        {!! ShowError($errors,'name_represent') !!}
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                        {!! ShowError($errors,'email') !!}
                    <input class="form-control" type="text" name="tax_code" placeholder="Mã số thuế" value="{{old('tax_code')}}">
                        {!! ShowError($errors,'tax_code') !!}
                    <input class="form-control" type="text" name="phone" placeholder="Số điện thoại" value="{{old('phone')}}">
                        {!! ShowError($errors,'phone') !!}
                    <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                        {!! ShowError($errors,'password') !!}
                    <input class="form-control" type="password" name="passwordConfirmation" placeholder="Xác nhận mật khẩu">
                        {!! ShowError($errors,'passwordConfirmation') !!}
                    <input class="form-control" type="text" name="address" placeholder="Địa chỉ doanh nghiệp" value="{{old('address')}}">
                        {!! ShowError($errors,'address') !!}
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
                    {!! ShowError($errors,'agree') !!}
                    <div class="agree-create-account">
                        <a title><button style="background: none; border: none; color: #ffffff" type="submit">Đồng ý và tạo tài khoản</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


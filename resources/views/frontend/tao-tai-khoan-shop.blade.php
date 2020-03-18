@extends('frontend.layouts.master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="content-info col-md-6">
                <h1 style="text-align:center">Tạo tài khoản và bắt đầu giao dịch, mua sắm, thanh toán</h1>
                <select class="form-control">
                    <option>Chọn loại ví điện tử để thanh toán</option>
                    <option>MOMO</option>
                    <option>ViettelPay</option>
                    <option>ZaloPay</option>
                    <option>AirPay</option>
                </select>
                <input class="form-control" type="text" name="" placeholder="Tên shop">
                <input class="form-control" type="text" name="" placeholder="Họ tên">
                <input class="form-control" type="email" name="" placeholder="Email">
                <input class="form-control" type="text" name="" placeholder="Số điện thoại">
                <input class="form-control" type="password" name="" placeholder="Mật khẩu">
                <input class="form-control" type="password" name="" placeholder="Xác nhận mật khẩu">
                <input class="form-control" type="text" name="" placeholder="Tỉnh / Thành phố">
                <select class="form-control">
                    <option>Tỉnh / Thành phố</option>
                    <option>Hà Nội</option>
                    <option>Hồ chí minh</option>
                    <option>Hải phòng</option>
                    <option>Đà nẵng</option>
                </select>
                <select class="form-control">
                    <option>Quận / Huyện</option>
                    <option>Long biên</option>
                    <option>Tây hồ</option>
                    <option>Hoàng mai</option>
                    <option>Hoàn kiếm</option>
                </select>

                <input class="form-control" type="text" name="" placeholder="Địa chỉ shop">


                <!-- <label class="container">Tự động đăng nhập chỉ bằng click
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label> -->
                <label class="container">Tôi đồng ý với tất cả điều khoản và điều kiện
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <div class="agree-create-account">
                    <a href="tao-tai-khoan-thanh-cong.html" title>Đồng ý và tạo tài khoản</a>
                </div>
            </div>
        </div>
    </div>
@endsection

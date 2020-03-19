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
                <form action="{{route('frontend.store.shop_account')}}" method="post">
                    @csrf
                    <input class="form-control" type="text" name="name_shop" placeholder="Tên shop" value="{{old('name_shop')}}">
                        {!! ShowError($errors,'name_shop') !!}
                    <input class="form-control" type="text" name="name" placeholder="Họ tên" value="{{old('name')}}">
                        {!! ShowError($errors,'name') !!}
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                        {!! ShowError($errors,'email') !!}
                    <input class="form-control" type="text" name="phone" placeholder="Số điện thoại" value="{{old('phone')}}">
                        {!! ShowError($errors,'phone') !!}
                    <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                        {!! ShowError($errors,'password') !!}
                    <input class="form-control" type="password" name="passwordConfirmation" placeholder="Xác nhận mật khẩu">
                        {!! ShowError($errors,'passwordConfirmation') !!}
                    <select class="form-control js-location" data-type="city" name="city">
                        <option>Chọn Tỉnh/Thành phố</option>
                        @foreach($cities as $city)
                            <option @if(old('city') == $city->code) selected @endif value="{{$city->code}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-control js-location" name="district" id="district" data-type="district">
                        <option>Chọn Quận/Huyện</option>
                    </select>

                    <select class="form-control " id="wards" name="ward" data-type="wards">
                        <option>Chọn Xã/Phường</option>
                    </select>

                    <input class="form-control" type="text" name="address" placeholder="Địa chỉ shop" value="{{old('address')}}">
                        {!! ShowError($errors,'address') !!}
                    <label class="container">Tôi đồng ý với tất cả điều khoản và điều kiện
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <div class="agree-create-account">
                        <a title><button style="background: none; border: none; color: #ffffff" type="submit">Đồng ý và tạo tài khoản</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".js-location").change(function (event) {
                event.preventDefault();
                let route = '{{route('ajax_get.location')}}';
                let $this = $(this);
                let type = $this.attr('data-type');
                let parentID = $this.val();
                $.ajax({
                    method: "GET",
                    url : route,
                    data: {
                        type: type,
                        parent: parentID
                    }
                })
                    .done(function (msg) {
                        if (msg.data)
                        {
                            let html = '';
                            let element = '';
                            if (type == 'city')
                            {
                                html = "<option>Chọn Quận/Huyện</option>";
                                element = '#district';
                            }else{
                                html = "<option>Chọn Xã/Phường</option>";
                                element = '#wards';
                            }

                            $.each(msg.data, function (index, value) {
                                html+= "<option value='"+value.code+"'>"+value.name+"</option>"
                            })

                            $(element).html('').append(html);
                        }
                    });
            })
        })
    </script>
@endsection

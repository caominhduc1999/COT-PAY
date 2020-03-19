@extends('frontend.layouts.master')
@section('title')
	Đăng nhập
@endsection
@section('content')
	<form action="{{route('frontend.post.login')}}" method="post" id="myForm">
		@csrf
		<div class="choose-wallet form-login" style="border: 1px solid #00000040;">
			<div class="title-complete background-login">
				<a href="#" title>
					<img class="img-logo" src="asset/images/cot1.png">
				</a>
			</div>
			<div class="content">
				<input class="form-control" type="text" name="phone" placeholder="Email hoặc số điện thoại..." style="width: 100%">
				<input class="form-control" type="password" name="password" placeholder="Mật khẩu..." style="width: 100%">
				<div class="forgot-password">
					<a href="#" title="">Quên mật khẩu?</a>
				</div>
			</div>
			@if(session('notify'))
				<div class="alert alert-danger" style="font-size: 14px">
					{{session('notify')}}
				</div>
			@endif
			<div class="connect" style="margin-top: 20px;">



				<a title><button style="color: #ffffff; background: none; border: none" type="submit">Đăng nhập</button></a>
			</div>
			<div class="no-account">
				<p>Chưa có tài khoản?<span><a href="#" title> Đăng ký</a></span></p>
			</div>
		</div>
	</form>

@endsection


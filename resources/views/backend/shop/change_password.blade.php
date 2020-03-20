@extends('backend.layouts.master')
@section('content')
	@include('backend.shop.sidebar')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Đổi mật khẩu</li>
			</ol>
		</div>

		@if(session('notify'))
			<div class="alert alert-success">
				{{session('notify')}}
			</div>
		@endif
		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body" style="height: 500px;">
						<form action="{{route('shop.change_password.post',['id'=>\Illuminate\Support\Facades\Auth::guard('shops')->user()->id])}}" method="post">
							@csrf
							@method('put')
							<div class="main-menu">
								<div class="form-group" style="margin-top:50px">
									<label for="password_old">Mật khẩu cũ:</label>
									<input type="password" class="form-control" id="password_old" placeholder="Enter password" name="password_old" value="{{old('password_old')}}">
									@if ($errors->has('password_old'))
										<div class="text text-danger">
											{{ $errors->first('password_old') }}
										</div>
									@endif
								</div>
								<div class="form-group">
									<label for="password">Mật khẩu mới:</label>
									<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
									@if ($errors->has('password'))
										<div class="text text-danger">
											{{ $errors->first('password') }}
										</div>
									@endif
								</div>
								<div class="form-group">
									<label for="passwordConfirmation">Nhập lại mật khẩu:</label>
									<input type="password" class="form-control" id="passwordConfirmation" placeholder="Comfirm password" name="passwordConfirmation">
									@if ($errors->has('passwordConfirmation'))
										<div class="text text-danger">
											{{ $errors->first('passwordConfirmation') }}
										</div>
									@endif
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
{{--end main--}}
@endsection

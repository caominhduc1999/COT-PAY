@extends('user.layouts.master')
@section('content')
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

		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body" style="height: 500px;">
						<div class="main-menu">
							<div class="form-group" style="margin-top:50px">
								<label for="email">Mật khẩu cũ:</label>
								<input type="password" class="form-control" id="email" placeholder="Enter password"
									name="email">
							</div>
							<div class="form-group">
								<label for="pwd">Mật khẩ mới:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password"
									name="pwd">
							</div>
							<div class="form-group">
								<label for="pwd">Nhập lại mật khẩu:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Comfirm password"
									name="pwd">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{{--end main--}}
@endsection

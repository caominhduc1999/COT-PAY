@extends('user.layouts.master')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Tổng quan</li>
			</ol>
		</div>

		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body" style="height: 500px;">
						<div class="main-menu">
							<div class="menu-label-span ml-3">
								<span>S12345678889</span>
								<span>Gia dung Tiger</span>
								<span>5%</span>
								<span><i class="fa fa-star"></i> 4.86</span>
								<span>Bonus: 1.250.000</span>
							</div>
							<div class="menu-setting mt-3">
								<ul style="    margin: 15px;">
									<li>Hướng dẫn khách hàng tạo đơn</li>
									<li>Hướng dẫn quản lý giao dịch </li>
									<li>Hướng dẫn Merchant cách thuyết phục người dùng sử dụng dịch vụ giao dịch qua COT </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--/.row-->
			</div>
		</div>
	</div>
		<!--end main-->

@endsection

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
				<li class="active">Nạp tiền</li>
			</ol>
		</div>
		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="main-menu choose-wallet">
							<div class="menu-label-span ml-3">
								<span>S12345678889</span>
								<span>Gia dung Tiger</span>
								<span>5%</span>
								<span><i class="fa fa-star"></i> 4.86</span>
								<span>Bonus: 1.250.000</span>
							</div>
							<div class="col-md-3 col-sm-3"></div>
							<div class="col-md-6 col-sm-6">
								<div class="deposits-withdrawals">
									<div class="title-text">
										<h1 style="color: white;margin: 10px 0px;">Số tiền cần nạp</h1>
									</div>
									<div class="amount-of-money">
										<p>5.200.000 đồng</p>
									</div>
								</div>
								<div class="title-text deposits ">
									<h1 style="color: white;margin: 10px 0px;">Hình thức chuyển tiền</h1>
								</div>
								<div class="option  deposits">
									<label class="container">
										<div class="box-option">
											<a href="#" title>
												<i class="fa fa-university" aria-hidden="true"></i>
											</a>
											<div class="text-content">
												<h2>Chuyển khoản ngân hàng</h2>
												<p>Thực hiện thủ công</p>
											</div>
											<div class="spacer"></div>
										</div>
										<input type="radio" checked="checked" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="container">
										<div class="box-option">
											<a href="#" title>
												<i class="fa fa-university" aria-hidden="true"></i>
											</a>
											<div class="text-content">
												<h2>Thanh toán online bằng thẻ ATM</h2>
												<p>Thanh toán nhanh bằng thẻ ATM</p>
											</div>
											<div class="spacer"></div>
										</div>
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="container">
										<div class="box-option">
											<a href="#" title>
												<i class="fa fa-university" aria-hidden="true"></i>
											</a>
											<div class="text-content">
												<h2>Thanh toán online qua Internet Banking</h2>
												<p>Đăng nhập tài khoản Internet Banking</p>
											</div>
											<div class="spacer"></div>
										</div>
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
								</div>
								<button type="button" class="btn btn-primary ">Gửi lại mã</button>
								<div class="connect deposits mt-4">
									<span>Nhập mã:</span>
									<input type="text" name="">
								</div>
								<div class="connect deposits">
									<a href="#" title class="submit" style="width: 100%;display: block;">Nạp tiền</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-3"></div>
						</div>

					</div>
				</div>
				<!--/.row-->
			</div>
		</div>
	</div>
	<!--end main-->

@endsection

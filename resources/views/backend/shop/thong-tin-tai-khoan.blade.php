@extends('backend.layouts.master')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Thông tin tài khoản</li>
			</ol>
		</div>

		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body" style="height: 500px;">
						<div class="menu-setting mt-5">
							<div class="menu-setting-img ml-2">
								<img src="asset/images/a1.jpg" width="70" height="70">
								<div class="menu-setting-img-content" style="margin-bottom:50px">
									<h4>Khánh123</h4>
									<span>khanh@gmail.com</span>
								</div>
							</div>
							<div class="menu-setting-content mt-5">
								<div class="row" style="margin: 0">
									<div class="col-md-1"></div>
									<div class="col-md-8">
										<div class="row mt-3">
											<div class="col-md-3" style="margin-top: 10px;">
												<label for="usr">Họ tên:</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<input type="text" class="form-control" id="usr">
												  </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3" style="margin-top: 10px;">
												<label for="usr">Số điện thoại:</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<input type="text" class="form-control" id="usr">
												  </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3" style="margin-top: 10px;">
												<label for="usr">Email:</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<input type="text" class="form-control" id="usr">
												  </div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-3" style="margin-top: 10px;">
												<label for="usr">Địa chỉ:</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<input type="text" class="form-control" id="usr">
												  </div>
											</div>
										</div>
										
										<div class="col-md-3"></div>
									</div>
								</div>
				
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

	<!--end main-->
@endsection

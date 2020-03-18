@extends('backend.layouts.master')
@section('content')

	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Tạo giao dịch bán</li>
			</ol>
		</div>
		<div class="row" style="margin-top: 15px;">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="main-menu">
							<div class="menu-label-span ml-3" style="margin-bottom: 15px;">
								<span>S12345678889</span>
								<span>Gia dung Tiger</span>
								<span>5%</span>
								<span><i class="fa fa-star"></i> 4.86</span>
								<span>Bonus: 1.250.000</span>
							</div>
							<div class="menu-setting mt-3">
								<div class="row row-up">
									<div class="col-md-6 mt-3">
										<div class="menu-setting-table" >  
											<span>123456789</span>
											<span><i class="fa fa-star"></i> 4.86</span>
											<div class="menu-setting-table-content">
												<div class="form-group" style="    margin-top: 10px;">
													<input class="form-control mt-3" type="text" name=""
														placeholder="Giá trị giao dịch">
												</div>
												<div class="form-group">
													<input class="form-control mt-3" type="text" name=""
														placeholder="Nội dung giao dịch">
												</div>
												<div class="form-group">
													<input class="form-control mt-3" type="text" name=""
														placeholder="Phí giao dịch COT">
												</div>
												<select class="form-control mt-3">
													<option>Momo</option>
													<option>Zalo pay</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6 mt-3">
										<div class="menu-setting-table" style="margin-bottom: 15px;">
											<select class="form-control mt-3" style="margin-bottom: 15px;">
												<option>Chọn đơn vị giao nhận</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
											<div class="menu-setting-table-content">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Khối lượng (kg)">
														</div>
														
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Phí ship (vnđ)">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Rộng (m)">
														</div>
													
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Cao (m)">
														</div>
													
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Dài (m)">
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Người giao">
														</div>
														
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="SĐT">
														</div>
														
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="add lấy hàng">
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Người nhận">
														</div>
														
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="SĐT">
														</div>
														
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="add giao hàng">
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Shop tt phí ship">
														</div>
														
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="form-group">
															<input class="form-control mt-3" type="text" name=""
															placeholder="Cus tt phí ship">
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<select class="form-control mt-3">
															<option>Giao thường</option>
															<option>Giao nhanh</option>
															<option>Hỏa tốc</option>
														</select>
													</div>
													<div class="col-md-6 col-sm-6">
														<select class="form-control mt-3">
															<option>Kiểm hàng</option>
															<option>Không kiểm hàng</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<textarea class="form-control mt-3" placeholder="Ghi chú" style="width: 100%;margin-bottom: 15px;"
										rows="5"></textarea>
								</div>

								<div class="menu-setting-btn mb-5 text-center">
									<button type="button" class="btn btn-primary mt-3">Đề nghị xác nhận giao
										dịch</button>
									<button type="button" class="btn btn-primary mt-3">Hủy giao dịch</button>
								</div>
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

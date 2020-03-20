@extends('backend.layouts.master')
@section('content')
	@include('backend.user.sidebar')
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
							<div class="menu-label-span ml-3">
								<span>S12345678889</span>
								<span>Gia dung Tiger</span>
								<span>5%</span>
								<span><i class="fa fa-star"></i> 4.86</span>
								<span>Bonus: 1.250.000</span>
							</div>
							<div class="menu-setting mt-3" style="font-variant: all-petite-caps;">
								<div class="table-content mt-4">
									<table class="mt-4">
										<tbody>
											<tr>
												<th>STT</th>
												<th>Mã GD</th>
												<th>Mã VĐ</th>
												<th>Tên shop</th>
												<th>Mã shop</th>
												<th>Logistic</th>
												<th>Mã KH</th>
												<th>GT đơn</th>
												<th>Phí ship</th>
												<th>Phí COT</th>
												<th>Bonus</th>
												<th>Tên hàng</th>
												<th>Ngày giao</th>
												<th>Ngày nhận</th>
												<th>Shipper</th>
												<th>QL C2</th>
												<th>QL C3</th>
												<th>CSKH C4</th>
												<th>Loại giao dịch</th>
												<th>Trạng thái</th>
											</tr>
											<tr>
												<th>1</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Mua</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>2</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>3</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Mua</th>
												<th><button class="dyc">Đang yêu cầu</button></th>
											</tr>
											<tr>
												<th>4</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>5</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Mua</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>6</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>7</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Mua</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>8</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>9</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Mua</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>10</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
											<tr>
												<th>11</th>
												<th>A1234567</th>
												<th>B1234567</th>
												<th>Gia dụng</th>
												<th>A1234567</th>
												<th>GHN</th>
												<th>A1234567</th>
												<th>111.111.111</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>22.300</th>
												<th>Nồi cơm</th>
												<th>21/02/2020</th>
												<th>22/02/2020</th>
												<th>Nguyen Van khanh</th>
												<th>HN (MB)</th>
												<th>Nguyen Van Khanh</th>
												<th>Nguyen Van Khanh</th>
												<th>Bán</th>
												<th><button class="xl">Xử lý</button></th>
											</tr>
										</tbody>
									</table>
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

<!DOCTYPE html>
<html>

<head>
	<title>Tạo giao dịch bán</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="asset/css/stylehd.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style-menu.css">

	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/style-update.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/font-awesome.min.css">
</head>

<body>
	<div id="mainnav">
		<ul>
			<li class="active"><a href="shop-login.html">Trang chủ</a></li>
			<li><a href="account_info.blade.php">Thông tin tài khoản</a></li>
			<li><a href="gd-ban.blade.php">Các đề nghị bán hàng</a></li>
			<!-- <span class="span-notification">3</span> -->
			<li><a href="gd-tao-ban.blade.php">Tạo giao dịch mua</a></li>
			<li><a href="gd-tao-ban.blade.php">Tạo giao dịch bán</a></li>
			<li><a href="gd-quan-ly.blade.php">Quản lý giao dịch</a></li>
			<li><a href="gd-nap-tien.blade.php">Nạp tiền ví Bonus</a></li>
			<li><a href="gd-rut-tien.blade.php">Rút tiền ví Bonus</a></li>
			<li><a href="change_password.blade.php">Đổi mật khẩu</a></li>
			<li><a href="cai-dat.blade.php">Cài đặt</a></li>
		</ul>
	</div>
	<div id="mainnav1">
		<h1>Ví liên kết</h1>
		<ul>
			<li>
				<a href="#">Momo</a>
				<label class="container-checkbox">
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
				</label>
			</li>
			<li>
				<a href="#">Zalo</a>
				<label class="container-checkbox">
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
				</label>
			</li>
			<li>
				<a href="#">Payo</a>
				<label class="container-checkbox">
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
				</label>
			</li>
			<li>
				<a href="#">Viettel Pay</a>
				<label class="container-checkbox">
					<input type="checkbox" checked="checked">
					<span class="checkmark"></span>
				</label>
			</li>
		</ul>
	</div>
	<div class="btn-mobile clearfix" style="width: 100%">
		<button style="margin-top: 20px;"><a class="openbtn" onclick="openNav()">☰</a></button>
		<div class="header-img-content">
			<a href="#">
				<img src="asset/images/cot1.png" width="120" height="90">
			</a>
		</div>
	</div>
	<div class="menu-mobile">
		<div id="mySidepanel" class="sidepanel">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<a href="user-login.html">Thông tin tài khoản</a>
			<a href="gd-ban.blade.php">Các đề nghị mua hàng</a>
			<a href="gd-mua.blade.php">Tạo giao dịch mua</a>
			<a href="gd-quan-ly.blade.php">Quản lý giao dịch</a>
			<a href="gd-nap-tien.blade.php">Nạp tiền ví Bonus</a>
			<a href="gd-rut-tien.blade.php">Rút tiền ví Bonus</a>
			<a href="change_password.blade.php">Đổi mật khẩu</a>
			<a href="cai-dat.blade.php">Cài đặt</a>
			<button class="dropdown-btn">Ví liên kết</button>
			<div class="dropdown-container">
				<a href="#">Momo</a>
				<a href="#">Zalo</a>
			</div>
		</div>
	</div>

	<div class="main-menu">
		<div class="menu-label-span ml-3">
			<span>S12345678889</span>
			<span>Gia dung Tiger</span>
			<span>5%</span>
			<span><i class="fa fa-star"></i> 4.86</span>
			<span>Bonus: 1.250.000</span>
		</div>
		<div class="menu-setting mt-3">
			<div class="row row-up">
				<div class="col-md-6 mt-3">
					<div class="menu-setting-table">
						<span>123456789</span>
						<span><i class="fa fa-star"></i> 4.86</span>
						<div class="menu-setting-table-content">
							<input class="form-control mt-3" type="text" name="" placeholder="Gía trị giao dịch">
							<input class="form-control mt-3" type="text" name="" placeholder="Nội dung giao dịch">
							<input class="form-control mt-3" type="text" name="" placeholder="Phí giao dịch COT">
							<select class="form-control mt-3">
								<option>Momo</option>
								<option>Zalo pay</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-3">
					<div class="menu-setting-table">
						<select class="form-control mt-3">
								<option>Chọn đơn vị giao nhận</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						<div class="menu-setting-table-content">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Khối lượng (kg)">
								</div>
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Phí ship (vnđ)">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<input class="form-control mt-3" type="text" name="" placeholder="Rộng (m)">
								</div>
								<div class="col-md-4 col-sm-4">
									<input class="form-control mt-3" type="text" name="" placeholder="Cao (m)">
								</div>
								<div class="col-md-4 col-sm-4">
									<input class="form-control mt-3" type="text" name="" placeholder="Dài (m)">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Người giao">
								</div>
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="SĐT">
								</div>
								<div class="col-md-12">
									<input class="form-control mt-3" type="text" name="" placeholder="add lấy hàng">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Người nhận">
								</div>
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="SĐT">
								</div>
								<div class="col-md-12">
									<input class="form-control mt-3" type="text" name="" placeholder="add giao hàng">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Shop tt phí ship">
								</div>
								<div class="col-md-6 col-sm-6">
									<input class="form-control mt-3" type="text" name="" placeholder="Cus tt phí ship">
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
				<textarea class="form-control mt-3" placeholder="Ghi chú" style="width: 100%" rows="5"></textarea>
			</div>
			
			<div class="menu-setting-btn mb-5 text-center">
				<button type="button" class="btn btn-primary mt-3">Đề nghị xác nhận giao dịch</button>
				<button type="button" class="btn btn-primary mt-3">Hủy giao dịch</button>
			</div>
		</div>
</body>
<script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.min.js"></script>

<!-- menu mobile -->
<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidepanel").style.width = "220px";
	}

	function closeNav() {
		document.getElementById("mySidepanel").style.width = "0";
	}
	// menu2
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function () {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
			} else {
				dropdownContent.style.display = "block";
			}
		});
	}
</script>

</html>

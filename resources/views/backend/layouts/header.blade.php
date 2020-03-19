<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: #072e53;">
    <div class="container-fluid">
        <div class="navbar-header">

            <div class="btn-mobile clearfix" style="width: 100%">
                <button style="margin-top: 25px;"><a class="openbtn" onclick="openNav()">☰</a></button>
                <div class="header-img-content">
                    <a href="#">
                        <img src="img/LOGON1.png" width="120" height="90">
                    </a>
                </div>
            </div>
            <div class="menu-mobile">
                <div id="mySidepanel" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <a href="login-shop.blade.php">Trang chủ</a>
                    <a href="thong-tin-tai-khoan.blade.php">Thông tin tài khoản</a>
                    <a href="gd-ban.blade.php">Các đề nghị bán hàng</a>
                    <a href="gd-tao-ban.blade.php">Tạo giao dịch mua</a>
                    <a href="gd-quan-ly.blade.php">Quản lý giao dịch</a>
                    <a href="gd-nap-tien.blade.php">Nạp tiền ví Bonus</a>
                    <a href="gd-rut-tien.blade.php">Rút tiền ví Bonus</a>
                    <a href="doi-mat-khau.blade.php">Đổi mật khẩu</a>
                    <a href="cai-dat.blade.php">Cài đặt</a>
                    <button class="dropdown-btn">Ví liên kết</button>
                    <div class="dropdown-container">
                        <a href="#">Momo</a>
                        <a href="#">Zalo</a>
                    </div>
                    <button class="dropdown-btn"><img src="asset/images/vie.png" width="30" height="20"> Vi</button>
                    <div class="dropdown-container">
                        <a href="#"><img src="asset/images/vie.png" width="30" height="20"> Vi</a>
                        <a href="#"><img src="asset/images/us.png" width="30" height="20"> En</a>
                    </div>
                </div>
            </div>

            <div class="navbar-brand"
                 style="width: 140px;height: 55px;padding-left: 10px; float: left;position: relative;">
                <div style="width: 75px;height: auto;  margin: 0 auto;position: absolute;top:0px;left: 20px;">
                    <img class="img-logo" src="img/LOGON1.png" alt="" style="width: 100%;height: auto;">
                </div>

            </div>

            <!-- <span style="height:50px"><img src="img/LOGON1.png" alt="" style="width:100px"></span> -->

            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg> admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="@if(\Illuminate\Support\Facades\Auth::check()){{\Illuminate\Support\Facades\Auth::user()->id}}@endif"><svg class="glyph stroked male-user">
                                    <use xlink:href="#stroked-male-user"></use>
                                </svg>Thông tin tài khoản</a></li>
                        <li><a href="logout"><svg class="glyph stroked cancel">
                                    <use xlink:href="#stroked-cancel"></use>
                                </svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

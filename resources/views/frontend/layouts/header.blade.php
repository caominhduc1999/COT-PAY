<section class="page-top header">
    <div class="container">
        <div class="header-img clearfix">
            <div class="btn-mobile mt-4">
                <button><a class="openbtn" onclick="openNav()">☰</a></button>
            </div>
            <div class="header-img-content">
                <a href="">
                    <img src="asset/images/cot2.png" width="120" height="90">
                </a>
            </div>
            <div class="header-img-btn">
                <a href="dang-nhap" class="btn-a"><i class="fa fa-user-circle"></i> Login</a>
                <a href="register" class="btn-a"><i class="fa fa-user-plus"></i> Register</a>
                <div class="dropdown">
                    <button class="dropbtn">
                        <img src="asset/images/vie.png" width="30" height="20"> Vi
                    </button>
                    <div class="dropdown-content">
                        <a href="#"><img src="asset/images/vie.png" width="30" height="20"> Vi</a>
                        <a href="#"><img src="asset/images/us.png" width="30" height="20"> En</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="{{ route('login.shop.get') }}">Merchant</a></li>
                <li><a href="{{ route('login.user.get') }}">Customer</a></li>
                <li><a href="{{ route('login.business.get') }}">Business</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
        <div class="menu-mobile">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="">Home</a>
                <a href="{{ route('login.shop.get') }}">Merchant</a>
                <a href="{{ route('login.user.get') }}">Customer</a>
                <a href="{{ route('login.business.get') }}">Business</a>
                <a href="about">About</a>
                <a href="contact">Contact</a>
                <a href="#"><i class="fa fa-user-circle"></i> Login</a>
                <a href="#"><i class="fa fa-user-plus"></i> Sign out</a>
                <button class="dropdown-btn"><img src="asset/images/vie.png" width="30" height="20"> Vi</button>
                <div class="dropdown-container">
                    <a href="#"><img src="asset/images/vie.png" width="30" height="20"> Vi</a>
                    <a href="#"><img src="asset/images/us.png" width="30" height="20"> En</a>
                </div>
            </div>
        </div>
    </div>
</section>

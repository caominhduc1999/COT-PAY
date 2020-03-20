<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
    <ul class="nav menu">
        <li class="active"><a href="login-shop"><svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg> Tổng quan</a></li>
        <li><a href="{{route('shop.account.get',['id'=>\Illuminate\Support\Facades\Auth::guard('shops')->user()->id])}}"><svg class="glyph stroked clipboard with paper">
        <use xlink:href="#stroked-clipboard-with-paper" /></svg> Thông tin tài khoản</a></li>
        <li><a href="cac-giao-dich-cua-ban"><svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg> Các đề nghị bán hàng</a></li>
        <li><a href="gd-ban"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Tạo giao dịch bán</a></li>
        <li><a href="gd-mua"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Tạo giao dịch mua</a></li>
        <li><a href="gd-quan-ly"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Quản lý giao dịch</a></li>
        <li><a href="gd-nap-tien"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Nạp tiền ví Bonus</a></li>
        <li><a href="gd-rut-tien"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Rút tiền ví Bonus</a></li>
        <li><a href="{{route('shop.change_password.get')}}"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Đổi mật khẩu</a></li>
        <li><a href="cai-dat"><svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad" /></svg> Cài đặt</a></li>
        <li role="presentation" class="divider"></li>

        <li><a href="login-shop"><svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                </svg> Ví liên kết</a></li>
        <li>
            <div class="checkbox" style="padding:0 30px;">
                <label><input type="checkbox" value="">Momo</label>
            </div>
            <div class="checkbox" style="padding:0 30px;">
                <label><input type="checkbox" value="">ViettalPay</label>
            </div>
            <div class="checkbox" style="padding:0 30px;">
                <label><input type="checkbox" value="">VNPay</label>
            </div>
        </li>
    </ul>

</div>

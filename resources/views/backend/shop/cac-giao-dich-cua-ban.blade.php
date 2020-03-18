@extends('backend.layouts.master')
@section('content')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Các đề nghị bán hàng</li>
            </ol>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body" style="height: 500px;">
                        <div class="main-menu">
                            <h3 class="title-deal">Các giao dịch của bạn</h3>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <a href="#" title style="color: #065387;font-weight: bold;">Giao dịch gần đây</a>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <a href="#" title class="history-deal">Đơn đang chờ (<span>6</span>)</a>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <a href="#" title class="history-deal">Đơn đã nhận (<span>10</span>)</a>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <a href="#" title class="history-deal">Lịch sử giao dịch</a>
                                </div>
                            </div>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Mã sản phẩm</th>
                                    <th scope="col">Name <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                                    <th scope="col">Email <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                                    <th scope="col">Tình trạng <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                                    <th scope="col">Date Modified <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                    </th>
                                    <th scope="col">Hành động <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">25526611533</th>
                                    <td style="text-align: left;"><img src="asset/images/avatar.jpg"> Trịnh Thảo</td>
                                    <td style="text-align: left;">thao@yahoo.com</td>
                                    <td><a href="#">Xác nhận mua</a></td>
                                    <td>7/4/2019</td>
                                    <td><a href="#" title class="delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">25526611533</th>
                                    <td style="text-align: left;"><img src="asset/images/avatar.jpg"> Trịnh Thảo</td>
                                    <td style="text-align: left;">thao@yahoo.com</td>
                                    <td><a href="#">Xác nhận mua</a></td>
                                    <td>7/4/2019</td>
                                    <td><a href="#" title class="delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">25526611533</th>
                                    <td style="text-align: left;"><img src="asset/images/avatar.jpg"> Trịnh Thảo</td>
                                    <td style="text-align: left;">thao@yahoo.com</td>
                                    <td><a href="#">Xác nhận mua</a></td>
                                    <td>7/4/2019</td>
                                    <td><a href="#" title class="delete"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <!-- <div class="start-deal">
                              <a href="#" title>Bắt đầu mua</a>
                              <a href="#" title>Nạp tiền vào ví</a>
                            </div> -->


                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
        </div>
    </div>
    <!--end main-->

@endsection

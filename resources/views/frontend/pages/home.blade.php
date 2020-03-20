@extends('frontend.layouts.master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="container mt-5">
        <h1 class="title-search"><img src="asset/images/anh.jpg" width="170" height="160" alt=""></h1>
        <div class="search mt-5" style="    margin-top: 0px !important;">
            <div class="box-search">
                <form>
                    <input type="text" name="" placeholder="Search...">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>

            </div>
            <div class="scan">
                <a href="#" title>SCAN</a>
            </div>

            <div class="img-slider mt-5 mb-5">
                <div class="item">
                    <a href="#" title>
                        <img src="asset/images/img-slider.png">
                    </a>
                </div>
                <div class="item">
                    <a href="#" title>
                        <img src="asset/images/img-slider.png">
                    </a>
                </div>
                <div class="item">
                    <a href="#" title>
                        <img src="asset/images/img-slider.png">
                    </a>
                </div>
            </div>


            <div class="spacer"></div>
        </div>
    </div>
@endsection



<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;



//-----------insert data json city----------------

Route::get('/insert-json-file-to-database','InsertJsonToDBController@handle');

//---------end insert json----------------------




//---------load thanh pho, quan huyen, xa phuong-----

Route::get('test', 'LocationController@index');
Route::get('ajax', 'LocationController@getLocation')->name('ajax_get.location');

//----------end load-------------------------------






//-----------------------------------------------begin frontend------------------------------------------------------

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('login', function () {
    return view('frontend.dang-nhap');
});



//------ đăng kí tài khoản
Route::group(['prefix' => 'register'], function () {

    Route::get('', function () {
        return view('frontend.cac-buoc-tao-tai-khoan');
    });

    Route::get('user', function () {
        return view('frontend.tao-tai-khoan-user');
    });

    Route::get('shop', function () {
        return view('frontend.tao-tai-khoan-shop');
    });

    Route::get('business', function () {
        return view('frontend.tao-tai-khoan-shop');
    });
});



Route::get('contact', function () {
    return view('frontend.contact');
});



Route::get('/about', function () {
    return view('frontend.about');
});

//----------------------------------------------end frontend------------------------------------------------------





















//-------------------------------------------------begin backend.shop-----------------------------------------------
Route::get('/cai-dat', function (){
   return view('backend.shop.cai-dat');
}) ;

Route::get('/doi-mat-khau', function (){
    return view('backend.shop.doi-mat-khau');
}) ;

Route::get('/gd-ban', function (){
    return view('backend.shop.gd-ban');
}) ;

Route::get('/gd-mua', function (){
    return view('backend.shop.gd-mua');
}) ;

Route::get('/gd-nap-tien', function (){
    return view('backend.shop.gd-nap-tien');
}) ;

Route::get('/gd-quan-ly', function (){
    return view('backend.shop.gd-quan-ly');
}) ;

Route::get('/gd-rut-tien', function (){
    return view('backend.shop.gd-rut-tien');
}) ;

Route::get('/gd-tao-ban', function (){
    return view('backend.shop.gd-tao-ban');
}) ;

Route::get('/login-shop', function (){
    return view('backend.shop.login-shop');
}) ;

Route::get('/thong-tin-tai-khoan', function (){
    return view('backend.shop.thong-tin-tai-khoan');
}) ;

Route::get('/cac-giao-dich-cua-ban', function (){
    return view('backend.shop.cac-giao-dich-cua-ban');
}) ;



//--------------------shop--------------------------------

Route::group(['prefix'=>'shop'], function (){
    Route::get('login', 'Backend\Shop\LoginController@login')->name('frontend.login');
    Route::post('login', 'Backend\Shop\LoginController@postLogin')->name('frontend.post.login');

    Route::get('/list','Backend\Shop\ShopController@index');
});

//--------------------end shop--------------------------------





//--------------------------------------------------------end backend.shop----------------------------------------------------------

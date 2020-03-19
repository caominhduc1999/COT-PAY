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
use Illuminate\Support\Facades\Route;


//-----------insert data json city----------------

Route::get('/insert-json-file-to-database','InsertJsonToDBController@handle');

//---------end insert json----------------------



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

    Route::get('user', 'Frontend\PageController@createUserAccount');

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



Route::get('login', 'Backend\Shop\LoginController@getLogin')->name('frontend.get.login');
Route::post('login', 'Backend\Shop\LoginController@postLogin')->name('frontend.post.login');
Route::get('logout','Backend\Shop\LoginController@logout');

//tao tai khoan shop
Route::get('create/shop-account','Frontend\PageController@createShopAccount')->name('frontend.create.shop_account');
Route::get('create/shop-account','Frontend\PageController@createShopAccount')->name('frontend.store.shop_account');
//end tao tai khoan shop


// load quan huyen
Route::get('ajax', 'Frontend\PageController@getLocation')->name('ajax_get.location');




//--------------------shop--------------------------------

Route::group(['prefix'=>'shop'], function (){
    Route::get('/','Backend\Shop\ShopController@index')->name('shop.index');
    Route::get('create','Backend\Shop\ShopController@create')->name('shop.create');
    Route::post('create','Backend\Shop\ShopController@store')->name('shop.store');
    Route::get('edit/{id}','Backend\Shop\ShopController@edit')->name('shop.edit');
    Route::put('edit/{id}','Backend\Shop\ShopController@update')->name('shop.update');
    Route::delete('delete','Backend\Shop\ShopController@destroy')->name('shop.destroy');
});

//--------------------end shop--------------------------------





//--------------------------------------------------------end backend.shop----------------------------------------------------------

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




//-----------------------------------------------begin frontend------------------------------------------------------

Route::get('/', function () {
    return view('frontend.pages.home');
});


//---------login
Route::group(['prefix'  =>  'login'], function () {
    Route::get('/',function (){
       return view('choose_login_form')->name('login');
    });

    Route::get('user', 'Backend\User\LoginController@getLogin')->name('login.user.get');
    Route::post('user', 'Backend\User\LoginController@postLogin')->name('login.user.post');

    Route::get('shop', 'Backend\Shop\LoginController@getLogin')->name('login.shop.get');
    Route::post('shop', 'Backend\Shop\LoginController@postLogin')->name('login.shop.post');

    Route::get('business', 'Backend\Business\LoginController@getLogin')->name('login.business.get');
    Route::post('business', 'Backend\Business\LoginController@postLogin')->name('login.business.post');
});


//------ đăng kí tài khoản
Route::group(['prefix' => 'register'], function () {

    Route::get('/', function () {
        return view('frontend.pages.create_account_steps');
    });

    Route::get('user', 'Frontend\PageController@createUserAccount')->name('register.user.get');
    Route::post('user', 'Frontend\PageController@storeUserAccount')->name('register.user.post');

    Route::get('shop', 'Frontend\PageController@createShopAccount')->name('register.shop.get');
    Route::post('shop', 'Frontend\PageController@storeShopAccount')->name('register.shop.post');

    Route::get('business', 'Frontend\PageController@createBusinessAccount')->name('register.business.get');
    Route::post('business', 'Frontend\PageController@storeBusinessAccount')->name('register.business.post');
});


Route::get('contact', function () {
    return view('frontend.contact');
});


Route::get('/about', function () {
    return view('frontend.about');
});

// load quan huyen
Route::get('ajax', 'Frontend\PageController@getLocation')->name('ajax_get.location');
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

    Route::get('/','Backend\Shop\ShopController@index')->name('shop.index');
    Route::get('create','Backend\Shop\ShopController@create')->name('shop.create');
    Route::post('create','Backend\Shop\ShopController@store')->name('shop.store');
    Route::get('edit/{id}','Backend\Shop\ShopController@edit')->name('shop.edit');
    Route::put('edit/{id}','Backend\Shop\ShopController@update')->name('shop.update');
    Route::delete('delete','Backend\Shop\ShopController@destroy')->name('shop.destroy');

    Route::get('account','Backend\Shop\ShopController@getUpdateAccount')->name('shop.account.get');
    Route::put('account','Backend\Shop\ShopController@postUpdateAccount')->name('shop.account.post');
    Route::get('change_password','Backend\Shop\ShopController@getChangePassword')->name('shop.change_password.get');
    Route::put('change_password','Backend\Shop\ShopController@postChangePassword')->name('shop.change_password.post');
    Route::get('logout','Backend\Shop\ShopController@logout')->name('shop.logout');
});

//--------------------end shop--------------------------------







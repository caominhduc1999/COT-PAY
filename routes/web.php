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

//-------------begin pages--------------
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/cac-buoc-tao-tai-khoan', function () {
    return view('pages.cac-buoc-tao-tai-khoan');
});

Route::get('/dang-nhap', function () {
    return view('pages.dang-nhap');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/vai-dieu-ve-chung-toi', function () {
    return view('pages.vai-dieu-ve-chung-toi');
});
//-----------end pages---------------


//----------begin user--------------
Route::get('/cai-dat', function (){
   return view('user.cai-dat');
}) ;

Route::get('/doi-mat-khau', function (){
    return view('user.doi-mat-khau');
}) ;

Route::get('/gd-ban', function (){
    return view('user.gd-ban');
}) ;

Route::get('/gd-mua', function (){
    return view('user.gd-mua');
}) ;

Route::get('/gd-nap-tien', function (){
    return view('user.gd-nap-tien');
}) ;

Route::get('/gd-quan-ly', function (){
    return view('user.gd-quan-ly');
}) ;

Route::get('/gd-rut-tien', function (){
    return view('user.gd-rut-tien');
}) ;

Route::get('/gd-tao-ban', function (){
    return view('user.gd-tao-ban');
}) ;

Route::get('/login-shop', function (){
    return view('user.login-shop');
}) ;

Route::get('/thong-tin-tai-khoan', function (){
    return view('user.thong-tin-tai-khoan');
}) ;

Route::get('/cac-giao-dich-cua-ban', function (){
    return view('user.cac-giao-dich-cua-ban');
}) ;
//--------------end user----------------



//-----------quan huyen----------------
Route::get('/insert-json-file-to-database-table', function(){
    $json = file_get_contents(storage_path('data.json'));
    $objs = json_decode($json,true);
    foreach ($objs as $obj){
        foreach ($obj['districts'] as $key => $item) {
            DB::table('data')->insert([
                'id'=>$key,
                'name'=>$obj['name'],
                'districts'=>$item,
            ]);
        }
    }

    dd("Finished adding data in examples table");

});

Route::get('/dynamic_dependent','DynamicDependentController@index');
Route::get('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');


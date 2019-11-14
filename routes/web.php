<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DangNhap', function (){
   return view('DangNhap');
});

Route::get('/TrangChu', function (){
    return view('TrangChu');
});


Route::get('/HocSinh', function (){

});

Route::get('/Diem', function (){

});

Route::get('/Lop', function (){

});

Route::get('/HocKi', function (){

});

Route::get('/GiaoVien', function (){

});

Route::get('/PhuHuynh', function (){

});

Route::get('/MonHoc', function (){

});

Route::get('/info', function (){

});

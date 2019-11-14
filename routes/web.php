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
    return view('HocSinh');
});

Route::get('/Diem', function (){
    return view('Diem');
});

Route::get('/Lop', function (){
    return view('Lop');
});

Route::get('/HocKi', function (){
    return view('HocKi');
});

Route::get('/GiaoVien', function (){
    return view('GiaoVien');
});

Route::get('/PhuHuynh', function (){
    return view('PhuHuynh');
});

Route::get('/MonHoc', function (){
    return view('MonHoc');
});

Route::get('/info', function (){
    return view('UserInfo');
});

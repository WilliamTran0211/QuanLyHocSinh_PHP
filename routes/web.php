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
    return view('DangNhap');
});

Route::get('/DangNhap', function (){
   return view('DangNhap');
});

Route::get('/TrangChu', function (){
    return view('TrangChu');
});

// Route::get('/HocSinh', function (){
//     return view('HocSinh');
// });

Route::get('/Diem', function (){
    return view('Diem');
});


//Route Lop
Route::get('/Lop','LopController@LoadDanhSachLop')->name("Lop");
Route::get("/Lop/{MaLop}",'LopController@XoaLop')->name("DeleteLop");

Route::get('/HocKi', function (){
    return view('HocKi');
});

Route::get('/GiaoVien', function (){
    return view('GiaoVien');
});

Route::get('/PhuHuynh', function (){
    return view('PhuHuynh');
});



Route::get('/info', function (){
    return view('UserInfo');
});


Route::get('HocSinh' ,'HocsinhController@HocSinh');
Route::get('HocSinh/edit/{MaHS}', 'HocsinhController@edit');

Route::get('ThemHocSinh' ,'HocsinhController@getThemHocSinh')->name('ThemHocSinh');
Route::post('ThemHocSinh' ,'HocsinhController@postThemHocSinh')->name('ThemHocSinh');

Route::get('ThemMonHoc' ,'MonHocController@getThemMonHoc')->name('ThemMonHoc');
Route::post('ThemMonHoc' ,'MonHocController@postThemMonHoc')->name('ThemMonHoc');

Route::get('MonHoc', 'MonHocController@getMonHoc')->name('MonHoc');
Route::get('XoaMonHoc/{id}', 'MonHocController@getXoaMonHoc')->name('XoaMonHoc');


Route::get('SuaMonHoc/{id}' ,'MonHocController@getSuaMonHoc')->name('SuaMonHoc');
Route::post('SuaMonHoc/{id}' ,'MonHocController@postSuaMonHoc')->name('SuaMonHoc1');

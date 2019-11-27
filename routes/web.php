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
Route::get("/Lop/ThemLop", 'LopController@ThemLop')->name("ThemLop");
Route::post("/LuuLop",'LopController@LuuLop')->name("LuuLop");
Route::post("/LuuSuaLop",'LopController@LuuSuaLop')->name("LuuSuaLop");
Route::get("/Lop/SuaLop/{MaLop}",'LopController@SuaLop')->name("SuaLop");
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

Route::get('/MonHoc', function (){
    return view('MonHoc');
});

Route::get('/info', function (){
    return view('UserInfo');
});


Route::get('HocSinh' ,'HocsinhController@HocSinh');
Route::get('ediths/{MaHS}','HocsinhController@showhs');
Route::post('ediths/{MaHS}','HocsinhController@ediths');



Route::get('PhuHuynh' ,'PhuhuynhController@LoadDanhSachphuhuynh')->name("Phuhuynh");

// Route::get('edit/{MaHS}', 'HocsinhController@edit');

Route::get('MonHoc' ,'MonHoccontroller@LoadDanhSachmonhoc')->name("MonHoc");
Route::get('edit/{MaMH}','MonHoccontroller@show');
Route::post('edit/{MaMH}','MonHoccontroller@edit');
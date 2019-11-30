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
})->name('Diem');

//Route Lop
Route::get('/Lop','LopController@LoadDanhSachLop')->name("Lop");
Route::get("/Lop/ThemLop", 'LopController@ThemLop')->name("ThemLop");
Route::post("/LuuLop",'LopController@LuuLop')->name("LuuLop");
Route::post("/LuuSuaLop",'LopController@LuuSuaLop')->name("LuuSuaLop");
Route::get("/Lop/SuaLop/{MaLop}",'LopController@SuaLop')->name("SuaLop");
Route::get("/Lop/{MaLop}",'LopController@XoaLop')->name("DeleteLop");
 
//Route HocSinh
Route::get('/HocSinh' ,'HocsinhController@HocSinh')->name("HocSinh");
Route::get("/HocSinh/ThemHocSinh", 'HocsinhController@ThemHocSinh')->name("ThemHocSinh");
Route::post("/LuuHocSinh",'HocsinhController@LuuHocSinh')->name("LuuHocSinh");
Route::post("/LuuSuaHocSinh",'HocsinhController@LuuSuaHocSinh')->name("LuuSuaHocSinh");
Route::get("/HocSinh/SuaHocSinh/{MaHS}",'HocsinhController@SuaHocSinh')->name("SuaHocSinh");
Route::get("/HocSinh/{MaHS}",'HocsinhController@XoaHocSinh')->name("DeleteHocSinh");
// Route::get('ediths/{MaHS}','HocsinhController@showhs');
// Route::post('ediths/{MaHS}','HocsinhController@ediths');


//Route HocKy
Route::get('/HocKy' ,'HocKyController@HocKy')->name("HocKy");
Route::get("/HocKy/ThemHocKy", 'HocKyController@ThemHocKy')->name("ThemHocKy");
Route::post("/LuuHocKy",'HocKyController@LuuHocKy')->name("LuuHocKy");
Route::post("/LuuSuaHocKy",'HocKyController@LuuSuaHocKy')->name("LuuSuaHocKy");
Route::get("/HocKy/SuaHocKy/{MaHK}",'HocKyController@SuaHocKy')->name("SuaHocKy");
Route::get("/HocKy/{MaHK}",'HocKyController@XoaHocKy')->name("DeleteHocKy");


Route::get('/GiaoVien','GiaoVienController@GiaoVien')->name('GiaoVien');
Route::get('/GiaoVien/ThemGiaoVien','GiaoVienController@ThemGiaoVien')->name('ThemGiaoVien');
Route::post('/LuuGiaoVien','GiaoVienController@LuuGiaoVien')->name('LuuGiaoVien');

Route::get('/PhuHuynh', function (){
    return view('PhuHuynh');
})->name('PhuHuynh');


Route::get('/info', function (){
    return view('UserInfo');
});





Route::get('PhuHuynh' ,'PhuhuynhController@LoadDanhSachphuhuynh')->name("Phuhuynh");

// Route::get('edit/{MaHS}', 'HocsinhController@edit');

Route::get('MonHoc' ,'MonHoccontroller@LoadDanhSachmonhoc')->name("MonHoc");
Route::get('edit/{MaMH}','MonHoccontroller@show');
Route::post('edit/{MaMH}','MonHoccontroller@edit');
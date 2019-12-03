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
})->name('TrangChu');

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
Route::post("/LuuSuaGiaoVien",'GiaoVienController@LuuSuaGiaoVien')->name("LuuSuaGiaoVien");
Route::get('/GiaoVien/SuaGiaoVien/{MaGV}','GiaoVienController@SuaGiaoVien')->name('SuaGiaoVien');
Route::get('/GiaoVien/{MaGV}','GiaoVienController@XoaGiaoVien')->name('DeleteGiaoVien');

Route::get('/PhuHuynh','PhuHuynhController@LoadDanhSachPhuHuynh')->name("PhuHuynh");
Route::get("/PhuHuynh/ThemPH", 'PhuHuynhController@ThemPH')->name("ThemPH");
Route::post("/LuuPH",'PhuHuynhController@LuuPH')->name("LuuPH");
Route::post("/LuuSuaPH",'PhuHuynhController@LuuSuaPH')->name("LuuSuaPH");
Route::get("/PhuHuynh/SuaPH/{MaPH}", 'PhuHuynhController@SuaPH')->name("SuaPH");
Route::get("/PhuHuynh/{MaPH}",'PhuHuynhController@XoaPH')->name("DeletePH");



Route::get("/Users", 'UserController@loadUsers')->name("Users");



Route::get('ThemHocSinh' ,'HocsinhController@getThemHocSinh')->name('ThemHocSinh');
Route::post('ThemHocSinh' ,'HocsinhController@postThemHocSinh')->name('ThemHocSinh');

Route::get('ThemMonHoc' ,'MonHocController@getThemMonHoc')->name('ThemMonHoc');
Route::post('ThemMonHoc' ,'MonHocController@postThemMonHoc')->name('ThemMonHoc');

Route::get('MonHoc', 'MonHocController@getMonHoc')->name('MonHoc');
Route::get('XoaMonHoc/{id}', 'MonHocController@getXoaMonHoc')->name('XoaMonHoc');


Route::get('SuaMonHoc/{id}' ,'MonHocController@getSuaMonHoc')->name('SuaMonHoc');
Route::post('SuaMonHoc/{id}' ,'MonHocController@postSuaMonHoc')->name('SuaMonHoc1');



Route::get('PhuHuynh' ,'PhuhuynhController@LoadDanhSachphuhuynh')->name("Phuhuynh");


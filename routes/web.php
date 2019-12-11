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

Route::get("/", 'UserController@DangNhap')->name("DangNhap");
Route::get('/DangXuat', 'UserController@DangXuat')->name("DangXuat");
Route::post('/','UserController@XacNhanDangNhap')->name('formdangnhap');


Route::get('/TrangChu', function (){
    return view('TrangChu');
})->middleware('checklogin')->name('TrangChu');



Route::get('/Diem', function (){
    return view('Diem');
})->name('Diem');

//Route Lop
Route::get('/Lop','LopController@LoadDanhSachLop')->middleware('checklogin')->name("Lop");
Route::get("/Lop/ThemLop", 'LopController@ThemLop')->name("ThemLop");
Route::post("/LuuLop",'LopController@LuuLop')->name("LuuLop");
Route::post("/LuuSuaLop",'LopController@LuuSuaLop')->name("LuuSuaLop");
Route::get("/Lop/SuaLop/{MaLop}",'LopController@SuaLop')->name("SuaLop");
Route::get("/Lop/{MaLop}",'LopController@XoaLop')->name("DeleteLop");
 
//Route HocSinh
Route::get('/HocSinh' ,'HocsinhController@HocSinh')->middleware('checklogin')->name("HocSinh");
Route::get("/HocSinh/ThemHocSinh", 'HocsinhController@ThemHocSinh')->name("ThemHocSinh");
Route::post("/LuuHocSinh",'HocsinhController@LuuHocSinh')->name("LuuHocSinh");
Route::post("/LuuSuaHocSinh",'HocsinhController@LuuSuaHocSinh')->name("LuuSuaHocSinh");
Route::get("/HocSinh/SuaHocSinh/{MaHS}",'HocsinhController@SuaHocSinh')->name("SuaHocSinh");
Route::get("/HocSinh/{MaHS}",'HocsinhController@XoaHocSinh')->name("DeleteHocSinh");



//Route HocKy
Route::get('/HocKy' ,'HocKyController@HocKy')->middleware('checklogin')->name("HocKy");
Route::get("/HocKy/ThemHocKy", 'HocKyController@ThemHocKy')->name("ThemHocKy");
Route::post("/LuuHocKy",'HocKyController@LuuHocKy')->name("LuuHocKy");
Route::post("/LuuSuaHocKy",'HocKyController@LuuSuaHocKy')->name("LuuSuaHocKy");
Route::get("/HocKy/SuaHocKy/{MaHK}",'HocKyController@SuaHocKy')->name("SuaHocKy");
Route::get("/HocKy/{MaHK}",'HocKyController@XoaHocKy')->name("DeleteHocKy");


Route::get('/GiaoVien','GiaoVienController@GiaoVien')->middleware('checklogin')->name('GiaoVien');
Route::get('/GiaoVien/ThemGiaoVien','GiaoVienController@ThemGiaoVien')->name('ThemGiaoVien');
Route::post('/LuuGiaoVien','GiaoVienController@LuuGiaoVien')->name('LuuGiaoVien');
Route::post("/LuuSuaGiaoVien",'GiaoVienController@LuuSuaGiaoVien')->name("LuuSuaGiaoVien");
Route::get('/GiaoVien/SuaGiaoVien/{MaGV}','GiaoVienController@SuaGiaoVien')->name('SuaGiaoVien');
Route::get('/GiaoVien/{MaGV}','GiaoVienController@XoaGiaoVien')->name('DeleteGiaoVien');
Route::post('/TimKiem','GiaoVienController@TimKiem')->name('TimKiem');
Route::post('/TimKiemTheoMonHoc','GiaoVienController@TimKiemTheoMonHoc')->name('TimKiemTheoMonHoc');



Route::get('/PhuHuynh','PhuHuynhController@LoadDanhSachPhuHuynh')->middleware('checklogin')->name("PhuHuynh");
Route::get("/PhuHuynh/ThemPH", 'PhuHuynhController@ThemPH')->name("ThemPH");
Route::post("/LuuPH",'PhuHuynhController@LuuPH')->name("LuuPH");
Route::post("/LuuSuaPH",'PhuHuynhController@LuuSuaPH')->name("LuuSuaPH");
Route::get("/PhuHuynh/SuaPH/{MaPH}", 'PhuHuynhController@SuaPH')->name("SuaPH");
Route::get("/PhuHuynh/{MaPH}",'PhuHuynhController@XoaPH')->name("DeletePH");


Auth::routes(['verify' => true]);
Route::get("/Users", 'UserController@loadUsers')->middleware('checklogin')->name("Users");
Route::get("/Users/DangKy",'UserController@DangKy')->name('DangKy');
Route::post("/Users/ThemAdmin",'UserController@ThemAdmin')->name('ThemAdmin');
Route::get("/Users/SuaAdmin/{id}",'UserController@SuaAdmin')->name('SuaAdmin');
Route::get("/Users/XoaAdmin/{id}", "UserController@XoaAdmin")->name('XoaAdmin');
Route::post("/Users/LuuSuaAdmin", "UserController@LuuSuaAdmin")->name('LuuSuaAdmin');

// Route::post("/Users/DangNhap", 'UserController@DangNhap')->name('DangNhap');
// Route::group(['middleware' => ['web']], function () {
//     Route::get('/Session', function(){
//         Session::put('KhoaHoc',"aaa");
//         echo "dadt";
//     }); 
// });



Route::get('ThemHocSinh' ,'HocsinhController@getThemHocSinh')->name('ThemHocSinh');
Route::post('ThemHocSinh' ,'HocsinhController@postThemHocSinh')->name('ThemHocSinh');

Route::get('ThemMonHoc' ,'MonHocController@getThemMonHoc')->name('ThemMonHoc');
Route::post('ThemMonHoc' ,'MonHocController@postThemMonHoc')->name('ThemMonHoc');

Route::get('MonHoc', 'MonHocController@getMonHoc')->middleware('checklogin')->name('MonHoc');
Route::get('XoaMonHoc/{id}', 'MonHocController@getXoaMonHoc')->name('XoaMonHoc');


Route::get('SuaMonHoc/{id}' ,'MonHocController@getSuaMonHoc')->name('SuaMonHoc');
Route::post('SuaMonHoc/{id}' ,'MonHocController@postSuaMonHoc')->name('SuaMonHoc1');

Route::get('PhuHuynh' ,'PhuhuynhController@LoadDanhSachphuhuynh')->name("Phuhuynh");



Route::get('KetQuaTimMonHoc/{fmh}' ,'MonHocController@findMonHoc')->name('KetQuaTimMonHoc');
Route::post('KetQuaTimMonHoc', 'MonHocController@XuLyfindMonHoc')->name('XuLyKetQuaMonHoc');


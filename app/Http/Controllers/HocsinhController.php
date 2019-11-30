<?php

namespace App\Http\Controllers;

use App\HocSinh;
use App\Lop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class HocsinhController extends Controller
{
    public function HocSinh()
    {
        // $user='nguyễn Quang Linh';
        // return view('HocSinh',compact('user'));
        
        $hocsinh=DB::table('hocsinh')->get();
         return view('HocSinh',compact('hocsinh'));
     
    }
    public function edit($MaHS)
    {
        $hocsinh = HocSinh::findOrFail($MaHS);
        $pageName = 'News - Update';
        return view('news_update', compact('hocsinh', 'pageName'));
    }
    public function update(Request $request, $MaHS)
    {
        $news = hocsinh::find($MaHS);
        $news->title = $request->title;
        $news->email = $request->email;
        $news->description = $request->description;

        $news->save();
        return redirect()->action('Admin\AdminNewsController@index');
    }
    public function getThemHocSinh(){
        $ths = Lop::all();

        return view('ThemHocSinh', compact('ths'));
    }

   public function postThemHocSinh(Request $req){

    $ths = new HocSinh();
    
    $ths->HoTen = $req->HoTen;
    $ths->NamSinh = $req->NgaySinh;
    $ths->GioiTinh = $req->GioiTinh;
    $ths->DiaChi = $req->DiaChi;
    $ths->MaLop = $req->MaLop;
//    if ( $req->HoTen=="" || $req->NgaySinh=="" || $req->DiaChi=="" ){
    
//     session()->flash('KhongThanhCong', 'Vui lòng điền đầy đủ thông tin!');
//     return false;
//    }
//    else{
//     $ths->save();
//     session()->flash('KhongThanhCong', 'Đã Thêm Học Sinh Thành Công');
//     return redirect()->route('ThemHocSinh');

//    }

   $ths->save();
    return redirect()->route('ThemHocSinh');

   }






}
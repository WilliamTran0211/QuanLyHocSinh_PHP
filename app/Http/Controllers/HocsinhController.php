<?php

namespace App\Http\Controllers;

use Hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class HocsinhController extends Controller
{
    public function HocSinh()
    {
        // $user='nguyễn Quang Linh';
        // return view('HocSinh',compact('user'));

        $hocsinh = DB::select('select * from hocsinh');
        return view('HocSinh',['hocsinh'=>$hocsinh] );
    }
    public function showhs($MaHS) {
        $hocsinh = DB::select('select * from hocsinh where MaHS = ?',[$MaHS]);
        return view('UpdateHocSinh',['hocsinh'=>$hocsinh]);
     }
     public function ediths(Request $request, $MaHS) {
         
        $hocsinh = DB::select('select * from hocsinh');
        $name = $request->input('stud_name');
        $namsinh = $request->input('namsinh');
        $gioitinh = $request->input('gioitinh');
        $diachi = $request->input('diachi');
        $malop = $request->input('malop');
        DB::update('update hocsinh set HoTen = ? , NamSinh = ? , GioiTinh = ?, 	DiaChi = ? , MaLop = ?   where MaHS = ?',[$name,$namsinh,$gioitinh,$diachi,$malop,$MaHS]);
        echo '<script>alert("Update thành công nha!!!");</script>';
        echo '<h1 align="center"> Update thành công</h1>';
        echo '<a href = "/HocSinh">Trở lại trang Học Sinh</a> ';
       
        
     }

 
}

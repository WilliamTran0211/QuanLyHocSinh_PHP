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
     
  
        $name = $request->input('stud_name');
        $namsinh = $request->input('namsinh');
        $gioitinh = $request->input('gioitinh');
        $diachi = $request->input('diachi');
        $malop = $request->input('malop');
        $reuld = DB::update('update hocsinh set HoTen = ? , NamSinh = ? , GioiTinh = ?, DiaChi = ? , MaLop = ?   where MaHS = ?',[$name,$namsinh,$gioitinh,$diachi,$malop,$MaHS]);
        $reuld;
        if($reuld==true){
            //echo '<script>alert("Update thành công nha !!!");</script> ';
            return redirect('HocSinh')->with('status', 'Update thành công nha !!!');
        }
        else{
         
            return redirect('HocSinh')->with('status', 'Bị lỗi rồi  !!!');
        }
        // return redirect()->action('HocsinhController@HocSinh');
        // return redirect()->away('http://127.0.0.1:8000/HocSinh');
        // return redirect()->action('HocsinhController@HocSinh');
        // echo '<h1 align="center"> Update thành công</h1>';
        // echo '<a href = "/HocSinh">Trở lại trang Học Sinh</a> ';
        
     }
     public function delete($MaHS)
        {   
        
            $dele = DB::find($MaHS);
            $dele->delete($MaHS);
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }
 
}

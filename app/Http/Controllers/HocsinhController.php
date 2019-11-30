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
        // $hocsinh = DB::select('select * from hocsinh');
        // return view('HocSinh',['hocsinh'=>$hocsinh] );
        $hocsinh = HocSinh::paginate(4);
        // $Lop = DB::table('lop')->get();
        return view('HocSinh')->with('HocSinh',$hocsinh);
    }
    // public function showhs($MaHS) {
    //     $hocsinh = DB::select('select * from hocsinh where MaHS = ?',[$MaHS]);
    //     return view('UpdateHocSinh',['hocsinh'=>$hocsinh]);
    //  }

    //  public function ediths(Request $request, $MaHS) {
     
  
    //     $name = $request->input('stud_name');
    //     $namsinh = $request->input('namsinh');
    //     $gioitinh = $request->input('gioitinh');
    //     $diachi = $request->input('diachi');
    //     $malop = $request->input('malop');
    //     $reuld = DB::update('update hocsinh set HoTen = ? , NamSinh = ? , GioiTinh = ?, DiaChi = ? , MaLop = ?   where MaHS = ?',[$name,$namsinh,$gioitinh,$diachi,$malop,$MaHS]);
    //     $reuld;
    //     if($reuld==true){
    //         //echo '<script>alert("Update thành công nha !!!");</script> ';
    //         return redirect('HocSinh')->with('status', 'Update thành công nha !!!');
    //     }
    //     else{
         
    //         return redirect('HocSinh')->with('status', 'Bị lỗi rồi  !!!');
    //     }
    //     // return redirect()->action('HocsinhController@HocSinh');
    //     // return redirect()->away('http://127.0.0.1:8000/HocSinh');
    //     // return redirect()->action('HocsinhController@HocSinh');
    //     // echo '<h1 align="center"> Update thành công</h1>';
    //     // echo '<a href = "/HocSinh">Trở lại trang Học Sinh</a> ';        
    //  }
    //  public function delete($MaHS)
    //     {   
        
    //         $dele = DB::find($MaHS);
    //         $dele->delete($MaHS);
    //         return response()->json([
    //             'success' => 'Record has been deleted successfully!'
    //         ]);
    //     }
 
    public function ThemHocSinh(){
        $Lop = Lop::all(['MaLop']);
        return view('ThemHocSinh')->with('ThemHocSinh',$Lop);
    }

    public function LuuHocSinh(Request $request){
        $hocsinh = new HocSinh();
        $hocsinh->HoTen = $request->hoten;
        $hocsinh->NamSinh = $request->namsinh;
        $hocsinh->GioiTinh = $request->gioitinh;
        $hocsinh->DiaChi = $request->diachi;
        $hocsinh->MaLop = $request->malop;
        $hocsinh->save();
        return redirect()->route('HocSinh');
    }

    public function SuaHocSinh($MaHS){
        $hocsinh = DB::select('select * from hocsinh where MaHS = ?',[$MaHS]);
        return view('SuaHocSinh',['hocsinh'=>$hocsinh]);
    }

    public function LuuSuaHocSinh(Request $request){
        $hocsinh = HocSinh::find($request->mahs);
        $hocsinh->HoTen = $request->hoten;
        $hocsinh->NamSinh = $request->namsinh;
        $hocsinh->GioiTinh = $request->gioitinh;
        $hocsinh->DiaChi = $request->diachi;
        $hocsinh->MaLop = $request->malop;
        $hocsinh->save();
        return redirect()->route('HocSinh');
    }
    public function XoaHocSinh($MaHS){
            DB::delete('delete from hocsinh where MaHS = ?', [$MaHS]);
            return redirect()->route('HocSinh');
        
        
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
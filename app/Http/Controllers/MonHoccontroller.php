<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonHoccontroller extends Controller
{
    // public function LoadDanhSachmonhoc(){
    //     $Lop = DB::table('monhoc')->get();
    //     return view('MonHoc')->with('MonHoc',$Lop);
    // }
    public function LoadDanhSachmonhoc() {
        $monhoc = DB::select('select * from monhoc');
        return view('MonHoc',['monhoc'=>$monhoc]);
     }
     public function show($MaMH) {
        $monhoc = DB::select('select * from monhoc where MaMH = ?',[$MaMH]);
        return view('news_update',['monhoc'=>$monhoc]);
     }
     public function edit(Request $request,$MaMH) {
        $name = $request->input('stud_name');
        DB::update('update monhoc set TenMH = ? where MaMH = ?',[$name,$MaMH]);
        echo "Record updated successfully.<br/>";
        echo '< href = "/edit-records">Click Here</a> to go back.';
     }
}

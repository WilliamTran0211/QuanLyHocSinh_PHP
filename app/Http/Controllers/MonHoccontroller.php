<?php

namespace App\Http\Controllers;

use App\MonHoc;
use Illuminate\Http\Request;

class MonHocController extends Controller
{

    public function getMonHoc()
    {

        $monhoc = MonHoc::all();
        return view('MonHoc', compact('monhoc'));
    }


    public function getXoaMonHoc($id)
    {
        MonHoc::where('MaMH', $id)->delete();
        return redirect()->route('MonHoc')->with(['xoa' => 'Đã xoá thành công']);
    }






    public function getThemMonHoc()
    {
        return view('ThemMonHoc');
    }


    public function postThemMonHoc(Request $tmh1)
    {
        $tmh = new MonHoc();
        $tmh->TenMH = $tmh1->TenMH;
        $tmh->save();
        return redirect()->route('MonHoc')->with(['xoa' => 'Đã Thêm Môn Học Thành Công']);
    }




    public function postSuaMonHoc(Request $req, $id)
    {
        MonHoc::where('MaMH', $id)->update(['TenMH'=>$req->TenMH]);
        return redirect()->route('MonHoc')->with(['xoa'=> 'Đã Cập Nhập Môn Học Thành Công']);
     }





    public function getSuaMonHoc($id)
    {
        $smh = MonHoc::where('MaMH', $id)->first();
        return view('SuaMonHoc', compact('smh'));
    }

    public function findMonHoc($fmh){
        $fmh = MonHoc::where('TenMH', 'like', '%'.$fmh.'%')->get();

        return view('KetQuaTimMonHoc', compact('fmh'));
    }

    public function XuLyfindMonHoc(Request $req){
        return redirect()->route('KetQuaTimMonHoc', $req->search);
    }


}

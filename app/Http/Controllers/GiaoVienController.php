<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\GiaoVien;
use App\MonHoc;

class GiaoVienController extends Controller
{
    public function GiaoVien(){
        $GiaoVien = GiaoVien::paginate(4);
        return view("GiaoVien",["GiaoVien" => $GiaoVien]);
    }

    public function ThemGiaoVien(){
        $MonHoc = MonHoc::all()->toArray();
        return view("ThemGiaoVien",["MonHoc" => $MonHoc]);
    }

    public function LuuGiaoVien(Request $request){
        echo $request->tengiaovien;
        echo $request->ngaysinh;
        echo $request->gioitinh;
        echo $request->diachi;
        echo $request->email;
        echo $request->sdt;
        echo $request->mamh;
        return redirect()->route("GiaoVien");    
    }
}

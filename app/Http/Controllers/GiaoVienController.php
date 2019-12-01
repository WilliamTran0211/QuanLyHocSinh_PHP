<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\GiaoVien;
use App\MonHoc;

class GiaoVienController extends Controller
{
    public function GiaoVien()
    {
        $GiaoVien = GiaoVien::paginate(4);
        return view("GiaoVien", ["GiaoVien" => $GiaoVien]);
    }

    public function ThemGiaoVien()
    {
        $MonHoc = MonHoc::all()->toArray();
        return view("ThemGiaoVien", ["MonHoc" => $MonHoc]);
    }

    public function LuuGiaoVien(Request $request)
    {
        $GiaoVien = new GiaoVien();
        $GiaoVien->TenGV = $request->tengiaovien;
        $GiaoVien->NgaySinh = $request->ngaysinh;
        $GiaoVien->GioiTinh = $request->gioitinh;
        $GiaoVien->DiaChi = $request->diachi;
        $GiaoVien->Email = $request->email;
        $GiaoVien->SDT = $request->sdt;
        $GiaoVien->MaMH = $request->mamh;
        $GiaoVien->save();
        return redirect()->route("GiaoVien");
    }

    public function SuaGiaoVien($MaGV)
    {
        $GiaoVien = GiaoVien::find($MaGV);
        $MonHoc = MonHoc::all()->toArray();
        return view('SuaGiaoVien', ["GiaoVien" => $GiaoVien, "MonHoc" => $MonHoc]);
    }

    public function LuuSuaGiaoVien(Request $request)
    {
        $GiaoVien = GiaoVien::find($request->magv);
        $GiaoVien->TenGV = $request->tengiaovien;
        $GiaoVien->NgaySinh = $request->ngaysinh;
        $GiaoVien->GioiTinh = $request->gioitinh;
        $GiaoVien->DiaChi = $request->diachi;
        $GiaoVien->Email = $request->email;
        $GiaoVien->SDT = $request->sdt;
        $GiaoVien->MaMH = $request->mamh;
        $GiaoVien->save();
        return redirect()->route("GiaoVien");
    }

    public function XoaGiaoVien($MaGV)
    {
        DB::delete('delete from giaovien where MaGV = ?', [$MaGV]);
        return redirect()->route('GiaoVien');
    }
}

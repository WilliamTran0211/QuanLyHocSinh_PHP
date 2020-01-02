<?php

namespace App\Http\Controllers;

use App\MonHoc;
use App\Diem;
use App\HocKy;
use App\HocSinh;

use Illuminate\Http\Request;

class DiemController extends Controller
{
    public function LoadDanhSachDiem()
    {
        $Diem = Diem::paginate(4);
        return view('Diem', ["Lop" => $this->LoadMonHoc() ])->with('Diem', $Diem);
    }

    public function LoadMonHoc()
    {
        $monhoc = MonHoc::all();
        return $monhoc;
    }

    public function LoadHocKi()
    {

    }

    public function CheckHocSinh()
    {

    }

    public function ThemDiem()
    {

    }

    public function SuaDiem()
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Lop;
use App\GiaoVien;

class LopController extends Controller
{
    //
    public function LoadDanhSachLop()
    {
        $Lop = Lop::paginate(4);
        // $Lop = DB::table('lop')->get();
        return view('Lop')->with('Lop', $Lop);
    }

    public function ThemLop()
    {
        $GiaoVien = GiaoVien::all()->toArray();
        return view('ThemLop', ["GiaoVien" => $GiaoVien]);
        // return view('ThemLop')->with('ThemLop',$GiaoVien);
    }

    public function LuuLop(Request $request)
    {
        $lop = new Lop();
        $lop->TenLop = $request->tenlop;
        $lop->MaGV  = $request->magv;
        $lop->save();
        return redirect()->route('Lop');
    }

    public function SuaLop($MaLop)
    {
        $Lop = DB::select('select * from lop where MaLop = ?', [$MaLop]);
        $GiaoVien = GiaoVien::all()->toArray();
        return view('SuaLop', ['Lop' => $Lop, 'GiaoVien' => $GiaoVien]);
    }

    public function LuuSuaLop(Request $request)
    {
        $Lop = Lop::find($request->malop);
        $Lop->TenLop = $request->tenlop;
        $Lop->MaGV = $request->magv;
        $Lop->save();
        return redirect()->route('Lop');
    }
    public function XoaLop($MaLop)
    {
        $kiemTraLopTonTai = DB::table('hocsinh')->where("MaLop", '=', $MaLop)->get();
        if (count($kiemTraLopTonTai) > 0) {
            return redirect()->route('Lop')->with(["message" => "Hiện tại lớp đang có sinh viên học không thể xóa"]);
        } else {
            DB::delete('delete from lop where MaLop = ?', [$MaLop]);
            return redirect()->route('Lop');
        }
    }

    public function TimKiemLop(Request $request)
    {
        $data = "";
        $Lop = DB::table('lop')->where('TenLop', 'like', '%' . $request->TenLop . '%')->get();
        if ($Lop && count($Lop) > 0) {
            foreach ($Lop as $lop) {
                $GiaoVien = GiaoVien::find($lop->MaGV);
                $data .= '<tr class="table-light">
                <td>' . $lop->MaLop . '</td>
                <td>' . $lop->TenLop . '</td>
                <td>' . $GiaoVien->TenGV . '</td>
                <td>
                    <a class="btn btn-primary update" href="/Lop/SuaLop' . $lop->MaLop . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/Lop/' . $lop->MaLop . '">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        } else {
            $data = "";
            $data .= '<tr class="table-light">
                <td colspan="9"> Không tìm thấy lớp học</td>
            </tr>';
            return Response($data);
        }
    }
    public function TimKiemTheoGiaoVien(Request $request)
    {
        $data = "";
        $Lop = DB::table('lop')->where('MaGV', $request->MaGV)->get();
        if ($Lop && count($Lop) > 0) {
            foreach ($Lop as $lop) {
                $GiaoVien = GiaoVien::find($lop->MaGV);
                $data .= '<tr class="table-light">
                <td>' . $lop->MaLop . '</td>
                <td>' . $lop->TenLop . '</td>
                <td>' . $GiaoVien->TenGV . '</td>
                <td>
                    <a class="btn btn-primary update" href="/Lop/SuaLop' . $lop->MaLop . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/Lop/' . $lop->MaLop . '">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        } else {
            $data = "";
            $data .= '<tr class="table-light">
                <td colspan="9"> Không tìm thấy giáo viên chủ nhiệm</td>
            </tr>';
            return Response($data);
        }
    }
}

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

    public function TimKiem(Request $request)
    {
        $data = "";
        $GioiTinh ="";
        $GiaoVien = DB::table('giaovien')->where('TenGV', $request->TenGV)->get();
        if ($GiaoVien && count($GiaoVien) > 0) {
            foreach ($GiaoVien as $giaovien) {
                $MonHoc = MonHoc::find($giaovien->MaMH);
                if($giaovien->GioiTinh == 0){
                    $GioiTinh = "Nam";
                }else{
                    $GioiTinh = "Nữ";
                }
                $data .= '<tr class="table-light">
                <td>' . $giaovien->MaGV . '</td>
                <td>' . $giaovien->TenGV . '</td>
                <td>' . $giaovien->NgaySinh . '</td>
                <td>'  . $GioiTinh . '</td>
                <td>' . $giaovien->DiaChi . '</td>
                <td>' . $giaovien->Email . '</td>
                <td>' . $giaovien->SDT . '</td>
                <td>' . $MonHoc->TenMH . '</td>
                <td>
                    <a class="btn btn-primary update" href="/GiaoVien/SuaGiaoVien/' . $giaovien->MaGV . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/GiaoVien/'.$giaovien->MaGV.'">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        }else{
            $data = "";
            $data .= '<tr class="table-light">
                <td colspan="9"> Không tìm thấy giáo viên</td>
            </tr>';
            return Response($data);
        }
    }

    public function TimKiemTheoMonHoc(Request $request){
        $data = "";
        $GioiTinh ="";
        $GiaoVien = DB::table('giaovien')->where('MaMH', $request->MaMH)->get();
        if ($GiaoVien && count($GiaoVien) > 0) {
            foreach ($GiaoVien as $giaovien) {
                $MonHoc = MonHoc::find($giaovien->MaMH);
                if($giaovien->GioiTinh == 0){
                    $GioiTinh = "Nam";
                }else{
                    $GioiTinh = "Nữ";
                }
                $data .= '<tr class="table-light">
                <td>' . $giaovien->MaGV . '</td>
                <td>' . $giaovien->TenGV . '</td>
                <td>' . $giaovien->NgaySinh . '</td>
                <td>'  . $GioiTinh . '</td>
                <td>' . $giaovien->DiaChi . '</td>
                <td>' . $giaovien->Email . '</td>
                <td>' . $giaovien->SDT . '</td>
                <td>' . $MonHoc->TenMH . '</td>
                <td>
                    <a class="btn btn-primary update" href="/GiaoVien/SuaGiaoVien/' . $giaovien->MaGV . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/GiaoVien/'.$giaovien->MaGV.'">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        }else{
            $data = "";
            $data .= '<tr class="table-light">
                <td colspan="9"> Không tìm thấy giáo viên</td>
            </tr>';
            return Response($data);
        }
    }
}

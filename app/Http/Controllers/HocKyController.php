<?php

namespace App\Http\Controllers;
use App\HocKy;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HocKyController extends Controller
{
    
    public function HocKy()
    {
        $HocKy = HocKy::paginate(4);
        return view('HocKy')->with('HocKy',$HocKy);
    }
    public function ThemHocKy(){
        return view('ThemHocKy')->with('ThemHocKy');
    }   

    public function LuuHocKy(Request $request){
        $HocKy = new HocKy();
        $HocKy->LoaiHK = $request->loaihk;
        $HocKy->NamBatDau = $request->nambatdau;
        $HocKy->NamKetThuc = $request->namketthuc;
        $HocKy->save();
        return redirect()->route('HocKy');
    }

    public function SuaHocKy($MaHK){
        $HocKy = DB::select('select * from hocky where MaHK = ?',[$MaHK]);
        return view('SuaHocKy',['HocKy'=>$HocKy]);
    }

    public function LuuSuaHocKy(Request $request){
        $HocKy = HocKy::find($request->mahk);
        $HocKy->LoaiHK = $request->loaihk;
        $HocKy->NamBatDau = $request->nambatdau;
        $HocKy->NamKetThuc = $request->namketthuc;
        $HocKy->save();
        return redirect()->route('HocKy');
    }
    public function XoaHocKy($MaHK){
        $kiemTraHocKyTonTai = DB::table('hocky')->where("MaHK",'=',$MaHK)->get();
        if(count($kiemTraHocKyTonTai) > 0){
            
        }else{
            DB::delete('delete from hocky where MaHK = ?', [$MaHK]);
            return redirect()->route('HocKy');
        }
        
    }
    public function TimKiemhk(Request $request)
    {
        $data = "";
     
        $HocKy = DB::table('hocky')->where('LoaiHK', $request->LoaiHK)->get();
        if ($HocKy && count($HocKy) > 0) {
            foreach ($HocKy as $hs) {
            
                $data .= '<tr class="table-light">
                <td>' . $hs->MaHK . '</td>
                <td>' . $hs->LoaiHK . '</td>
                <td>' . $hs->NamBatDau . '</td>
                <td>' . $hs->NamKetThuc . '</td>
             
                <td>
                    <a class="btn btn-primary update" href="/HocKy/SuaHocKy/' . $hs->MaHK . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/HocKy/'.$hs->MaHK.'">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        }else{
            $data = "";
            $data .= '<tr class="table-light">
            <td colspan="9"> Không tìm thấy Học Kỳ</td>
            </tr>';
            return Response($data);
        }
    }
    public function TimKiemnambatdau(Request $request)
    {
        $data = "";
     
        $HocKy = DB::table('hocky')->where('NamBatDau', $request->NamBatDau)->get();
        if ($HocKy && count($HocKy) > 0) {
            foreach ($HocKy as $hs) {
            
                $data .= '<tr class="table-light">
                <td>' . $hs->MaHK . '</td>
                <td>' . $hs->LoaiHK . '</td>
                <td>' . $hs->NamBatDau . '</td>
                <td>' . $hs->NamKetThuc . '</td>
             
                <td>
                    <a class="btn btn-primary update" href="/HocKy/SuaHocKy/' . $hs->MaHK . '">Sửa</a>
                    <a class="btn btn-primary delete" href="/HocKy/'.$hs->MaHK.'">Xóa</a>
                </td>
                </tr>';
            }
            return Response($data);
        }else{
            $data = "";
            $data .= '<tr class="table-light">
            <td colspan="9"> Không tìm thấy Học Kỳ</td>
            </tr>';
            return Response($data);
        }
    }
  

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Lop;
class LopController extends Controller
{
    //
    public function LoadDanhSachLop(){
        $Lop = Lop::paginate(4);
        // $Lop = DB::table('lop')->get();
        return view('Lop')->with('Lop',$Lop);
    }

    public function ThemLop(){
        return view('ThemLop')->with('ThemLop');
    }

    public function LuuLop(Request $request){
        $lop = new Lop();
        $lop->TenLop = $request->tenlop;
        $lop->save();
        return redirect()->route('Lop');
    }

    public function SuaLop($MaLop){
        $Lop = DB::select('select * from lop where MaLop = ?',[$MaLop]);
        return view('SuaLop',['Lop'=>$Lop]);
    }

    public function LuuSuaLop(Request $request){
        $Lop = Lop::find($request->malop);
        $Lop->TenLop = $request->tenlop;
        $Lop->save();
        return redirect()->route('Lop');
    }
    public function XoaLop($MaLop){
        $kiemTraLopTonTai = DB::table('hocsinh')->where("MaLop",'=',$MaLop)->get();
        if(count($kiemTraLopTonTai) > 0){
            
        }else{
            DB::delete('delete from lop where MaLop = ?', [$MaLop]);
            return redirect()->route('Lop');
        }
        
    }
}

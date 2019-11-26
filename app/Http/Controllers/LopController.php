<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Lop;
class LopController extends Controller
{
    //
    public function LoadDanhSachLop(){
        $Lop = Lop::all()->toArray();
        // $Lop = DB::table('lop')->get();
        return view('Lop')->with('Lop',$Lop);
    }

    public function ThemLop(){
        // return redirect()->route('ThemLop');
        return view('ThemLop')->with('ThemLop');
    }

    public function SuaLop($MaLop){
        echo $MaLop;
        // return view('');
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

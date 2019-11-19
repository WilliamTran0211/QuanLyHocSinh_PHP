<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class LopController extends Controller
{
    //
    public function LoadDanhSachLop(){
        $Lop = DB::table('lop')->get();
        return view('Lop')->with('Lop',$Lop);
    }

    public function XoaLop($MaLop){
        return redirect()->route('Lop');
    }
}

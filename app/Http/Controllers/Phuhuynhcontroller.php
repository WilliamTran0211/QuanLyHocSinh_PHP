<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Phuhuynhcontroller extends Controller
{
    public function LoadDanhSachphuhuynh(){
        $Lop = DB::table('phuhuynh')->get();
        return view('PhuHuynh')->with('Phuhuynh',$Lop);
    }
}

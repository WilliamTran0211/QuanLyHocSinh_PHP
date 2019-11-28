<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\GiaoVien;

class GiaoVienController extends Controller
{
    public function GiaoVien(){
        $GiaoVien = GiaoVien::paginate(4);
        return view("GiaoVien",["GiaoVien" => $GiaoVien]);
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PhuHuynh;
class Phuhuynhcontroller extends Controller
{
    public function LoadDanhSachPhuHuynh(){
        $PhuHuynh = PhuHuynh::all()->toArray();   
        return view('PhuHuynh',["PhuHuynh" => $PhuHuynh]);
      }
      public function ThemPH(){
          return view('ThemPH')->with('ThemPH');
      }
      public function LuuPH(Request $request){
          $PhuHuynh = new PhuHuynh();
          $PhuHuynh->HoTenCha = $request->hotencha;
          $PhuHuynh->HoTenMe = $request->hotenme;
          $PhuHuynh->SDTCha = $request->sdtcha;
          $PhuHuynh->SDTMe = $request->sdtme;
          $PhuHuynh->DiaChi = $request->diachi;
          $PhuHuynh->MaHS = $request->mahs;
          $PhuHuynh->save();
          return redirect()->route('PhuHuynh');
      }
  
      public function SuaPH($MaPH){
          $PhuHuynh = DB::select('select * from phuhuynh where MaPH = ?',[$MaPH]);
          return view('SuaPH',['PhuHuynh'=>$PhuHuynh]);
      }
      public function LuuSuaPH(Request $request){
          $PhuHuynh = PhuHuynh::find($request->maph);
          $PhuHuynh->HoTenCha = $request->hotencha;
          $PhuHuynh->HoTenMe = $request->hotenme;
          $PhuHuynh->SDTCha = $request->sdtcha;
          $PhuHuynh->SDTMe = $request->sdtme;
          $PhuHuynh->DiaChi = $request->diachi;
          $PhuHuynh->MaHS = $request->mahs;
          $PhuHuynh->save();
          return redirect()->route('PhuHuynh');
      }
      public function XoaPH($MaHS){
          $kiemTraHSTonTai = DB::table('hocsinh')->where("MaHS",'=',$MaHS)->get();
          $kiemTraPHTonTai = DB::table('phuhuynh')->where("MaHS",'=',$MaHS)->get();
          if(count($kiemTraHSTonTai) && count($kiemTraPHTonTai)  > 0){
              DB::delete('delete from phuhuynh where MaHS = ?', [$MaHS]);
              return redirect()->route('PhuHuynh');
          }
          
      }
  }
  
<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function loadUsers()
    {
        $Admin = User::all()->toArray();
        return view('Users', ["Admin" => $Admin]);
    }

    public function DangKy()
    {
        return view("DangKy")->with('DangKy');
    }

    public function ThemAdmin(Request $request)
    {
        // dùng thêm một thành viên mới
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('md5', $request->psw);
        $user->save();
        return redirect()->route("Users");
    }

    public function DangNhap()
    {
        return view("DangNhap", ["messageError" => '']);
    }

    public function XacNhanDangNhap(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->where('password', hash('md5', $password))->get();
        if (count($data) > 0) {
            $request->session()->put('admin_id', $data[0]->id);
            $request->session()->put('admin_name', $data[0]->name);
            $request->session()->put('admin_email', $data[0]->email);
            return redirect()->route("TrangChu");
        } else {
            return view("DangNhap", ["messageError" => "Email hoặc mật khẩu sai! Xin vui lòng kiểm tra lại"]);
        }
    }

    public function DangXuat(Request $request)
    {
        $request->session()->forget(['admin_id', 'admin_name', 'admin_email']);
        return redirect()->route("DangNhap")->with(["message"=>"Cập nhật thông tin Admin thành công. Xin vui lòng đăng nhập lại!"]);
    }

    public function SuaAdmin(Request $request)
    {
        $Admin = User::find($request->id);
        return view("SuaAdmin", ["Admin" => $Admin]);
    }

    public function LuuSuaAdmin(Request $request){
        $Admin = User::find($request->id);
        $Admin->name = $request->name;
        $Admin->save();
        return redirect()->route("DangXuat");
    }

    public function XoaAdmin(Request $request){
        DB::delete('delete from users where id = ?', [$request->id]);
        return redirect()->route("Users");
    }
}

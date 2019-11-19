<?php

namespace App\Http\Controllers;

use Hocsinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class HocsinhController extends Controller
{
    public function HocSinh()
    {
        // $user='nguyễn Quang Linh';
        // return view('HocSinh',compact('user'));
        
        $hocsinh=DB::table('hocsinh')->get();
         return view('HocSinh',compact('hocsinh'));
     
    }
    public function edit($MaHS)
    {
        $hocsinh = HocSinh::findOrFail($MaHS);
        $pageName = 'News - Update';
        return view('news_update', compact('hocsinh', 'pageName'));
    }
    public function update(Request $request, $MaHS)
    {
        $news = hocsinh::find($MaHS);
        $news->title = $request->title;
        $news->email = $request->email;
        $news->description = $request->description;

        $news->save();
        return redirect()->action('Admin\AdminNewsController@index');
    }
}

@extends('master.master')
@section('content')
<<<<<<< HEAD
    <h1 align='center'> Quản lý Môn Học</h1>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
    <div class="">
    <table class="table table-bordered">
         <tr class="success">
         <thead class="thead-dark">
             <th>Mã Môn Học</th>            
             <th>Tên Môn Học</th>
             <th>Sửa</th>
             <th>Xóa</th>
             </tr>
             </thead>
             <tbody>
                
                 @foreach ($monhoc as $p)
                            <tr>
                                    <td>{{$p->MaMH}}</td>
                            <td>{{$p->TenMH}}</td>
                           

                              <td>                      
                              <a class="btn btn-primary btn-small" href="{{route('SuaMonHoc', $p->MaMH)}}">Sửa</a>
                                </td>
                                <td> 
                                  <a class="btn btn-primary btn-small" href="{{route('XoaMonHoc', $p->MaMH)}}">Xóa</a>
                                </td>
                              </tr>
                              
               @endforeach
             </tbody>
     </table>
     <a class="btn btn-primary btn-small" href="{{route('ThemMonHoc')}}">Thêm</a>

@if(Session::has('xoa'))
<script>
 alert('{{Session::get('xoa')}}');



  </script>
@endif


</body>
</html>

@endsection

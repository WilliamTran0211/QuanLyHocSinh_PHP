@extends('master.master')
@section('content')
    <h1 align='center'> Quản lý Học Sinh</h1>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
    <div class="">
    <a class="btn btn-primary btn-small" href=">">Thêm</a>
    <table class="table table-bordered">
         <tr class="success">
         <thead class="thead-dark">
             <th>MaHS</th>
             <th>Họ và Tên</th>
             <th>Ngày Sinh</th>
             <th>Giới Tính</th>
             <th>dia chi</th>
             <th>Mã Lớp</th>
             <th>Sửa</th>
             <th>Xóa</th>
             </tr>
             </thead>
             @foreach ($hocsinh as $hocsinh)
         <tr>
         <td>{{ $hocsinh->MaHS }}</td>
            <td>{{ $hocsinh->HoTen }}</td>
            <td>{{ $hocsinh->NamSinh }}</td>
            <td>{{ $hocsinh->GioiTinh }}</td>
            <td>{{ $hocsinh->DiaChi }}</td>
            <td>{{ $hocsinh->MaLop }}</td>
            <td><a class="btn btn-primary btn-small" href = 'ediths/{{ $hocsinh->MaHS }}'>Edit</a></td>
            <td><a class="btn btn-primary btn-small" href = 'delete/{{ $hocsinh->MaHS }}'>Xóa</a></td>
         </tr>
         @endforeach
      
     </table>
</body>
</html>
@endsection

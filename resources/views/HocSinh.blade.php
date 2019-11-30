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
    <table class="table table-bordered">
         <tr class="success">
         <thead class="thead-dark">
             <th>MaHS</th>
             <th>Họ và Tên</th>
             <th>Ngày Sinh</th>
             <th>Giới Tính</th>
             <th>Địa Chỉ</th>
             <th>Mã Lớp</th>
             <th>Sửa</th>
             <th>Xóa</th>
             </tr>
             </thead>

            <tr>
            <td><?php
                 foreach ($hocsinh as $p) {
                    $Mahs=$p->MaHS ;
                    $hoten=$p->HoTen;
                    $namsinh=$p->NamSinh;
                    $gioitinh=$p->GioiTinh;
                    $diachi=$p->DiaChi;
                    $malop= number_format($p->MaLop) ;
                ?>
                            <tr>
                                <td><?php echo($Mahs);?></td>
                                <td><?php echo($hoten);?></td>
                                <td><?php echo($namsinh);?></td>
                                <td><?php echo($gioitinh);?></td>
                                <td><?php echo($diachi);?></td>
                                <td><?php echo($malop);?></td>
                              <td>                      
                              <a class="btn btn-primary btn-small" href="/news_update/{{$p->MaHS}}">Sửa</a>
                                </td>
                                <td> 
                                  <a class="btn btn-primary btn-small" href="Lop.blade.php?MaHS=<?php echo $Mahs; ?>">Xóa</a>
                                </td>
                              </tr>
                              
                <?php
                }?>
             </td>
              </tr>
     </table>
    <a class="btn btn-primary btn-small" href="{{route('ThemHocSinh')}}">Thêm Học Sinh</a>
</body>
</html>
@endsection

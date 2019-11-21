@extends('master.master')
@section('content')
    <h1 align='center'> Quản lý Phụ Huynh</h1>

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
             <th>MaPH</th>
             <th>Họ và Cha</th>
             <th>Họ và Mẹ</th>
             <th>Sdt cha</th>
             <th>Sdt me</th>
             <th>Địa chỉ</th>
             <th>MaHS</th>
             <th></th>
             <th></th>
         
             </tr>
             </thead>
             <tbody>
            <?php
            foreach ($Phuhuynh as $ph) {
                ?>
                <tr>
                    <td><?php echo ($ph->MaPH) ?></td>
                    <td><?php echo ($ph->HoTenCha) ?></td>
                    <td><?php echo ($ph->HoTenMe) ?></td>
                    <td><?php echo ($ph->SDTCha) ?></td>
                    <td><?php echo ($ph->SDTMe) ?></td>
                    <td><?php echo ($ph->DiaChi) ?></td>
                    <td><?php echo ($ph->MaHS) ?></td>
                    <td>
                        <a class="btn btn-primary edit" href="">Sửa</a>
                        <a class="btn btn-primary delete" href="{{ route('DeleteLop',['MaLop' => 1])}}">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
     </table>
</body>
</html>
@endsection

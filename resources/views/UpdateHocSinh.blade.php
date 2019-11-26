@extends('master.master')
@section('content')
<html>

<head>
   <title></title>
</head>

<body>
   <h1 align='center'> Update Học Sinh</h1>
   <div class="p-5">
      <form action="/ediths/<?php echo $hocsinh[0]->MaHS; ?>" method="post">
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         <br> <br>
         <td>Tên học sinh</td>
         <br>
         <input type='text' name='stud_name' value='<?php echo $hocsinh[0]->HoTen; ?>' />
         <br> <br>
         <td>Ngay sinh</td>
         <br>
         <input type='date' name='namsinh' value='<?php echo $hocsinh[0]->NamSinh; ?>' />
         <br> <br>
         <td>Gioi Tính</td>
         <br>
         <input type='text' name='gioitinh' value='<?php echo $hocsinh[0]->GioiTinh; ?>' />
         <br> <br>
         <td>Địa chỉ</td>
         <br>
         <input type='text' name='diachi' value='<?php echo $hocsinh[0]->DiaChi; ?>' />
         <br> <br>
         <td>Mã Lớp</td>
         <br>
         <input type='text' name='malop' value='<?php echo $hocsinh[0]->MaLop; ?>' />
         <br> <br> <br>
         <input type='submit' value="Update" />
      </form>
   </div>
</body>

</html>
@endsection
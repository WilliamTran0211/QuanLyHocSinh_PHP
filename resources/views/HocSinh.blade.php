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

    <div class=" ">
        <div class="text-center">
            @if (session('status'))
                <div class="alert alert-success">
                {{ session('status') }}
                </div>  
             @endif
        </div>
        <div class="p-2">
        <a class="btn btn-primary btn-small " href=">">Thêm</a>
        </div>
        <div class="table-responsive">
    <table class="table table-bordered text-center ">
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
         <tr class="table-light">
         <td>{{ $hocsinh->MaHS }}</td>
            <td>{{ $hocsinh->HoTen }}</td>
            <td>{{ $hocsinh->NamSinh }}</td>
            <td>{{ $hocsinh->GioiTinh }}</td>
            <td>{{ $hocsinh->DiaChi }}</td>
            <td>{{ $hocsinh->MaLop }}</td>
            <td><a class="btn btn-primary btn-small" href = 'ediths/{{ $hocsinh->MaHS }}'>Edit</a></td>
            <td>
                <input type="submit" class="btn btn-primary btn-small" value="Xóa"  data-id="{{ $hocsinh->MaHS }}" data-token="{{ csrf_token() }}"/>
            </td>
 
         @endforeach

     </table>
     </div>
    </div>
    <script >
            $(".deleteProduct").click(function(){
                var id = $(this).data("MaHS");
                var token = $(this).data("token");
                $.ajax(
                {
                    url: "delete/"+id,
                    type: 'PUT',
                    dataType: "JSON",
                    data: {
                        "MaHS": id,
                        "_method": 'DELETE',
                        "_token": token,
                    },
                    success: function ()
                    {
                        console.log("it Work");
                    }
                });

                console.log("It failed");
            });
    </script>
</body>
</html>
@endsection

@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemHocSinh')}}">Thêm</a>
                <div class="content-class">
                    <table class="table table-bordered text-center  ">
                     
                            <thead class="thead-dark">
                            <tr >
                                <th>MaHS</th>
                                <th>Họ và Tên</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Địa chỉ</th>
                                <th>Mã Lớp</th>
                                <th>Hành động</th>

                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($HocSinh as $hocsinh) {
                                ?>
                                <tr class="table-light">
                                    <td>{{$hocsinh["MaHS"]}}</td>
                                    <td>{{$hocsinh["HoTen"]}}</td>
                                    <td>{{$hocsinh["NamSinh"]}}</td>
                                    <td>{{$hocsinh["GioiTinh"]}}</td>
                                    <td>{{$hocsinh["DiaChi"]}}</td>
                                    <td>{{$hocsinh["MaLop"]}}</td>

                                    <td><a class="btn btn-primary btn-small" href="{{route('SuaHocSinh',$hocsinh['MaHS'])}}">Edit</a>

                                        <a class="btn btn-primary btn-small" href="/HocSinh/<?php echo ($hocsinh["MaHS"]) ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    {{ $HocSinh->links() }}
                </div>
            </main>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#edit').on("click", function() {
            let MaHS = $(this).data('id');
            alert(MaHS);
            $("#partial-view-edit").load("/HocSinh/SuaHocSinh", {
                MaHS: MaHS
            });
        })
    })
</script>
</body>

</html>
@endsection
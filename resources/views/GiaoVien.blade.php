@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemGiaoVien')}}">Thêm</a>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã giáo viên</th>
                                <th>Tên giáo viên</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Môn học</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($GiaoVien as $giaovien) {
                                $MonHoc = \App\MonHoc::find($giaovien['MaMH']);
                                ?>
                                <tr class="table-light">
                                    <td>{{$giaovien["MaGV"]}}</td>
                                    <td>{{$giaovien["TenGV"]}}</td>
                                    <td>{{$giaovien["NgaySinh"]}}</td>
                                    <?php
                                        if ($giaovien["GioiTinh"] == 0) {
                                            ?>
                                        <td>Nam</td>
                                    <?php } else { ?>
                                        <td>Nữ</td>
                                    <?php
                                        }
                                        ?>
                                    <td>{{$giaovien["DiaChi"]}}</td>
                                    <td>{{$giaovien["Email"]}}</td>
                                    <td>{{$giaovien["SDT"]}}</td>
                                    <td>
                                        {{$MonHoc["TenMH"]}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary update" href="{{route('SuaGiaoVien',$giaovien['MaGV'])}}">Sửa</a>
                                        <a class="btn btn-primary delete" href="/GiaoVien/<?php echo ($giaovien["MaGV"]) ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    {{ $GiaoVien->links() }}
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemLop')}}">Thêm</a>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr >
                                <th class="th-lg">Mã giáo viên</th>
                                <th class="th-lg">Tên giáo viên</th>
                                <th class="th-lg">Năm sinh</th>
                                <th class="th-lg">Giới tính</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Môn học</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($GiaoVien as $giaovien){ 
                                    $MonHoc = \App\MonHoc::find($giaovien['MaMH']);
                                ?>
                                <tr class="table-light">
                                    <td>{{$giaovien["MaGV"]}}</td>
                                    <td>{{$giaovien["TenGV"]}}</td>
                                    <td>{{$giaovien["NamSinh"]}}</td>
                                    <td>{{$giaovien["GioiTinh"]}}</td>
                                    <td>{{$giaovien["DiaChi"]}}</td>
                                    <td>{{$giaovien["Email"]}}</td>
                                    <td>{{$giaovien["SDT"]}}</td>
                                    <td>
                                        {{$MonHoc["TenMH"]}}
                                    </td>
                                    <td>
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


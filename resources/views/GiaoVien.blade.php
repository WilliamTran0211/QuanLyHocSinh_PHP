@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemGiaoVien')}}">Thêm</a>
                <div class="form-group">
                    <input id="timkiem" type="text" class="form-input" placeholder="Nhập tên giáo viên để tìm kiếm" name="timkiem" />
                    <button id="btnTimKiem" type="button" class="btn btn-primary btn-small">Tìm kiếm</button>
                    
                    <?php $MonHoc = \App\MonHoc::all()->toArray();?>
                    <select id="subject" class="form-select">
                        <option selected value="">--- Môn học --- </option>
                        <?php foreach ($MonHoc as $monhoc) { ?>
                            <option value="{{$monhoc['MaMH']}}">{{$monhoc['TenMH']}}</option>
                        <?php } ?>
                    </select>

                    <button id="btnReset" type="button" class="btn btn-primary btn-small">Làm mới</button>
                </div>
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
                        <tbody class="body-table">
                            @if($GiaoVien)
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
                            @endif
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{ $GiaoVien->links() }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#giaovien_mnu").addClass("active");
        $(".pagination").removeClass("hidden-pagination");

        $("#btnTimKiem").on('click', function(e) {
            e.preventDefault();

            $(".pagination").addClass("hidden-pagination");
            $(".body-table").find("tr").remove();

            let giaTriTimKiem = $("#timkiem").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{URL::to('TimKiem')}}",
                type: "POST",
                data: {
                    TenGV: giaTriTimKiem
                },
                success: function(data) {
                    console.log(data);
                    $('tbody').html(data);
                }
            })
        });

        $('#subject').on('change',function(e){
            e.preventDefault();

            $(".pagination").addClass("hidden-pagination");
            $(".body-table").find("tr").remove();

            let giaTriTimKiemTheoMonHoc = $("#subject").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{URL::to('TimKiemTheoMonHoc')}}",
                type: "POST",
                data: {
                    MaMH: giaTriTimKiemTheoMonHoc
                },
                success: function(data) {
                    console.log(data);
                    $('tbody').html(data);
                }
            })
        })

        $("#btnReset").click(function() {
            location.reload();
        })
    });
</script>

@endsection
@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemHocKy')}}">Thêm</a>
                <div class="form-group">
                    <input id="timkiem" type="text" class="form-input" placeholder="Nhập tên loại học kỳ để tìm kiếm" name="timkiem" />
                    <button id="btnTimKiem" type="button" class="btn btn-primary btn-small">Tìm kiếm</button>

                    <?php $hocky = \App\HocKy::all()->toArray(); ?>
                    <select id="subject" class="form-select">
                        <option selected value="">--- Học kỳ --- </option>
                        <?php foreach ($HocKy as $hocky) { ?>
                            <option value="{{$hocky['NamBatDau']}}">{{$hocky['NamBatDau']}}</option>
                        <?php } ?>
                    </select>
                    <button id="btnReset" type="button" class="btn btn-primary btn-small">Làm mới</button>
                </div>
                <div class="content-class">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã học kỳ</th>
                                <th>Loại học kỳ</th>
                                <th>Năm bắt đầu</th>
                                <th>Năm kết thúc</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($HocKy as $hocky) {
                                ?>
                                <tr class="table-light">
                                    <td>{{$hocky["MaHK"]}}</td>
                                    <td>{{$hocky["LoaiHK"]}}</td>
                                    <td>{{$hocky["NamBatDau"]}}</td>
                                    <td>{{$hocky["NamKetThuc"]}}</td>
                                    <td>
                                        <a class="btn btn-primary update" href="{{route('SuaHocKy',$hocky['MaHK'])}}">Sửa</a>
                                        <a class="btn btn-primary delete" href="/HocKy/<?php echo ($hocky["MaHK"]) ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    {{ $HocKy->links() }}
                </div>
            </main>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#hocki_mnu").addClass("active");
        $('#edit').on("click", function() {
            let MaLop = $(this).data('id');
            alert(MaLop);
            $("#partial-view-edit").load("/Lop/SuaLop", {
                MaLop: MaLop
            });
        })



        $("#hocki_mnu").addClass("active");
        $(".pagination").removeClass("hidden-pagination");

        $("#btnTimKiem").on('click', function(e) {
            e.preventDefault();

            $(".pagination").addClass("hidden-pagination");
            $(".body-table").find("tr").remove();

            let giaTriTim = $("#timkiem").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{URL::to('TimKiemhk')}}",
                type: "POST",
                data: {
                    LoaiHK: giaTriTim
                },
                success: function(data) {
                    console.log(data);
                    $('tbody').html(data);
                }
            })
        });

        $('#subject').on('change', function(e) {
            e.preventDefault();

            $(".pagination").addClass("hidden-pagination");
            $(".body-table").find("tr").remove();

            let giaTriTimKiemTheohk = $("#subject").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{URL::to('TimKiemnambatdau')}}",
                type: "POST",
                data: {
                    NamBatDau: giaTriTimKiemTheohk
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
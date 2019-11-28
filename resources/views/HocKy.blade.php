@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemHocKy')}}">Thêm</a>
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
        $('#edit').on("click", function() {
            let MaLop = $(this).data('id');
            alert(MaLop);
            $("#partial-view-edit").load("/Lop/SuaLop", {
                MaLop: MaLop
            });
        })
    })
</script>
@endsection
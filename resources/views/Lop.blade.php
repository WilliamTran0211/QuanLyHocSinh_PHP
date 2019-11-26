@extends('master.master')
@section('content')
<main class="mt-2">
    <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemLop')}}">Thêm</a>
    <div class="content-class">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Lop as $lop) {
                    ?>
                    <tr>
                        <td>{{$lop["MaLop"]}}</td>
                        <td>{{$lop["TenLop"]}}</td>
                        <td>
                            <a class="btn btn-primary update" href="#">Sửa</a>
                            <a class="btn btn-primary delete" href="/Lop/<?php echo ($lop["MaLop"]) ?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
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
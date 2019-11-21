@extends('master.master')
@section('content')
<h1 align='center'> Quản lý Lớp Học</h1>
<main class="mt-2">
    <button type="button" class="btn btn-primary mt-3 mb-3">Thêm</button>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Mã lớp</th>
                <th>Mã giảng viên</th>
                <th>Tên lớp</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Lop as $lop) {
                ?>
                <tr>
                    <td><?php echo ($lop->MaLop) ?></td>
                    <td><?php echo ($lop->MaGV) ?></td>
                    <td><?php echo ($lop->TenLop) ?></td>
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
</main>
@endsection

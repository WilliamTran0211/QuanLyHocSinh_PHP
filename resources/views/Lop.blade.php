@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemLop')}}">Thêm</a>
                <div class="content-class">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr >
                                <th>Mã lớp</th>
                                <th>Tên lớp</th>
                                <th>Giáo viên chủ nhiệm</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Lop as $lop){ 
                                    $GiaoVien = \App\GiaoVien::find($lop['MaGV']);
                                ?>
                                <tr class="table-light">
                                    <td>{{$lop["MaLop"]}}</td>
                                    <td>{{$lop["TenLop"]}}</td>
                                    <td>
                                        {{$GiaoVien["TenGV"]}}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary update" href="{{route('SuaLop',$lop['MaLop'])}}">Sửa</a>
                                        <a class="btn btn-primary delete" href="/Lop/<?php echo ($lop["MaLop"]) ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    {{ $Lop->links() }}
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
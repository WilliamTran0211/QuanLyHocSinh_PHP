@extends('master.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemPH')}}">Thêm</a>

            <main class="mt-2">
            
                <div class="content-class">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã phụ huynh</th>
                                <th>Họ tên cha</th>
                                <th>Họ tên mẹ</th>
                                <th>Số điện thoại cha</th>
                                <th>Số điện thoại mẹ</th>
                                <th>Địa chỉ</th>
                                <th>Mã học sinh</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($PhuHuynh as $phuhuynh) {
                                ?>
                                <tr class="table-light">
                                    <td>{{$phuhuynh["MaPH"]}}</td>
                                    <td>{{$phuhuynh["HoTenCha"]}}</td>
                                    <td>{{$phuhuynh["HoTenMe"]}}</td>
                                    <td>{{$phuhuynh["SDTCha"]}}</td>
                                    <td>{{$phuhuynh["SDTMe"]}}</td>
                                    <td>{{$phuhuynh["DiaChi"]}}</td>
                                    <td>{{$phuhuynh["MaHS"]}}</td>
                                    <td>
                                    <a class="btn btn-primary update" href="{{route('SuaPH',$phuhuynh['MaPH'])}}">Sửa</a>
                                    </td>
                                    <td>
                                    <a class="btn btn-primary delete" href="/PhuHuynh/<?php echo ($phuhuynh["MaHS"]) ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#edit').on("click", function() {
            let MaPH = $(this).data('id');
            alert(MaPH);
            $("#partial-view-edit").load("/PhuHuynh/SuaPH", {
                MaPH: MaPH
            });
        })
    })
@endsection
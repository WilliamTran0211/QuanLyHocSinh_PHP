@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <main class="mt-2">
                <a type="button" class="btn btn-primary mt-3 mb-3 add-class" href="{{ route('ThemLop')}}">Thêm</a>
                <div class="form-group">
                    <input id="timkiem" type="text" class="form-input" placeholder="Nhập tên lớp để tìm kiếm" name="timkiem" />
                    <button id="btnTimKiem" type="button" class="btn btn-primary btn-small">Tìm kiếm</button>
                    
                    <?php $GiaoVien = \App\GiaoVien::all()->toArray();?>
                    <select id="teachers" class="form-select">
                        <option selected value="">--- Giáo viên chủ nhiệm--- </option>
                        <?php foreach ($GiaoVien as $giaovien) { ?>
                            <option value="{{$giaovien['MaGV']}}">{{$giaovien['TenGV']}}</option>
                        <?php } ?>
                    </select>

                    <button id="btnReset" type="button" class="btn btn-primary btn-small">Làm mới</button>
                </div>
                <div class="content-class">
                    <table class="table table-bordered text-center ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã lớp</th>
                                <th>Tên lớp</th>
                                <th>Giáo viên chủ nhiệm</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Lop as $lop) {
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
<script type="text/javascript">
    $(document).ready(function(){
        $("#lop_mnu").addClass("active");

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
                url: "{{URL::to('TimKiemLop')}}",
                type: "POST",
                data: {
                    TenLop: giaTriTimKiem
                },
                success: function(data) {
                    console.log(data);
                    $('tbody').html(data);
                }
            })
        });        

        $('#teachers').on('change',function(e){
            e.preventDefault();

            $(".pagination").addClass("hidden-pagination");
            $(".body-table").find("tr").remove();

            let giaTriTimKiemTheoMonHoc = $("#teachers").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{URL::to('TimKiemTheoGiaoVien')}}",
                type: "POST",
                data: {
                    MaGV: giaTriTimKiemTheoMonHoc
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
    })
</script>
@if(Session::has('message'))
<script>
    alert("{{Session::get('message')}}");
</script>
@endif
@endsection
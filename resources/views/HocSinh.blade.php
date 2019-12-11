@extends('master.master')
@section('content')
<h1 align='center'> Quản lý Học Sinh</h1>


  <div class="container">
    <a class="btn btn-primary btn-small mb-3" href="{{route('ThemHocSinh')}}">Thêm Học Sinh</a>
    <div class="form-group">
      <input id="timkiem" type="text" class="form-input" placeholder="Nhập tên học sinh để tìm kiếm" name="timkiem" />
      <button id="btnTimKiem" type="button" class="btn btn-primary btn-small">Tìm kiếm</button>

      <?php $Lop = \App\Lop::all()->toArray(); ?>
      <select id="subject" class="form-select">
        <option selected value="">--- Lớp --- </option>
        <?php foreach ($Lop as $lop) { ?>
          <option value="{{$lop['MaLop']}}">{{$lop['TenLop']}}</option>
        <?php } ?>

      </select>

      <button id="btnReset" type="button" class="btn btn-primary btn-small">Làm mới</button>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered text-center">
       
          <thead class="thead-dark">
            <th>MaHS</th>
            <th>Họ và Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Địa Chỉ</th>
            <th>Mã Lớp</th>
            <th>Hành động</th>
        
        </thead>
        <tbody class="body-table">
        <tr class="table-light" >
         <?php
              foreach ($hocsinh as $p) {
                $Lop = \App\Lop::find($p['MaLop']);
                $Mahs = $p->MaHS;
                $hoten = $p->HoTen;
                $namsinh = $p->NamSinh;
                $gioitinh = $p->GioiTinh;
                $diachi = $p->DiaChi;
                $tenlop = ($Lop->TenLop);
                ?>
        <tr>
          <td><?php echo ($Mahs); ?></td>
          <td><?php echo ($hoten); ?></td>
          <td><?php echo ($namsinh); ?></td>
          <td><?php echo ($gioitinh); ?></td>
          <td><?php echo ($diachi); ?></td>
          <td><?php echo ($tenlop); ?></td>
          <td>
            <a class="btn btn-primary btn-small" href="{{route('SuaHocSinh',$Mahs)}}">Sửa</a>
            <a class="btn btn-primary btn-small" href="Lop.blade.php?MaHS=<?php echo $Mahs; ?>">Xóa</a>
          </td>
        </tr>
      <?php
      } ?>
 
      </tr>
        </tbody>
      </table>
      <div class="pagination">
        {{ $hocsinh->links() }}
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#hocsinh_mnu").addClass("active");
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
          url: "{{URL::to('TimKiemhs')}}",
          type: "POST",
          data: {
            HoTen: giaTriTim
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

        let giaTriTimKiemTheoLop = $("#subject").val();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "{{URL::to('TimKiemTheoLop')}}",
          type: "POST",
          data: {
            MaLop: giaTriTimKiemTheoLop
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
@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-3">Sửa giáo viên</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-center">
        <form style="width:300px" action="{{route('LuuSuaGiaoVien')}}" name="giaovien" method="post" onsubmit="return KiemTraGiaoVien();">
          {{csrf_field()}}
          <div class="mb-3">
            <div class="input-group">
              <input name="magv" class="form-control" type="text" readonly="readonly" value="<?php echo ($GiaoVien->MaGV) ?>" />
            </div>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input name="tengiaovien" class="form-control" type="text" placeholder="Tên giáo viên" value="<?php echo ($GiaoVien->TenGV) ?>" />
            </div>
            <p id="error-name" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input name="ngaysinh" class="form-control" type="date" placeholder="Ngày sinh" value="<?php echo ($GiaoVien->NgaySinh) ?>" />
            </div>
            <p id="error-birthday" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input name="gioitinh" <?php if ($GiaoVien->GioiTinh == 0) : ?> checked="checked" <?php endif; ?>value="0" type="radio" /> Nam &nbsp
              <input name="gioitinh" <?php if ($GiaoVien->GioiTinh == 1) : ?> checked="checked" <?php endif; ?>value="1" type="radio" /> Nữ
            </div>
            <p id="error-gender" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <textarea name="diachi" class="form-control" type="text" placeholder="Địa chỉ" rows="4"><?php echo ($GiaoVien->DiaChi) ?></textarea>
            </div>
            <p id="error-address" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input name="email" value="<?php echo ($GiaoVien->Email) ?>" class="form-control" type="email" placeholder="Email" />
            </div>
            <p id="error-email" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input name="sdt" value="<?php echo ($GiaoVien->SDT) ?>" class="form-control" min="0" type="number" placeholder="Số điện thoại" />
            </div>
            <p id="error-sdt" class="text-danger error"></p>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <select name="mamh" class="form-control">
                <option value="" disabled selected>-- Môn học --</option>
                <?php foreach ($MonHoc as $monhoc) { ?>
                  <option <?php if ($GiaoVien->MaMH == $monhoc["MaMH"]) : ?> selected="selected" <?php endif; ?> value="{{$monhoc['MaMH']}}" label="{{$monhoc['TenMH']}}"></option>
                <?php } ?>
              </select>
            </div>
            <p id="error-mamh" class="text-danger error"></p>
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="Lưu" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
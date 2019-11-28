@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Sửa lớp</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-center">
        <form name="lop" action="{{route('LuuSuaLop')}}" method="post" onsubmit="return KiemTraLop();">
          {{csrf_field()}}
          <div class="form-group">
            <input name="malop" readonly="readonly" class="form-control" type="text" placeholder="Tên lớp" value="<?php echo ($Lop[0]->MaLop) ?>" />
          </div>
          <div class="form-group">
            <input name="tenlop" class="form-control" type="text" placeholder="Tên lớp" value="<?php echo ($Lop[0]->TenLop) ?>" />
          </div>
          <div class="input-group mb-3">
            <select name="magv" class="form-control">
              <option value="" disabled selected>-- Giáo viên chủ nhiệm --</option>
              <option value="">Null</option>
              <?php foreach ($GiaoVien as $giaovien) { 
                ?>
                <option value="{{$giaovien['MaGV']}}" <?php if($Lop[0]->MaGV == $giaovien["MaGV"]):?>
                    selected="selected"
                 <?php endif?>>{{$giaovien['TenGV']}}</option>
              <?php } ?>  
            </select>
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="Lưu" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function KiemTraLop() {
    let tenLop = document.forms["lop"]["tenlop"].value;
    if (tenLop == "") {
      alert("Tên lớp không được rỗng");
      document.forms["lop"]["tenlop"].focus();
      return false;
    }
    return true;
  }
</script>
@endsection
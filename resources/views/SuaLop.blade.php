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
          <input name="malop" readonly="readonly" class="form-control" type="text" placeholder="Tên lớp" value="<?php echo($Lop[0]->MaLop)?>" />
          </div>
          <div class="form-group">
              <input name="tenlop" class="form-control" type="text" placeholder="Tên lớp" value="<?php echo($Lop[0]->TenLop)?>" />
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
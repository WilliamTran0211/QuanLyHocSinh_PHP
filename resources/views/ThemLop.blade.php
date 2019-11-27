@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Thêm lớp mới</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-center">
        <form name="lop" action="{{route('LuuLop')}}" method="post" onsubmit="return KiemTraLop();">
          {{csrf_field()}}
          <div class="form-group">
              <input name="tenlop" class="form-control" type="text" placeholder="Tên lớp" />
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
@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Thêm Học Sinh</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-center">
        <form name="hocsinh" action="{{route('LuuHocSinh')}}" method="post" onsubmit="return KiemTraHocSinh();">
          {{csrf_field()}}
          <div class="form-group">
            <input name="hoten" class="form-control" type="text" placeholder="Tên Học sinh" />
          </div>
          <div class="form-group">
            <input type='date' class="form-control" placeholder="Năm sinh" name='namsinh' />
          </div>
          <div class="form-group">
            <input type='text' name='gioitinh' class="form-control" placeholder="Giới tính " />
          </div>
          <div class="form-group">
            <input type='text' name='diachi' class="form-control" placeholder="Địa chỉ" />
          </div>
          <div class="form-group">
        
            <input type='text' name='malop' class="form-control" placeholder="Mã lớp" />
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
  function KiemTraHocSinh() {
    let hoten = document.forms["hocsinh"]["hoten"].value;
    let namsinh = document.forms["hocsinh"]["namsinh"].value;
    let gioitinh = document.forms["hocsinh"]["gioitinh"].value;
    let diachi = document.forms["hocsinh"]["diachi"].value;
    let malop = document.forms["hocsinh"]["malop"].value;
    if (hoten == "") {
      alert("Học sinh không được rỗng trường nào hết nha");
      document.forms["hocsinh"]["hoten"].focus();
      return false;
    } else if (namsinh == "") {
      alert("Học sinh không được rỗng  năm sinh");
      document.forms["hocsinh"]["namsinh"].focus();
      return false;
    } else if (gioitinh == "") {
      alert("Học sinh không được rỗng  giới tính");
      document.forms["hocsinh"]["gioitinh"].focus();
      return false;
    } else if (diachi == "") {
      alert("Học sinh không được rỗng  địa chỉ");
      document.forms["hocsinh"]["diachi"].focus();
      return false;
    } else if (malop == "") {
      alert("Học sinh không được rỗng mã lớp");
      document.forms["hocsinh"]["malop"].focus();
      return false;
    }
    return true;
  }
</script>
@endsection
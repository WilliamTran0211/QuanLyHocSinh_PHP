@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Sửa Học Sinh</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-center">
                <form name="hocsinh" action="{{route('LuuSuaHocSinh')}}" method="post" onsubmit="return KiemTraHocSinh();">
                    {{csrf_field()}}
                    <div class="form-group">

                    <input readonly="readonly" class="form-control" type="text" placeholder="Mã học sinh" name='mahs' value='<?php echo $hocsinh[0]->MaHS; ?>' />
                    </div>
                    <div class="form-group">
                    <input type='text' class="form-control" placeholder="Tên học sinh"  name='hoten' value='<?php echo $hocsinh[0]->HoTen; ?>' />
                  </div>
                    <div class="form-group">
                        <input type='date' class="form-control" name='namsinh' value='<?php echo $hocsinh[0]->NamSinh; ?>' />
                    </div>
                    <div class="form-group">
                        <input type='text' class="form-control" name='gioitinh' value='<?php echo $hocsinh[0]->GioiTinh; ?>' />
                    </div>
                    <div class="form-group">
                        <input type='text' class="form-control" name='diachi' value='<?php echo $hocsinh[0]->DiaChi; ?>' />
                    </div>
                    <div class="form-group">
                        <input type='text' class="form-control" name='malop' value='<?php echo $hocsinh[0]->MaLop; ?>' />
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
        let tenHocSinh= document.forms["hocsinh"]["hoten"].value;
        if (tenHocSinh == "") {
            alert("Tên học sinh không được rỗng");
            document.forms["hocsinh"]["hoten"].focus();
            return false;
        }
        return true;
    }
</script>
@endsection
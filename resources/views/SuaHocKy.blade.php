@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Sửa Học Sinh</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-center">
                <form name="hocky" action="{{route('LuuSuaHocKy')}}" method="post" onsubmit="return KiemTraHocKy();">
                    {{csrf_field()}}
                    <div class="form-group">

                    <input readonly="readonly" class="form-control" type="text" placeholder="Mã học sinh" name='mahk' value='<?php echo $HocKy[0]->MaHK; ?>' />
                    </div>
                    <div class="form-group">
                        <input name="loaihk" class="form-control" type="text" placeholder="Loai học kỳ" value='<?php echo $HocKy[0]->LoaiHK; ?>' />
                    </div>
                    <div class="form-group">
                        <input type='date' class="form-control" placeholder="Năm bắt đầu" name='nambatdau' value='<?php echo $HocKy[0]->NamBatDau	; ?>' />
                    </div>
                    <div class="form-group">
                        <input type='date' name='namketthuc' class="form-control" placeholder="Năm kết thúc " value='<?php echo $HocKy[0]->NamKetThuc; ?>' />
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
    function KiemTraHocKy() {
        let loaihk = document.forms["hocky"]["LoaiHK"].value;
        if (tenHocSinh == "") {
            alert("Loại học kỳ không được rỗng");
            document.forms["hocky"]["LoaiHK"].focus();
            return false;
        }
        return true;
    }
</script>
@endsection
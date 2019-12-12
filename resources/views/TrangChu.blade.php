@extends('master.master')
@section('title','Trang Chủ')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<h1 align='center' class="p-4"> Trang chủ</h1>
<?php 
use Illuminate\Support\Facades\DB;
$counths =DB::table('hocsinh')->count();
$countgv =DB::table('giaovien')->count();
$countph =DB::table('phuhuynh')->count();
$countmh =DB::table('monhoc')->count();
$countlop =DB::table('lop')->count();
?>

<style>
    .color {
        font-size: 66px;
    }
    .container.text-center {
    margin-left: 30px;
}
</style>
<div class="container text-center">
    <div class=" row">
        <div class="col-lg-2 ">

            <div class=" color btn-primary">
                <span class=""><i class="	glyphicon glyphicon-user"></i></span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-secondary">Số lượng sinh viên là  <?php echo ($counths); ?></h3>
                </div>
            </div>
            <!-- /.info-box-content -->

        </div>
        <div class="col-lg-2 ">
            <div class=" color btn-danger">
                <span class=""><i class="glyphicon glyphicon-envelope"></i></span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-secondary">Số lượng giáo viên là  <?php echo ($countgv); ?></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class=" color btn-success">
                <span class=""><i class="	glyphicon glyphicon-home"></i></span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-secondary">Số lượng phụ huynh là  <?php echo ($countph); ?></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 ">
            <div class="color btn-warning">
                <span class=""><i class="glyphicon glyphicon-list-alt"></i></span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-secondary">Số lượng môn học là  <?php echo ($countmh); ?></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2 ">   <div class="color btn-info">
                <span class=""><i class="	glyphicon glyphicon-file"></i></span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-secondary">Số lượng lớp cho học sinh là  <?php echo ($countlop); ?></h3>
                </div>
            </div></div>

    </div>
</div>
<script type="text/javascript">
    $("#trangchu_mnu").addClass("active");
</script>

<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css" rel="stylesheet" media="print" />

@endsection
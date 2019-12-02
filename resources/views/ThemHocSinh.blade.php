@extends('master.master')
@section('content')
<h1 align='center'> THÊM HỌC SINH</h1>
<p align='center'>------***------</p>

<form action="{{route('ThemHocSinh')}}" method="post">
@csrf
<table width="700"  class="table">
  
  <tbody >
    <tr>
      <td align="right">Họ và Tên: </td>
      <td><input type="text" name="HoTen" id=""></td>
    </tr>
    <tr>
    <td align="right"><label for="">Ngày Sinh: </label></td>
    <td><input type="date" name="NgaySinh" id=""></td>
</tr>
<tr>
    <td align="right"><label for="">Giới Tính: </label></td>
    <td><input type="radio" name="GioiTinh" id="" value="0" checked>Nam
       <input type="radio" name="GioiTinh" id="" value="1">Nữ
    </td>
</tr>
<tr>
    <td align="right"><label for="">Địa Chỉ: </label></td>
    <td><input type="text" name="DiaChi" id=""></td>
</tr>
<tr>
    <td align="right"><label for="">Mã Lớp: </label></td>
<td><select name="MaLop" id="">
    @foreach($ths as $t)
    <option value="{{$t->MaLop}}">{{$t->TenLop}}</option>
    @endforeach
</select></td>
</tr>
<td align="right">
    <button type="submit" class="btn btn-primary btn-small">
           Thêm
           </button>
         </td>
  </tbody>
</table>
</form>





@endsection






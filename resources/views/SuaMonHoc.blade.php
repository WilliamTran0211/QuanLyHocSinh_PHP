@extends('master.master')
@section('content')
<h1 align='center'> CẬP NHẬP MÔN HỌC</h1>
<p align='center'>------***------</p>

<form action="{{route('SuaMonHoc1',$smh->MaMH)}}" method="post">
@csrf
<table width="700"  class="table">
  
  <tbody >
    <tr>
      <td align="right">Cập Nhập Môn Học: </td>
    <td><input type="text" name="TenMH" id="" value="{{$smh->TenMH}}"></td>
    </tr>
</tr>
<td align="right">
    <button type="submit" class="btn btn-primary btn-small">
           Cập Nhập
           </button>
         </td>
  </tbody>
 
</table>
</form>





@endsection





@extends('master.master')
@section('content')
<h1 align='center'> THÊM MÔN HỌC</h1>
<p align='center'>------***------</p>

<form action="{{route('ThemMonHoc')}}" method="post">
@csrf
<table width="700"  class="table">
  
  <tbody >
    <tr>
      <td align="right">Tên Môn Học: </td>
      <td><input type="text" name="TenMH" id=""></td>
    </tr>
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





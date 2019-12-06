@extends('master.master')
@section('content')

<h1 align='center'> Kết quả Tìm Kiếm</h1>
<p align='center'>------***------</p>

<table class=" table table-bordered">
        <thead class="thead-dark">
      <tr>
        <th ><label for="">Mã Môn Học</label></th>
        <th >Môn Học</th>
        <th ><label for="">Giáo Viên</label></th>
    </tr>
</thead>
    <tbody >
  @foreach ($fmh as $item)
<tr> <td><p> {{$item->MaMH}}</p></td>
    <td><p> {{$item->TenMH}} </p></td>
    <td><p>{{App\GiaoVien::where('MaMH', $item->MaMH )->first()->TenGV}} </p></td>
</tr>
  @endforeach
  
</tbody>

  </table>

<h3 align='center'> Số lượng kết quả: {{count($fmh)}} </h3>
  







@endsection
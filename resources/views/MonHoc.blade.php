@extends('master.master')
@section('content')
<h1 align='center'> Quản lý Môn Học</h1>
<main class="mt-2">
    <button type="button" class="btn btn-primary mt-3 mb-3">Thêm</button>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>MaMH</th>
                    <th>Tên Môn học</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
         @foreach ($monhoc as $monhoc)
         <tr>
            <td>{{ $monhoc->MaMH }}</td>
            <td>{{ $monhoc->TenMH }}</td>
            <td><a class="btn btn-primary btn-small" href = 'edit/{{ $monhoc->MaMH }}'>Edit</a></td>
            <td><a class="btn btn-primary btn-small" href = 'delete/{{ $monhoc->MaMH }}'>Xóa</a></td>
         </tr>
         @endforeach
      </table>
</main>
@endsection

@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary mb-3" href="{{route('DangKy')}}">Thêm</a>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Mã admin</th>
                            <th>Tên admin</th>
                            <th>Email</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="content-body">
                        @foreach ($Admin as $admin)
                        <tr class="table-light">
                            <td>{{$admin["id"]}}</td>
                            <td>{{$admin['name']}}</td>
                            <td>{{$admin['email']}}</td>
                            <td>{{$admin['created_at']}}</td>
                            <td>
                                <a class="btn btn-primary btn-small" href="{{route('SuaAdmin', $admin['id'])}}">Sửa</a>
                                <a id="delete" class="btn btn-primary btn-small" href="{{route('XoaAdmin', $admin['id'])}}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#user_mnu").addClass("active");
</script>

@endsection
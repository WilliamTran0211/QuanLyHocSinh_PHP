@extends('master.master')
@section('content')
<style>
  html,
  body {
    height: 100%;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  form {
    border: 3px solid #f1f1f1;
  }

  input[type=text],
  input[type=email],
  input[type=password] {
    width: 100%;
    padding: 8px 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }

    .cancelbtn {
      width: 100%;
    }
  }
</style>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-lg-6">
      <form action="{{route('ThemAdmin')}}" method="post">
        @csrf
        <div class="container">
          <label for="name"><b>Tên admin</b></label>
          <input type="text" placeholder="Nhập tên" name="name" required>

          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Nhập email" name="email" required>

          <label for="psw"><b>Mật khẩu</b></label>
          <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

          <label for="confirmpsw"><b>Xác nhận mật khẩu</b></label>
          <input type="password" placeholder="Xác nhận mật khẩu" name="confirmpsw" required>
          <input class="btn btn-primary btn-block btn-small" type="submit" style="background-color: blue;" value="Đăng ký" />
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
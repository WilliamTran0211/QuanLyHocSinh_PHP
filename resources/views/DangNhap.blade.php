<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ URL::asset('my_vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
  <link href="{{ URL::asset('my_vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
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
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 d-flex justify-content-center align-items-center">
      <div class="col-xs-12 col-sm-8 col-lg-4 col-md-4">
        <form action="{{route('formdangnhap')}}" method="post">
          @csrf
          <div class="imgcontainer">
            <img src="{{URL::asset('user_account.png')}}" alt="image" />
          </div>

          <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập email" name="email" required>

            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>
            <button type="submit" style="background-color: blue;">Đăng nhập</button>
            <!-- <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> -->
            @if($messageError)
            <p class="text-danger error">{{$messageError}}</p>
            @endif
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <!-- <button type="button" class="cancelbtn">Cancel</button> -->
            <span class="psw">Quên <a href="#">mật khẩu?</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  @if(Session::has('message'))
  <script>
    alert("{{Session::get('message')}}");
  </script>
  @endif
</body>

</html>
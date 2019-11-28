<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>@yield('title')</title>

    @include('master.headerScript')

    <style type="text/css">
        .sm-img{
            max-width: 200px;
            max-height: 150px;
        }
    </style>

</head>

<body class="">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img src="{{URL::asset('logo-res.png')}}" class="sm-img"/>
                </a>
            </div>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li id="trangchu_mnu">
                        <a href="#">
                            <i class="fas fa-home"></i>Trang Chủ</a>
                    </li>
                    <li id="hocsinh_mnu" class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-user-graduate"></i>Học Sinh</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="/HocSinh">Thông Tin Học Sinh</a>
                            </li>
                            <li>
                                <a href="/PhuHuynh">Phụ Huynh</a>
                            </li>
                        </ul>
                    </li>
                    <li id="diem_mnu">
                        <a href="{{URL::to("Diem")}}">
                            <i class="fas fa-calculator"></i>Điểm</a>
                    </li>
                    <li id="lop_mnu">
                        <a href="Lop">
                            <i class="fas fa-school"></i>Lớp</a>
                    </li>
                    <li id="hocki_mnu">
                        <a href="HocKy">
                            <i class="fas fa-calendar"></i>Học Kỳ</a>
                    </li>
                    <li id="giaovien_mnu">
                        <a href="GiaoVien">
                            <i class="fas fa-chalkboard-teacher"></i>Giáo viên</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{URL::asset('user_account.png')}}" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">john doe</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{URL::asset('user_account.png')}}" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">john doe</a>
                                                </h5>
                                                <span class="email">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="Diem">
                                                    <i class="zmdi zmdi-account"></i>Thông tin tài khoản</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="p-30">
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>



<!-- Jquery JS-->
<script src="{{ URL::asset('my_vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{ URL::asset('my_vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{ URL::asset('my_vendor/slick/slick.min.js')}}">
</script>
<script src="{{ URL::asset('my_vendor/wow/wow.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/animsition/animsition.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{ URL::asset('my_vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{ URL::asset('my_vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ URL::asset('my_vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{ URL::asset('my_vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{ URL::asset('js/main.js')}}"></script>

@yield('javascript')

</body>

</html>
<!-- end document-->

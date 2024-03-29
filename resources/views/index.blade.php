<!DOCTYPE html>
<html lang="en">

<head>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>ReThink</title>
    <link rel="icon" type="image/x-icon" href="/images/logo1.1.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">


</head>

<body>
    @include('sweetalert::alert')
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="{{ url('/') }}"><img src="images/logo1.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <div class="togle_3">
                                @if (Route::has('login'))
                                    <div class="menu_main">

                                        <div class="padding_left0">
                                            @auth
                                                <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                    href="{{ url('/') }}">หน้าแรก</a>
                                                <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            @else
                                                <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                    href="{{ route('login') }}">เข้าสู่ระบบ</a>

                                                <span class="padding_left1"></span>
                                                @if (Route::has('register'))
                                                    <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                        href="{{ route('register') }}">ลงทะเบียน</a>
                                                @endif
                                            @endauth
                                        </div>



                                    </div>
                                @endif

                            </div>
                            <div id="myNav" class="overlay w3-hover-blue">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                                <div class="overlay-content ">
                                    <div class="container">
                                        @auth
                                            <h3 class="w3-text-white">ยินดีตอนรับ</h3>
                                            <h3 class="w3-text-white"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                    height="30" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> {{ Auth::user()->name }}</h3>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/profile') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                                </svg> ข้อมูลส่วนตัว</a>
                                            <hr>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">
                                                หน้าแรก</a>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('choose') }}">
                                                คู่มือการใช้งานระบบ</a>
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white"
                                                href="{{ url('Menu_day') }}"> บันทึกของฉัน</a>
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('record') }}">
                                                ประวัติบันทึกของฉัน</a>
                                            {{-- <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                href="{{ url('certificate1') }}">รางวัลของฉัน</a> --}}
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('team') }}">
                                                เกี่ยวกับเรา</a>
                                            {{-- <a class=" w3-btn w3-round-xlarge w3-hover-white"
                                                href="{{ url('contact') }}">แหล่งให้บริการด้านสุขภาพจิต</a> --}}
                                            {{-- <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('choose') }}">คู่มือการใช้งาน</a> --}}
                                            {{-- <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('about') }}">เกี่ยวกับ</a> --}}
                                            <hr>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-box-arrow-right"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                </svg> ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                href="{{ url('/') }}">หน้าแรก</a>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                href="{{ route('login') }}">เข้าสู่ระบบ</a>
                                            @if (Route::has('register'))
                                                <a class="w3-btn w3-round-xlarge w3-hover-white"
                                                    href="{{ route('register') }}">ลงทะเบียน</a>
                                            @endif
                                        @endauth

                                    </div>
                                </div>
                            </div>
                            <span class="navbar-toggler-icon"></span>
                            <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        {{-- <h1 class="banner_taital">Get to know</h1> --}}
                        <h1 class="banner_taital_1">คิดใหม่ ให้ใจได้เปลี่ยน</h1>
                        <p class="banner_text">ลองมาเรียนรู้และปรับความคิดไปกับเรา</p>
                        <div class="contact_bt"><a href="{{ url('/Menu_day') }}">start<span
                                    class="contact_padding"><img src="images/contact-icon.png"></span></a></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="play_icon"><a href="{{ url('/Menu_day') }}" type="button"
                                id="dropdownMenuButton"><img src="images/play-icon.png"></a>

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div><img src="images/1.png" class="image_1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/dashboard/cards-center.js"></script>

    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

</body>

</html>

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
    <title>Choose</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
@section('content')

    <body>

        @extends('layouts.app')
        <!-- header section end -->
        <!-- choose section start -->
        <div class="team_section layout_padding">
            <div class="container">
                <br><br>


                <center><img class="mt-5" src="images/logo1.1.png" width="160" height="160"></center>

                <h3 class="choose_taital mt-2 mb-5"><strong><span
                            style="color: #fff359">Re</span><span>Think</span></strong>
                </h3>
                <br><br><br><br>
                <h1 class="choose_taital py-5"><strong><span>คู่มือ</span>
                        <img src="images/book.png" width="40" height="40">
                        <span style="color: #1f1f1f">การใช้งานระบบ</span></strong>
                </h1>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h2 class="mt-5"><strong>ขั้นตอนการใช้งานระบบ</strong></h2>

                {{-- 1. --}}
                <div class="mb-5">
                    <p class=" mt-3 mb-3" style="color: #000000; font-size: 18px;">1. เริ่มต้นด้วยการสมัครสมาชิกโดยใช้
                        E-mail,
                        Facebook หรือ Google Account ตั้งค่าบัญชีผู้ใช้งานและรหัสผ่าน เพื่อเข้าใช้งานระบบ ดังภาพประกอบ</p>

                    {{-- 1.1 --}}
                    <p class="mt-2" style="color: #000000; font-size: 18px;">1.1. กรณีสมัครสมาชิกโดยใช้ E-mail
                        มีขั้นตอนดังนี้
                    </p>
                    <p>&emsp;&emsp;คลิกที่ปุ่มลงทะเบียน
                        <i class="fas fa-arrow-circle-right"></i> กรอกข้อมูลให้ครบ แล้วกดปุ่ม "สร้าง Account"
                    </p>
                    <div class="container">
                        <div class="row mx-auto">
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/1.png">
                                    <p class="mt-2">คลิกที่ปุ่มลงทะเบียน</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/2.png">
                                    <p class="mt-2">กรอกข้อมูลให้ครบ แล้วกดปุ่ม "สร้าง Account"</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 1.2 --}}
                    <p class="mt-3 mb-2" style="color: #000000; font-size: 18px;">1.2. กรณีสมัครสมาชิกโดยใช้ Facebook หรือ
                        Google Account มีขั้นตอนดังนี้
                    </p>
                    <p>&emsp;&emsp;คลิกที่ปุ่มเข้าสู่ระบบ
                        <i class="fas fa-arrow-circle-right"></i> เลือกสมัครสมาชิกโดยใช้ Facebook หรือ Google Account
                    </p>
                    <div class="container">
                        <div class="row mb-5 mx-auto">
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/3.png">
                                    <p class="mt-2">คลิกที่ปุ่มเข้าสู่ระบบ</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/4.png">
                                    <p class="mt-2">เลือกสมัครสมาชิกโดยใช้ Facebook หรือ Google Account</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2. --}}
                <div class="mb-5">
                    <p class=" mt-5 mb-2" style="color: #000000; font-size: 18px;">2. ใช้งานระบบโดยการเขียนบันทึกประจำวันได้
                        1
                        ครั้งต่อวัน และสามารถเขียนบันทึกวันถัดไปได้อีกครั้งใน 12 ชั่วโมงข้างหน้า จนครบทั้ง 21 วัน
                        ดังภาพประกอบ</p>
                    <p>&emsp;&emsp;คลิกที่ปุ่มเมนู <span class="badge bg-info"><img src="images/toggle-icon.png"
                                width="20" height="20"></span>
                        <i class="fas fa-arrow-circle-right"></i> บันทึกของฉัน
                        <i class="fas fa-arrow-circle-right"></i> เริ่มเลย
                    </p>

                    <div class="container">
                        <div class="row mx-auto">
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/5.png">
                                    <p class="mt-2">คลิกที่ปุ่มเมนู <span class="badge bg-info"><img
                                                src="images/toggle-icon.png" width="20" height="20"></span></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/6.png">
                                    <p class="mt-2">แล้วเลือกคลิก "บันทึกของฉัน"</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/7.png">
                                    <p class="mt-2">คลิกที่ปุ่ม "เริ่มเลย" เพื่อเริ่มบันทึก</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/8.png">
                                    <p class="mt-2">ตัวอย่างหน้าบันทึกของฉัน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. --}}
                <div class="mb-5">
                    <p class=" mt-5 mb-2" style="color: #000000; font-size: 18px;">3. คุณสามารถตรวจสอบ
                        ประวัติการเขียนบันทึกของคุณย้อนหลังได้ทุกวันในรูปแบบของไฟล์เอกสาร(PDF)</p>

                    <p>&emsp;&emsp;คลิกที่ปุ่มเมนู <span class="badge bg-info"><img src="images/toggle-icon.png"
                                width="20" height="20"></span>
                        <i class="fas fa-arrow-circle-right"></i> ประวัติบันทึกของฉัน
                        <i class="fas fa-arrow-circle-right"></i> ดาวน์โหลด
                    </p>

                    <div class="container">
                        <div class="row mx-auto">
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/5.png">
                                    <p class="mt-2">คลิกที่ปุ่มเมนู <span class="badge bg-info"><img
                                                src="images/toggle-icon.png" width="20" height="20"></span></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/9.png">
                                    <p class="mt-2">แล้วเลือกคลิก "ประวัติบันทึกของฉัน"</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/10.png">
                                    <p class="mt-2">คลิกที่ปุ่ม "ดาวน์โหลด" เพื่อดูประวัติการบันทึกของฉัน</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-2 mb-5 image_4">
                                    <img src="images/คู่มือ/11.png">
                                    <p class="mt-2">ตัวอย่างหน้าประวัติการบันทึกของฉัน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. --}}
                <div class="mb-5">
                    <h3 class="mb-2"><strong>เพิ่มเติม</strong></h3>
                    <p class=" mt-3 mb-3" style="color: #000000; font-size: 18px;">
                        - กรณีที่สมัครสมาชิกผ่านช่องทางใดช่องทางหนึ่งแล้ว หากสมัครเพิ่มจะใช้ E-mail เดิมซ้ำไม่ได้ </p>
                    <p class=" mt-3" style="color: #000000; font-size: 18px;">- กรณีลืมรหัสผ่าน คุณสามารถกด
                        <a href="{{ route('password.request') }}">"ลืมรหัสผ่าน"</a> เพื่อกรอก
                        E-mail
                        และรอรับ link เพื่อเปลี่ยนรหัสผ่านใหม่
                    </p>
                    <p class="mb-3" style="color: red; font-size: 18px;">*กรุณาตรวจสอบ E-mail ให้ถูกต้องก่อนยืนยัน</p>
                </div>

            </div>
        </div>
        <!-- choose section end -->

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
@endsection

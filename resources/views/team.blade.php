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
    <title>Team</title>
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

        <!-- team section start -->
        <div class="team_section layout_padding">
            <div class="container">
                <br><br><br><br><br>

                <center><img class="mt-5" src="images/logo1.1.png" width="160" height="160"></center>

                <h1 class="font-weight-bold choose_taital mt-2 mb-2"><span
                            style="color: #fff359">Re</span><span>Think</span>
                </h1>
                <h6 class="font-weight-bold choose_taital mb-5"><strong><span style="color: #1f1f1f;">คิดใหม่ ให้ใจได้เปลี่ยน</span>
                </h6>

                <p class=" mt-5" style="color: #000000; font-size: 18px;">&emsp;&emsp;&emsp;Rethink
                    เป็นเว็บไชต์ที่ถูกพัฒนาออกมาในรูปแบบของการเขียนบันทึกประจำวัน ที่จะช่วยให้คุณเข้าใจตนเองมากขึ้น
                    การบันทึกอย่างต่อเนื่องทั้ง 21 วัน จะพาคุณไปเรียนรู้การปรับเปลี่ยนรูปแบบความคิด เพื่อจัดการกับอารมณ์
                    อาการทางร่างกาย และพฤติกรรมที่ไม่พึงประสงค์ โดยเว็บไซต์ถูกพัฒนามาให้สามารถใช้งานและเข้าถึงได้ง่าย</p>
                <p class="" style="color: #000000; font-size: 18px;">
                    &emsp;&emsp;&emsp;เว็บไซต์ของเราพัฒนาขึ้นโดยมีแนวคิดพื้นฐานจากทฤษฏีการบำบัดทางจิตวิทยาที่มีชื่อว่า
                    Cognitive Behavioral Therapy ซึ่งมีแนวคิดว่า ความคิดอัตโนมัติที่บุคคลมีต่อเหตุการณ์หนึ่ง
                    ส่งผลต่อทั้งอารมณ์ อาการทางร่างกาย และพฤติกรรม ผู้พัฒนาเล็งเห็นความสำคัญของแนวคิดนี้
                    ว่าจะเป็นประโยชน์ต่อผู้ใช้งานในการปรับเปลี่ยนความคิด</p>
                <p class=" mb-5" style="color: #000000; font-size: 18px;">&emsp;&emsp;&emsp;ทีมผู้พัฒนาอยากให้ Rethink
                    เป็นอีกหนึ่งเครื่องมือที่ช่วยให้ผู้ใช้งานได้ฝึกทำความเข้าใจตนเอง พัฒนาตนเอง มีความสุขในการใช้ชีวิต
                    และมีสุขภาพจิตที่ดียิ่งขึ้น</p>

                <br><br><br><br><br>
                <h1 class="font-weight-bold choose_taital py-5"><span>ทีม</span> <img src="images/development.png" width="50"
                        height="50"> <span style="color: #1f1f1f">ผู้พัฒนา</span></h1>
                <p class="choose_text"></p>

                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <div class="mt-5 mb-3 image_4"><img src="images/dev1.png" width="160" height="160"></div>
                            {{-- <h6 class="follow_text">ข้อมูลส่วนตัว</h6> --}}

                            <h4 class="mt-4 mb-2 text-center">นายภควัต นาเจิมพลอย</h4>
                            <h4 class="mb-2 text-center">MR.PAKAWAT NAJERMPLOY</h4>
                            <h4 class="mb-2 text-center">รหัสนิสิต 62011211064</h4>
                            <p class="mt-3 mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ</p>
                            <p class="mb-2 text-center">คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-4 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100">
                            <div class="mt-5 mb-3 image_4"><img src="images/dev2.png" width="160" height="160"></div>
                            {{-- <h6 class="follow_text">ข้อมูลส่วนตัว</h6> --}}

                            <h4 class="mt-4 mb-2 text-center">นายภูวนาท ประทุมวัน</h4>
                            <h4 class="mb-2 text-center">MR.PHUWANART PRATUMWAN</h4>
                            <h4 class="mb-2 text-center">รหัสนิสิต 62011211025</h4>
                            <p class="mt-3 mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ</p>
                            <p class="mb-2 text-center">คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-4 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100">
                            <div class="mt-5 mb-3 image_4"><img src="images/dev3.png" width="160" height="160"></div>
                            {{-- <h6 class="follow_text">ข้อมูลส่วนตัว</h6> --}}

                            <h4 class="mt-4 mb-2 text-center">นางสาวจุฑามาศ หาสุข</h4>
                            <h4 class="mb-2 text-center">MISS.JUTHAMAS HASUK</h4>
                            <h4 class="mb-2 text-center">รหัสนิสิต 62011211108</h4>
                            <p class="mt-3 mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ</p>
                            <p class="mb-2 text-center">คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-4 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>
                    </div>
                </div>

                <br><br><br><br><br>
                <h1 class="font-weight-bold choose_taital mt-5 mb-3"><span>ร่วม</span><img src="images/computer-icon.png" width="70"
                        height="70"><span style="color: #1f1f1f">กับ</span></h1>

                <h2 class="text-center">คลินิกสุขภาพจิต โรงพยาบาลสุทธาเวช</h2>
                <h2 class="text-center">คณะแพทยศาสตร์ มหาวิทยาลัยมหาสารคาม</h2>

                <div class="row row-cols-1 row-cols-md-1 g-4 mt-5 mb-5">
                    <div class="card h-100 mx-auto mt-5 mb-5">
                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">อ.พญ.กองกาญจน์ จันทน์จารุสิริ</h3>
                            <p class="mb-2 text-center">อาจารย์สาขาจิตเวชศาสตร์เด็กและวัยรุ่น</p>
                        </div>

                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">ผศ.พญ.จริยา จิรานุกูล</h3>
                            <p class="mb-2 text-center">อาจารย์สาขาจิตเวชศาสตร์</p>

                        </div>

                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">น.ส.ธาณัฐดา สิริโสนแก้ว</h3>
                            <p class="mb-2 text-center">นักจิตวิทยา</p>

                        </div>

                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">นายพีระยุทธ ไชยคุณ</h3>
                            <p class="mb-2 text-center">นักจิตวิทยาคลินิก</p>
                        </div>

                    </div>
                </div>

                <br><br><br><br><br>
                <h1 class="font-weight-bold choose_taital mt-5 mb-3"><span>ขอ</span><img src="images/pray.png" width="40"
                        height="40"><span style="color: #1f1f1f">ขอบคุณ</span></h1>

                <h2 class="text-center">อาจารย์ประจำภาควิชาเทคโนโลยีสารสนเทศ</h2>
                <h2 class="text-center">คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</h2>

                <div class="row row-cols-1 row-cols-md-1 g-4 mt-5 mb-5">
                    <div class="card h-100 mx-auto mt-5 mb-5">
                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">ผู้ช่วยศาสตราจารย์ ธนันชัย คำเกตุ</h3>
                            <p class="mt-3 mb-2 text-center">อาจารย์ที่ปรึกษาโปรเจ็ค</p>
                            <p class="mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-5 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>

                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">ผู้ช่วยศาสตราจารย์ วุฒิชัย วิเชียรไชย</h3>
                            <p class="mt-3 mb-2 text-center">อาจารย์ที่ปรึกษาโปรเจ็ค</p>
                            <p class="mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-5 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>

                        <div class="col-md-6 mt-5 mb-5 mx-auto">
                            {{-- <div class="mt-5 mb-3 image_4"><img src="images/user.png" width="50" height="50"></div> --}}
                            <h3 class="mt-5 mb-2 text-center">อาจารย์ ปรีชา น้อยอำคา</h3>
                            <p class="mt-3 mb-2 text-center">อาจารย์ที่ปรึกษาโปรเจ็ค</p>
                            <p class="mb-2 text-center">สาขาวิชาเทคโนโลยีสารสนเทศ คณะวิทยาการสารสนเทศ</p>
                            <p class="mt-5 mb-4 text-center">มหาวิทยาลัยมหาสารคาม</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="team_section_2 layout_padding">
                    <div class="container">
                        <div class="images_main_1">
                            <div class="row py-5">
                                <div class="col-sm-5">
                                    <div class="image_4"><img src="images/dev1.png" width="190" height="190"></div>
                                    <h6 class="follow_text">Follow Us</h6>
                                    <div class="follow_social_icon">
                                        <ul>
                                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                            <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <h2 class="consectetur_text">นายภควัต นาเจิมพลอย</h2>
                                    <h2 class="consectetur_text">Mr.Pakawat Najermploy</h2>
                                    <p class="dummy_text">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span>
                                            มหาวิทยาลัยมหาสารคาม</span></p>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="images_main">
                            <div class="row py-5">
                                <div class="col-sm-7">
                                    <h2 class="consectetur_text_1">นายภูวนาท ประทุมวัน</h2>
                                    <h2 class="consectetur_text_1">Mr.Phuwanart Pratumwan</h2>
                                    <p class="dummy_text_1">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span>
                                            มหาวิทยาลัยมหาสารคาม</span></p>
                                </div>
                                <div class="col-sm-5">
                                    <div class="image_4"><img src="images/dev2.png" width="190" height="190"></div>
                                    <h6 class="follow_text">Follow Us</h6>
                                    <div class="follow_social_icon">
                                        <ul>
                                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                            <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="images_main_1">
                            <div class="row py-5">
                                <div class="col-sm-5">
                                    <div class="image_4"><img src="images/dev3.png" width="160" height="160"></div>
                                    <h6 class="follow_text">Follow Us</h6>
                                    <div class="follow_social_icon">
                                        <ul>
                                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                            <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <h2 class="consectetur_text">นางสาว จุฑามาศ หาสุข</h2>
                                    <h2 class="consectetur_text">Miss.Juthamas Hasuk</h2>
                                    <p class="dummy_text">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span>
                                            มหาวิทยาลัยมหาสารคาม</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}



        <!-- Newsletter section end -->

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

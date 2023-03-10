<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */


    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }


    input[type=radio] {
        transform: scale(1.4);
    }

    /* Range */
    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 5px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }

    /**/

    .slider:hover {
        opacity: 1;
    }

    .sliderticks {
        display: flex;
        justify-content: space-between;
        padding: 0 12px;
    }

    .sliderticks p {
        position: relative;
        display: flex;
        justify-content: center;
        text-align: center;
        width: 1px;
        background: #D3D3D3;
        height: 10px;
        line-height: 40px;
        margin: 5px 0 20px 0;
    }

    .my-custom-scrollbar {
        position: relative;
        width: 100%;
        max-width: 1120px;
        height: 600px;
        overflow: auto;
        overflow-x: hidden;
    }

    video {
        /* override other styles to make responsive */
        width: 100% !important;
        height: auto !important;

    }
</style>

@section('content')

    <body>
        @extends('layouts.app')
        <!-- Comment Form Start -->
        <div class="layout_padding">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="card o-hidden border-0 shadow-lg my-5  w3-theme-l4">
                        <div class="card-body p-0 ">
                            <div class="p-5">

                                <form method="post"  action="{{ url('store2') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY2</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>


                                        <h3 for="customRange2">วันนี้ความรู้สึกเป็นสีอะไร:</h3>
                                        <div class="row">
                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #FFFF00"
                                                        type="radio" value="สีเหลือง" name="flexRadioDefault"
                                                        id="color_feel_today1">
                                                    <img src="images/emu/emu4.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today1">
                                                        ความสุข
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger" type="radio" value="สีแดง"
                                                        name="flexRadioDefault" id="color_feel_today2">
                                                    <img src="images/emu/emu2.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today2">
                                                        ความโกรธ
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #A084DC"
                                                        type="radio" value="สีเขียว" name="flexRadioDefault"
                                                        id="color_feel_today3">
                                                    <img src="images/emu/emu3.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today3">
                                                        ความกลัว
                                                    </label>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #7286D3"
                                                        type="radio" value="สีฟ้า" name="flexRadioDefault"
                                                        id="color_feel_today4">
                                                    <img src="images/emu/emu1.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today4">
                                                        ความเศร้า
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slidecontainer py-5">
                                            <h3 for="customRange2">ระดับความรู้สึก: <label for="" id="demo"
                                                    style="font-weight:bold;color:red"></label></h3>
                                            <input type="range" min="1" max="5" name="value"
                                                value="{{ old('value') }}" class="slider" id="myRange">
                                            <div class="sliderticks">
                                                <p>น้อยที่สุด</p>
                                                <p>น้อย</p>
                                                <p>ปานกลาง</p>
                                                <p>มาก</p>
                                                <p>มากที่สุด</p>
                                            </div>
                                        </div>

                                        <h3 class="py-5" for="customRange2"><i class="fas fa-edit"></i>
                                            อะไรทำให้คุณรู้สึกอย่างนั้น:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." required></textarea>
                                    </div>

                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY2</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>


                                        <h1 class="text-center py-5"><span
                                                class="badge rounded-pill bg-info">นิทานเรื่อง...เพื่อน 2 คน</span></h1>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/day2/เพื่อน_new/1.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/เพื่อน_new/2.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/เพื่อน_new/3.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/เพื่อน_new/4.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/เพื่อน_new/5.png" style="width:100%">
                                        </div>
                                        <p class="py-3">ขอบคุณนิทานจาก:<a target="_blank"
                                                href="http://www.pakornblog.com/story.php?act=detail&storyid=47&fbclid=IwAR1q_aaH7ChQp2DEDlosUceN2DCUfLBupQ2ZxBVDHh4BuMq3fXDFQe4ZKGE">
                                                PakornBlok</a></p>
                                        <hr>
                                        <h3 class="py-3" for="customRange2"><i class="fas fa-edit"></i>
                                            คุณได้อะไรจากนิทานเรื่องนี้ :</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..."></textarea>
                                    </div>

                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY2</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>

                                        <div class="row py-5 text-center">
                                            <h2 class="text-center py-5">สัมผัสความ "<span class="text-red">โกรธ</span>"
                                                ในร่างกายเรา...</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <img class="mySlides1" src="images/day2/02(1)_new.png"
                                                    style="width:100%">
                                                <video class="mySlides1" autoplay muted loop="true">
                                                    <source src="images/day2/02(2)_new.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY2</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>


                                        <div class="row py-5">
                                            <h1 class="text-center mt-2 mb-4">
                                                <i class="fas fa-angry text-red"></i>
                                                เมื่อคุณรู้สึก "<span class="text-red">โกรธ</span>"
                                                ร่างกายของคุณมีอะไรเกิดขึ้นบ้าง...
                                                <i class="fas fa-angry text-red"></i>
                                            </h1>

                                            <div class="container">
                                                <div class="row w3-center">
                                                    {{-- ข้อ1 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="หน้าแดง"
                                                                            name="feel_body1" id="feel_body1">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today1">
                                                                            1.ตาแข็ง
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="หน้าซีด"
                                                                            name="feel_body1" id="feel_body2">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today2">
                                                                            1.ตาเป็นประกาย
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ข้อ2 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-info">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="หายใจช้า"
                                                                            name="feel_body2" id="feel_body3">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today3">
                                                                            2.หายใจโล่ง
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-info">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value=" หายใจเร็ว"
                                                                            name="feel_body2" id="feel_body4">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            2.หายใจแรง
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ข้อ3 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-danger">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="กล้ามเนื้อผ่อนคลาย"
                                                                            name="feel_body3" id="feel_body5">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            3.หน้างิ้วคิ้วขมวด
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-danger">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="กล้ามเนื้อเกร็ง"
                                                                            name="feel_body3" id="feel_body6">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            3.คิ้วตก
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ข้อ4 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-success">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="กำมือแน่น"
                                                                            name="feel_body4" id="feel_body7">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            4.กำหมัด
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-success">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="กำมือขึ้นแล้วหมุนๆ"
                                                                            name="feel_body4" id="feel_body8">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            4.มือสั่น
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ข้อ5 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-warning">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="ตัวร้อน"
                                                                            name="feel_body5" id="feel_body9">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            5.แก้มป่อง
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-warning">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="ตัวเย็น"
                                                                            name="feel_body5" id="feel_body10">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            5.หน้าแดง
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ข้อ6 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="เหงื่อไม่ออก"
                                                                            name="feel_body6" id="feel_body11">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            6.ตัวสั่น
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="เหงื่อ ออก"
                                                                            name="feel_body6" id="feel_body12">
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            6.ตัวอ่อนปวกเปียก
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    {{-- Content5 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY2</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>

                                        <div class="row py-5 text-center">
                                            <h2 class="text-center py-5">5 วิธีจัดการความ "<span class="text-red">โกรธ <i
                                                        class="fas fa-angry text-red"></i></span>"</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <img class="mySlides1" src="images/day2/02(3)_new.jpg"
                                                    style="width:100%">
                                                {{-- <img class="mySlides1" src="images/day2/02(4).png" style="width:100%">
                                                <img class="mySlides1" src="images/day2/02(5).png" style="width:100%"> --}}
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 col-3 mx-auto py-5">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Comment Form End -->
                                <br>
                            </div>
                        </div>

                        <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle"
                            style="width:100%">
                            <div class="w3-btn w3-round-xlarge w3-left w3-hover-text-khaki" onclick="plusSlides(-1)">
                                &#10094;</div>
                            <div class="w3-btn w3-round-xlarge w3-right w3-hover-text-khaki" onclick="plusSlides(1)">
                                &#10095;</div>
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>


        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
                output.innerHTML = this.value;
            }
        </script>
        <script>
            var slider2 = document.getElementById("myRange2");
            var output2 = document.getElementById("demo2");
            output2.innerHTML = slider2.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider2.oninput = function() {
                output2.innerHTML = this.value;
            }
        </script>
        <script>
            var slider3 = document.getElementById("myRange3");
            var output3 = document.getElementById("demo3");
            output3.innerHTML = slider3.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider3.oninput = function() {
                output3.innerHTML = this.value;
            }
        </script>
        <script>
            var slider4 = document.getElementById("myRange4");
            var output4 = document.getElementById("demo4");
            output4.innerHTML = slider4.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider4.oninput = function() {
                output4.innerHTML = this.value;
            }
        </script>
        <script>
            var slider5 = document.getElementById("myRange5");
            var output5 = document.getElementById("demo5");
            output5.innerHTML = slider5.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider5.oninput = function() {
                output5.innerHTML = this.value;
            }
        </script>

        <script>
            const correctAnswer = "option1";


            function disableCheckbox() {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].disabled = true;
                }
            }

            function highlightAnswer(answer) {

                if (answer == correctAnswer) {
                    document.getElementById(correctAnswer).style.backgroundColor = "red";
                    document.getElementById("result").innerHTML = "คำตอบ: คุณเลือกตอบความคิด คำตอบที่ถูกคือ ความคิด";
                } else {
                    document.getElementById(answer).style.backgroundColor = "lightgreen";
                    document.getElementById("result").innerHTML = "คำตอบ: คุณเลือกตอบอารมณ์ คุณตอบถูกแล้ว";
                }
            }
        </script>

        </html>
    @endsection

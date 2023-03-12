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
        transform: scale(1.5);
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

    .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
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

    .form-check-label {
        font-size: 18px
    }

    .result-text {
        font-size: 22px;
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
                        <div class="card-body p-0">
                            <div class="p-5">

                               
                                <form method="post"  action="{{ url('store10') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY10</span>
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
                                                        id="color_feel_today1" required>
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
                                                        name="flexRadioDefault" id="color_feel_today2" required>
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
                                                        id="color_feel_today3" required>
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
                                                        id="color_feel_today4" required>
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
                                                value="{{ old('value') }}" class="slider" id="myRange" required>
                                            <div class="sliderticks">
                                                <p>น้อยที่สุด</p>
                                                <p>น้อย</p>
                                                <p>ปานกลาง</p>
                                                <p>มาก</p>
                                                <p>มากที่สุด</p>
                                            </div>
                                        </div>

                                        <h3 class="mt-5 mb-2" for="customRange2"><i class="fas fa-edit"></i>
                                            เหตุการณ์ที่เกิดขึ้น:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="เหตุการณ์ที่เกิดขึ้น..." required></textarea>

                                        <h3 class="mt-5 mb-2" for="customRange2"><i class="fas fa-edit"></i>
                                            คิดยังไงกับเหตุการณ์ที่เกิดขึ้น:</h3>
                                        <textarea name="v3_2" id="v3_2" class="form-control shadow-textarea " rows="8"
                                            placeholder="คิดยังไงกับเหตุการณ์ที่เกิดขึ้น..." required></textarea>
                                    </div>

                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY10</span>
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

                                        <div class="row text-center">

                                            <video class="mySlides1" autoplay muted loop="true">
                                                <source src="images/day10/เกม/1.mp4" type="video/mp4">
                                            </video>

                                            <h2 class="mt-5 mb-3">คุณคิดว่าบุคคลในภาพน่าจะคิดอะไรอยู่?</h2>

                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v4"
                                                                id="option10" style="background-color: #A084DC"
                                                                onclick="disableCheckbox(this.value);highlightAnswer('option10');"
                                                                value="  ทำไมขับรถแบบนี้ไม่มีมารยาท = ถูก" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                ทำไมขับรถแบบนี้ไม่มีมารยาท.
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v4"
                                                                id="option20" style="background-color: #A084DC"
                                                                onclick="disableCheckbox(this.value);highlightAnswer('option20');"
                                                                value="  เขาจะชนเรามั้ยนะ = ผิด" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                เขาจะชนเรามั้ยนะ.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="py-3 result-text" id="result" name="result"
                                                    type="text"></p>
                                            </div>

                                        </div>

                                    </div>

                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY10</span>
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

                                        <div class="row text-center">

                                            <video class="mySlides1" autoplay muted loop="true">
                                                <source src="images/day10/เกม/2.mp4" type="video/mp4">
                                            </video>

                                            <h2 class="mt-5 mb-3">คุณคิดว่าบุคคลในภาพน่าจะคิดอะไรอยู่?</h2>

                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v5"
                                                                id="option30" style="background-color: #A084DC"
                                                                onclick="disableCheckbox2(this.value);highlightAnswer2('option30');"
                                                                value=" ฉีดยาฆ่าแมลงแล้ว
                                                                มาได้ไงนะ  = ผิด" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                ฉีดยาฆ่าแมลงแล้ว
                                                                มาได้ไงนะ
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v5"
                                                                id="option40" style="background-color: #A084DC"
                                                                onclick="disableCheckbox2(this.value);highlightAnswer2('option40');"
                                                                value=" อี๋!!! สกปรก = ถูกต้อง" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                อี๋!!! สกปรก
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="py-3 result-text" id="result2" name="result2"
                                                    type="text"></p>

                                            </div>

                                        </div>

                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY10</span>
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

                                        <div class="row text-center">

                                            <video class="mySlides1" autoplay muted loop="true">
                                                <source src="images/day10/เกม/3.mp4" type="video/mp4">
                                            </video>

                                            <h2 class="mt-5 mb-3">คุณคิดว่าบุคคลในภาพน่าจะคิดอะไรอยู่?</h2>

                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v6"
                                                                id="option50" style="background-color: #A084DC"
                                                                onclick="disableCheckbox3(this.value);highlightAnswer3('option50');"
                                                                value=" เราก็สวยนะ เราหาแฟนใหม่ไม่ยากหรอก = ผิด" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                เราก็สวยนะ เราหาแฟนใหม่ไม่ยากหรอก
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="v6"
                                                                id="option60" style="background-color: #A084DC"
                                                                onclick="disableCheckbox3(this.value);highlightAnswer3('option60');"
                                                                value=" เขาไม่รักเราแล้ว = ถูก" required>
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                เขาไม่รักเราแล้ว
                                                            </label>
                                                        </div>
                                                    </div>

                                                    
                                                </div>

                                                <p class="py-3 result-text" id="result3" name="result3"
                                                    type="text"></p>

                                            </div>

                                        </div>

                                    </div>

                                    {{-- Content5 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY10</span>
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

                                        <div class="row text-center">

                                            <h1 class="mt-5 mb-3"><span class="badge rounded-pill bg-primary">Interactional Model</span></h1>
                                            <h2><span class="badge rounded-pill bg-primary">เหตุการณ์
                                                    <i class="fas fa-arrow-circle-right"></i> ความคิด
                                                    <i class="fas fa-arrow-circle-right"></i> อารมณ์/พฤติกรรม
                                                </span></h2>

                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <video class="mySlides1" autoplay muted loop="true">
                                                    <source src="images/day10/Interactional model/1.mp4" type="video/mp4">
                                                </video>
                                                <video class="mySlides1" autoplay muted loop="true">
                                                    <source src="images/day10/Interactional model/2.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 col-3 py-3 mx-auto">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                        </div>
                                    </div>

                                </form>
                                <br>
                                <!-- Comment Form End -->
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
            const correctAnswer = "option10";

            function disableCheckbox(v5) {
                var checkboxes = document.querySelectorAll('input[name="v4"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].style.pointerEvents = "none";
                    checkboxes[i].style.color = "gray";
                }
            }

            function highlightAnswer(answer) {
                if (answer == correctAnswer) {
                    document.getElementById(correctAnswer).style.backgroundColor = "lightgreen";
                    document.getElementById("result").innerHTML =
                        "เฉลย: คุณเลือกตอบ ทำไมขับรถแบบนี้ไม่มีมารยาท คุณตอบถูกแล้ว";
                    document.getElementById("result").style.color = "green";

                } else {
                    document.getElementById(answer).style.backgroundColor = "red";
                    document.getElementById("result").innerHTML =
                        "เฉลย: คุณเลือกตอบเขาจะชนเรามั้ยนะ คำตอบที่ถูกคือ...ทำไมขับรถแบบนี้ไม่มีมารยาท";
                    document.getElementById("result").style.color = "red";
                }
            }
        </script>

        <script>
            const correctAnswer2 = "option30";

            function disableCheckbox2(v6) {
                var checkboxes2 = document.querySelectorAll('input[name="v5"]');
                for (var i = 0; i < checkboxes2.length; i++) {
                    checkboxes2[i].style.pointerEvents = "none";
                    checkboxes2[i].style.color = "gray";
                }
            }

            function highlightAnswer2(answer2) {
                if (answer2 == correctAnswer2) {
                    document.getElementById(correctAnswer2).style.backgroundColor = "red";
                    document.getElementById("result2").innerHTML =
                        "เฉลย: คุณเลือกตอบ ฉีดยาฆ่าแมลงแล้ว มาได้ไงนะ คำตอบที่ถูกคือ...อี๋!!! สกปรก";
                    document.getElementById("result2").style.color = "red";

                } else {
                    document.getElementById(answer2).style.backgroundColor = "lightgreen";
                    document.getElementById("result2").innerHTML =
                        "เฉลย: คุณเลือกตอบ อี๋!!! สกปรก คุณตอบถูกแล้ว";
                    document.getElementById("result2").style.color = "green";
                }
            }
        </script>

        <script>
            const correctAnswer3 = "option50";

            function disableCheckbox3(v7) {
                var checkboxes3 = document.querySelectorAll('input[name="v6"]');
                for (var i = 0; i < checkboxes3.length; i++) {
                    checkboxes3[i].style.pointerEvents = "none";
                    checkboxes3[i].style.color = "gray";
                }
            }

            function highlightAnswer3(answer3) {
                if (answer3 == correctAnswer3) {
                    document.getElementById(correctAnswer3).style.backgroundColor = "red";
                    document.getElementById("result3").innerHTML =
                        "เฉลย: คุณเลือกตอบ  เราก็สวยนะ เราหาแฟนใหม่ไม่ยากหรอก คำตอบที่ถูกคือ...เขาไม่รักเราแล้ว";
                    document.getElementById("result3").style.color = "red";

                } else {
                    document.getElementById(answer3).style.backgroundColor = "lightgreen";
                    document.getElementById("result3").innerHTML =
                        "เฉลย: คุณเลือกตอบ เขาไม่รักเราแล้ว คุณตอบถูกแล้ว";
                    document.getElementById("result3").style.color = "green";
                }
            }
        </script>


        {{-- <script>
            const correctAnswer = "option1";

            function disableButton(v5) {
                var checkboxes = document.querySelectorAll('name[name="v5"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].style.pointerEvents = "none";
                    checkboxes[i].style.color = "gray";
                    //if(!checkboxes[i].checked) checkboxes[i].disabled = true;
                }
            }

            function highlightAnswer(answer) {

                if (answer == correctAnswer) {
                    document.getElementById(correctAnswer).style.backgroundColor = "lightgreen";
                    document.getElementById("result").innerHTML =
                        "เฉลย: คุณเลือกตอบ ทำไมขับรถแบบนี้ไม่มีมารยาท. คุณตอบถูกแล้ว";
                        document.getElementById("result").style.color = "green";
                        
                } else {
                    document.getElementById(answer).style.backgroundColor = "red";
                    document.getElementById("result").innerHTML =
                        "เฉลย: คุณเลือกตอบเขาจะชนเรามั้ยนะ. คำตอบที่ถูกคือ...ทำไมขับรถแบบนี้ไม่มีมารยาท.";
                        document.getElementById("result").style.color = "red";
                }
            }
        </script> --}}

        {{-- <script>
            const correctAnswer2 = "option11";

            function disableButton2(v6) {
                var checkboxes2 = document.querySelectorAll('name[name="v6"]');
                for (var i = 0; i < checkboxes2.length; i++) {
                    checkboxes2[i].style.pointerEvents = "none";
                    //checkboxes2[i].disabled = true;
                }
            }

            function highlightAnswer2(answer2) {

                if (answer2 == correctAnswer2) {
                    document.getElementById(correctAnswer2).style.backgroundColor = "red";
                    document.getElementById("result2").innerHTML =
                        "เฉลย: คุณเลือกตอบ ฉีดยาฆ่าแมลงแล้ว มาได้ไงนะ. คำตอบที่ถูกคือ...อี๋!!! สกปรก.";
                    document.getElementById("result2").style.color = "red";
                } else {
                    document.getElementById(answer2).style.backgroundColor = "lightgreen";
                    document.getElementById("result2").innerHTML = "เฉลย: คุณเลือกตอบ อี๋!!! สกปรก. คุณตอบถูกแล้ว";
                    document.getElementById("result2").style.color = "green";
                }
            }
        </script> --}}

        {{-- <script>
            const correctAnswer3 = "option33";

            function disableButton3(v7) {
                var checkboxes3 = document.querySelectorAll('name[name="v7"]');
                for (var i = 0; i < checkboxes3.length; i++) {
                    checkboxes3[i].style.pointerEvents = "none";
                    //checkboxes2[i].disabled = true;
                }
            }

            function highlightAnswer3(answer3) {

                if (answer3 == correctAnswer3) {
                    document.getElementById(correctAnswer3).style.backgroundColor = "red";
                    document.getElementById("result3").innerHTML =
                        "เฉลย: คุณเลือกตอบ  เราก็สวยนะ เราหาแฟนใหม่ไม่ยากหรอก. คำตอบที่ถูกคือ...เขาไม่รักเราแล้ว.";
                    document.getElementById("result3").style.color = "red";
                } else {
                    document.getElementById(answer3).style.backgroundColor = "lightgreen";
                    document.getElementById("result3").innerHTML = "เฉลย: คุณเลือกตอบ เขาไม่รักเราแล้ว. คุณตอบถูกแล้ว";
                    document.getElementById("result3").style.color = "green";
                }
            }
        </script> --}}

        </html>
    @endsection

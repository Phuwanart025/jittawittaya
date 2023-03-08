<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

    .my-custom-scrollbar {
        position: relative;
        width: 100%;
        max-width: 1120px;
        height: 600px;
        overflow: auto;
        overflow-x: hidden;
    }

    /* checkbox */
    .container {
        max-width: 640px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
    }

    ul.ks-cboxtags {
        list-style: none;
        padding: 20px;
    }

    ul.ks-cboxtags li {
        display: inline;
    }

    ul.ks-cboxtags li label {
        display: inline-block;
        background-color: rgba(255, 255, 255, .9);
        border: 2px solid rgba(139, 139, 139, .3);
        color: #adadad;
        border-radius: 25px;
        white-space: nowrap;
        margin: 3px 0px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        transition: all .2s;
    }

    ul.ks-cboxtags li label {
        padding: 8px 12px;
        cursor: pointer;
    }

    ul.ks-cboxtags li label::before {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 20px;
        padding: 2px 6px 2px 2px;
        content: "\f067";
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
        content: "\f00c";
        transform: rotate(-360deg);
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label {
        border: 2px solid #1bdbf8;
        background-color: #12bbd4;
        color: #fff;
        fo transition: all .2s;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        display: absolute;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        position: absolute;
        opacity: 0;
    }

    ul.ks-cboxtags li input[type="checkbox"]:focus+label {
        border: 2px solid #e9a1ff;
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
                        <div class="card-body p-0">
                            <div class="p-5">

                                <form method="get" action="{{ url('store') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY14</span>
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

                                        <h3 class="mt-5 mb-2" for="customRange2"><i class="fas fa-edit"></i>
                                            เหตุการณ์ที่เกิดขึ้น:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="เหตุการณ์ที่เกิดขึ้น..."></textarea>

                                        <h3 class="mt-5 mb-2" for="customRange2"><i class="fas fa-edit"></i>
                                            คิดยังไงกับเหตุการณ์ที่เกิดขึ้น:</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="คิดยังไงกับเหตุการณ์ที่เกิดขึ้น..."></textarea>

                                        <h3 class="mt-5 mb-2" for="customRange2"><i class="fas fa-edit"></i>
                                            แล้วถ้าลองคิดแบบอื่นจะคิดยังไงดีนะ:</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="แล้วถ้าลองคิดแบบอื่นจะคิดยังไงดีนะ..."></textarea>
                                    </div>

                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY14</span>
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

                                            <h1 class="mb-3">เพลงบำบัดจิตใจ...</h1>
                                            <img class="mb-3" src="images/day14/Live And Learn - กมลา สุโกศล.png"
                                                style="width:100%">
                                            <div class="ratio ratio-16x9 py-3">
                                                <iframe src="https://www.youtube.com/embed/OMVYOsoqjIo"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen>
                                                </iframe>
                                            </div>

                                            <p class="py-3">ขอบคุณเพลง:<a target="_blank"
                                                    href="https://www.youtube.com/embed/OMVYOsoqjIo">
                                                    Live and Learn - กมลา สุโกศล
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY14</span>
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

                                        <h2 class="text-center py-3">อารมณ์มาจากไหนกันนะ...</h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <video class="mySlides1" autoplay muted loop="true">
                                                <source src="images/day14/ความรู้  ฝึกแก้ปัญหา.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY14</span>
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

                                        <div class="text-center py-5">
                                            <h2>ลองมาฝึกแก้ปัญหากัน...</h2>

                                            <div class="table-responsive">
                                                <table class="table text-black table-bordered table-info table-highlight">
                                                    <thead class="thead-info">
                                                        <th>ทางเลือก</th>
                                                        <th>ข้อดี</th>
                                                        <th>ข้อเสีย</th>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>

                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>

                                                        </tr>
                                                        <tr class="table-dark">
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                                <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-3 mx-auto py-5">
                                            <button class="btn btn-primary w-100 btn-confirm"
                                                type="submit">บันทึก</button>
                                        </div>
                                    </div>

                                    {{-- Content5 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY14</span>
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

                                        <div class="text-center py-5">
                                            <h2>ลองมาฝึกแก้ปัญหากัน...</h2>
                                            <div class="table-responsive">
                                                <table class="table text-black table-bordered table-info table-highlight">
                                                    <thead class="thead-info">
                                                        <th>ทางเลือก</th>
                                                        <th>ข้อดี</th>
                                                        <th>ข้อเสีย</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>บีบแตรกลับ</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>ด่าในใจ</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>แผ่เมตตา</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>ปาดหน้าแล้วลงไปด่า</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." /></td>

                                                        </tr>
                                                        <tr class="table-dark">
                                                            <td colspan="3">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <label for="input3"
                                                                            class="col-sm-4 col-form-label">ทางเลือกที่คิดว่าดีสำหรับฉัน</label>
                                                                        <div class="col-sm-8">
                                                                            <textarea class="form-control"
                                                                                id="input3"
                                                                                placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..." rows="2"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-3 mx-auto py-5">
                                            <button class="btn btn-primary w-100 btn-confirm"
                                                type="submit">บันทึก</button>
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

        </html>
    @endsection

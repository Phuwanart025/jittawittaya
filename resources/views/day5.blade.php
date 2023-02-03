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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY5</span>
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
                                                    <input class="form-check-input bg-warning" type="radio"
                                                        value="สีเหลือง" name="flexRadioDefault" id="color_feel_today1">
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
                                                    <input class="form-check-input bg-success" type="radio" value="สีเขียว"
                                                        name="flexRadioDefault" id="color_feel_today3">
                                                    <img src="images/emu/emu3.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today3">
                                                        ความกลัว
                                                    </label>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-primary" type="radio" value="สีฟ้า"
                                                        name="flexRadioDefault" id="color_feel_today4">
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

                                        <h3 class="py-5" for="customRange2">อะไรทำให้คุณรู้สึกอย่างนั้น:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..."></textarea>
                                    </div>


                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY5</span>
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


                                        <h3 class="py-3" for="customRange2">อารมณ์คืออะไร :</h3>
                                        <div class="row">
                                            <div class="w3-center">
                                                <span class="mt-2 badge rounded-pill bg-info">ฉันดูไม่ดี</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เศร้า</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ปวดหัว</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เหงา</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เพื่อนไม่ชอบฉัน</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่อยากไปใหน</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่อยากลุกจากที่นอน</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เก็บตัว</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ขี้ลืม</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ร้องให้</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ฉันผิดอีกแล้ว</span>
                                                <span class="mt-2 badge rounded-pill bg-info">กินน้อยลง</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่เก่ง</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เครียด</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่มีสมาธิ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เสียใจ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไร้ค่า</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่มีอนาคต</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เพลีย</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่มีแรง</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ไม่อยากไปเที่ยว</span>
                                            </div>
                                           
                                            <div class="col-md-3 py-5 w3-center">
                                                <h4><span class="badge rounded-pill bg-danger"
                                                        for="customRange2">สีแดง</span></h4>
                                                        <q>เติมคำที่มีคำเกี่ยวกับอารมณ์</q>
                                                <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                                    placeholder="พิมพ์คำตอบลงที่นี่..."></textarea>
                                            </div>

                                            <div class="col-md-3 py-5  w3-center">
                                                <h4><span class="badge rounded-pill bg-primary"
                                                        for="customRange2">สีฟ้า</span></h4>
                                                        <q>เติมคำที่มีคำเกี่ยวกับความคิด</q>
                                                <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                                    placeholder="พิมพ์คำตอบลงที่นี่..."></textarea>
                                            </div>
                                            <div class="col-md-3 py-5  w3-center">
                                                <h4><span class="badge rounded-pill bg-success"
                                                        for="customRange2">สีเขียว</span></h4>
                                                        <q>เติมคำที่มีคำเกี่ยวกับพฤติกรรม</q>
                                                <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                                    placeholder="พิมพ์คำตอบลงที่นี่..."></textarea>
                                            </div>
                                            <div class="col-md-3 py-5 w3-center">
                                                <h4><span class="badge rounded-pill bg-warning"
                                                        for="customRange2">สีเหลือง</span></h4>
                                                        <q>เติมคำที่มีคำเกี่ยวกับอาการทางกาย</q>
                                                <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                                    placeholder="พิมพ์คำตอบลงที่นี่..."></textarea>
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="mt-3 btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            เฉลย
                                        </button><span class="text-red"> ***โปรดทำก่อนกดดูเฉลยนะ</span>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel">เฉลย
                                                            อารมณ์คืออะไร???
                                                        </h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>ในส่วนที่เป็นอารมรณ์นั้นจะมี...</h4>
                                                        <p>ดีใจ, เบื่อ, ฟิน, เซ็ง, โกรธ, สนุก, เงิบ</p>
                                                        <hr>
                                                        <h4>ในส่วนที่เป็นความคิดจะมี...</h4>
                                                        <p> คิดเลข, ปวดท้อง, กลัว</p>
                                                        <hr>
                                                        <h4>และในส่วนที่เป็นการกระทำ...</h4>
                                                        <p> สวดมนต์, ต่อยเพื่อน, เตะบอล</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">ปิด</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY5</span>
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
                                            <h2>ความรู้ส่งท้าย.....</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <img class="mySlides1" src="images/image.jpg" style="width:100%">
                                                <img class="mySlides1" src="images/image1.jpg" style="width:100%">
                                            
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 col-4 mx-auto py-5">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')"
                                                href="{{ url('/day5') }}">บันทึก</button>
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
                        </div>

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

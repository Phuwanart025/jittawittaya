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

                                <form method="get" action="{{ url('store2') }}" enctype="multipart/form-data">
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
                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-warning" type="radio"
                                                        value="สีเหลือง" name="flexRadioDefault" id="color_feel_today1"
                                                        checked>
                                                    <label class="form-check-label" for="color_feel_today1">
                                                        สีเหลือง = ความสุข
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger" type="radio" value="สีแดง"
                                                        name="flexRadioDefault" id="color_feel_today2" checked>
                                                    <label class="form-check-label" for="color_feel_today2">
                                                        สีแดง = ความโกรธ
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-success" type="radio"
                                                        value="สีเขียว" name="flexRadioDefault" id="color_feel_today3"
                                                        checked>
                                                    <label class="form-check-label" for="color_feel_today3">
                                                        สีเขียว = ความกลัว
                                                    </label>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-primary" type="radio" value="สีฟ้า"
                                                        name="flexRadioDefault" id="color_feel_today4" checked>
                                                    <label class="form-check-label" for="color_feel_today4">
                                                        สีฟ้า = ความเศร้า
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
                                            <div class="col-md-12">
                                                <h1>เพลงบำบัดจิตใจ...</h1>
                                                <img class="img-fluid rounded mx-auto d-block"
                                                    src="http://thebandmusicschool.com/wp-content/uploads/2020/08/musical-healing-1-999x1024.jpg"
                                                    alt="" width="150" height="150">
                                                <div class="py-2">
                                                    <a class="btn btn-danger " href="https://youtu.be/2FxYYY9E6hs"
                                                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" fill="currentColor"
                                                            class="bi bi-filetype-mp3" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-4.911 9.67h-.443v-.609h.422a.688.688 0 0 0 .322-.073.558.558 0 0 0 .22-.2.505.505 0 0 0 .076-.284.49.49 0 0 0-.176-.392.652.652 0 0 0-.442-.15.74.74 0 0 0-.252.041.625.625 0 0 0-.193.112.496.496 0 0 0-.179.349H7.71c.006-.157.04-.302.102-.437.063-.135.153-.252.27-.352.117-.101.26-.18.428-.237.17-.057.364-.086.583-.088.279-.002.52.042.723.132.203.09.36.214.472.372a.91.91 0 0 1 .173.539.833.833 0 0 1-.12.478.96.96 0 0 1-.619.439v.041a1.008 1.008 0 0 1 .718.434.909.909 0 0 1 .144.521c.002.19-.037.359-.117.507a1.104 1.104 0 0 1-.329.378c-.14.101-.302.18-.486.234-.182.053-.376.08-.583.08-.3 0-.558-.051-.77-.153a1.206 1.206 0 0 1-.487-.41 1.094 1.094 0 0 1-.178-.563h.726a.457.457 0 0 0 .106.258.664.664 0 0 0 .249.179.98.98 0 0 0 .357.067.903.903 0 0 0 .384-.076.598.598 0 0 0 .252-.217.56.56 0 0 0 .088-.319.556.556 0 0 0-.334-.522.81.81 0 0 0-.372-.079ZM.706 15.925v-2.66h.038l.952 2.16h.516l.946-2.16h.038v2.66h.715v-3.999h-.8l-1.14 2.596h-.026l-1.14-2.596H0v4h.706Zm5.458-3.999h-1.6v4h.792v-1.342h.803c.287 0 .53-.058.732-.173.203-.118.357-.276.463-.475a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.475-.158-.677a1.175 1.175 0 0 0-.46-.477 1.4 1.4 0 0 0-.733-.179Zm.545 1.333a.795.795 0 0 1-.085.381.574.574 0 0 1-.237.24.793.793 0 0 1-.375.082h-.66v-1.406h.66c.219 0 .39.06.513.182.123.12.184.295.184.521Z" />
                                                        </svg> กดปุ่มเพื่อฟังเพลง</a>
                                                </div>


                                                <textarea name="radio" id="" class="form-control mx-auto" rows="6"
                                                    placeholder="ฟังเพลงแล้วได้ข้อคิดอะไรบ้าง..."></textarea>


                                                <br><br>
                                                <div class="d-grid gap-2 col-3 mx-auto">
                                                    <button class="btn btn-primary w-100" type="submit"
                                                        onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Content3 --}} <div class="mySlides">
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
                                            <div class="col-md-12">
                                                <h1>เกมบำบัดจิตใจ...</h1>
                                                <img class="img-fluid rounded mx-auto d-block"
                                                    src="images/tab/day2.jpg"
                                                    alt="" width="550" height="550">
                                              <br>
                                                <textarea name="radio" id="" class="form-control mx-auto" rows="6"
                                                    placeholder="ฟังเพลงแล้วได้ข้อคิดอะไรบ้าง..."></textarea>


                                                <br><br>
                                                <div class="d-grid gap-2 col-3 mx-auto">
                                                    <button class="btn btn-primary w-100" type="submit"
                                                        onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                                </div>
                                            </div>
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

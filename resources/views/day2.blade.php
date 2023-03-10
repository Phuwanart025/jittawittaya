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

                                <form method="post" action="{{ url('store2') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">???????????????????????????????????????????????? DAY2</span>
                                            </label>
                                            <h1><span>?????????????????????????????????????????? : </span>
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


                                        <h3 for="customRange2">??????????????????????????????????????????????????????????????????????????????:</h3>
                                        <div class="row">
                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #FFFF00"
                                                        type="radio" value="????????????????????????" name="flexRadioDefault"
                                                        id="color_feel_today1" required>
                                                    <img src="images/emu/emu4.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today1">
                                                        ?????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger" type="radio" value="???????????????"
                                                        name="flexRadioDefault" id="color_feel_today2" required>
                                                    <img src="images/emu/emu2.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today2">
                                                        ????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #A084DC"
                                                        type="radio" value="?????????????????????" name="flexRadioDefault"
                                                        id="color_feel_today3" required>
                                                    <img src="images/emu/emu3.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today3">
                                                        ????????????????????????
                                                    </label>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="col-md-3 py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="background-color: #7286D3"
                                                        type="radio" value="???????????????" name="flexRadioDefault"
                                                        id="color_feel_today4" required>
                                                    <img src="images/emu/emu1.png" width="100" height="100">
                                                    <label class="form-check-label" for="color_feel_today4">
                                                        ???????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slidecontainer py-5">
                                            <h3 for="customRange2">?????????????????????????????????????????????: <label for="" id="demo"
                                                    style="font-weight:bold;color:red"></label></h3>
                                            <input type="range" min="1" max="5" name="value"
                                                value="{{ old('value') }}" class="slider" id="myRange" required>
                                            <div class="sliderticks">
                                                <p>??????????????????????????????</p>
                                                <p>????????????</p>
                                                <p>?????????????????????</p>
                                                <p>?????????</p>
                                                <p>???????????????????????????</p>
                                            </div>
                                        </div>

                                        <h3 class="py-5" for="customRange2"><i class="fas fa-edit"></i>
                                            ?????????????????????????????????????????????????????????????????????????????????:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="?????????????????????????????????????????????????????????????????????????????????..." required></textarea>
                                    </div>

                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">???????????????????????????????????????????????? DAY2</span>
                                            </label>
                                            <h1><span>?????????????????????????????????????????? : </span>
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


                                        <h2 class="text-center mt-5 mb-3"><span
                                                class="badge rounded-pill bg-info">?????????????????????????????????...?????????????????? 2 ??????</span></h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/day2/??????????????????/1.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/??????????????????/2.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/??????????????????/3.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/??????????????????/4.png" style="width:100%">
                                            <img class="mySlides1" src="images/day2/??????????????????/5.png" style="width:100%">
                                        </div>
                                        <p class="text-center py-3">????????????????????????????????????????????????:<a target="_blank"
                                                href="http://www.pakornblog.com/story.php?act=detail&storyid=47&fbclid=IwAR1q_aaH7ChQp2DEDlosUceN2DCUfLBupQ2ZxBVDHh4BuMq3fXDFQe4ZKGE">
                                               ???????????????????????? PakornBlok</a></p>
                                        <hr>
                                        <h3 class="py-3" for="customRange2"><i class="fas fa-edit"></i>
                                            ????????????????????????????????????????????????????????????????????????????????? :</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="?????????????????????????????????????????????????????????????????????????????????..." required></textarea>
                                    </div>

                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">???????????????????????????????????????????????? DAY2</span>
                                            </label>
                                            <h1><span>?????????????????????????????????????????? : </span>
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
                                            <h2 class="text-center mt-5 mb-3">?????????????????????????????? "<span class="text-red">????????????</span>"
                                                ????????????????????????????????????</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <img class="mySlides1" src="images/day2/2.png"
                                                    style="width:100%">
                                                <video class="mySlides1" autoplay muted loop="true">
                                                    <source src="images/day2/3.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">???????????????????????????????????????????????? DAY2</span>
                                            </label>
                                            <h1><span>?????????????????????????????????????????? : </span>
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


                                        <div class="row">
                                            <h2 class="text-center mt-5 mb-3">
                                                <i class="fas fa-angry text-red"></i>
                                                ?????????????????????????????????????????? "<span class="text-red">????????????</span>"
                                                ?????????????????????????????????????????????????????????????????????????????????????????????
                                                <i class="fas fa-angry text-red"></i>
                                            </h2>

                                            <div class="container">
                                                <div class="row w3-center">
                                                    {{-- ?????????1 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="??????????????????"
                                                                            name="feel_body1" id="feel_body1" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today1">
                                                                            1.??????????????????
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
                                                                            type="radio" value="????????????????????????????????????"
                                                                            name="feel_body1" id="feel_body2" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today2">
                                                                            1.????????????????????????????????????
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ?????????2 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-info">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="???????????????????????????"
                                                                            name="feel_body2" id="feel_body3" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today3">
                                                                            2.???????????????????????????
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
                                                                            type="radio" value="????????????????????????"
                                                                            name="feel_body2" id="feel_body4" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            2.????????????????????????
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ?????????3 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-danger">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="????????????????????????????????????????????????"
                                                                            name="feel_body3" id="feel_body5" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            3.????????????????????????????????????????????????
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
                                                                            type="radio" value="??????????????????"
                                                                            name="feel_body3" id="feel_body6" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            3.??????????????????
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ?????????4 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-success">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="??????????????????"
                                                                            name="feel_body4" id="feel_body7" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            4.??????????????????
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
                                                                            type="radio" value="?????????????????????"
                                                                            name="feel_body4" id="feel_body8" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            4.?????????????????????
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ?????????5 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-warning">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="????????????????????????"
                                                                            name="feel_body5" id="feel_body9" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            5.????????????????????????
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
                                                                            type="radio" value="?????????????????????"
                                                                            name="feel_body5" id="feel_body10" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            5.?????????????????????
                                                                        </label>
                                                                    </div>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    {{-- ?????????6 --}}
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 col-md-6 mb-3">
                                                            <h3>
                                                                <span class="badge rounded-pill bg-primary">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input bg-dark"
                                                                            type="radio" value="?????????????????????"
                                                                            name="feel_body6" id="feel_body11" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            6.?????????????????????
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
                                                                            type="radio" value="?????????????????????"
                                                                            name="feel_body6" id="feel_body12" required>
                                                                        <label class="form-check-label"
                                                                            for="color_feel_today4">
                                                                            6.?????????????????????
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
                                                <span class="badge rounded-pill bg-info">???????????????????????????????????????????????? DAY2</span>
                                            </label>
                                            <h1><span>?????????????????????????????????????????? : </span>
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
                                            <h2 class="text-center mt-5 mb-3">5 ?????????????????????????????????????????? "<span class="text-red">???????????? <i
                                                        class="fas fa-angry text-red"></i></span>"</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <img class="mySlides1" src="images/day2/4.jpg"
                                                    style="width:100%">
                                            </div>

                                            <p class="text-center py-3">????????????????????????????????????????????????: ????????????????????????????????????</p>
                                        </div>

                                        <div class="d-grid gap-2 col-3 mx-auto py-3">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('????????????????????????????????????????????????????????????????????????????????')">??????????????????</button>
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
                    document.getElementById("result").innerHTML = "???????????????: ?????????????????????????????????????????????????????? ?????????????????????????????????????????? ?????????????????????";
                } else {
                    document.getElementById(answer).style.backgroundColor = "lightgreen";
                    document.getElementById("result").innerHTML = "???????????????: ??????????????????????????????????????????????????? ???????????????????????????????????????";
                }
            }
        </script>

        </html>
    @endsection

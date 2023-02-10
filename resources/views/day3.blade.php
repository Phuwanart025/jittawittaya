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

    .my-custom-scrollbar {
        position: relative;
        width: 100%;
        max-width: 1120px;
        height: 600px;
        overflow: auto;
        overflow-x: hidden;
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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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
                                                    <input class="form-check-input bg-info" type="radio" value="สีเขียว"
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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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


                                        <h2 class="text-center py-5">นิทานเรื่องนี้ไม่มีปฏิหาริย์...</h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/1.jpg" style="width:100%">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/2.jpg" style="width:100%">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/3.jpg"
                                                style="width:100%">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/4.jpg"
                                                style="width:100%">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/5.jpg"
                                                style="width:100%">
                                            <img class="mySlides1" src="images/day3/ปฏิหารไม่มี/6.jpg"
                                                style="width:100%">
                                        </div>
                                        <p class="py-3">ขอบคุณนิทานจาก: คุณสโรชา กิตติสิริพันธุ์</p>
                                        <hr>
                                        <h3 class="py-3" for="customRange2">คุณได้อะไรจากนิทานเรื่องนี้ :</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..."></textarea>
                                    </div>

                                    {{-- Content3 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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
                                            <h2>ร่างกายของเราเป็นอย่างไร เมื่อเกิดอาการรู้สึกกลัว...</h2>
                                            <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                                <video autoplay muted loop="true">
                                                    <source src="images/day3/vdo-03(1).mp4" type="video/mp4">
                                                </video>
                                                <img class="mySlides1" src="images/day3/03(2).png" style="width:100%">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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

                                        <div class="py-5 text-center">
                                            <h3>เมื่อเกิดเหตุการณ์ต่างๆ และรู้สึกกลัว คุณมีระดับอาการอย่างไร...</h3>
                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>ปวดหัว</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo2"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange2">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>ปวดท้อง</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo3"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange3">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>ใจสั่น</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo4"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange4">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>มือสั่น</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo5"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange5">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>ขาสั่น</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo6"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange6">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-5">
                                                <div class="col-md-4 mt-3">
                                                    <h3>เหงื่อออก</h3>
                                                </div>
                                                <div class="col-md-8 mt-3">
                                                    <div class="slidecontainer">
                                                        <h4 class="text-start" for="customRange2">ระดับอาการ: <label
                                                                for="" id="demo7"
                                                                style="font-weight:bold;color:red"></label></h4>
                                                        <input type="range" min="0" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange7">
                                                        <div class="sliderticks">
                                                            <p>0:น้อย</p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p></p>
                                                            <p>10:มาก</p>
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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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

                                        <div class="py-5 text-center">
                                            <div class="py-3">
                                                <h3>มาฝึกผ่อนคลายกล้ามเนื้อกันเถอะ...</h3>
                                                <h4>(PROGRESSIVE MUSCLE RELAXATION)</h4>
                                            </div>

                                            <div class="ratio ratio-16x9 py-2">
                                                <iframe src="https://www.youtube.com/embed/YaJlJ6MroNE"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreenn></iframe>
                                            </div>

                                            <p class="py-3">ขอบคุณคลิปจาก:<a target="_blank"
                                                    href="https://www.youtube.com/watch?v=YaJlJ6MroNE">
                                                    กรมสุขภาพจิต</a></p>
                                            {{-- <a class="btn btn-success " href="https://www.youtube.com/watch?v=YaJlJ6MroNE"
                                                target="_blank">คลิก</a> --}}
                                        </div>

                                        <div class="d-grid gap-2 col-3 mx-auto py-5">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                        </div>
                                    </div>

                                    {{-- Content --}}
                                    {{-- <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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
                                            <h2>รู้ทันกาย รู้ทันใจ รู้ทันความคิดในชีวิตประจำวัน...</h2>
                                            <h3>(Daili thought record)</h3>
                                            <p>มาดูตารางกันว่าเราแอบใช้ กับดักความคิด อะไรอยู่บ้าง แล้วจะคิดใหม่อย่างไรบ้าง
                                            </p>
                                            <img class="img-fluid rounded mx-auto d-block"
                                                src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/323924207_926043702103987_3054380521469122473_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_ohc=rK0KI8l4ahkAX_muwRj&_nc_ht=scontent.fbkk10-1.fna&oh=03_AdQal_mRbbRfIPOGnAkMWRMtX2yL_O8mOQ8FZA34UvuBuQ&oe=63E32E4B"
                                                width="800" height="600">
                                        </div>
                                        <hr>

                                        <div class="py-3">
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="">สถานการณ์: </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="สถานการณ์...">
                                                </div>
                                                <div class="col">
                                                    <div class="slidecontainer">
                                                        <h3 for="customRange2">ระดับความรู้สึก: <label for=""
                                                                id="demo2" style="font-weight:bold;color:red"></label>
                                                        </h3>
                                                        <input type="range" min="1" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange2">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="">ความคิด: </label>
                                                    <input type="text" class="form-control" placeholder="ความคิด...">
                                                </div>
                                                <div class="col">
                                                    <label for="">กับดักความคิด: </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="กับดักความคิด...">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="">คิดใหม่: </label>
                                                    <input type="text" class="form-control" placeholder="คิดใหม่...">
                                                </div>
                                                <div class="col">
                                                    <div class="slidecontainer">
                                                        <h3 for="customRange2">ระดับความรู้สึกใหม่: <label for=""
                                                                id="demo3" style="font-weight:bold;color:red"></label>
                                                        </h3>
                                                        <input type="range" min="1" max="10"
                                                            name="value" value="{{ old('value') }}" class="slider"
                                                            id="myRange3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- Content --}}
                                    {{-- <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY3</span>
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
                                                    src="images/tab/สะพานบ๊อบ.jpg" alt="" width="550"
                                                    height="550">
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


                                    </div> --}}

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
            var slider6 = document.getElementById("myRange6");
            var output6 = document.getElementById("demo6");
            output6.innerHTML = slider6.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider6.oninput = function() {
                output6.innerHTML = this.value;
            }
        </script>

        <script>
            var slider7 = document.getElementById("myRange7");
            var output7 = document.getElementById("demo7");
            output7.innerHTML = slider7.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider7.oninput = function() {
                output7.innerHTML = this.value;
            }
        </script>

        </html>
    @endsection

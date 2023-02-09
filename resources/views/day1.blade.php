<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
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
        height: 500px;
        overflow: auto;
        overflow-x: hidden;
    }

    /* checkbox */
    .container {
        max-width: 640px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 13px;
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
        font-size: 12px;
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
        fo
        transition: all .2s;
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

</style>

@section('content')

    <body>
        @extends('layouts.app')
        <!-- Comment Form Start -->
        <div class="layout_padding">
            <div class="container">
                <div class="row justify-content-center">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger d-flex align-items-center " role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16"
                                role="img" aria-label="Warning:">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="card o-hidden border-0 shadow-lg my-5  w3-theme-l4">
                        <div class="card-body p-0">
                            <div class="p-5">

                                <form method="post" action="{{ url('store') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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


                                        <h3 for="customRange2">ลองจัดกลุ่มจัดกลุ่ม:</h3>
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
                                                    <input class="form-check-input bg-success" type="radio"
                                                        value="สีเขียว" name="flexRadioDefault" id="color_feel_today3">
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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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

                                        <h3 class="mt-5" for="customRange2">อารมณ์คืออะไร :</h3>

                                        <div class="container mb-5">
                                            <div class="row">
                                                <div class="col-sm-6 mt-2 mx-auto">
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="1" name="v4[]"
                                                                value="ดีใจ"><label for="1">ดีใจ</label></li>

                                                        <li><input type="checkbox" id="2" name="v4[]"
                                                                value="เบื่อ"><label for="2">เบื่อ</label>
                                                        </li>

                                                        <li><input type="checkbox" id="3" name="v4[]"
                                                                value="สวดมนต์"><label for="3">สวดมนต์</label></li>

                                                        <li><input type="checkbox" id="4" name="v4[]"
                                                                value="ฟิน"><label for="4">ฟิน</label></li>

                                                        <li><input type="checkbox" id="5" name="v4[]"
                                                                value="ต่อยเพื่อน"><label
                                                                for="5">ต่อยเพื่อน</label></li>

                                                        <li><input type="checkbox" id="6" name="v4[]"
                                                                value="เซ็ง"><label for="6">เซ็ง</label></li>

                                                        <li><input type="checkbox" id="7" name="v4[]"
                                                                value="เตะบอล"><label for="7">เตะบอล</label>
                                                        </li>

                                                        <li><input type="checkbox" id="8" name="v4[]"
                                                                value="ปวดท้อง"><label for="8">ปวดท้อง</label>
                                                        </li>

                                                        <li><input type="checkbox" id="9" name="v4[]"
                                                                value="โกรธ"><label for="9">โกรธ</label></li>

                                                        <li><input type="checkbox" id="10" name="v4[]"
                                                                value="สนุก"><label for="10">สนุก</label></li>

                                                        <li class="ks-selected"><input type="checkbox" id="11"
                                                                name="v4[]" value="กลัว"><label
                                                                for="11">กลัว</label></li>

                                                        <li><input type="checkbox" id="12" name="v4[]"
                                                                value="คิดเลข"><label for="12">คิดเลข</label>
                                                        </li>

                                                        <li><input type="checkbox" id="13" name="v4[]"
                                                                value="เงิบ"><label for="13">เงิบ</label>
                                                        </li>

                                                        <li><input type="checkbox" id="14" name="v4[]"
                                                                value="ให้อาหารหมา"><label
                                                                for="14">ให้อาหารหมา</label></li>

                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-md-3 py-2">
                                                <span class="mt-2 badge rounded-pill bg-info">ดีใจ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เบื่อ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">สวดมนต์ </span>
                                                <span class="mt-2 badge rounded-pill bg-info">ฟิน</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ต่อยเพื่อน</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เซ็ง</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เตะบอล</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ปวดท้อง</span>
                                                <span class="mt-2 badge rounded-pill bg-info">โกรธ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">สนุก</span>
                                                <span class="mt-2 badge rounded-pill bg-info">กลัว</span>
                                                <span class="mt-2 badge rounded-pill bg-info">คิดเลข</span>
                                                <span class="mt-2 badge rounded-pill bg-info">เงิบ</span>
                                                <span class="mt-2 badge rounded-pill bg-info">ให้อาหารหมา</span>
                                            </div>

                                            <div class="col-md-3 py-2 w3-center">
                                                <h4><span class="badge rounded-pill bg-info"
                                                        for="customRange2">อารมรณ์</span></h4>
                                                <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                                    placeholder="พิมพ์คำตอบลงที่นี่..."></textarea>
                                            </div>

                                        </div> --}}


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
                                                    <div class="modal-header bg-primary text-white">
                                                        <label class="modal-title" id="exampleModalLabel" style="font-size: 24">
                                                            
                                                                <i class="fas fa-comment-dots"></i>
                                                                เฉลยอารมณ์คืออะไร?
                                                        </label>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row py-3">
                                                            <div class="col-md-4">
                                                                <img src="https://cdn.pixabay.com/animation/2022/11/13/07/16/07-16-26-181_512.gif"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h3><span
                                                                        class="badge bg-info">ในส่วนที่เป็นอารมรณ์นั้นจะมี...</span>
                                                                </h3>
                                                                <div class="row py-3">
                                                                    <div class="col-6 col-sm-6">
                                                                        <p><i class="fas fa-check-circle"> ดีใจ</i></p>
                                                                        <p><i class="fas fa-check-circle"> เบื่อ</i></p>
                                                                        <p><i class="fas fa-check-circle"> ฟิน</i></p>
                                                                        <p><i class="fas fa-check-circle"> เซ็ง</i></p>
                                                                    </div>
                                                                    <div class="col-6 col-sm-6">
                                                                        <p><i class="fas fa-check-circle"> โกรธ</i></p>
                                                                        <p><i class="fas fa-check-circle"> สนุก</i></p>
                                                                        <p><i class="fas fa-check-circle"> เงิบ</i></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger btn-sm"
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
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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


                                        <h2 class="text-center py-3">มารู้จักอารมณ์ดีกว่า...</h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/tab/01(1).jpg" style="width:100%">
                                            <img class="mySlides1" src="images/tab/01(2).jpg" style="width:100%">
                                        </div>

                                    </div>

                                    {{-- Content4 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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


                                        <h2 class="text-center py-3">มารู้จักอารมณ์ดีกว่า...</h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/tab/01(3).jpg" style="width:100%">
                                            <img class="mySlides1" src="images/tab/01(4).jpg" style="width:100%">

                                        </div>

                                        <div class="d-grid gap-2 col-3 mx-auto py-5">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                        </div>

                                    </div>

                                    {{-- Content4 --}}
                                    {{-- <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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


                                        <h2 class="text-center py-3">คุณค่าของใบไม้แห้ง...</h2>
                                        <div class="my-custom-scrollbar my-custom-scrollbar-primary mx-auto py-3">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/1.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/2.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/3.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/4.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/5.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/6.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/7.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/8.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/9.png" style="width:100%">
                                            <img class="mySlides1" src="images/คุณค่าของใบแห้ง/10.png"
                                                style="width:100%">
                                        </div>
                                        <hr>
                                        <h3 class="py-3" for="customRange2">คุณได้อะไรจากนิทานเรื่องนี้ :</h3>
                                        <textarea name="v4" id="v4" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..."></textarea>
                                    </div> --}}


                                    {{-- Content --}}
                                    {{-- <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก</span>
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
                                            <h3>เกมส์แยกความคิด</h3>
                                            <h3 class="py-5">ฉันเศร้ารึเปล่า?</h3>
                                            <div class="row py-5 mx-auto">
                                                <h3 class="py-5">ฉันเศร้ารึเปล่า?</h3>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option1"
                                                            name="v5" value="ถูก"
                                                            onclick="disableCheckbox();highlightAnswer('option1');">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            ความคิด
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="option2"
                                                            name="v5" value="ผิด"
                                                            onclick="disableCheckbox();highlightAnswer('option2');">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            อารมณ์
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <p id="result" name="result1a" type="text"></p>
                                        </div>
                                    </div> --}}

                                    {{-- Content --}}
                                    {{-- <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก DAY1</span>
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
                                            <h3>เกมส์แยกอารมณ์...</h3>
                                            <h3 class="py-5">...?</h3>
                                            <div class="row py-5 mx-auto">
                                                <div class="col-md-3 py-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="option11"
                                                            name="v6" value="ถูก"
                                                            onclick="disableCheckbox2();highlightAnswer2('option11');">
                                                        <img src="images/emu/emu4.png" width="100" height="100">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            สุข
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 py-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="option22"
                                                            name="v6" value="ผิด"
                                                            onclick="disableCheckbox2();highlightAnswer2('option22');">
                                                        <img src="images/emu/emu1.png" width="100" height="100">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            เศร้า
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 py-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="option33"
                                                            name="v6" value="่ผิด"
                                                            onclick="disableCheckbox2();highlightAnswer2('option33');">
                                                        <img src="images/emu/emu2.png" width="100" height="100">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            โกรธ
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 py-2 ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="option44"
                                                            name="v6" value="ผิด"
                                                            onclick="disableCheckbox2();highlightAnswer2('option44');">
                                                        <img src="images/emu/emu3.png" width="100" height="100">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            กลัว
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <p id="result2" name="result2a" type="text"></p>
                                        </div>
                                        <div class="d-grid gap-2 col-3 mx-auto">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')">บันทึก</button>
                                        </div>
                                    </div> --}}
                                </form>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>

        {{-- <script>
            const correctAnswer = "option1";

            function disableCheckbox() {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].style.pointerEvents = "none";
                    checkboxes[i].style.color = "gray";
                    //if(!checkboxes[i].checked) checkboxes[i].disabled = true;
                }
            }

            function highlightAnswer(answer) {

                if (answer == correctAnswer) {
                    document.getElementById(correctAnswer).style.backgroundColor = "lightgreen";
                    document.getElementById("result").innerHTML = "คำตอบ: คุณเลือกตอบความคิด คุณตอบถูกแล้ว";
                } else {
                    document.getElementById(answer).style.backgroundColor = "red";
                    document.getElementById("result").innerHTML = "คำตอบ: คุณเลือกตอบอารมณ์ คำตอบที่ถูกคือ ความคิด";
                }
            }
        </script>

        <script>
            const correctAnswer2 = "option11";

            function disableCheckbox2() {
                var checkboxes2 = document.querySelectorAll('input[type="radio"]');
                for (var i = 0; i < checkboxes2.length; i++) {
                    checkboxes2[i].style.pointerEvents = "none";
                    //checkboxes2[i].disabled = true;
                }
            }

            function highlightAnswer2(answer2) {

                if (answer2 == correctAnswer2) {
                    document.getElementById(correctAnswer2).style.backgroundColor = "lightgreen";
                    document.getElementById("result2").innerHTML = "คำตอบ: คุณตอบถูกแล้ว";
                } else {
                    document.getElementById(answer2).style.backgroundColor = "red";
                    document.getElementById("result2").innerHTML = "คำตอบ: คุณตอบผิด";
                }
            }
        </script> --}}

        </html>
    @endsection

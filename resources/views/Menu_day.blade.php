<style>
    .bgimg {
        background-image: url('/images/card/4.jpg');
        min-height: 10%;
        background-position: center;
        background-size: cover;
        -webkit-filter: brightness(50%);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    .bgimg2 {
        background-image: url('/images/card/3.jpg');
        min-height: 10%;
        background-position: center;
        background-size: cover;
        -webkit-filter: brightness(50%);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    .bgimg3 {
        background-image: url('/images/card/2.jpg');
        min-height: 10%;
        background-position: center;
        background-size: cover;
        -webkit-filter: brightness(50%);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    .bgimg4 {
        background-image: url('/images/card/1.jpg');
        min-height: 10%;
        background-position: center;
        background-size: cover;
        -webkit-filter: brightness(50%);
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    .bgimg:hover {
        -webkit-filter: brightness(100%);
    }
    .bgimg2:hover {
        -webkit-filter: brightness(100%);
    }
    .bgimg3:hover {
        -webkit-filter: brightness(100%);
    }
    .bgimg4:hover {
        -webkit-filter: brightness(100%);
    }
</style>

@extends('layouts.app')
@section('content')
    <div class="choose_section layout_padding">

        <div class="container-fluid">
            <div class="row invoice-card-row">

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 1 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day1') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 2 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day2') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 3 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day3') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 4 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day4') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 5 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day5') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 6 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                    href="{{ url('/day6') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 7 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day7') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 8 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day8') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 9 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day9') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 10 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day10') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg2">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 11 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day11') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 12 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day12') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 13 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day13') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 14 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day14') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 15 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day15') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 16 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day16') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg3">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 17 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day17') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg4">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 18 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day18') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg4">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 19 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day19') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg4">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 20 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day20') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card bgimg4">
                        <div class="card-body d-flex">
                            <div class="icon me-3">
                             

                            </div>
                            <div>
                                <h2 class="text-white invoice-num">วันที่ 21 </h2>
                                <span class="text-white fs-18"> <a class="btn btn-success"
                                        href="{{ url('/day21') }}">เริ่มเลย.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

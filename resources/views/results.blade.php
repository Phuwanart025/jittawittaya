<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('layouts.app')

@section('content')

    <body>
        <div class="choose_section layout_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <div class="text-center">
                                @foreach ($rounds_story as $item)
                                <h3>ผลคะแนนรวม: <span class="badge rounded-pill bg-primary"> {{ $item->total_score }} </span>
                                    คะแนน</h3>
                                    @endforeach
                                <img src="images/101.gif" width="250" height="250">
                                <br>
                                <a class="btn btn-primary" href="/Menu_day">กลับไปหน้าแรก</a>
                            </div>





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </body>

    </html>
@endsection

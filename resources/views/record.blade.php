<!DOCTYPE html>
<html lang="en">

@section('content')

    <body>
        @extends('layouts.app')
        <!-- services section start -->
        <div class="services_section layout_padding">
            <div class="container">
                <h1 class="font-weight-bold services_taital"><span>ประวัติ</span> <img src="images/writing.png" width="40" height="40">
                    <span style="color: #1f1f1f">บันทึกของฉัน</span></h1>

                <div class="row">
                    <div class="p-5">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4 bg w3-theme-l3">
                            <div class="card-header py-3 bg w3-theme">
                                <div class="w3-center">
                                    <h4 class="m-0 font-weight-bold text-grey "><span
                                            class="badge bg-warning ms-2">ประวัติการทำแบบบันทึกของฉัน</span> </h4>
                                </div>
                            </div>
                            <script>
                                let data = [1, 2, 3, 4, 5];
                                let table = document.getElementById("myTable");

                                for (let i = 0; i < data.length; i++) {
                                    let row = table.insertRow();
                                    let cell1 = row.insertCell();
                                    let cell2 = row.insertCell();
                                    cell1.innerHTML = i + 1; // Add 1 to the index to start row number at 1
                                    cell2.innerHTML = data[i];
                                }
                            </script>
                            <div class="card-body w3-center">
                                <div class="table-responsive">
                                    <table id="myTable" class="display  text-secondary" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col">เลขที่ลำดับ</th>
                                                <th scope="col">ครั้งที่</th>
                                                <th scope="col">คะแนน</th>
                                                <th scope="col">จำนวนวันที่ทำไปแล้ว</th>
                                                <th scope="col">ดาวน์โหลด</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">เลขที่ลำดับ</th>
                                                <th scope="col">ครั้งที่</th>
                                                <th scope="col">คะแนน</th>
                                                <th scope="col">จำนวนวันที่ทำไปแล้ว</th>
                                                <th scope="col">ดาวน์โหลด</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($rounds_story as $item)
                                                <tr class="item{{ $item->rounds }}">
                                                    <td><span
                                                            class="w3-tag w3-round w3-green w3-border w3-border-white">{{ $i++ }}</span>
                                                    </td>
                                                    <td>{{ $item->rounds }}</td>
                                                    <td>{{ $item->total_score }} คะแนน</td>
                                                    <td>{{ $item->count_round }}/21วัน</td>
                                                    <td>
                                                        <a href="{{ url('/mypdf/' . $item->rounds) }}" target="_blank" method="GET"
                                                            class="btn btn-warning w3-round-xxlarge">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                                            </svg> ดาวน์โหลด</a>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <script>
                $(document).ready(function() {
                    $("#myTable").DataTable();
                });
            </script>

    </body>

    </html>
@endsection

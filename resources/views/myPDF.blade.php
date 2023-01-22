<!DOCTYPE html>
<html>

<head>
    <title>รายงานการทำแบบบันทึก</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        q {
            font-family: "THSarabunNew";
            text-align: center;
        }

        .header {
            text-align: center;
        }



        .row1:after {
            content: "";
            display: table;
            clear: both;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #08faa1
        }

        th {
            background-color: #04AA6D;
            color: rgb(255, 255, 255);
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }


        .lable {
            color: rgb(15, 42, 240);
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Jitdee</h1>
        <h3>ประวัติบันทึกความรู้สึก</h3>
        <h4>{{ Auth::user()->name }}</h4>
    </div>
    <hr>

    <div class="container">
        <div class="row1">
            <h3>วันที่1</h3>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">เลขที่ลำดับ</th>
                        <th scope="col">ครั้งที่</th>
                        <th scope="col">เวลาทำครั้งแรก</th>
                        <th scope="col">สิ้นสุด</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="table-secondary">
                            <td><span class="badge bg-success">{{ $item->id }}</span>
                            </td>
                            <td>{{ $item->rounds }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="column">
                <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>

            </div>
            <div class="column">
                <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
            <div class="column">
                <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                <q>{{ $item->created_at }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
        </div>
        <hr>
        <h3 class="">วันที่2</h3>
        <div class="row">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">เลขที่ลำดับ</th>
                        <th scope="col">ครั้งที่</th>
                        <th scope="col">เวลาทำครั้งแรก</th>
                        <th scope="col">สิ้นสุด</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="table-secondary">
                            <td><span class="badge bg-success">{{ $item->id }}</span>
                            </td>
                            <td>{{ $item->rounds }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="column">
                <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>

            </div>
            <div class="column">
                <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
            <div class="column">
                <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                <q>{{ $item->created_at }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
        </div>
    </div>
    <hr>
    <h3 class="">วันที่3</h3>
    <div class="row">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">เลขที่ลำดับ</th>
                    <th scope="col">ครั้งที่</th>
                    <th scope="col">เวลาทำครั้งแรก</th>
                    <th scope="col">สิ้นสุด</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="table-secondary">
                        <td><span class="badge bg-success">{{ $item->id }}</span>
                        </td>
                        <td>{{ $item->rounds }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="column">
            <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
            <q>{{ $item->rounds }}</q><br>
            <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
            <q>{{ $item->created_at }}</q><br>

        </div>
        <div class="column">
            <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
            <q>{{ $item->rounds }}</q><br>
            <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
            <q>{{ $item->created_at }}</q><br>
        </div>
        <div class="column">
            <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
            <q>{{ $item->created_at }}</q><br>
            <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
            <q>{{ $item->created_at }}</q><br>
        </div>
        <hr>
        <h3 class="">วันที่4</h3>
        <div class="row">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">เลขที่ลำดับ</th>
                        <th scope="col">ครั้งที่</th>
                        <th scope="col">เวลาทำครั้งแรก</th>
                        <th scope="col">สิ้นสุด</th>
    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="table-secondary">
                            <td><span class="badge bg-success">{{ $item->id }}</span>
                            </td>
                            <td>{{ $item->rounds }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="column">
                <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
    
            </div>
            <div class="column">
                <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->rounds }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
            <div class="column">
                <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                <q>{{ $item->created_at }}</q><br>
                <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                <q>{{ $item->created_at }}</q><br>
            </div>
            <hr>
            <h3 class="">วันที่5</h3>
            <div class="row">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">เลขที่ลำดับ</th>
                            <th scope="col">ครั้งที่</th>
                            <th scope="col">เวลาทำครั้งแรก</th>
                            <th scope="col">สิ้นสุด</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="table-secondary">
                                <td><span class="badge bg-success">{{ $item->id }}</span>
                                </td>
                                <td>{{ $item->rounds }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item->rounds }}</q><br>
                    <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                    <q>{{ $item->created_at }}</q><br>
        
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>{{ $item->rounds }}</q><br>
                    <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                    <q>{{ $item->created_at }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item->created_at }}</q><br>
                    <label class="lable" for="fname">ระดับความรู้สึก :</label><br>
                    <q>{{ $item->created_at }}</q><br>
                </div>
    </div>
   


</body>

</html>

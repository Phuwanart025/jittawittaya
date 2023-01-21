<!DOCTYPE html>
<html>

<head>
    <title>รายงานการทำแบบบันทึก</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

        body {
            font-family: "THSarabunNew";
        }

    </style>
</head>

<body>  
    <div class="text-center">
        <h1>Jitdee</h1>
        <p>ประวัติบันทึกความรู้สึก</p>
    </div>
    <hr>
    
  <div class="container">
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
        </div>

        <div class="text-center">
            <h1>ดทำพนยเทำพยน</h1>
            <h1>ประวัติบันทึกความรู้สึก</h1>
        </div>






    </div>
</body>

</html>

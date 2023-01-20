set_time_limit();
<!DOCTYPE html>
<html><head>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">            
       
        
    <title>รายงานการทำแบบบันทึก</title>
</head>
<body>
    <div class="table-responsive">
        <table id="myTable" class="display  text-secondary" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">เลขที่ลำดับ</th>
                    <th scope="col">ครั้งที่</th>
                    <th scope="col">เวลาทำครั้งแรก</th>
                    <th scope="col">สิ้นสุด</th>
            
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="col">เลขที่ลำดับ</th>
                    <th scope="col">ครั้งที่</th>
                    <th scope="col">เวลาทำครั้งแรก</th>
                    <th scope="col">สิ้นสุด</th> 
                </tr>
            </tfoot>
            <tbody>
                @foreach ($data as $item)
              <tr class="item{{$item->id}}">
                  <td><span class="w3-tag w3-round w3-green w3-border w3-border-white">{{$item->id}}</span></td>
                  <td>{{$item->rounds}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->updated_at}}</td>
              </tr>
              @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
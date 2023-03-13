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
            background-color: rgb(231, 231, 231)
        }

        th {
            background-color: #04AA6D;
            color: rgb(255, 255, 255);
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 100px;
            text-align: center;
            /* Should be removed. Only for demonstration */
        }


        .lable {
            color: rgb(15, 42, 240);
            font-size: 20px;
        }

        .text-red {
            color: rgb(244, 3, 3);
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="header">
        <img class="" src="images/rethink.jpg" class="img-thumbnail" alt="..." width="250" height="120">
        <h3>ประวัติบันทึกความรู้สึก</h3>
        <h3>คุณ: {{ Auth::user()->name }}</h3>
    </div>
    <hr>

    <div class="container">
        <div class="page-break row1 ">
            <h3>วันที่1</h3>
            @foreach ($data as $item)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item->detail_t1 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">อารมณ์คืออะไร :</label><br>
                    <q>{{ $item->story_d1 }}</q><br>
                    <q class="text-red">--เฉลย เศร้า , เหงา , โกรธ , หงุดหงิด , ไม่สบายใจ--</q><br>
                </div>

        </div>
        @endforeach
        <div class="page-break row">
            <h3>วันที่2</h3>
            @foreach ($data2 as $item2)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item2->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item2->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item2->detail_t2 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">นิทานเรื่อง...เพื่อน 2 คน :</label><br>
                    <q class="text-red">คุณได้อะไรจากนิทานเรื่องนี้</q><br>
                    <q>{{ $item2->two_friends }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">เมื่อคุณรู้สึก "โกรธ" ร่างกายของคุณมีอะไรเกิดขึ้นบ้าง
                        :</label><br>
                    <q>{{ $item2->feel_body1 }}</q><br>
                    <q>{{ $item2->feel_body2 }}</q><br>
                    <q>{{ $item2->feel_body3 }}</q><br>
                    <q>{{ $item2->feel_body4 }}</q><br>
                    <q>{{ $item2->feel_body5 }}</q><br>
                    <q>{{ $item2->feel_body6 }}</q><br>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่3</h3>
            @foreach ($data3 as $item3)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item3->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item3->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item3->detail_t3 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">นิทานเรื่อง...อิฐขี้กลัว :</label><br>
                    <q class="text-red">คุณได้อะไรจากนิทานเรื่องนี้</q><br>
                    <q>{{ $item3->scared_brickstory_v4 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">เมื่อเกิดเหตุการณ์ต่างๆ และรู้สึก "กลัว"
                        คุณเคยมีอาการต่อไปนี้ระดับใด :</label><br>
                    <label>ปวดหัว :<q>ระดับ{{ $item3->d3_v5 }}</q></label>

                    <label>ปวดท้อง : <q>ระดับ{{ $item3->d3_v6 }}</q></label>

                    <label>ใจสั่น : <q>ระดับ{{ $item3->d3_v7 }}</q></label>

                    <label>มือสั่น :<q>ระดับ{{ $item3->d3_v8 }}</q></label>

                    <label>ขาสั่น :<q>ระดับ{{ $item3->d3_v9 }}</q></label>

                    <label>เหงื่อออก : <q>ระดับ{{ $item3->d3_v10 }}</q></label>


                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่4</h3>

            @foreach ($data4 as $item4)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item4->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item4->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item4->detail_t4 }}</q><br>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่5</h3>

            @foreach ($data5 as $item5)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item5->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item5->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">อะไรทำให้คุณรู้สึกอย่างนั้น :</label><br>
                    <q>{{ $item5->detail_t5 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">ความคืออะไร :</label><br>
                    <q>{{ $item5->idea_v4 }}</q><br>
                    <q class="text-red">--เฉลย ไม่อยากไปเที่ยว , เดี๋ยวต้องเกิดเรื่องแน่ๆ , คนอื่นไม่ชอบฉัน ,
                        โดนเอาเปรียบ , อย่ามายุ่งกับฉัน , ไม่เก่ง--</q><br>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่6</h3>

            @foreach ($data6 as $item6)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item6->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item6->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item6->detail_t6 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น: </label><br>
                    <q>{{ $item6->detail2_t6 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">นิทานเรื่อง...คุณยายและความห่วงใย :</label><br>
                    <q class="text-red">คุณได้อะไรจากนิทานเรื่องนี้</q><br>
                    <q>{{ $item6->grandma_v4 }}</q><br>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่7</h3>

            @foreach ($data7 as $item7)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item7->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item7->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item7->detail_t7 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น: </label><br>
                    <q>{{ $item7->detail2_t7 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์ที่เกิดขึ้น</th>
                            <th>ความคิด</th>
                            <th>ความรู้สึก</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td>สอบไม่ผ่าน</td>
                                <td>ฉันทำอะไรก็ไม่เก่งสักอย่าง</td>
                                <td>{{ $item7->thoughts_feelings }}</td>
                            </tr>
                            <tr>
                                <td>สอบไม่ผ่าน</td>
                                <td>ครูออกข้อสอบยากเกินไปแล้ว</td>
                                <td>{{ $item7->thoughts_feelings2 }}</td>
                            </tr>
                            <tr>
                                <td>สอบไม่ผ่าน</td>
                                <td>ฉันจะต้องติดF แน่ๆ</td>
                                <td>{{ $item7->thoughts_feelings3 }}</td>

                            </tr>
                            <tr>
                                <td>สอบไม่ผ่าน</td>
                                <td>ครั้งหน้าฉันจะตั้งใจและอ่านมากขึ้น</td>
                                <td>{{ $item7->thoughts_feelings4 }}</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่8</h3>

            @foreach ($data8 as $item8)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item8->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item8->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item8->detail_t8 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น: </label><br>
                    <q>{{ $item8->detail2_t8 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">จากเหตุการณ์นี้ เขามีกับดักความคิดแบบไหนกันนะ...?
                        :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์</th>
                            <th>ความคิด</th>
                            <th>กับดักความคิด</th>
                            <th>อารมณ์</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>แฟนอ่านแชทแล้วไม่ตอบ</td>
                                <td>เขาคงคิดว่าเราไม่สำคัญ </td>
                                <td>{{ $item8->story_d8 }}</td>
                                <td>เศร้า</td>
                            </tr>
                            <tr>
                                <td>อาจารย์ออกข้อสอบนอกเหนือจากสิ่งที่สอนได้คะแนนน้อย</td>
                                <td>อาจารย์ต้องออกข้อสอบให้ตรงกับที่สอนสิ</td>
                                <td>{{ $item8->story2_d8 }}</td>
                                <td>โกรธ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่9</h3>

            @foreach ($data9 as $item9)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item9->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item9->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item9->detail_t9 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item9->detail2_t9 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">จากเหตุการณ์นี้ เขามีกับดักความคิดแบบไหนกันนะ...?
                        :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์</th>
                            <th>ความคิด</th>
                            <th>กับดักความคิด</th>
                            <th>อารมณ์</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>โทรหายายที่อยู่บ้านคนเดียว แต่ยายไม่รับสาย</td>
                                <td>ยายอาจจะล้มหัวฟาดพื้น เลือดออกในสมอง ยายจะตายมั้ย
                                    จะทำยังไงดี</td>
                                <td>{{ $item9->story2_d9 }}</td>
                                <td>กังวล</td>
                            </tr>
                            <tr>
                                <td>เมื่อวานลงชุมชนเก็บข้อมูลกับเพื่อนในกลุ่ม
                                    วันนี้นัดคุยงานกลุ่มแต่เพื่อนไม่มาช่วย</td>
                                <td>ฉันทำงานกลุ่มอยู่คนเดียว เหนื่อยจัง</td>
                                <td>{{ $item9->story2_d9 }}</td>
                                <td>เศร้า</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่10</h3>

            @foreach ($data10 as $item10)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item10->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item10->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item10->detail_t10 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item10->detail2_t10 }}</q><br>
                </div>

                <div class="row">
                    <label class="lable" for="fname">คุณคิดว่าบุคคลในภาพน่าจะคิดอะไรอยู่?</label><br>
                    <div class="column">
                        <label class="text-red">เหตุการณ์ที่เกิดขึ้น : โดนขับรถปาดหน้า </label><br>
                        <q>{{ $item10->story_d10 }}</q><br>
                    </div>
                    <div class="column">
                        <label class="text-red">เหตุการณ์ที่เกิดขึ้น : กลัวแมลงสาบวิ่งเข้ามาในครัว</label><br>
                        <q>{{ $item10->story2_d10 }}</q><br>
                    </div>
                    <div class="column">
                        <label class="text-red">เหตุการณ์ที่เกิดขึ้น :เลิกลากับแฟน</label><br>
                        <q>{{ $item10->story3_d10 }}</q><br>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่11</h3>

            @foreach ($data11 as $item11)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item11->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item11->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item11->detail_t11 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item11->detail2_t11 }}</q><br>
                </div>

                <div class="row">
                    <label class="lable" for="fname">นิทานเรื่อง...คุณยายและความห่วงใย :</label><br>
                    <q class="text-red">คุณได้อะไรจากนิทานเรื่องนี้</q><br>
                    <q>{{ $item11->grandma2_v4 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">ใน 5 วันที่ผ่านมา คุณได้เรียนรู้อะไรบ้าง :</label><br>
                    <q>{{ $item11->thought_pattern11 }}</q><br>
                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่12</h3>

            @foreach ($data12 as $item12)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item12->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item12->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item12->detail_t12 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item12->detail2_t12 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item12->detail3_t12 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>หลักฐานการสนับสนุน</th>
                            <th>หลักฐานคัดค้าน</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item12->proof_support_v4_1 }}</td>
                                <td>{{ $item12->objectionable_evidence_v4_2 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $item12->proof_support_v5_1 }}</td>
                                <td>{{ $item12->objectionable_evidence_v5_2 }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่13</h3>

            @foreach ($data13 as $item13)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item13->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item13->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item13->detail_t13 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item13->detail2_t13 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item13->detail3_t13 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">นิทานเรื่อง...คนขายรองเท้า :</label><br>
                    <q class="text-red">คุณได้อะไรจากนิทานเรื่องนี้</q><br>
                    <q>{{ $item13->story_d13 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์ที่เกิดขึ้น</th>
                            <th>คิดอะไร</th>
                            <th>อารมณ์ที่เกิดขึ้น</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ที่เกิดขึ้นใหม่</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>เพื่อนไม่คุยด้วย</td>
                                <td>เพื่อนน่าจะไม่ชอบฉัน</td>
                                <td>เศร้า</td>
                                <td>
                                    {{ $item13->new_idea_v5_1 }}
                                </td>
                                <td>
                                    {{ $item13->new_emotions_v5_2 }}
                                </td>
                            </tr>
                            <tr>
                                <td>คนแปลกหน้าเดินเข้ามาหา</td>
                                <td>ขโมยหรือป่าว</td>
                                <td>กลัว</td>
                                <td>
                                    {{ $item13->new_idea_v6_1 }}
                                </td>
                                <td>
                                    {{ $item13->new_emotions_v6_2 }}
                                </td>
                            </tr>
                            <tr>
                                <td>โดนบีบแตรไส่</td>
                                <td>หาเรื่องกันหรอ</td>
                                <td>โกรธ</td>
                                <td>
                                    {{ $item13->new_idea_v7_1 }}
                                </td>
                                <td>
                                    {{ $item13->new_emotions_v7_2 }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่14</h3>

            @foreach ($data14 as $item14)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item14->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item14->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item14->detail_t14 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item14->detail2_t14 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item14->detail3_t14 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>ทางเลือก</th>
                            <th>ข้อดี</th>
                            <th>ข้อเสีย</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item14->story_v4 }}
                                </td>
                                <td>{{ $item14->positive_v4 }}
                                </td>
                                <td>{{ $item14->negative_v4 }}
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $item14->story_v5 }}
                                </td>
                                <td>{{ $item14->positive_v5 }}
                                </td>
                                <td>{{ $item14->negative_v5 }}
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $item14->story_v6 }}
                                </td>
                                <td>{{ $item14->positive_v6 }}
                                </td>
                                <td>{{ $item14->negative_v6 }}
                                </td>

                            </tr>

                            <tr class="table-dark">
                                <td colspan="3">
                                    <div class="container">
                                        <div class="row">
                                            <label for="input3"
                                                class="col-sm-4 col-form-label">ทางเลือกที่คิดว่าดีสำหรับฉัน</label>
                                            <div class="col-sm-8">
                                                {{ $item14->story_positive_v7 }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่15</h3>

            @foreach ($data15 as $item15)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item15->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item15->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item15->detail_t15 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item15->detail2_t15 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item15->detail3_t15 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>สัตว์เลี้ยงป่วยตาย</td>
                                <td>คงไม่ได้เจอกันอีกแล้ว</td>
                                <td>เศร้า</td>
                                <td>5</td>

                                <td>{{ $item15->rethink_15 }}</td>
                                <td>{{ $item15->new_mood_15 }}</td>
                                <td>{{ $item15->new_mood_level	 }}</td>
                            </tr>
                            <tr>
                                <td>ตั้งใจทำงาน แต่คะแนนไม่ดี</td>
                                <td>ฉันไม่ได้เรื่อง</td>
                                <td>เศร้า</td>
                                <td>4</td>

                                <td>{{ $item15->rethink2_15 }}</td>
                                <td>{{ $item15->new_mood2_15 }}</td>
                                <td>{{ $item15->new_mood_level2 }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่16</h3>

            @foreach ($data16 as $item16)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item16->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item16->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item16->detail_t16 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item16->detail2_t16 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item16->detail3_t16 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>อาจารย์สั่งงานกระชั้นชิด</td>
                                <td>ทำไม่ทันแน่ๆเลย</td>
                                <td>กังวล</td>
                                <td>4</td>

                                    <td>{{ $item16->rethink_16 }}</td>
                                    <td>{{ $item16->new_mood_16 }}</td>
                                    <td>{{ $item16->new_mood_level	 }}</td>
                            </tr>
                            <tr>
                                <td>ตรวจสุขภาพพบค่าไตผิดปกติ</td>
                                <td>ฉันจะเป็นโรคร้ายแรงมั้ย แล้วฉันจะตายหรือเปล่า</td>
                                </td>
                                <td>กลัว</td>
                                <td>5</td>

                                    <td>{{ $item16->rethink_16 }}</td>
                                    <td>{{ $item16->new_mood_16 }}</td>
                                    <td>{{ $item16->new_mood_level	 }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่17</h3>

            @foreach ($data17 as $item17)
                <div class="column">
                    <label class="lable" for="fname">วันนี้ความรู้สึกเป็นสีอะไร :</label><br>
                    <q>{{ $item17->color_feel_today }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="lname">ระดับความรู้สึก :</label><br>
                    <q>ระดับ{{ $item17->sensation_level }}</q><br>
                </div>
                <div class="column">
                    <label class="lable" for="fname">เหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item17->detail_t17 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">คิดยังไงกับเหตุการณ์ที่เกิดขึ้น :</label><br>
                    <q>{{ $item17->detail2_t17 }}</q><br>
                </div>
                <div class="row">
                    <label class="lable" for="fname">แล้วถ้าลองคิดแบบอื่น จะคิดยังไงดีนะ :</label><br>
                    <q>{{ $item17->detail3_t17 }}</q><br>
                </div>
                <hr>
                <div class="row">
                    <label class="lable" for="fname">ถ้าฉัน คิดแบบนี้ ฉันจะรู้สึก? :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>เหตุการณ์</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ป้าข้างบ้านถามว่าเรียนจบแล้วทำไมยังไม่มีงานทำ</td>
                                                            <td>จะมายุ่งอะไรด้วย</td>
                                                            <td>โกรธ</td>
                                <td>5</td>

                                <td>{{ $item17->rethink_17 }}</td>
                                <td>{{ $item17->new_mood_17 }}</td>
                                <td>{{ $item17->new_mood_level	 }}</td>
                            </tr>
                            <tr>
                                <td>โดนแซงคิวเข้าห้องน้ำ</td>
                                                            <td>ทำไมเห็นแก่ตัวแบบนี้</td>
                                                            <td>โกรธ</td>
                                <td>4</td>

                                <td>{{ $item17->rethink2_17 }}</td>
                                <td>{{ $item17->new_mood2_17 }}</td>
                                <td>{{ $item17->new_mood_level2 }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
        </div>

        <div class="page-break row">
            <h3>วันที่18</h3>

            @foreach ($data18 as $item18)
               
                <div class="row">
                    <label class="lable" for="fname">ตารางปรับความคิด :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>วันนี้เกิดอะไรขึ้น</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item18->data1_t18 }}</td>
                                <td>{{ $item18->data2_t18 }}</td>
                                <td>{{ $item18->data3_t18 }}</td>
                                <td>{{ $item18->data4_t18 }}</td>
                                <td>{{ $item18->data5_t18 }}</td>
                                <td>{{ $item18->data6_t18 }}</td>
                                <td>{{ $item18->data7_t18 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $item18->data8_t18 }}</td>
                                <td>{{ $item18->data9_t18 }}</td>
                                <td>{{ $item18->data10_t18 }}</td>
                                <td>{{ $item18->data11_t18 }}</td>
                                <td>{{ $item18->data12_t18 }}</td>
                                <td>{{ $item18->data13_t18 }}</td>
                                <td>{{ $item18->data14_t18 }}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
            <h3>วันที่19</h3>

            @foreach ($data19 as $item19)
               
                <div class="row">
                    <label class="lable" for="fname">ตารางปรับความคิด :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>วันนี้เกิดอะไรขึ้น</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item19->data1_t19 }}</td>
                                <td>{{ $item19->data2_t19 }}</td>
                                <td>{{ $item19->data3_t19 }}</td>
                                <td>{{ $item19->data4_t19 }}</td>
                                <td>{{ $item19->data5_t19 }}</td>
                                <td>{{ $item19->data6_t19 }}</td>
                                <td>{{ $item19->data7_t19 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $item19->data8_t19 }}</td>
                                <td>{{ $item19->data9_t19 }}</td>
                                <td>{{ $item19->data10_t19 }}</td>
                                <td>{{ $item19->data11_t19 }}</td>
                                <td>{{ $item19->data12_t19 }}</td>
                                <td>{{ $item19->data13_t19 }}</td>
                                <td>{{ $item19->data14_t19 }}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach
            <h3>วันที่20</h3>

            @foreach ($data20 as $item20)
               
                <div class="row">
                    <label class="lable" for="fname">ตารางปรับความคิด :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>วันนี้เกิดอะไรขึ้น</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item20->data1_t20 }}</td>
                                <td>{{ $item20->data2_t20 }}</td>
                                <td>{{ $item20->data3_t20 }}</td>
                                <td>{{ $item20->data4_t20 }}</td>
                                <td>{{ $item20->data5_t20 }}</td>
                                <td>{{ $item20->data6_t20 }}</td>
                                <td>{{ $item20->data7_t20 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $item20->data8_t20 }}</td>
                                <td>{{ $item20->data9_t20 }}</td>
                                <td>{{ $item20->data10_t20 }}</td>
                                <td>{{ $item20->data11_t20 }}</td>
                                <td>{{ $item20->data12_t20 }}</td>
                                <td>{{ $item20->data13_t20 }}</td>
                                <td>{{ $item20->data14_t20 }}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            @endforeach

        </div>
        <div class="page-break row">
            <h3>วันที่21</h3>

            @foreach ($data21 as $item21)
               
                <div class="row">
                    <label class="lable" for="fname">ตารางปรับความคิด :</label><br>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>วันนี้เกิดอะไรขึ้น</th>
                            <th>คิดยังไง</th>
                            <th>อารมณ์</th>
                            <th>ระดับอารมณ์ 1-5</th>
                            <th>คิดใหม่</th>
                            <th>อารมณ์ใหม่</th>
                            <th>ระดับอารมณ์ใหม่ 1-5</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item21->data1_t21 }}</td>
                                <td>{{ $item21->data2_t21 }}</td>
                                <td>{{ $item21->data3_t21 }}</td>
                                <td>{{ $item21->data4_t21 }}</td>
                                <td>{{ $item21->data5_t21 }}</td>
                                <td>{{ $item21->data6_t21 }}</td>
                                <td>{{ $item21->data7_t21 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $item21->data8_t21 }}</td>
                                <td>{{ $item21->data9_t21 }}</td>
                                <td>{{ $item21->data10_t21 }}</td>
                                <td>{{ $item21->data11_t21 }}</td>
                                <td>{{ $item21->data12_t21 }}</td>
                                <td>{{ $item21->data13_t21 }}</td>
                                <td>{{ $item21->data14_t21 }}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

    </div>
</body>

</html>

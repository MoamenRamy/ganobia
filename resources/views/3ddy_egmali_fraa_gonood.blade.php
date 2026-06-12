<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <div class="page-content">
        <h3 class='text-center heading'>يومية تمام المنطقة مجمعة</h3>
        <table style="" class='table table-bordered table-hover no-footer table-selectable printable-data'>
            <colgroup id="col_group">
                <col>
            </colgroup>
            <thead>
                <tr class='main_head_line'>
                    <th rowspan=3>الوحدة</th>
                    <th rowspan=2 colspan='2'>قوة</th>
                    <th rowspan=2 colspan='2'>موجود</th>
                    <th rowspan=2 colspan='2'>خارج</th>
                    <th rowspan=1 colspan=4>مهمة تدريبية</th>>
                </tr>
                <tr class='fill_me_please'>
                    <th colspan=2>  مهمة تدريبية من الوحدة </th>
                    <th colspan=2> مهمة تدريبية على الوحدة</th>
                </tr>
                <tr class='tr_gonood_rateb'>
                    <th>رع</th>
                    <th>ج</th>
                    <th>رع</th>
                    <th>ج</th>
                    <th>رع</th>
                    <th>ج</th>
                    <th>رع</th>
                    <th>ج</th>
                    <th>رع</th>
                    <th>ج</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>  قيادة المنطة الجنوبية العسكرية   </td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                </tr>

                <tr>
                    <td>ل 305 مش ميكا</td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                </tr>

                <tr>
                    <td>ل 117 مش ميكا</td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>>
                </tr>

                <tr>
                    <td>ل 166 مدرع</td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                </tr>

                {{-- <tr>
                    <td>ل 41 مد وسط</td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                </tr>--}}

                <!-- صف الإجمالي -->
                <tr>
                    <td>الإجمالي</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>

</html>

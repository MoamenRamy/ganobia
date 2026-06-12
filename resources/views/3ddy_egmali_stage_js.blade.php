<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إجمالي المرحلة</title>

    <!-- ملف CSS -->
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="stage-form">
    <form action="3ddy_egmali_stage_js.php" method="GET">
        <div class="row">
            <div class="col-md-9">
                <select name='stage' class='form-control green-haze'>
                    <option value=0>المرحلة - </option>
                    <option value="1">المرحلة الأولى</option>
                    <option value="2">المرحلة الثانية</option>
                    <option value="3">المرحلة الثالثة</option>
                    <option value="4">المرحلة الرابعة</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="submit" value="عرض" class="form-control btn green-haze">
            </div>
        </div>
    </form>
</div>
{{--
<div class="table-container">
    <table class='table table-striped table-hover table-bordered'>
        <thead>
            <tr class='info'>
                <td>السلاح // الوحدة</td>
                <th class='title-rotated'><div>الوحدة 1</div></th>
                <th class='title-rotated'><div>الوحدة 2</div></th>
                <th class='title-rotated'><div>الوحدة 3</div></th>
                <th class='title-rotated'><div>الوحدة 4</div></th>
                <th class='title-rotated'><div>الوحدة 5</div></th>
                <th class='title-rotated'><div>الإجمالي</div></th>
            </tr>
        </thead>
        <tbody>
            <!-- صفوف الأسلحة -->
            <tr>
                <td>السلاح 1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>السلاح 2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>السلاح 3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- صف الإجمالي -->
            <tr class="info">
                <td>الإجمالي</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- صفوف الدورات -->
            <tr>
                <td>الدورة 1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>الدورة 2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- صفوف الملاحظات -->
            <tr>
                <td>غياب</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>شمال سيناء</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- استكمال عرض -->
            <tr>
                <td>إستكمال عرض ج 2 ميد</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div> --}}

</body>
</html>

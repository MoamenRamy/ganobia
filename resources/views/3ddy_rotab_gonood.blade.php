<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>يومية عددية بالفئات</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="row text-center">
    <h3 class="parent_name">  </h3>
    <div class="actions">
        <div id="add_to" class="btn-group print-hidden">
            <a class="btn btn-circle btn-info act_but" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-flag"></i> مجمعة  <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="3ddy_rotab_gonood.php">
                    <i class="fa fa-check"></i> مجمعة</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="3ddy_rotab_gonood.php?id=1">
                    <i class="fa fa-check"></i> قيادة الفرقة 16 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_gonood.php?id=2">
                    <i class="fa fa-check"></i> ل 16 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_gonood.php?id=3">
                    <i class="fa fa-check"></i> ل3 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_gonood.php?id=4">
                    <i class="fa fa-check"></i> ل 57 مدرع</a>
                </li>
                <li>
                    <a href="3ddy_rotab_gonood.php?id=5">
                    <i class="fa fa-check"></i> ل 41 مد وسط</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<br/>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>الوحدة / الفئة</th>
            <th>حرفي</th>
            <th>سائق جنزير</th>
            <th>سائق عجل</th>
            <th>صف</th>
            <th>كاتب عسكرى </th>
            <th>مهني</th>
            <th>غير مستكمل البيانات</th>
            <th>الإجمالي</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

</body>
</html>

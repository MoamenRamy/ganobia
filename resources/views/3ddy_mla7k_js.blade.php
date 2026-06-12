<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>يومية كمائن سيناء</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="row text-center">
    <h3 class="parent_name"></h3>
    <div class="actions">
        <div id="add_to" class="btn-group print-hidden">
            <a class="btn btn-circle btn-info act_but" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
            <i class="icon-flag"></i> الإجمالي <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="sinai_ywmyt_kmayn_prim_units.php">
                    <i class="icon-book-open"></i> الإجمالي </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=1">
                    <i class="fa fa-check"></i> ملاحق داخلية</a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=2">
                    <i class="fa fa-check"></i> ملاحق خارجية</a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=3">
                    <i class="fa fa-check"></i> تمامت اخري</a>
                </li>
                <li>
                    <a href="sinai_ywmyt_kmayn_units.php?id=4">
                    <i class="fa fa-check"></i> الانتقاء</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

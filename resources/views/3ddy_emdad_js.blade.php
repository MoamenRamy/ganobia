
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الإمداد اليومي</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="col-md-12">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-edit"></i>الإمداد اليومي
            </div>
        </div>
        <div class="portlet-body">
            <form action="3ddy_emdad_js.php" method="GET">
                <input type="text" name="emdad_date" id="emdad_date" placeholder="تاريخ الامداد" data-hilight="true" class="form-control green-haze btn" value="" />
                <input type="submit" hidden>
            </form>
            <br/>
            <table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr class='info'>
                        <td rowspan=2>الوحدة / السلاح</td>
                    </tr>
                    <tr class='info'>

                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

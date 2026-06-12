<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الإمداد اليومي</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <div class="emdad-page">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <span>✏️</span>
                    <span>الإمداد اليومي</span>
                </div>
            </div>
            <div class="portlet-body">
                <form class="emdad-form" action="3ddy_emdad.php" method="GET">
                    <input type="text" name="emdad_date" placeholder="تاريخ الامداد" value="5/6/2026">
                </form>

                <div class="table-container">
                    <table class='table table-striped table-hover table-bordered'>
                        <thead>
                            <tr class='info'>
                                <td colspan='2'>الوحدة // السلاح</td>
                                <td>المشاة</td>
                                <td>المدرعات</td>
                                <td>المدفعية</td>
                                <td>عودة من عرض</td>
                                <td colspan='2'>الإجمالي</td>
                                <td>دورة أساسية</td>
                                <td>دورة متخصصة</td>
                                <td>غياب</td>
                                <td colspan='2'>وصول فعلي</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- الوحدة الرئيسية الأولى -->
                            <tr>
                                <td class='info' rowspan='2'>قيادة الفرقة</td>
                                <td>لواء 16 مش</td>
                                <td class='row_0'></td>
                                <td class='row_0'></td>
                                <td class='row_0'></td>
                                <td class='col1 row_0'>0</td>
                                <td colspan='2'>
                                    <div class='parent_row_count_0 row_count_0'></div>
                                </td>
                                <td class='info' rowspan='2'>
                                    <div class='parent_total_row_count_0 egmali'></div>
                                </td>
                                <td class='m_row_0'></td>
                                <td class='m_row_0'></td>
                                <td class='col2 m_row_0'>0</td>
                                <td class='count_0 total_count_0'></td>
                                <td class='info parent_total_count_0 f3ly' rowspan='2'></td>
                            </tr>
                            <tr>
                                <td>لواء 57 مدرع</td>
                                <td class='row_1'></td>
                                <td class='row_1'></td>
                                <td class='row_1'></td>
                                <td class='col1 row_1'>0</td>
                                <td colspan='2'>
                                    <div class='parent_row_count_1 row_count_1'></div>
                                </td>
                                <td class='m_row_1'></td>
                                <td class='m_row_1'></td>
                                <td class='col2 m_row_1'>0</td>
                                <td class='count_1 total_count_0'></td>
                            </tr>

                            <!-- فاصل -->
                            <tr class="separator">
                                <td colspan='50'></td>
                            </tr>

                            <!-- الوحدة الرئيسية الثانية -->
                            <tr>
                                <td class='info' rowspan='1'>القطاع الشمالي</td>
                                <td>لواء 117 مش</td>
                                <td class='row_2'></td>
                                <td class='row_2'></td>
                                <td class='row_2'></td>
                                <td class='col1 row_2'>0</td>
                                <td colspan='2'>
                                    <div class='parent_row_count_2 row_count_2'></div>
                                </td>
                                <td class='info'>
                                    <div class='parent_total_row_count_1 egmali'></div>
                                </td>
                                <td class='m_row_2'></td>
                                <td class='m_row_2'></td>
                                <td class='col2 m_row_2'>0</td>
                                <td class='count_2 total_count_1'></td>
                                <td class='info parent_total_count_1 f3ly'></td>
                            </tr>

                            <!-- فاصل -->
                            <tr class="separator">
                                <td colspan='50'></td>
                            </tr>

                            <!-- صف الإجمالي -->
                            <tr>
                                <td class='info' colspan='2'>الإجمالي</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class='col1Count'>0</td>
                                <td class='info' colspan='2'>
                                    <div class='count_egmali'></div>
                                </td>
                                <td></td>
                                <td></td>
                                <td class='col2Count'>0</td>
                                <td class='info count_f3ly' colspan='2'>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

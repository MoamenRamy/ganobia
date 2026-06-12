<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إجمالي المرحلة</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<body>

<div class="container">
    <div class="portlet">
        <div class="portlet-title">
            <span>📊</span>
            <span>إجمالي المرحلة</span>
        </div>

        <div class="portlet-body">
            <form class="form-row">
                <select name="stage">
                    <option value="0">المرحلة -</option>
                    <option value="1">المرحلة الأولى</option>
                    <option value="2">المرحلة الثانية</option>
                    <option value="3">المرحلة الثالثة</option>
                </select>
                <input type="submit" value="عرض">
            </form>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>السلاح // الوحدة</th>
                            <th class="title-rotated"><div>الوحدة 1</div></th>
                            <th class="title-rotated"><div>الوحدة 2</div></th>
                            <th class="title-rotated"><div>الوحدة 3</div></th>
                            <th class="title-rotated"><div>الوحدة 4</div></th>
                            <th class="title-rotated"><div>الوحدة 5</div></th>
                            <th>الإجمالي</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>اسم السلاح 1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="info">
                            <td>الإجمالي</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="ggray">
                            <td>ما تم وصولة فعلياً</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="section-header">
                            <td colspan="7">ملاحق بالفرقة</td>
                        </tr>
                        <tr class="ggray">
                            <td>إجمالي الملاحق</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="ggray">
                            <td>القوة</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="ggray">
                            <td>ما تم ترحيله</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="ggray">
                            <td>المتبقي علي قوة الترحيل</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

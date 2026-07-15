@extends('layouts.main')
@section('content')
<div class="est-page-container">
    <div class="est-page-header">
        <h2>إجمالي المرحلة</h2>
        <div class="est-controls">
            <select class="est-stage-select">
                <option>المرحلة</option>
                <option>المرحلة الأولى</option>
                <option>المرحلة الثانية</option>
                <option>المرحلة الثالثة</option>
                <option>المرحلة الرابعة</option>
            </select>
        </div>
    </div>

    <div class="est-table-wrapper">
        <table class="est-table">
            <thead>
                <tr>
                    <th class="est-label-col">السلاح // الوحدة</th>
                    <th>الوحدة 1</th>
                    <th>الوحدة 2</th>
                    <th>الوحدة 3</th>
                    <th>الوحدة 4</th>
                    <th>الوحدة 5</th>
                    <th class="est-total-col">الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="est-label-col">اسم السلاح 1</td>
                    <td></td><td></td><td></td><td></td><td></td>
                    <td class="est-total-col"></td>
                </tr>
                <tr class="est-total-row">
                    <td class="est-label-col">الإجمالي</td>
                    <td></td><td></td><td></td><td></td><td></td>
                    <td class="est-total-col"></td>
                </tr>
                <tr>
                    <td class="est-label-col">ما تم وصولة فعلياً</td>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                    <td class="est-total-col">0</td>
                </tr>
                <tr>
                    <td class="est-label-col">ملاحق بالمنطقة</td>
                    <td>ملاحق بالمنطقة</td><td>ملاحق بالمنطقة</td><td>ملاحق بالمنطقة</td><td>ملاحق بالمنطقة</td><td>ملاحق بالمنطقة</td>
                    <td class="est-total-col">ملاحق بالمنطقة</td>
                </tr>
                <tr>
                    <td class="est-label-col">إجمالي الملاحق</td>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                    <td class="est-total-col">0</td>
                </tr>
                <tr>
                    <td class="est-label-col">القوة</td>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                    <td class="est-total-col">0</td>
                </tr>
                <tr>
                    <td class="est-label-col">ما تم ترحيله</td>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                    <td class="est-total-col">0</td>
                </tr>
                <tr>
                    <td class="est-label-col">المتبقي علي قوة الترحيل</td>
                    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
                    <td class="est-total-col">0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

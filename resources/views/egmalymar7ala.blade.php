@extends('layouts.main')

@section('content')
<div class="em-page-container">
    <div class="em-page-header">
        <h2>📊 إجمالي المرحلة</h2>
        <div class="em-controls">
            <button class="em-btn-display">عرض</button>
            <select class="em-stage-select">
                <option>المرحلة</option>
                <option>٢٠١٦ مرحلة أولي</option>
                <option>٢٠١٦ مرحلة ثانية</option>
                <option>٢٠١٦ مرحلة ثالثة</option>
                <option>٢١٦ مرحلة رابعة</option>
                <option>٢٠١٧ مرحلة أولي</option>
                <option>٢٠١٧ مرحلة ثانية</option>
                <option>٢٠١٧ مرحلة ثالثة</option>
                <option>٢٠١٧ مرحلة رابعة</option>
                <option>٢٠١٨ مرحلة أولي</option>
                <option>٢٠١٨ مرحلة ثانية</option>
                <option>٢٠١٨ مرحلة ثالثة</option>
                <option>٢٠١٨ مرحلة رابعة</option>
                <option>٢٠١٩ مرحلة أولي</option>
                <option>٢٠١٩ مرحلة ثانية</option>
                <option>٢٠١٩ مرحلة ثالثة</option>
                <option>٢٠١٩ مرحلة رابعة</option>
                <option>٢٠٢٠ مرحلة أولي</option>
                <option>٢٠٢٠ مرحلة ثانية</option>
                <option>٢٢٠ مرحلة ثالثة</option>
            </select>
        </div>
    </div>

    <div class="em-table-wrapper">
        <table class="em-table">
            <thead>
                <tr>
                    <th class="em-label-col">السلاح // الوحدة</th>
                    <th>الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                <tr class="em-total-row">
                    <td class="em-label-col">الإجمالي</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td class="em-label-col">ما تم وصوله فعلياً</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td class="em-label-col">ملاحق بالفرقة</td>
                    <td>ملاحق بالفرقة</td>
                </tr>
                <tr>
                    <td class="em-label-col">إجمالي الملاحق</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td class="em-label-col">القوة</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td class="em-label-col">ما تم ترحيله</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td class="em-label-col">المتبقي علي قوة الترحيل</td>
                    <td>.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

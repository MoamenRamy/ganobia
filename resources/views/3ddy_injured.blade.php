@extends('layouts.main')
@section('content')
    <div class="inj-page-container">
        <div class="inj-page-header">
            <h2>📋 يومية عددية خاصة الشهداء والمصابين</h2>
            <div class="inj-title">يومية عددية خاصة الشهداء والمصابين من 25 يناير 2011 م</div>
            <div class="inj-subtitle">الفرقة السادسة عشر مشاة ميكانيكي - فرع الأفراد</div>
            <div class="inj-date">التاريخ: / 6 / 2026 م</div>
        </div>

        <div class="inj-section-title">إحصائية الوفاة والإصابة أثناء التأمينات والمداهمات والإصابة بنوع الخطأ منذ ثورة 25
            يناير 2011 حتى تاريخ 5 / 6 / 2026</div>

        <div class="inj-table-wrapper">
            <table class="inj-table inj-table-bordered">
                <thead>
                    <tr>
                        <th rowspan="3">الوحدة</th>
                        <th colspan="3">الوفاة</th>
                        <th colspan="3">الإصابات</th>
                        <th rowspan="2">الإجمالي</th>
                        <th colspan="3">الدرجات الأخرى / الضباط</th>
                    </tr>
                    <tr>
                        <th>أثناء التأمين</th>
                        <th>نوع الخطأ</th>
                        <th>أثناء الأجازة</th>
                        <th>أثناء التأمين</th>
                        <th>نوع الخطأ</th>
                        <th>أثناء الأجازة</th>
                        <th>الوفاة</th>
                        <th>الإصابة</th>
                    </tr>
                    <tr>
                        <th>جنود</th>
                        <th>راتب عالي</th>
                        <th>ضباط</th>
                        <th>جنود</th>
                        <th>راتب عالي</th>
                        <th>ضباط</th>
                        <th>جنود</th>
                        <th>راتب عالي</th>
                        <th>ضباط</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="inj-unit-col">اسم الوحدة</td>
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
                    <tr class="inj-total-row">
                        <td class="inj-unit-col">الإجمالي</td>
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
    </div>
@endsection

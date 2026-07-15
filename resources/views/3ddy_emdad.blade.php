@extends('layouts.main')
@section('content')
<div class="edm-page-container">
    <div class="edm-page-header">
        <h2>✏️ الإمداد اليومي</h2>
    </div>

    <div class="edm-table-wrapper">
        <table class="edm-table edm-table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">الوحدة // السلاح</th>
                    <th>المشاة</th>
                    <th>المدرعات</th>
                    <th>المدفعية</th>
                    <th>عودة من عرض</th>
                    <th>الإجمالي</th>
                    <th>دورة أساسية</th>
                    <th>دورة متخصصة</th>
                    <th>غياب</th>
                    <th>وصول فعلي</th>
                    <th>وصول فعلي</th>
                </tr>
                <tr>
                    <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="edm-section-row">
                    <td class="edm-unit-col">قيادة المنطقة</td>
                    <td>لواء 116 مش</td>
                    <td></td><td></td><td></td>
                    <td>0</td><td></td><td></td><td></td>
                    <td>0</td><td></td>
                </tr>
                <tr class="edm-section-row">
                    <td class="edm-unit-col"></td>
                    <td>لواء 117 مش</td>
                    <td></td><td></td><td></td>
                    <td>0</td><td></td><td></td><td></td>
                    <td>0</td><td></td>
                </tr>
                <tr class="edm-section-row">
                    <td class="edm-unit-col">القطاع الشمالي</td>
                    <td>لواء 305 مش</td>
                    <td></td><td></td><td></td>
                    <td>0</td><td></td><td></td><td></td>
                    <td>0</td><td></td>
                </tr>
                <tr class="edm-total-row">
                    <td class="edm-unit-col">الإجمالي</td>
                    <td>الإجمالي</td>
                    <td></td><td></td><td></td>
                    <td>0</td><td></td><td></td><td></td>
                    <td>0</td><td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

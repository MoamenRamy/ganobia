@extends('layouts.main')

@section('content')
<div class="mh2-page-container">
    <div class="mh2-header">
        <h2> مرتبات الحرب</h2>
        <a href="#" class="mh2-btn-add">+ إضافة جديد</a>
    </div>

    <div class="mh2-table-wrapper">
        <table class="mh2-table">
            <thead>
                <tr>
                    <th class="mh2-col-num">م</th>
                    <th>اسم الفئة</th>
                    <th>مرتب الحرب</th>
                    <th>الأدوات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="mh2-col-num">-</td>
                    <td class="mh2-empty">لم يتم العثور على نتائج</td>
                    <td class="mh2-empty">لم يتم العثور على نتائج</td>
                    <td class="mh2-empty">لم يتم العثور على نتائج</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

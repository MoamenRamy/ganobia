@extends('layouts.main')

@section('content')
<div class="mws-page-container">
    <div class="mws-page-header">
        <h2>📋 الموقف الشهري</h2>
        <a href="#" class="mws-btn-add">+ إضافة جديد</a>
    </div>

    <div class="mws-table-wrapper">
        <table class="mws-table">
            <thead>
                <tr>
                    <th class="mws-col-num">م</th>
                    <th>الشهر</th>
                    <th>السنة</th>
                    <th>الأدوات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="mws-col-num">-</td>
                    <td class="mws-empty">لم يتم العثور على نتائج</td>
                    <td class="mws-empty">لم يتم العثور على نتائج</td>
                    <td class="mws-empty">لم يتم العثور على نتائج</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

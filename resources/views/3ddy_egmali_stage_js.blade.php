@extends('layouts.main')
@section('content')
<div class="esj-page-container">
    <div class="esj-page-header">
        <h2>إجمالي المرحلة</h2>
        <div class="esj-controls">
            <select class="esj-stage-select">
                <option>المرحلة</option>
                <option>المرحلة الأولى</option>
                <option>المرحلة الثانية</option>
                <option>المرحلة الثالثة</option>
                <option>المرحلة الرابعة</option>
            </select>
        </div>
    </div>

    <div class="esj-table-wrapper">
        <table class="esj-table esj-table-bordered">
            <thead>
                <tr>
                    <th class="esj-label-col">السلاح // الوحدة</th>
                    <th>الوحدة 1</th>
                    <th>الوحدة 2</th>
                    <th>الوحدة 3</th>
                    <th>الوحدة 4</th>
                    <th>الوحدة 5</th>
                    <th class="esj-total-col">الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                <!-- بيانات فارغة -->
            </tbody>
        </table>
    </div>
</div>
@endsection

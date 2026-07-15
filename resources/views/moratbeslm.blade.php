@extends('layouts.main')
@section('content')
<div class="ms-page-container">
    <div class="ms-page-header">
        <h2>📊 مرتبات السلم – الوحدات الرئيسية</h2>
    </div>

    <div class="ms-table-wrapper">
        <table class="ms-table">
            <thead>
                <tr>
                    <th class="ms-col-num">م</th>
                    <th>اسم الوحدة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ms-col-num">١</td>
                    <td><a href="{{ route('qyadatmante2a') }}">قيادة المنطقة الجنوبية العسكرية</a></td>
                </tr>
                <tr>
                    <td class="ms-col-num">٢</td>
                    <td><a href="{{ route('lewa305') }}">اللواء 305 مش مقل</a></td>
                </tr>
                <tr>
                    <td class="ms-col-num">٣</td>
                    <td><a href="{{ route('lewa117') }}">اللواء 117 مش مقل</a></td>
                </tr>
                <tr>
                    <td class="ms-col-num"></td>
                    <td><a href="{{ route('lewa166') }}">اللواء 166 مش مقل</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

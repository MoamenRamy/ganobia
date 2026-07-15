@extends('layouts.main')
@section('content')
<div class="mld-page-container">
    <div class="mld-page-header">
        <h2>📋 يومية عددية خاصة الملاحق</h2>
        <div class="mld-title">يومية عددية خاصة الملاحق الداخلية</div>
    </div>

    <div class="mld-actions">
        <div class="mld-btn-group">
            <a class="mld-btn mld-btn-circle mld-btn-info" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="mld-icon-flag"></i> الإجمالي <i class="mld-fa-angle-down"></i>
            </a>
            <ul class="mld-dropdown-menu">
                <li>
                    <a href="#">
                        <i class="mld-fa-check"></i> الإجمالي
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="mld-fa-check"></i> الوحدة 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="mld-fa-check"></i> الوحدة 2
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- جدول الضباط -->
    <div class="mld-section">
        <div class="mld-section-title">أولاً الضباط :</div>
        <div class="mld-table-wrapper">
            <table class="mld-table">
                <thead>
                    <tr>
                        <th class="mld-unit-col">المكان / الوحدة</th>
                        <th>الوحدة 1</th>
                        <th>الوحدة 2</th>
                        <th>الوحدة 3</th>
                        <th class="mld-total-col">الإجمالي</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mld-unit-col">المكان 1</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mld-unit-col">المكان 2</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mld-unit-col">المكان 3</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr class="mld-total-row">
                        <td class="mld-unit-col">الإجمالي العام</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- جدول الدرجات -->
    <div class="mld-section">
        <div class="mld-section-title">ثانياً الدرجات :</div>
        <div class="mld-table-wrapper">
            <table class="mld-table">
                <thead>
                    <tr>
                        <th class="mld-unit-col">المكان / الوحدة</th>
                        <th>الوحدة 1</th>
                        <th>الوحدة 2</th>
                        <th>الوحدة 3</th>
                        <th class="mld-total-col">الإجمالي</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mld-unit-col">المكان 1</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mld-unit-col">المكان 2</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mld-unit-col">المكان 3</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                    <tr class="mld-total-row">
                        <td class="mld-unit-col">الإجمالي العام</td>
                        <td></td><td></td><td></td>
                        <td class="mld-total-col"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
<div class="mlk-page-container">
    <div class="mlk-page-header">
        <h2> يومية عددية خاصة الملاحق</h2>
        <div class="mlk-title">يومية عددية خاصة الملاحق الداخلية</div>
    </div>

    <div class="mlk-actions">
        <div class="mlk-btn-group">
            <a class="mlk-btn mlk-btn-circle mlk-btn-info" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="mlk-icon-flag"></i> الإجمالي <i class="mlk-fa-angle-down"></i>
            </a>
            <ul class="mlk-dropdown-menu">
                <li>
                    <a href="3ddy_mla7k.php?place_id=1&type=1">
                        <i class="mlk-fa-check"></i> الإجمالي
                    </a>
                </li>
                <li>
                    <a href="3ddy_mla7k.php?place_id=1&unit_id=1&type=1">
                        <i class="mlk-fa-check"></i> الوحدة 1
                    </a>
                </li>
                <li>
                    <a href="3ddy_mla7k.php?place_id=1&unit_id=2&type=1">
                        <i class="mlk-fa-check"></i> الوحدة 2
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- جدول الجنود -->
    <div class="mlk-section">
        <div class="mlk-section-title">الجنود</div>
        <div class="mlk-table-wrapper">
            <table class="mlk-table">
                <thead>
                    <tr>
                        <th class="mlk-unit-col">المكان / الوحدة</th>
                        <th>الوحدة 1</th>
                        <th>الوحدة 2</th>
                        <th class="mlk-total-col">الإجمالي</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mlk-unit-col">المكان 1</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mlk-unit-col">المكان 2</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                    <tr class="mlk-total-row">
                        <td class="mlk-unit-col">الإجمالي العام</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- جدول الراتب العالي -->
    <div class="mlk-section">
        <div class="mlk-section-title">الراتب العالي</div>
        <div class="mlk-table-wrapper">
            <table class="mlk-table">
                <thead>
                    <tr>
                        <th class="mlk-unit-col">المكان / الوحدة</th>
                        <th>الوحدة 1</th>
                        <th>الوحدة 2</th>
                        <th class="mlk-total-col">الإجمالي</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mlk-unit-col">المكان 1</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                    <tr>
                        <td class="mlk-unit-col">المكان 2</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                    <tr class="mlk-total-row">
                        <td class="mlk-unit-col">الإجمالي العام</td>
                        <td></td><td></td>
                        <td class="mlk-total-col"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

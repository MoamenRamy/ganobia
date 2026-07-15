@extends('layouts.main')
@section('content')
<div class="mlt-page-container">
    <div class="mlt-page-header">
        <h2>📋 يومية عددية بإجمالي الملاحق</h2>
    </div>

    <div class="mlt-table-wrapper">
        <table class="mlt-table">
            <thead>
                <tr>
                    <th class="mlt-unit-col">الوحدة / المكان</th>
                    <th>المكان 1</th>
                    <th>المكان 2</th>
                    <th>المكان 3</th>
                    <th>المكان 4</th>
                    <th>المكان 5</th>
                    <th>المكان 6</th>
                    <th class="mlt-total-col">الإجمالي</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="mlt-unit-col">الوحدة الفرعية 1</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الفرعية 2</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الفرعية 3</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr class="mlt-subtotal-row">
                    <td class="mlt-unit-col">إجمالي الوحدة الرئيسية 1</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الرئيسية 2</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الرئيسية 3</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الرئيسية 4</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr>
                    <td class="mlt-unit-col">الوحدة الرئيسية 5</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
                <tr class="mlt-grand-total-row">
                    <td class="mlt-unit-col">الإجمالي العام</td>
                    <td></td><td></td><td></td><td></td><td></td><td></td>
                    <td class="mlt-total-col"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

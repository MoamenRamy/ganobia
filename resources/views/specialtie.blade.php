@extends('layouts.main')
@section('content')
<div class="spec-portlet w-full">
    <div class="spec-portlet-title">
        <span>التخصصات</span>
    </div>

    <div class="spec-portlet-body">
        <a href="#" class="spec-btn-add">
            + إضافة جديد
        </a>

        <table class="spec-weapons-table">
            <thead>
                <tr>
                    <th class="spec-col-id">م</th>
                    <th>اسم الفئة</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="spec-col-id">1</td>
                    <td>كاتب عسكرى</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="spec-col-id">2</td>
                    <td>صف</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="spec-col-id">3</td>
                    <td>حرفى</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="spec-col-id">4</td>
                    <td>مهنى</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="spec-col-id">5</td>
                    <td>سائق عجل</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="spec-col-id">6</td>
                    <td>سائق جنزير</td>
                    <td>
                        <button class="spec-btn-edit">تعديل</button>
                        <button class="spec-btn-delete">حذف</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

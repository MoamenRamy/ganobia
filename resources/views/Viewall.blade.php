@extends('layouts.main')
@section('content')
    <div class="viewall-portlet w-full">
        <div class="viewall-portlet-title">
            <span>الأسلحة</span>
        </div>

        <div class="viewall-portlet-body">
            <a href="#" class="viewall-btn-add">
                + إضافة جديد
            </a>

            <table class="viewall-table">
                <thead>
                    <tr>
                        <th class="viewall-col-id">م</th>
                        <th>اسم الوظيفة</th>
                        <th>الأدوات</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="viewall-col-id">1</td>
                        <td>الوظيفة الاولى</td>
                        <td>
                            <button class="viewall-btn-edit">تعديل</button>
                            <button class="viewall-btn-delete">حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="viewall-col-id">2</td>
                        <td>الوظيفة الثانية</td>
                        <td>
                            <button class="viewall-btn-edit">تعديل</button>
                            <button class="viewall-btn-delete">حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="viewall-col-id">3</td>
                        <td>الوظيفة الثالثة</td>
                        <td>
                            <button class="viewall-btn-edit">تعديل</button>
                            <button class="viewall-btn-delete">حذف</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

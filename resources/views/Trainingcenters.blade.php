@extends('layouts.main')
@section('content')
    <div class="tc-portlet w-full">
        <div class="tc-portlet-title">
            <span>مراكز التدريب</span>
        </div>

        <div class="tc-portlet-body">
            <a href="#" class="tc-btn-add">
                + إضافة جديد
            </a>

            <table class="tc-weapons-table">
                <thead>
                    <tr>
                        <th class="tc-col-id">م</th>
                        <th>اسم مركز التدريب</th>
                        <th>الأدوات</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="tc-col-id">1</td>
                        <td>مدرسة المخابرات الحربية والأستطلاع</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="tc-col-id">2</td>
                        <td>مدرسة الموسيقى العسكرية</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="tc-col-id">3</td>
                        <td>مركز تدريب الأسلحة والذخيرة</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="tc-col-id">4</td>
                        <td>مركز تدريب الإشارة رقم 1</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="tc-col-id">5</td>
                        <td>مركز تدريب الإشارة رقم 2</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="tc-col-id">6</td>
                        <td>مركز تدريب الامداد والتموين - تعينات</td>
                        <td>
                            <button class="tc-btn-edit">تعديل</button>
                            <button class="tc-btn-delete">حذف</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

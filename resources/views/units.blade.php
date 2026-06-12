@extends('layouts.main')

@section('content')

    <div class="container w-full m-20  ">
        <div class="table-container ">
            <div class="header">
                <h1>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    الوحدات الرئيسية
                </h1>
                <button class="btn-add">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    إضافة جديد
                </button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>م</th>
                        <th>اسم الوحدة</th>
                        <th>الأدوات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>١</td>
                        <td>قيادة المنطقة الجنوبية العسكرية</td>
                        <td class="tools-cell">
                            <button class="btn-action btn-edit">تعديل</button>
                            <button class="btn-action btn-delete">حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>٢</td>
                        <td>اللواء ٣٠٥ مش ميكا مقل</td>
                        <td class="tools-cell">
                            <button class="btn-action btn-edit">تعديل</button>
                            <button class="btn-action btn-delete">حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>٣</td>
                        <td>اللواء ١١٧ مش ميكا مقل</td>
                        <td class="tools-cell">
                            <button class="btn-action btn-edit">تعديل</button>
                            <button class="btn-action btn-delete">حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>٤</td>
                        <td>اللواء ١٦٦ مش ميكا مقل</td>
                        <td class="tools-cell">
                            <button class="btn-action btn-edit">تعديل</button>
                            <button class="btn-action btn-delete">حذف</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('content')

<div class="portlet w-full">

    <div class="portlet-title">
        <span>الأسلحة</span>
    </div>

    <div class="portlet-body">

        <a href="#" class="btn-add">
            + إضافة جديد
        </a>

        <table class="weapons-table">

            <thead>
                <tr>
                    <th class="col-id"">م</th>
                    <th>اسم مركز التدريب</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td class="col-id">1</td>
                    <td>مدرسة المخابرات الحربية والأستطلاع</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">2</td>
                    <td>مدرسة الموسيقى العسكرية</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">3</td>
                    <td>مركز تدريب الأسلحة والذخيرة</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">4</td>
                    <td>مركز تدريب الإشارة رقم 1</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>


                 <tr>
                    <td class="col-id">5</td>
                    <td>مركز تدريب الإشارة رقم 2</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>



                 <tr>
                    <td class="col-id">6</td>
                    <td>مركز تدريب الامداد والتموين - تعينات</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>





            </tbody>

        </table>

    </div>

</div>

@endsection

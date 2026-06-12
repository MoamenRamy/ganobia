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
                    <th>الملاحق الداخلية</th>
                    <th>الأدوات</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td class="col-id">1</td>
                    <td>الملاحق الخارجية</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">2</td>
                    <td>حفظ سلام داخل البلاد</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">3</td>
                    <td>حفظ سلام خارج البلاد</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>

                <tr>
                    <td class="col-id">4</td>
                    <td>سفر خارج البلاد</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>


                 <tr>
                    <td class="col-id">5</td>
                    <td>عرض + أجازة</td>
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

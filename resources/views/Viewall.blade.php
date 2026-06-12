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
                    <th class="col-id">م</th>
                    <th>اسم الوظيفة</th>
                    <th>الأدوات</th>
                </tr>
            </thead>







            <tbody>

                <tr>
                    <td class="col-id">1</td>
                    <td> الوظيفة الاولى</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-id">2</td>
                    <td> الوظيفة الثانية</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>
                <tr>
                    <td class="col-id">3</td>
                    <td> الوظيفة الثالثة</td>
                    <td>
                        <button class="btn-edit">تعديل</button>
                        <button class="btn-delete">حذف</button>
                    </td>
                </tr>




           </tbody>



           </tbody>

        </table>

    </div>

</div>

@endsection

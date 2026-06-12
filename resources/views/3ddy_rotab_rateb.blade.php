@extends('layouts.main')

@section('content')
<div class="row text-center">
    <h3 class="parent_name">  </h3>
    <div class="actions">
        <div id="add_to" class="btn-group print-hidden">
            <a class="btn btn-circle btn-info act_but" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-flag"></i> مجمعة  <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="3ddy_rotab_rateb.php">
                    <i class="fa fa-check"></i> مجمعة</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="3ddy_rotab_rateb.php?id=1">
                    <i class="fa fa-check"></i> قيادة الفرقة 16 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_rateb.php?id=2">
                    <i class="fa fa-check"></i> ل 16 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_rateb.php?id=3">
                    <i class="fa fa-check"></i> ل3 مش ميكا</a>
                </li>
                <li>
                    <a href="3ddy_rotab_rateb.php?id=4">
                    <i class="fa fa-check"></i> ل 57 مدرع</a>
                </li>
                <li>
                    <a href="3ddy_rotab_rateb.php?id=5">
                    <i class="fa fa-check"></i> ل 41 مد وسط</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<br/>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th>الوحدة / الدرجة</th>
            <th>عريف</th>
            <th>رقيب</th>
            <th>رقيب أ</th>
            <th>مساعد</th>
            <th>مساعد أ</th>
            <th>صانع فني</th>
            <th>صانع دقيق</th>
            <th>صانع ممتاز</th>
            <th>صانع ماهر</th>
            <th>ملاحظ فني</th>
            <th>الإجمالي</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
@endsection

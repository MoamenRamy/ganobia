@extends('layouts.main')
@section('content')
<div class="yrt-page-container">
    <div class="yrt-page-header yrt-text-center">
        <h3 class="yrt-parent-name"></h3>
        <div class="yrt-actions">
            <div class="yrt-btn-group">
                <a class="yrt-btn yrt-btn-circle yrt-btn-info yrt-act-but" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                    <i class="yrt-icon-flag"></i> مجمعة <i class="yrt-fa-angle-down"></i>
                </a>
                <ul class="yrt-dropdown-menu">
                    <li>
                        <a href="3ddy_rotab_rateb.php">
                            <i class="yrt-fa-check"></i> مجمعة
                        </a>
                    </li>
                    <li class="yrt-divider"></li>
                    <li>
                        <a href="3ddy_rotab_rateb.php?id=1">
                            <i class="yrt-fa-check"></i> قيادة الفرقة 16 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_rateb.php?id=2">
                            <i class="yrt-fa-check"></i> ل 16 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_rateb.php?id=3">
                            <i class="yrt-fa-check"></i> ل3 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_rateb.php?id=4">
                            <i class="yrt-fa-check"></i> ل 57 مدرع
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_rateb.php?id=5">
                            <i class="yrt-fa-check"></i> ل 41 مد وسط
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <br/>

    <div class="yrt-table-wrapper">
        <table class="yrt-table yrt-table-bordered">
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
    </div>
</div>
@endsection

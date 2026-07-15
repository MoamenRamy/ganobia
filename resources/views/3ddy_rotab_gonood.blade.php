@extends('layouts.main')
@section('content')
<div class="ygn-page-container">
    <div class="ygn-page-header">
        <h3 class="ygn-parent-name">يومية عددية بالفئات</h3>
        <div class="ygn-actions">
            <div class="ygn-btn-group">
                <a class="ygn-btn ygn-btn-circle ygn-btn-info ygn-act-but" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                    <i class="ygn-icon-flag"></i> مجمعة <i class="ygn-fa-angle-down"></i>
                </a>
                <ul class="ygn-dropdown-menu">
                    <li>
                        <a href="3ddy_rotab_gonood.php">
                            <i class="ygn-fa-check"></i> مجمعة
                        </a>
                    </li>
                    <li class="ygn-divider"></li>
                    <li>
                        <a href="3ddy_rotab_gonood.php?id=1">
                            <i class="ygn-fa-check"></i> قيادة الفرقة 16 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_gonood.php?id=2">
                            <i class="ygn-fa-check"></i> ل 16 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_gonood.php?id=3">
                            <i class="ygn-fa-check"></i> ل3 مش ميكا
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_gonood.php?id=4">
                            <i class="ygn-fa-check"></i> ل 57 مدرع
                        </a>
                    </li>
                    <li>
                        <a href="3ddy_rotab_gonood.php?id=5">
                            <i class="ygn-fa-check"></i> ل 41 مد وسط
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <br/>

    <div class="ygn-table-wrapper">
        <table class="ygn-table ygn-table-bordered">
            <thead>
                <tr>
                    <th>الوحدة / الفئة</th>
                    <th>حرفي</th>
                    <th>سائق جنزير</th>
                    <th>سائق عجل</th>
                    <th>صف</th>
                    <th>كاتب عسكرى</th>
                    <th>مهني</th>
                    <th>غير مستكمل البيانات</th>
                    <th>الإجمالي</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

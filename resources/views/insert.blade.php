@extends('layouts.main')
@section('content')
<div class="ins-main-container w-50">
    <!-- Header -->
    <div class="ins-page-header">
        <div class="ins-header-left">
            <div class="ins-page-title mb-4">
                <i class="fas fa-shield-alt"></i>
                <span>إضافة جنود</span>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="ins-action-buttons pb-4 pt-3">
        <button class="ins-btn ins-btn-gray">
            <i class="fas fa-trash-alt"></i>
            <span>مسح الكل</span>
        </button>
        <button class="ins-btn ins-btn-success">
            <i class="fas fa-check-circle"></i>
            <span class="text-white">إضافة للجميع</span>
        </button>
    </div>

    <!-- Table Container -->
    <div class="ins-table-scroll">
        <table class="ins-soldiers-table">
            <thead>
                <tr>
                    <th class="ins-row-num-th">#</th>
                    <th>الرقم العسكري</th>
                    <th>جندي</th>
                    <th>الإسم</th>
                    <th>مركز التدريب</th>
                    <th>المرحلة التجنيدية</th>
                    <th>الوحدة الرئيسية</th>
                    <th>الوحدة الفرعية</th>
                    <th>السلاح</th>
                    <th>الفئة</th>
                    <th>التخصص</th>
                    <th>تاريخ التجنيد</th>
                    <th>تاريخ التسريح</th>
                    <th>تاريخ الميلاد</th>
                    <th>الرقم القومي</th>
                    <th>نوع المؤهل</th>
                    <th>المؤهل</th>
                    <th>المهنة قبل التجنيد</th>
                    <th>الحالة الاجتماعية</th>
                    <th>عدد الأخوة (ذكور)</th>
                    <th>عدد الأخوة (إناث)</th>
                    <th>الترتيب بين الأخوة</th>
                    <th>عدد الأولاد (ذكور)</th>
                    <th>عدد الأولاد (إناث)</th>
                    <th>اسم الأم</th>
                    <th>مهنة الأم</th>
                    <th>مهنة الوالد</th>
                    <th>رقم تليفون الوالد</th>
                    <th>أقرب الأقارب</th>
                    <th>رقم تليفون القريب</th>
                    <th>المحافظة</th>
                    <th>العنوان</th>
                    <th>الطول</th>
                    <th>الوزن</th>
                    <th>رقم رخصة القيادة</th>
                    <th>ملكية السيارة</th>
                    <th>نوع السيارة</th>
                    <th>تاريخ التسجيل</th>
                    <th>تاريخ الترحيل</th>
                    <th>التوصيات</th>
                    <th>اسم الموصي</th>
                    <th>ما تم حياله</th>
                    <th>رقم آخر صرفية</th>
                    <th>المستلم</th>
                    <th>الدورة</th>
                    <th>ملاحظات</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ins-row-num-td"><div class="ins-row-number">1</div></td>
                    <td><input type="text" placeholder="الرقم العسكري" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">اختر</option>
                            <option value="جندي">جندي</option>
                            <option value="جندي أول">جندي أول</option>
                            <option value="عريف">عريف</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="الاسم" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">مركز التدريب</option>
                            <option value="1">مركز تدريب الإشارة رقم 1</option>
                            <option value="2">مركز تدريب الإشارة رقم 2</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">المرحلة التجنيدية</option>
                            <option value="1">المرحلة الأولى</option>
                            <option value="2">المرحلة الثانية</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">الوحدة الرئيسية</option>
                            <option value="1">اللواء 117 مش ميكا مقل</option>
                            <option value="2">اللواء 166 مش ميكا مقل</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">الوحدة الفرعية</option>
                            <option value="1">الوحدة 1</option>
                            <option value="2">الوحدة 2</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">السلاح</option>
                            <option value="1">أجهزة القيادة</option>
                            <option value="2">الأسلحة والذخيرة</option>
                            <option value="3">الأشغال العسكرية</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">الفئة</option>
                            <option value="1">حرفي</option>
                            <option value="2">سائق جنزير</option>
                            <option value="3">سائق عجل</option>
                        </select>
                    </td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">التخصص</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="10/6/2026" class="ins-form-input"></td>
                    <td><input type="text" placeholder="10/6/2026" class="ins-form-input"></td>
                    <td><input type="text" placeholder="10/6/2026" class="ins-form-input"></td>
                    <td><input type="text" placeholder="الرقم القومي" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">نوع المؤهل</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="المؤهل" class="ins-form-input"></td>
                    <td><input type="text" placeholder="المهنة قبل التجنيد" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">الحالة الاجتماعية</option>
                            <option value="أعزب">أعزب</option>
                            <option value="متزوج">متزوج</option>
                        </select>
                    </td>
                    <td><input type="number" placeholder="0" class="ins-form-input"></td>
                    <td><input type="number" placeholder="0" class="ins-form-input"></td>
                    <td><input type="number" placeholder="0" class="ins-form-input"></td>
                    <td><input type="number" placeholder="0" class="ins-form-input"></td>
                    <td><input type="number" placeholder="0" class="ins-form-input"></td>
                    <td><input type="text" placeholder="اسم الأم" class="ins-form-input"></td>
                    <td><input type="text" placeholder="مهنة الأم" class="ins-form-input"></td>
                    <td><input type="text" placeholder="مهنة الوالد" class="ins-form-input"></td>
                    <td><input type="tel" placeholder="رقم التليفون" class="ins-form-input"></td>
                    <td><input type="text" placeholder="أقرب الأقارب" class="ins-form-input"></td>
                    <td><input type="tel" placeholder="رقم التليفون" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">المحافظة</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="العنوان" class="ins-form-input"></td>
                    <td><input type="number" placeholder="الطول" class="ins-form-input"></td>
                    <td><input type="number" placeholder="الوزن" class="ins-form-input"></td>
                    <td><input type="text" placeholder="رقم رخصة القيادة" class="ins-form-input"></td>
                    <td><input type="text" placeholder="ملكية السيارة" class="ins-form-input"></td>
                    <td><input type="text" placeholder="نوع السيارة" class="ins-form-input"></td>
                    <td><input type="text" placeholder="10/6/2026" class="ins-form-input"></td>
                    <td><input type="text" placeholder="10/6/2026" class="ins-form-input"></td>
                    <td><input type="text" placeholder="التوصيات" class="ins-form-input"></td>
                    <td><input type="text" placeholder="اسم الموصي" class="ins-form-input"></td>
                    <td><input type="text" placeholder="ما تم حياله" class="ins-form-input"></td>
                    <td><input type="text" placeholder="رقم آخر صرفية" class="ins-form-input"></td>
                    <td><input type="text" placeholder="المستلم" class="ins-form-input"></td>
                    <td>
                        <select class="ins-form-select">
                            <option value="">الدورة</option>
                        </select>
                    </td>
                    <td><input type="text" placeholder="ملاحظات" class="ins-form-input"></td>
                    <td>
                        <div class="ins-action-buttons-cell">
                            <button class="ins-btn-action ins-btn-add-capture" title="إضافة والتقاط">
                                <i class="fas fa-camera"></i>
                            </button>
                            <button class="ins-btn-action ins-btn-add" title="إضافة">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

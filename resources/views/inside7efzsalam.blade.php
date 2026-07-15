@extends('layouts.main')
@section('content')
<div class="ihs-main-container">
    <!-- Top Actions -->
    <div class="ihs-top-actions">
        <div class="ihs-dropdown-container">
            <button class="ihs-btn-action ihs-btn-blue">
                <i>⚙</i> الأدوات
                <span class="ihs-dropdown-arrow">▼</span>
            </button>
            <div class="ihs-dropdown-menu">
                <a href="#" class="ihs-dropdown-item">تعديل المحدد</a>
                <a href="#" class="ihs-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="ihs-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="ihs-dropdown-container">
            <button class="ihs-btn-action ihs-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="ihs-dropdown-arrow">▼</span>
            </button>
            <div class="ihs-dropdown-menu">
                <a href="#" class="ihs-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="ihs-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="ihs-dropdown-container">
            <button class="ihs-btn-action ihs-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="ihs-dropdown-arrow">▼</span>
            </button>
            <div class="ihs-dropdown-menu">
                <a href="#" class="ihs-dropdown-item">تصدير النتائج</a>
                <a href="#" class="ihs-dropdown-item">تصدير المحدد</a>
            </div>
        </div>
    </div>

    <!-- Filters Container -->
    <div class="ihs-filters-container">
        <div class="ihs-filters-grid">
            <select class="ihs-form-control">
                <option>حفظ سلام داخل البلاد</option>
            </select>
            <select class="ihs-form-control">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م</option>
                <option>عريف</option>
                <option>رقيب</option>
                <option>مساعد</option>
                <option>مساعد أ</option>
            </select>
            <select class="ihs-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="ihs-form-control">
                <option>الوحدة الرئيسية</option>
                <option>اللواء 117 مش ميكا</option>
                <option>اللواء 166 مش ميكا</option>
                <option>اللواء 305 مش ميكا</option>
                <option>قيادة المنطقة الجنوبية</option>
            </select>
            <select class="ihs-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="ihs-form-control">
                <option>المكان</option>
            </select>
        </div>

        <div class="ihs-bottom-actions-wrapper">
            <div class="ihs-actions-row">
                <div class="ihs-search-input-group">
                    <input type="text" class="ihs-form-control ihs-search-input" placeholder="الإسم">
                    <button class="ihs-btn-action-small ihs-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="ihs-button-group-main">
                    <button class="ihs-btn-action-main ihs-btn-green">إلغاء</button>
                    <button class="ihs-btn-action-main ihs-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="ihs-results-count">
        عدد النتائج: 0
    </div>

    <!-- Table Container -->
    <div class="ihs-table-container">
        <table class="ihs-data-table">
            <thead>
                <tr>
                    <th class="ihs-row-num-th">#</th>
                    <th>الرقم العسكري</th>
                    <th>الدرجة</th>
                    <th>الإسم</th>
                    <th>الوحدة</th>
                    <th>الوحدة الفرعية</th>
                    <th>المهنة قبل التجنيد</th>
                    <th>المكان</th>
                    <th>تاريخ الضم</th>
                    <th>تاريخ التسريح</th>
                    <th>ملاحظات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ihs-row-num-td" colspan="11">لا توجد بيانات للعرض</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
<div class="ohs-main-container">
    <!-- Top Actions -->
    <div class="ohs-top-actions">
        <div class="ohs-dropdown-container">
            <button class="ohs-btn-action ohs-btn-blue">
                <i>⚙</i> الأدوات
                <span class="ohs-dropdown-arrow">▼</span>
            </button>
            <div class="ohs-dropdown-menu">
                <a href="#" class="ohs-dropdown-item">تعديل المحدد</a>
                <a href="#" class="ohs-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="ohs-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="ohs-dropdown-container">
            <button class="ohs-btn-action ohs-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="ohs-dropdown-arrow">▼</span>
            </button>
            <div class="ohs-dropdown-menu">
                <a href="#" class="ohs-dropdown-item">طياعة كشف أسماء</a>
                <a href="#" class="ohs-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="ohs-dropdown-container">
            <button class="ohs-btn-action ohs-btn-yellow">
                <i></i> تصدير النتائج
                <span class="ohs-dropdown-arrow">▼</span>
            </button>
            <div class="ohs-dropdown-menu">
                <a href="#" class="ohs-dropdown-item">تصدير النتائج</a>
                <a href="#" class="ohs-dropdown-item">تصدير المحدد</a>
            </div>
        </div>
    </div>

    <!-- Filters Container -->
    <div class="ohs-filters-container">
        <div class="ohs-filters-grid">
            <select class="ohs-form-control">
                <option>حفظ سلام خارج البلاد</option>
            </select>
            <select class="ohs-form-control">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م</option>
                <option>عريف</option>
                <option>رقيب</option>
                <option>مساعد</option>
                <option>مساعد أ</option>
            </select>
            <select class="ohs-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="ohs-form-control">
                <option>الوحدة الرئيسية</option>
                <option>اللواء 117 مش ميكا</option>
                <option>اللواء 166 مش ميكا</option>
                <option>اللواء 305 مش ميكا</option>
                <option>قيادة المنطقة الجنوبية</option>
            </select>
            <select class="ohs-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="ohs-form-control">
                <option>المكان</option>
            </select>
        </div>

        <div class="ohs-bottom-actions-wrapper">
            <div class="ohs-actions-row">
                <div class="ohs-search-input-group">
                    <input type="text" class="ohs-form-control ohs-search-input" placeholder="الإسم">
                    <button class="ohs-btn-action-small ohs-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="ohs-button-group-main">
                    <button class="ohs-btn-action-main ohs-btn-green">إلغاء</button>
                    <button class="ohs-btn-action-main ohs-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="ohs-results-count">
        عدد النتائج: 0
    </div>

    <!-- Table Container -->
    <div class="ohs-table-container">
        <table class="ohs-data-table">
            <thead>
                <tr>
                    <th class="ohs-row-num-th">#</th>
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
                    <td class="ohs-row-num-td" colspan="11">لا توجد بيانات للعرض</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

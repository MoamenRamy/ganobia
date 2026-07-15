@extends('layouts.main')
@section('content')
<div class="m5-main-container">
    <!-- Top Actions -->
    <div class="m5-top-actions">
        <div class="m5-dropdown-container">
            <button class="m5-btn-action m5-btn-blue">
                <i>⚙</i> الأدوات
                <span class="m5-dropdown-arrow">▼</span>
            </button>
            <div class="m5-dropdown-menu">
                <a href="#" class="m5-dropdown-item">تعديل المحدد</a>
                <a href="#" class="m5-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="m5-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="m5-dropdown-container">
            <button class="m5-btn-action m5-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="m5-dropdown-arrow">▼</span>
            </button>
            <div class="m5-dropdown-menu">
                <a href="#" class="m5-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="m5-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="m5-dropdown-container">
            <button class="m5-btn-action m5-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="m5-dropdown-arrow">▼</span>
            </button>
            <div class="m5-dropdown-menu">
                <a href="#" class="m5-dropdown-item">تصدير النتائج</a>
                <a href="#" class="m5-dropdown-item">تصدير المحدد</a>
            </div>
        </div>
    </div>

    <!-- Filters Container -->
    <div class="m5-filters-container">
        <div class="m5-filters-grid">
            <select class="m5-form-control">
                <option>الملاحق الخارجية</option>
            </select>
            <select class="m5-form-control">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م</option>
                <option>عريف</option>
                <option>رقيب</option>
                <option>مساعد</option>
                <option>مساعد أ</option>
            </select>
            <select class="m5-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="m5-form-control">
                <option>الوحدة الرئيسية</option>
                <option>اللواء 117 مش ميكا</option>
                <option>اللواء 166 مش ميكا</option>
                <option>اللواء 305 مش ميكا</option>
                <option>قيادة المنطقة الجنوبية</option>
            </select>
            <select class="m5-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="m5-form-control">
                <option>المكان</option>
            </select>
        </div>

        <div class="m5-bottom-actions-wrapper">
            <div class="m5-actions-row">
                <div class="m5-search-input-group">
                    <input type="text" class="m5-form-control m5-search-input" placeholder="الإسم">
                    <button class="m5-btn-action-small m5-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="m5-button-group-main">
                    <button class="m5-btn-action-main m5-btn-green">إلغاء</button>
                    <button class="m5-btn-action-main m5-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="m5-results-count">
        عدد النتائج: 0
    </div>

    <!-- Table Container -->
    <div class="m5-table-container">
        <table class="m5-data-table">
            <thead>
                <tr>
                    <th class="m5-row-num-th">#</th>
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
                    <td class="m5-row-num-td" colspan="11">لا توجد بيانات للعرض</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
<div class="ajz-main-container">
    <!-- Top Actions -->
    <div class="ajz-top-actions">
        <div class="ajz-dropdown-container">
            <button class="ajz-btn-action ajz-btn-blue">
                <i>⚙</i> الأدوات
                <span class="ajz-dropdown-arrow">▼</span>
            </button>
            <div class="ajz-dropdown-menu">
                <a href="#" class="ajz-dropdown-item">تعديل المحدد</a>
                <a href="#" class="ajz-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="ajz-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="ajz-dropdown-container">
            <button class="ajz-btn-action ajz-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="ajz-dropdown-arrow">▼</span>
            </button>
            <div class="ajz-dropdown-menu">
                <a href="#" class="ajz-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="ajz-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="ajz-dropdown-container">
            <button class="ajz-btn-action ajz-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="ajz-dropdown-arrow">▼</span>
            </button>
            <div class="ajz-dropdown-menu">
                <a href="#" class="ajz-dropdown-item">تصدير النتائج</a>
                <a href="#" class="ajz-dropdown-item">تصدير المحدد</a>
            </div>
        </div>
    </div>

    <!-- Filters Container -->
    <div class="ajz-filters-container">
        <div class="ajz-filters-grid">
            <select class="ajz-form-control">
                <option>عرض + أجازة</option>
            </select>
            <select class="ajz-form-control">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م</option>
                <option>عريف</option>
                <option>رقيب</option>
                <option>مساعد</option>
                <option>مساعد أ</option>
            </select>
            <select class="ajz-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="ajz-form-control">
                <option>الوحدة الرئيسية</option>
                <option>اللواء 117 مش ميكا</option>
                <option>اللواء 166 مش ميكا</option>
                <option>اللواء 305 مش ميكا</option>
                <option>قيادة المنطقة الجنوبية</option>
            </select>
            <select class="ajz-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="ajz-form-control">
                <option>المكان</option>
            </select>
        </div>

        <div class="ajz-bottom-actions-wrapper">
            <div class="ajz-actions-row">
                <div class="ajz-search-input-group">
                    <input type="text" class="ajz-form-control ajz-search-input" placeholder="الإسم">
                    <button class="ajz-btn-action-small ajz-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="ajz-button-group-main">
                    <button class="ajz-btn-action-main ajz-btn-green">إلغاء</button>
                    <button class="ajz-btn-action-main ajz-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="ajz-results-count">
        عدد النتائج: 0
    </div>

    <!-- Table Container -->
    <div class="ajz-table-container">
        <table class="ajz-data-table">
            <thead>
                <tr>
                    <th class="ajz-row-num-th">#</th>
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
                    <td class="ajz-row-num-td" colspan="11">لا توجد بيانات للعرض</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

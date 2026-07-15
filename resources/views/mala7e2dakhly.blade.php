@extends('layouts.main')
@section('content')
<div class="md-main-container">
    <!-- Top Actions -->
    <div class="md-top-actions">
        <div class="md-dropdown-container">
            <button class="md-btn-action md-btn-blue">
                <i>⚙</i> الأدوات
                <span class="md-dropdown-arrow">▼</span>
            </button>
            <div class="md-dropdown-menu">
                <a href="#" class="md-dropdown-item">تعديل المحدد</a>
                <a href="#" class="md-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="md-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="md-dropdown-container">
            <button class="md-btn-action md-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="md-dropdown-arrow">▼</span>
            </button>
            <div class="md-dropdown-menu">
                <a href="#" class="md-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="md-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="md-dropdown-container">
            <button class="md-btn-action md-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="md-dropdown-arrow">▼</span>
            </button>
            <div class="md-dropdown-menu">
                <a href="#" class="md-dropdown-item">تصدير النتائج</a>
                <a href="#" class="md-dropdown-item">تصدير المحدد</a>
            </div>
        </div>
    </div>

    <!-- Filters Container -->
    <div class="md-filters-container">
        <div class="md-filters-grid">
            <select class="md-form-control">
                <option>الملاحق الداخلية</option>
            </select>
            <select class="md-form-control">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م</option>
                <option>عريف</option>
                <option>رقيب</option>
                <option>مساعد</option>
                <option>مساعد أ</option>
            </select>
            <select class="md-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="md-form-control">
                <option>الوحدة الرئيسية</option>
                <option>اللواء 117 مش ميكا</option>
                <option>اللواء 166 مش ميكا</option>
                <option>اللواء 305 مش ميكا</option>
                <option>قيادة المنطقة الجنوبية</option>
            </select>
            <select class="md-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="md-form-control">
                <option>المكان</option>
            </select>
        </div>

        <div class="md-bottom-actions-wrapper">
            <div class="md-actions-row">
                <div class="md-search-input-group">
                    <input type="text" class="md-form-control md-search-input" placeholder="الإسم">
                    <button class="md-btn-action-small md-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="md-button-group-main">
                    <button class="md-btn-action-main md-btn-green">إلغاء</button>
                    <button class="md-btn-action-main md-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="md-results-count">
        عدد النتائج: 0
    </div>

    <!-- Table Container -->
    <div class="md-table-container">
        <table class="md-data-table">
            <thead>
                <tr>
                    <th class="md-row-num-th">#</th>
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
                    <td class="md-row-num-td" colspan="11">لا توجد بيانات للعرض</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

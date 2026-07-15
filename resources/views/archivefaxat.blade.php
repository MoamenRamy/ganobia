@extends('layouts.main')
@section('content')
<div class="af-page-container">
    <div class="af-header">
        <h2>أرشيف الفاكسات</h2>
        <a href="#" class="af-btn-add">+ إضافة جديد</a>
    </div>

    <div class="af-filter-panel">
        <div class="af-filter-row">
            <select class="af-filter-select">
                <option>- المكتب المختص -</option>
                <option>الكل</option>
                <option>الأفراد</option>
                <option>شئون الضباط</option>
                <option>البيانات</option>
                <option>الإدارة العسكرية</option>
                <option>القطاع</option>
            </select>

            <select class="af-filter-select">
                <option>- جهة الوارد -</option>
                <option>شعبة تن أ ح 2 ميد</option>
                <option>شئون ضباط ج 2 ميد</option>
                <option>قطاع ت شمال سيناء</option>
                <option>مجمعات طبية</option>
                <option>فوج تامين المجرى الملاحى</option>
                <option>نيابات شرطة عسكرية</option>
            </select>

            <select class="af-filter-select">
                <option>- الإدارات -</option>
                <option>إدارة عسكرية</option>
                <option>خدمة اجتماعية</option>
                <option>تدريب</option>
                <option>تسليح</option>
                <option>خدمات طبية</option>
                <option>أفراد</option>
            </select>

            <select class="af-filter-select">
                <option>- المتابعة -</option>
                <option>الكل</option>
                <option>فقظ</option>
            </select>
        </div>

        <div class="af-search-row">
            <input type="text" class="af-search-input" placeholder="الكود">
            <input type="text" class="af-search-input" placeholder="الموضوع">
            <input type="text" class="af-search-input" placeholder="التاريخ">
            <button class="af-btn-display">عرض</button>
            <button class="af-btn-cancel">إلغاء</button>
        </div>
    </div>

    <div class="af-table-wrapper">
        <table class="af-table">
            <thead>
                <tr>
                    <th>م</th>
                    <th>الكود</th>
                    <th>التاريخ</th>
                    <th>الموضوع</th>
                    <th>قرار قائد الفرقة</th>
                    <th>رأي رئيس الفرع</th>
                    <th>رد المكتب المختص</th>
                    <th>الحالة</th>
                    <th>جهة الوارد</th>
                    <th>صورة الفاكس الوارد</th>
                    <th>صورة الفاكس الصادر</th>
                    <th>الأدوات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="12" class="af-empty-message">
                        لم يتم العثور على نتائج مطابقة لبحثك
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

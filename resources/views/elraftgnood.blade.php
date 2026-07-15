@extends('layouts.main')
@section('content')

<div class="ert-page">
    <div class="ert-header-title">
        الرفت للجنود
    </div>

    <div class="ert-filter-panel">
        <div class="ert-filter-grid">
            <select class="ert-filter-select">
                <option>الدرجة</option>
                <option>جندى</option>
                <option>عريف م</option>
                <option>رقيب م </option>
            </select>
            <select class="ert-filter-select">
                <option>الوحدة الرئيسية</option>
                <option>قيادة المنطقة الجنوبية العسكرية</option>
                <option>اللواء 305 مش مقل</option>
                <option>اللواء 117 مش مقل</option>
                <option>اللواء 166 مش مقل</option>
            </select>
            <select class="ert-filter-select">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="ert-filter-select">
                <option>سبب الرفت</option>
                <option>عدم اللياقة الطبية</option>
                <option>الإعفاء العائلي</option>
                <option>لدواعي الصالح العام</option>
                <option>الكلية الحربية</option>
                <option>الوفاة</option>
                <option>الاستشهاد</option>
                <option>سوء السلوك</option>
            </select>
        </div>

        <div class="ert-search-section">
            <button class="ert-search-btn">الاسم</button>
            <input type="text" class="ert-search-box" placeholder="كلمة البحث">
            <button class="ert-search-btn">عرض</button>
            <button class="ert-reset-btn">إلغاء</button>
        </div>
    </div>

    <div class="ert-result-box">
        عدد النتائج : 0
    </div>

    <div class="ert-table-wrapper">
        <table class="ert-data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الرقم العسكري</th>
                    <th>الدرجة</th>
                    <th>الاسم</th>
                    <th>الوحدة</th>
                    <th>الوحدة الفرعية</th>
                    <th>تمام التواجد</th>
                    <th>سبب الرفت</th>
                    <th>تاريخ إنهاء الخدمة</th>
                    <th>إفادة آخر تأشيرة</th>
                    <th>إفادة آخر تأشيرة</th>
                    <th>إفادة آخر تأشيرة</th>
                    <th>إفادة آخر تأشيرة</th>
                </tr>
            </thead>
        </table>

        <table class="ert-data-table" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>الاجراء المتخذ</th>
                    <th>استخراج نموذج 20 س</th>
                    <th>استخراج نموذج 26 س</th>
                    <th>تاريخ التسجيل ع المنظومة</th>
                    <th>الادوات</th>
                    <th>الادوات</th>
                    <th>الادوات</th>
                    <th>الادوات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="15" class="ert-empty-message">
                        لم يتم العثور على نتائج مطابقة لبحثك
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@extends('layouts.main')
@section('content')
<div class="fax-page-container">
    <div class="fax-form-card">
        <div class="fax-form-header">
            <i class="fa-solid fa-file-lines"></i>
            إضافة فاكس جديد
        </div>

        <div class="fax-form-body">
            <!-- الصف الأول -->
            <div class="fax-form-row">
                <div class="fax-form-group">
                    <label class="fax-form-label">قيد الفاكس</label>
                    <input type="text" class="fax-form-input" value="1">
                </div>

                <div class="fax-form-group">
                    <label class="fax-form-label">التاريخ</label>
                    <input type="text" placeholder="22/2/2023" class="fax-form-input">
                </div>
            </div>

            <!-- الصف الثاني -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">جهة الوارد</label>
                    <select class="fax-form-select">
                        <option>شعبة تج أ ح أميد</option>
                        <option>الإدارة العسكرية</option>
                        <option>شئون الضباط</option>
                    </select>
                </div>

                <div class="fax-form-group fax-form-small">
                    <input type="text" class="fax-form-input" placeholder="أخرى">
                </div>
            </div>

            <!-- الملفات -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">صورة الفاكس الوارد</label>
                    <input type="file" class="fax-form-input">
                </div>
            </div>

            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">صورة الفاكس الصادر</label>
                    <input type="file" class="fax-form-input">
                </div>
            </div>

            <!-- الموضوع -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">موضوع الفاكس</label>
                    <textarea class="fax-form-textarea" placeholder="اكتب موضوع الفاكس"></textarea>
                </div>
            </div>

            <!-- رأي نائب رئيس الفرع -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">رأي نائب رئيس الفرع</label>
                    <input type="text" class="fax-form-input" placeholder="رأي نائب رئيس الفرع">
                </div>
            </div>

            <!-- رأي رئيس الفرع -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">رأي رئيس الفرع</label>
                    <input type="text" class="fax-form-input" placeholder="رأي رئيس الفرع">
                </div>
            </div>

            <!-- قرار قائد الفرقة -->
            <div class="fax-form-row">
                <div class="fax-form-group fax-form-grow">
                    <label class="fax-form-label">قرار قائد الفرقة</label>
                    <input type="text" class="fax-form-input" placeholder="قرار قائد الفرقة">
                </div>
            </div>

            <!-- المتابعة -->
            <div class="fax-form-side-box">
                <label class="fax-form-check">
                    <input type="checkbox">
                    الإدارة العسكرية
                </label>

                <label class="fax-form-check">
                    <input type="checkbox">
                    شئون الضباط
                </label>

                <label class="fax-form-check">
                    <input type="checkbox">
                    الأفراد
                </label>

                <label class="fax-form-check">
                    <input type="checkbox">
                    القطاع
                </label>

                <label class="fax-form-check">
                    <input type="checkbox">
                    البيانات
                </label>
            </div>

            <div class="fax-form-footer">
                <button class="fax-form-btn">إضافة</button>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
    <div class="upload-container">
        <div class="upload-card">
            <div class="upload-card-header">
                استيراد نتائج من ملف اكسل
            </div>
            <div class="upload-card-body">
                <div class="upload-row">
                    <label class="upload-label">الملف</label>
                    <input type="file" class="upload-file-input">
                </div>
                <div class="upload-button-area">
                    <button class="upload-btn-add">إضافة</button>
                </div>
            </div>
        </div>
    </div>
@endsection

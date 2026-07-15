@extends('layouts.main')
@section('content')
<div class="gov-portlet w-full">
    <div class="gov-portlet-header">
        إضافة محافظة جديدة
    </div>

    <div class="gov-portlet-body">
        <div class="gov-form-row">
            <label>اسم المحافظة</label>
            <div class="gov-input-group">
                <input type="text" placeholder="اكتب اسم المحافظة">
                <span class="gov-input-icon">👤</span>
            </div>
        </div>

        <div class="gov-btn-area">
            <button type="submit" class="gov-btn-save">
                إضافة
            </button>
        </div>
    </div>
</div>
@endsection

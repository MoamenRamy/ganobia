@extends('layouts.main')
@section('content')
<div class="job-portlet w-full">
    <div class="job-portlet-header">
        إضافة وظيفة جديدة
    </div>

    <div class="job-portlet-body">
        <div class="job-form-row">
            <label>اسم الوظيفة</label>
            <div class="job-input-group">
                <input type="text" placeholder="اكتب اسم الوظيفة 👤">
            </div>
        </div>

        <div class="job-btn-area">
            <button type="submit" class="job-btn-save">
                إضافة
            </button>
        </div>
    </div>
</div>
@endsection

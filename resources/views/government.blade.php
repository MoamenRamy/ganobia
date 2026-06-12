@extends('layouts.main')

@section('content')

<div class="portlet w-full">

    <div class="portlet-header">
        إضافة محافظة جديدة
    </div>

    <div class="portlet-body">

        <div class="form-row">

            <label>اسم المحافظة</label>

            <div class="input-group">
                <input type="text" placeholder="اكتب اسم المحافظة">
                <span class="input-icon">👤</span>
            </div>

        </div>

        <div class="btn-area">
            <button type="submit" class="btn-save">
                إضافة
            </button>
        </div>

    </div>

</div>

@endsection

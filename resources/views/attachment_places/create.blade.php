@extends('layouts.main')

@section('content')

<div class="form-container">
    <div class="form-header">
        <h2>إضافة مكان الحاق جديد</h2>
        <p>يرجى إدخال البيانات بعناية قبل الحفظ</p>
    </div>

    @if ($errors->any())
        <div style="background:red;color:white;padding:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('attachment-places.store') }}" method="POST" class="attachment-places-form">
        @csrf

            <div class="form-grid">
                    {{-- الاسم --}}
                    <div class="form-group">
                        <label for="name">الإسم</label>
                        <input type="text" id="name" name="name" class="form-input"
                            value="{{ old('name') }}" placeholder="أدخل اسم مكان الالحاق ">
                    </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-submit">
                    حفظ البيانات
                </button>
            </div>
        </form>
</div>

@endsection

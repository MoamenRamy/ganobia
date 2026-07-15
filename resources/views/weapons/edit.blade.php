@extends('layouts.main')

@section('content')

    <div class="form-container">
        <div class="form-header">
            <h2>تعديل السلاح</h2>
            <p>يرجى مراجعة البيانات بعناية قبل الحفظ</p>
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
        <form action="{{ route('weapons.update', $weapon->id) }}" method="POST" class="weapon-form">
            @csrf
            @method('PUT')
            <div class="form-grid">
                {{-- الاسم --}}
                <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="text" id="name" name="name" class="form-input" value="{{ old('name', $weapon->name) }}"
                        placeholder="تعدبل اسم السلاح">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-submit">
                    <span>حفظ وتحديث البيانات</span>
                </button>
            </div>
        </form>
    </div>

@endsection

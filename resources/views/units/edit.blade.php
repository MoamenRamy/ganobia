@extends('layouts.main')

@section('content')

<div class="form-container">
    <div class="form-header">
        <h2>تعديل الوحدة</h2>
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

    <form action="{{ route('units.update', $unit) }}" method="POST" class="units-form">
        @csrf
        @method('PUT')

            <div class="form-grid">
                    {{-- الاسم --}}
                    <div class="form-group">
                        <label for="name">الإسم</label>
                        <input type="text" id="name" name="name" class="form-input"
                            value="{{ old('name', $unit->name) }}" placeholder="أدخل اسم الوحدة ">
                    </div>

                {{-- مكان الالحاق --}}
                <div class="form-group">
                    <label for="sector_id">القطاع</label>
                    <select id="sector_id" name="sector_id" class="form-select">
                        <option value="">اختر القطاع</option>
                        @foreach ($sectors as $sec)
                            <option value="{{ $sec->id }}"
                                @selected(old('sector_id', $unit->sector_id) == $sec->id)>
                                {{ $sec->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- المرتب --}}
                <div class="form-group">
                    <label for="moratab">المرتب</label>
                    <input type="number" id="moratab" name="moratab" class="form-input"
                        value="{{ old('moratab', $unit->moratab) }}">
                </div>

                {{-- السياسة --}}
                <div class="form-group">
                    <label for="seasa">السياسة</label>
                    <input type="number" id="seasa" name="seasa" class="form-input"
                        value="{{ old('seasa', $unit->seasa) }}">
                </div>

                {{-- المجندين --}}
                <div class="form-group">
                    <label for="soldiers">المجندين</label>
                    <input type="number" id="soldiers" name="soldiers" class="form-input"
                        value="{{ old('soldiers', $unit->soldiers) }}">
                </div>

                {{-- المتطوعين --}}
                <div class="form-group">
                    <label for="volunteers">المتطوعين</label>
                    <input type="number" id="volunteers" name="volunteers" class="form-input"
                        value="{{ old('volunteers', $unit->volunteers) }}">
                </div>

                {{-- الإجمالي --}}
                <div class="form-group">
                    <label for="total">الإجمالي</label>
                    <input type="number" id="total" name="total" class="form-input"
                        value="{{ old('total', $unit->total) }}">
                </div>

                {{-- نسبة استكمال السياسة --}}
                <div class="form-group">
                    <label for="nesbat_estkmal_seasa">نسبة استكمال السياسة %</label>
                    <input type="number" id="nesbat_estkmal_seasa" name="nesbat_estkmal_seasa" class="form-input"
                        value="{{ old('nesbat_estkmal_seasa', $unit->nesbat_estkmal_seasa) }}">
                </div>

                {{-- نسبة استكمال المرتب --}}
                <div class="form-group">
                    <label for="nesbat_estkmal_moratab">نسبة استكمال المرتب %</label>
                    <input type="number" id="nesbat_estkmal_moratab" name="nesbat_estkmal_moratab" class="form-input"
                        value="{{ old('nesbat_estkmal_moratab', $unit->nesbat_estkmal_moratab) }}">
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

@extends('layouts.main')

@section('content')

    <div class="form-container">
        <div class="form-header">
            <h2>إضافة ضابط صف جديد الى الأرشيف</h2>
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

        <form action="{{ route('archive-volunteers.store') }}" method="POST" class="soldier-form">
            @csrf

            <div class="form-grid">
                <!--  الرقم العسكرى -->
                <div class="form-group">
                    <label for="military_number">الرقم العسكري</label>
                    <input type="text" id="military_number" name="military_number" class="form-input"
                        value="{{ old('military_number') }}" placeholder="أدخل الرقم العسكري">
                </div>
                {{-- الدرجة --}}
                <div class="form-group">
                    <label for="rank">الدرجة</label>
                    <select id="rank" name="rank" class="form-select">
                        <option value="">اختر الدرجة</option>
                        <option value="عريف" {{ old('rank') == 'عريف' ? 'selected' : '' }}>عريف</option>
                        <option value="رقيب" {{ old('rank') == 'رقيب' ? 'selected' : '' }}>رقيب</option>
                        <option value="رقيب أول" {{ old('rank') == 'رقيب أول' ? 'selected' : '' }}>رقيب أول</option>
                        <option value="مساعد" {{ old('rank') == 'مساعد' ? 'selected' : '' }}>مساعد</option>
                        <option value="مساعد اول" {{ old('rank') == 'مساعد اول' ? 'selected' : '' }}>مساعد اول</option>
                    </select>
                </div>
                {{-- الاسم --}}
                <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}"
                        placeholder="أدخل الاسم رباعي">
                </div>

                <!-- القطاع -->
                <div class="form-group">
                    <label for="sector_id">القطاع</label>
                    <select id="sector_id" name="sector_id" class="form-select">
                        <option value="">اختر القطاع</option>
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ old('sector_id') == $sector->id ? 'selected' : '' }}>
                                {{ $sector->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- الوحدة --}}
                <div class="form-group">
                    <label for="unit_id">الوحدة</label>
                    <select id="unit_id" name="unit_id" class="form-select">
                        <option value="">اختر الوحدة</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}" {{ old('unit_id') == $unit->id ? 'selected' : '' }}>
                                {{ $unit->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- رقم الدفعة --}}
                <div class="form-group">
                    <label for="batch_number">رقم الدفعة</label>
                    <input type="text" id="batch_number" name="batch_number" class="form-input"
                        value="{{ old('batch_number') }}" placeholder="أدخل رقم الدفعة ">
                </div>

                {{-- تاريخ التطوع --}}
                <div class="form-group">
                    <label for="enlistment_date">تاريخ التطوع</label>
                    <input type="date" id="enlistment_date" name="enlistment_date" class="form-input"
                        value="{{ old('enlistment_date') }}">
                </div>

                {{-- تاريخ صرف الراتب العالى --}}
                <div class="form-group">
                    <label for="high_salary_date">تاريخ صرف الراتب العالى</label>
                    <input type="date" id="high_salary_date" name="high_salary_date" class="form-input"
                        value="{{ old('high_salary_date') }}">
                </div>

                {{-- تاريخ الترقى للدرجة الحالية --}}
                <div class="form-group">
                    <label for="current_rank_date">تاريخ الترقى للدرجة الحالية</label>
                    <input type="date" id="current_rank_date" name="current_rank_date" class="form-input"
                        value="{{ old('current_rank_date') }}">
                </div>

                {{-- تاريخ الضم على المنطقة الجنوبية --}}
                <div class="form-group">
                    <label for="southern_region_join_date">تاريخ الضم على المنطقة الجنوبية</label>
                    <input type="date" id="southern_region_join_date" name="southern_region_join_date" class="form-input"
                        value="{{ old('southern_region_join_date') }}">
                </div>

                {{-- تاريخ الضم على الوحدة الحالية --}}
                <div class="form-group">
                    <label for="unit_join_date">تاريخ الضم على الوحدة الحالية</label>
                    <input type="date" id="unit_join_date" name="unit_join_date" class="form-input"
                        value="{{ old('unit_join_date') }}">
                </div>

                {{-- المؤهل الدراسى --}}
                <div class="form-group">
                    <label for="educational_qualification">المؤهل الدراسى</label>
                    <input type="text" id="educational_qualification" name="educational_qualification" class="form-input"
                        value="{{ old('educational_qualification') }}" placeholder="أدخل المؤهل الدراسى ">
                </div>

                {{-- السلاح --}}
                <div class="form-group">
                    <label for="weapon_id">السلاح</label>
                    <select id="weapon_id" name="weapon_id" class="form-select">
                        <option value="">اختر السلاح</option>
                        @foreach ($weapons as $weapon)
                            <option value="{{ $weapon->id }}" {{ old('weapon_id') == $weapon->id ? 'selected' : '' }}>
                                {{ $weapon->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- الفئة -->
                <div class="form-group">
                    <label for="category">الفئة</label>
                    <select id="category" name="category" class="form-select">
                        {{-- <option value="">اختر الفئة</option>
                            <option value="جندي" {{ old('category') == 'جندي' ? 'selected' : '' }}>جندي
                            </option> --}}
                            <option value="صف" {{ old('category') == 'صف' ? 'selected' : '' }}>صف
                            </option>
                            <option value="سائق" {{ old('category') == 'سائق' ? 'selected' : '' }}>
                                سائق</option>
                            <option value="حرفى" {{ old('category') == 'حرفى' ? 'selected' : '' }}>
                                حرفى</option>
                            <option value="خباز" {{ old('category') == 'خباز' ? 'selected' : '' }}>
                                خباز</option>
                            <option value="سائق جنزير" {{ old('category') == 'سائق جنزير' ? 'selected' : '' }}>
                                سائق جنزير</option>
                            <option value="سائق عجل" {{ old('category') == 'سائق عجل' ? 'selected' : '' }}>
                                سائق عجل</option>
                            <option value="طاهى" {{ old('category') == 'طاهى' ? 'selected' : '' }}>
                                طاهى</option>
                            <option value="فنى" {{ old('category') == 'فنى' ? 'selected' : '' }}>
                                فنى</option>
                            <option value="كاتب عسكرى" {{ old('category') == 'كاتب عسكرى' ? 'selected' : '' }}>
                                كاتب عسكرى</option>
                            <option value="كاتب مالى" {{ old('category') == 'كاتب مالى' ? 'selected' : '' }}>
                                كاتب مالى</option>
                            <option value="ممرض" {{ old('category') == 'ممرض' ? 'selected' : '' }}>
                                ممرض</option>
                    </select>
                </div>

                <!-- التخصص -->
                <div class="form-group">
                    <label for="specialization_id">التخصص</label>
                    <select id="specialization_id" name="specialization_id" class="form-select">
                        <option value="">اختر التخصص</option>
                        @foreach ($specialties as $specialty)
                            <option value="{{ $specialty->id }}"
                                {{ old('specialization_id') == $specialty->id ? 'selected' : '' }}>
                                {{ $specialty->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- مؤهل --}}
                <div class="form-group">
                    <label for="qualified">مؤهل</label>
                    <input type="text" id="qualified" name="qualified" class="form-input"
                        value="{{ old('qualified') }}">
                </div>

                {{-- غير مؤهل --}}
                <div class="form-group">
                    <label for="not_qualified">غير مؤهل</label>
                    <input type="text" id="not_qualified" name="not_qualified" class="form-input"
                        value="{{ old('not_qualified') }}">
                </div>

                {{-- حجز --}}
                <div class="form-group">
                    <label for="detention_count">حجز</label>
                    <input type="number" step="0" id="detention_count" name="detention_count" class="form-input"
                        value="{{ old('detention_count') }}">
                </div>

                {{-- حبس --}}
                <div class="form-group">
                    <label for="imprisonment_count">حبس</label>
                    <input type="number" step="0" id="imprisonment_count" name="imprisonment_count" class="form-input"
                        value="{{ old('imprisonment_count') }}">
                </div>

                {{-- محكمة --}}
                <div class="form-group">
                    <label for="court_cases_count">محكمة</label>
                    <input type="number" step="0" id="court_cases_count" name="court_cases_count" class="form-input"
                        value="{{ old('court_cases_count') }}">
                </div>

                {{-- رقم الهاتف --}}
                <div class="form-group">
                    <label for="phone_number">رقم الهاتف</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-input"
                        value="{{ old('phone_number') }}">
                </div>

                {{-- رقم هاتف اقرب الاقارب--}}
                <div class="form-group">
                    <label for="relative_phone_number">رقم هاتف اقرب الاقارب</label>
                    <input type="text" id="relative_phone_number" name="relative_phone_number" class="form-input"
                        value="{{ old('relative_phone_number') }}">
                </div>

                {{-- الرقم القومى --}}
                <div class="form-group">
                    <label for="national_id">الرقم القومي</label>
                    <input type="text" id="national_id" name="national_id" class="form-input"
                        value="{{ old('national_id') }}" maxlength="15">
                </div>

                <!-- تاريخ الميلاد -->
                <div class="form-group">
                    <label for="birth_date">تاريخ لميلاد</label>
                    <input type="date" id="birth_date" name="birth_date" class="form-input"
                        value="{{ old('birth_date') }}">
                </div>

                <!-- الحالة الاجتماعية -->
                <div class="form-group">
                    <label for="marital_status">الحالة الاجتماعية</label>
                    <select id="marital_status" name="marital_status" class="form-select">
                        <option value="">اختر الحالة</option>
                        <option value="أعزب" {{ old('marital_status') == 'أعزب' ? 'selected' : '' }}>أعزب</option>
                        <option value="متزوج" {{ old('marital_status') == 'متزوج' ? 'selected' : '' }}>متزوج
                        </option>
                        <option value="مطلق" {{ old('marital_status') == 'مطلق' ? 'selected' : '' }}>مطلق</option>
                        <option value="أرمل" {{ old('marital_status') == 'أرمل' ? 'selected' : '' }}>أرمل</option>
                    </select>
                </div>

                {{-- عدد الابناء --}}
                <div class="form-group">
                    <label for="children_count">عدد الأبناء</label>
                    <input type="number" step="0" id="children_count" name="children_count"
                        class="form-input" value="{{ old('children_count') }}">
                </div>

                {{-- عدد الابناء الذكور --}}
                <div class="form-group">
                    <label for="male_children_count">عدد الأبناء الذكور</label>
                    <input type="number" step="0" id="male_children_count" name="male_children_count"
                        class="form-input" value="{{ old('male_children_count') }}">
                </div>

                {{-- عدد الابناء الاناث --}}
                <div class="form-group">
                    <label for="female_children_count">عدد الأبناء الاناث</label>
                    <input type="number" step="0" id="female_children_count" name="female_children_count"
                        class="form-input" value="{{ old('female_children_count') }}">
                </div>

                {{-- القرية --}}
                <div class="form-group">
                    <label for="village">القرية</label>
                    <input type="text" id="village" name="village" class="form-input"
                        value="{{ old('village') }}">
                </div>

                {{-- المركز --}}
                <div class="form-group">
                    <label for="center">المركز</label>
                    <input type="text" id="center" name="center" class="form-input"
                        value="{{ old('center') }}">
                </div>

                {{-- المحافظة --}}
                <div class="form-group">
                    <label for="governorate_id">المحافظة</label>
                    <select id="governorate_id" name="governorate_id" class="form-select">
                        <option value="">اختر المحافظة</option>
                        @foreach ($governorates as $gov)
                            <option value="{{ $gov->id }}"
                                {{ old('governorate_id') == $gov->id ? 'selected' : '' }}>
                                {{ $gov->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- الوزن --}}
                <div class="form-group">
                    <label for="weight">الوزن (كجم)</label>
                    <input type="number" step="0.1" id="weight" name="weight" class="form-input"
                        value="{{ old('weight') }}">
                </div>

                {{-- الطول --}}
                <div class="form-group">
                    <label for="height">الطول (سم)</label>
                    <input type="number" step="0.1" id="height" name="height" class="form-input"
                        value="{{ old('height') }}">
                </div>

                {{-- فرق الوزن --}}
                <div class="form-group">
                    <label for="weight_difference">فرق الوزن (كجم)</label>
                    <input type="number" step="0.1" id="weight_difference" name="weight_difference" class="form-input"
                        value="{{ old('weight_difference') }}">
                </div>

                {{-- مكان الالحاق --}}
                <div class="form-group">
                    <label for="attachment_id">مكان الإلحاق</label>
                    <select id="attachment_id" name="attachment_id" class="form-select">
                        <option value="">اختر مكان الإلحاق</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}"
                                {{ old('attachment_id') == $place->id ? 'selected' : '' }}>
                                {{ $place->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- الوحدات السابقة --}}
                <div class="form-group">
                    <label for="previous_units">الوحدات السابقة</label>
                    <input type="text" id="previous_units" name="previous_units" class="form-input"
                        value="{{ old('previous_units') }}" placeholder="الوحدات السابقة">
                </div>

                {{-- سفر --}}
                <div class="form-group">
                    <label for="travel">سفر</label>
                    <input type="text" id="travel" name="travel" class="form-input"
                        value="{{ old('travel') }}" placeholder="ادخل اماكن السفر">
                </div>

                {{-- موقف طبى --}}
                <div class="form-group">
                    <label for="medical_status">موقف طبى</label>
                    <input type="text" id="medical_status" name="medical_status" class="form-input"
                        value="{{ old('medical_status') }}" placeholder="ادخل الموقف الطبى">
                </div>

                <!-- ملاحظات -->
                <div class="form-group full-width">
                    <label for="notes">ملاحظات</label>
                    <textarea id="notes" name="notes" class="form-textarea" rows="3">{{ old('notes') }}</textarea>
                </div>

                {{-- المراجع --}}
                <div class="form-group">
                    <label for="reviewer">المراجع</label>
                    <input type="text" id="reviewer" name="reviewer" class="form-input"
                        value="{{ old('reviewer') }}" placeholder="ادخل اسم المراجع">
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

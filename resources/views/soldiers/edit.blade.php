@extends('layouts.main')

@section('content')

    <div class="form-container">
        <div class="form-header">
            <h2>تعديل بيانات المجند</h2>
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
        <form action="{{ route('soldiers.update', $soldier->id) }}" method="POST" class="soldier-form">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <!--  الرقم العسكرى -->
                <div class="form-group">
                    <label for="military_number">الرقم العسكري</label>
                    <input type="text" id="military_number" name="military_number" class="form-input"
                        value="{{ old('military_number', $soldier->military_number) }}" placeholder="أدخل الرقم العسكري">
                </div>
                {{-- الدرجة --}}
                <div class="form-group">
                    <label for="rank">الدرجة</label>
                    <select id="rank" name="rank" class="form-select">
                        <option value="">اختر الدرجة</option>
                        <option value="جندي" {{ old('rank', $soldier->rank) == 'جندي' ? 'selected' : '' }}>جندي</option>
                        <option value="عريف" {{ old('rank', $soldier->rank) == 'عريف' ? 'selected' : '' }}>عريف</option>
                        <option value="رقيب" {{ old('rank', $soldier->rank) == 'رقيب' ? 'selected' : '' }}>رقيب</option>
                        <option value="رقيب أول" {{ old('rank', $soldier->rank) == 'رقيب أول' ? 'selected' : '' }}>رقيب أول
                        </option>
                    </select>
                </div>
                {{-- الاسم --}}
                <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="text" id="name" name="name" class="form-input"
                        value="{{ old('name', $soldier->name) }}" placeholder="أدخل الاسم رباعي">
                </div>

                <!-- القطاع -->
                <div class="form-group">
                    <label for="sector_id">القطاع</label>
                    <select id="sector_id" name="sector_id" class="form-select">
                        <option value="">اختر القطاع</option>
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}"
                                {{ old('sector_id', $soldier->sector_id) == $sector->id ? 'selected' : '' }}>
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
                            <option value="{{ $unit->id }}"
                                {{ old('unit_id', $soldier->unit_id) == $unit->id ? 'selected' : '' }}>
                                {{ $unit->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- السلاح --}}
                <div class="form-group">
                    <label for="weapon_id">السلاح</label>
                    <select id="weapon_id" name="weapon_id" class="form-select">
                        <option value="">اختر السلاح</option>
                        @foreach ($weapons as $weapon)
                            <option value="{{ $weapon->id }}"
                                {{ old('weapon_id', $soldier->weapon_id) == $weapon->id ? 'selected' : '' }}>
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
                        <option value="جندي" {{ old('category', $soldier->category) == 'جندي' ? 'selected' : '' }}>جندي
                        </option> --}}
                            <option value="صف" {{ old('category', $soldier->category) == 'صف' ? 'selected' : '' }}>صف
                            </option>
                            <option value="سائق" {{ old('category', $soldier->category) == 'سائق' ? 'selected' : '' }}>
                                سائق</option>
                    </select>
                </div>

                <!-- التخصص -->
                <div class="form-group">
                    <label for="specialization_id">التخصص</label>
                    <select id="specialization_id" name="specialization_id" class="form-select">
                        <option value="">اختر التخصص</option>
                        @foreach ($specialties as $specialty)
                            <option value="{{ $specialty->id }}"
                                {{ old('specialization_id', $soldier->specialization_id) == $specialty->id ? 'selected' : '' }}>
                                {{ $specialty->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- تاريخ التجنيد --}}
                <div class="form-group">
                    <label for="enlistment_date">تاريخ التجنيد</label>
                    <input type="date" id="enlistment_date" name="enlistment_date" class="form-input"
                        value="{{ old('enlistment_date', $soldier->enlistment_date ? \Carbon\Carbon::parse($soldier->enlistment_date)->format('Y-m-d') : '') }}">
                </div>

                {{-- تاريخ التسريح --}}
                <div class="form-group">
                    <label for="discharge_date">تاريخ التسريح</label>
                    <input type="date" id="discharge_date" name="discharge_date" class="form-input"
                        value="{{ old('discharge_date', $soldier->discharge_date ? \Carbon\Carbon::parse($soldier->discharge_date)->format('Y-m-d') : '') }}">
                </div>

                <!-- تاريخ الميلاد -->
                <div class="form-group">
                    <label for="birth_date">تاريخ الميلاد</label>
                    <input type="date" id="birth_date" name="birth_date" class="form-input"
                        value="{{ old('birth_date', $soldier->birth_date ? \Carbon\Carbon::parse($soldier->birth_date)->format('Y-m-d') : '') }}">
                </div>



                {{-- درجة الرخصة --}}
                <div class="form-group">
                    <label for="driving_license_grade">درجة الرخصة</label>
                    <select id="driving_license_grade" name="driving_license_grade" class="form-select">
                        <option value="">اختر درجة الرخصة</option>
                        <option value="اولى"
                            {{ old('driving_license_grade', $soldier->driving_license_grade) == 'اولى' ? 'selected' : '' }}>
                            اولى</option>
                        <option value="ثانية"
                            {{ old('driving_license_grade', $soldier->driving_license_grade) == 'ثانية' ? 'selected' : '' }}>
                            ثانية</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="national_id">الرقم القومي</label>
                    <input type="text" id="national_id" name="national_id" class="form-input"
                        value="{{ old('national_id', $soldier->national_id) }}" maxlength="15">
                </div>

                {{-- المؤهل --}}
                <div class="form-group">
                    <label for="qualification">المؤهل</label>
                    <input type="text" id="qualification" name="qualification" class="form-input"
                        value="{{ old('qualification', $soldier->qualification) }}">
                </div>

                {{-- المهنة قبل التجنيد --}}
                <div class="form-group">
                    <label for="job_before_service"> المهنة قبل التجنيد </label>
                    <input type="text" id="job_before_service" name="job_before_service" class="form-input"
                        value="{{ old('job_before_service', $soldier->job_before_service) }}" >
                </div>


                <!-- الحالة الاجتماعية -->
                <div class="form-group">
                    <label for="marital_status">الحالة الاجتماعية</label>
                    <select id="marital_status" name="marital_status" class="form-select">
                        <option value="">اختر الحالة</option>
                        <option value="أعزب"
                            {{ old('marital_status', $soldier->marital_status) == 'أعزب' ? 'selected' : '' }}>أعزب</option>
                        <option value="متزوج"
                            {{ old('marital_status', $soldier->marital_status) == 'متزوج' ? 'selected' : '' }}>متزوج
                        </option>
                        <option value="مطلق"
                            {{ old('marital_status', $soldier->marital_status) == 'مطلق' ? 'selected' : '' }}>مطلق</option>
                        <option value="أرمل"
                            {{ old('marital_status', $soldier->marital_status) == 'أرمل' ? 'selected' : '' }}>أرمل</option>
                    </select>
                </div>

                {{-- عدد الابناء الذكور --}}
                <div class="form-group">
                    <label for="male_children_count">عدد الأبناء الذكور</label>
                    <input type="number" step="0" id="male_children_count" name="male_children_count" class="form-input"
                        value="{{ old('male_children_count', $soldier->male_children_count) }}">
                </div>

                {{-- عدد الابناء الاناث --}}
                <div class="form-group">
                    <label for="female_children_count">عدد الأبناء الاناث</label>
                    <input type="number" step="0" id="female_children_count" name="female_children_count" class="form-input"
                        value="{{ old('female_children_count', $soldier->female_children_count) }}">
                </div>

                {{-- اسم الام --}}
                <div class="form-group">
                    <label for="mother_name">اسم الأم</label>
                    <input type="text" id="mother_name" name="mother_name" class="form-input"
                        value="{{ old('mother_name', $soldier->mother_name) }}">
                </div>

                {{-- وظيفة الام --}}
                <div class="form-group">
                    <label for="mother_job">وظيفة الأم</label>
                    <input type="text" id="mother_job" name="mother_job" class="form-input"
                        value="{{ old('mother_job', $soldier->mother_job) }}">
                </div>

                <!-- وظيفة الاب -->
                <div class="form-group">
                    <label for="father_job">وظيفة الأب</label>
                    <input type="text" id="father_job" name="father_job" class="form-input"
                        value="{{ old('father_job', $soldier->father_job) }}">
                </div>

                {{-- رقم الهاتف --}}
                <div class="form-group">
                    <label for="phone_number">رقم الهاتف</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-input"
                        value="{{ old('phone_number', $soldier->phone_number) }}">
                </div>

                {{-- أقرب الاقارب --}}
                <div class="form-group">
                    <label for="nearest_relative">أقرب الأقارب</label>
                    <input type="text" id="nearest_relative" name="nearest_relative" class="form-input"
                        value="{{ old('nearest_relative', $soldier->nearest_relative) }}">
                </div>

                <!-- هاتف اقرب الاقارب -->
                <div class="form-group">
                    <label for="nearest_relative_phone">هاتف قريب</label>
                    <input type="text" id="nearest_relative_phone" name="nearest_relative_phone" class="form-input"
                        value="{{ old('nearest_relative_phone', $soldier->nearest_relative_phone) }}">
                </div>

                {{-- المحافظة --}}
                <div class="form-group">
                    <label for="governorate_id">المحافظة</label>
                    <select id="governorate_id" name="governorate_id" class="form-select">
                        <option value="">اختر المحافظة</option>
                        @foreach ($governorates as $gov)
                            <option value="{{ $gov->id }}"
                                {{ old('governorate_id', $soldier->governorate_id) == $gov->id ? 'selected' : '' }}>
                                {{ $gov->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- العنوان --}}

                <div class="form-group">
                    <label for="address"> العنوان </label>
                    <input type="text" id="address" name="address" class="form-input"
                        value="{{ old('address', $soldier->address) }}" >
                </div>

                {{-- الطول --}}
                <div class="form-group">
                    <label for="height">الطول (سم)</label>
                    <input type="number" step="0.1" id="height" name="height" class="form-input"
                        value="{{ old('height', $soldier->height) }}">
                </div>

                {{-- الوزن --}}
                <div class="form-group">
                    <label for="weight">الوزن (كجم)</label>
                    <input type="number" step="0.1" id="weight" name="weight" class="form-input"
                        value="{{ old('weight', $soldier->weight) }}">
                </div>

                {{-- تاريخ الامداد --}}
                <div class="form-group">
                    <label for="supply_date"> تاريخ الامداد </label>
                    <input type="date" id="supply_date" name="supply_date" class="form-input"
                        value="{{ old('supply_date', $soldier->supply_date ? \Carbon\Carbon::parse($soldier->supply_date)->format('Y-m-d') : '') }}">
                </div>

                <!-- ملاحظات -->
                <div class="form-group full-width">
                    <label for="notes">ملاحظات</label>
                    <textarea id="notes" name="notes" class="form-textarea" rows="3">{{ old('notes', $soldier->notes) }}</textarea>
                </div>

                {{-- الحضور --}}
                <div class="form-group">
                    <label for="attendance">الحضور</label>
                    <select id="attendance" name="attendance" class="form-select">
                        <option value="1" {{ old('attendance', $soldier->attendance) == 1 ? 'selected' : '' }}>موجود
                        </option>
                        <option value="0" {{ old('attendance', $soldier->attendance) == 0 ? 'selected' : '' }}>غير
                            موجود</option>
                    </select>
                </div>

                {{-- مكان الالحاق --}}
                <div class="form-group">
                    <label for="attachment_id">مكان الإلحاق</label>
                    <select id="attachment_id" name="attachment_id" class="form-select">
                        <option value="">اختر مكان الإلحاق</option>
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}"
                                {{ old('attachment_id', $soldier->attachment_id) == $place->id ? 'selected' : '' }}>
                                {{ $place->name }}
                            </option>
                        @endforeach
                    </select>
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

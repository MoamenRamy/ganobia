@extends('layouts.main')
@section('content')
<div class="rateb-main-container">
    <!-- Page Header -->
    <div class="rateb-page-header">
        <div class="rateb-header-right">
            <div class="rateb-page-title">
                <i></i>
                <span>أرشيف الراتب العالي</span>
            </div>
        </div>
        <div class="rateb-header-left">
            <button class="rateb-btn-icon rateb-btn-back">
                <i>←</i>
            </button>
        </div>
    </div>

    <!-- Top Actions -->
    <div class="rateb-top-actions">
        <div class="rateb-dropdown-container">
            <button class="rateb-btn-action rateb-btn-green">
                <i>+</i> إضافة إلي
                <span class="rateb-dropdown-arrow">▼</span>
            </button>
            <div class="rateb-dropdown-menu">
                <a href="#" class="rateb-dropdown-item">الملاحق الداخلية</a>
                <a href="#" class="rateb-dropdown-item">الملاحق الخارجية</a>
                <a href="#" class="rateb-dropdown-item">إنهاء الخدمة</a>
                <a href="#" class="rateb-dropdown-item">الانتقاء</a>
                <a href="#" class="rateb-dropdown-item">الخوارج القانونية</a>
                <a href="#" class="rateb-dropdown-item">التأمينات الداخلية</a>
                <a href="#" class="rateb-dropdown-item">اجازات الجنود المستجدين</a>
                <a href="#" class="rateb-dropdown-item">تأمين شمال سيناء</a>
                <a href="#" class="rateb-dropdown-item">المصابين والشهداء</a>
                <a href="#" class="rateb-dropdown-item">مشروع اجازات الجنود</a>
                <a href="#" class="rateb-dropdown-item">تهمات أخري</a>
            </div>
        </div>

        <div class="rateb-dropdown-container">
            <button class="rateb-btn-action rateb-btn-blue">
                <i></i> الأدوات
                <span class="rateb-dropdown-arrow">▼</span>
            </button>
            <div class="rateb-dropdown-menu">
                <a href="#" class="rateb-dropdown-item">تعديل المحدد</a>
                <a href="#" class="rateb-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="rateb-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="rateb-dropdown-container">
            <button class="rateb-btn-action rateb-btn-teal">
                <i></i> طباعة النتائج
                <span class="rateb-dropdown-arrow">▼</span>
            </button>
            <div class="rateb-dropdown-menu">
                <a href="#" class="rateb-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="rateb-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="rateb-dropdown-container">
            <button class="rateb-btn-action rateb-btn-red">
                <i>🖨</i> طباعة المحدد
                <span class="rateb-dropdown-arrow">▼</span>
            </button>
            <div class="rateb-dropdown-menu">
                <a href="#" class="rateb-dropdown-item">كشف أسماء</a>
                <a href="#" class="rateb-dropdown-item">جواب ترحيل صرفيات</a>
                <a href="#" class="rateb-dropdown-item">أمر الخدمة</a>
                <a href="#" class="rateb-dropdown-item">أنهاء الإلحاق</a>
                <a href="#" class="rateb-dropdown-item">نموذج عقوبة سلوك</a>
                <a href="#" class="rateb-dropdown-item">نموذج عقوبة غياب</a>
                <a href="#" class="rateb-dropdown-item">نموذج عقوبة تخلف عن الطابور</a>
                <a href="#" class="rateb-dropdown-item">مذكرة تفصيلية</a>
            </div>
        </div>

        <div class="rateb-dropdown-container">
            <button class="rateb-btn-action rateb-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="rateb-dropdown-arrow">▼</span>
            </button>
            <div class="rateb-dropdown-menu">
                <a href="#" class="rateb-dropdown-item">تصدير النتائج</a>
                <a href="#" class="rateb-dropdown-item">تصدير المحدد</a>
            </div>
        </div>

        <a href="{{ route('archive-volunteers.create') }}" class="rateb-btn-action rateb-btn-green">
            <i>+</i> إضافة جديد
        </a>

        <a href="{{ route('uploadd') }}" class="rateb-btn-action rateb-btn-cyan">
            <i>📥</i> استيراد نتائج
        </a>
    </div>

    <!-- Filters Container -->
    <div class="rateb-filters-container">
        <div class="rateb-filters-grid">
            <select class="rateb-form-control">
                <option>توليد يومية عددية</option>
            </select>
            <select class="rateb-form-control">
                <option>منظومة الراتب العالى</option>
            </select>
            <select class="rateb-form-control">
                <option>التخصص</option>
            </select>
            <select class="rateb-form-control">
                <option>الفئة</option>
            </select>
            <select class="rateb-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="rateb-form-control">
                <option>الوحدة الرئيسية</option>
            </select>
            <select class="rateb-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="rateb-form-control">
                <option>الأماكن</option>
            </select>
            <select class="rateb-form-control">
                <option>السلاح</option>
            </select>
            <select class="rateb-form-control">
                <option>المحافظة</option>
            </select>
            <select class="rateb-form-control">
                <option>المؤهل</option>
            </select>
            <select class="rateb-form-control">
                <option>المرحلة</option>
            </select>
        </div>

        <div class="rateb-bottom-actions-wrapper">
            <div class="rateb-actions-row">
                <div class="rateb-search-input-group">
                    <input type="text" class="rateb-form-control rateb-search-input" placeholder="الإسم">
                    <button class="rateb-btn-action-small rateb-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="rateb-button-group-main">
                    <button class="rateb-btn-action-main rateb-btn-green">إلغاء</button>
                    <button class="rateb-btn-action-main rateb-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="rateb-results-count">
        عدد النتائج: {{ $archiveVolunteers->count() }}
    </div>

    <!-- Table Container -->
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>الرقم العسكري</th>
                    <th>الدرجة</th>
                    <th>الإسم</th>
                    <th>الوحدة</th>
                    <th>القطاع</th>
                    <th>رقم الدفعة</th>
                    <th>تاريخ التطوع</th>
                    <th>تاريخ صرف الراتب العالى</th>
                    <th>تاريخ الترقى للدرجة الحالية</th>
                    <th>تاريخ الضم على المنطقة الجنوبية</th>
                    <th>تاريخ الضم على الوحدة الحالية</th>
                    <th>المؤهل الدراسى</th>
                    <th>السلاح</th>
                    <th>الفئة</th>
                    <th>التخصص</th>
                    <th>مؤهل</th>
                    <th>غير مؤهل</th>
                    <th>حجز</th>
                    <th>حبس</th>
                    <th>محكمة</th>
                    <th>رقم الهاتف</th>
                    <th>رقم هاتف اقرب الاقارب</th>
                    <th>الرقم القومى</th>
                    <th>تاريخ الميلاد</th>
                    <th>الحالة الاجتماعية</th>
                    <th>عددالابناء</th>
                    <th>الذكور الأبناء</th>
                    <th>الإناث الأبناء</th>
                    <th>القرية</th>
                    <th>المركز</th>
                    <th>المحافظة</th>
                    <th>الوزن</th>
                    <th>الطول</th>
                    <th>فرق الوزن</th>
                    <th>مكان الالحاق</th>
                    <th>الوحدات السابقة</th>
                    <th>سفر</th>
                    <th>موقف طبى</th>
                    <th>ملاحظات</th>
                    <th>المراجع</th>
                    <th></th>
                </tr>
            </thead>

           <tbody>
                @forelse($archiveVolunteers as $volunteer)
                <tr>

                    <td>{{ $volunteer->military_number }}</td>
                    <td>{{ $volunteer->rank ?? '-' }}</td>
                    <td>{{ $volunteer->name }}</td>

                    <td>{{ $volunteer->unit?->name ?? '-' }}</td>
                    <td>{{ $volunteer->sector?->name ?? '-' }}</td>
                    <td>{{ $volunteer->batch_number ?? '-' }}</td>

                    <td>{{ $volunteer->enlistment_date ? \Carbon\Carbon::parse($volunteer->enlistment_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $volunteer->high_salary_date ? \Carbon\Carbon::parse($volunteer->high_salary_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $volunteer->current_rank_date ? \Carbon\Carbon::parse($volunteer->current_rank_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $volunteer->southern_region_join_date ? \Carbon\Carbon::parse($volunteer->southern_region_join_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $volunteer->unit_join_date ? \Carbon\Carbon::parse($volunteer->unit_join_date)->format('d/m/Y') : '-' }}</td>

                    <td>{{ $volunteer->educational_qualification ?? '-' }}</td>
                    <td>{{ $volunteer->weapon?->name ?? '-' }}</td>

                    <td>{{ $volunteer->category ?? '-' }}</td>
                    <td>{{ $volunteer->specialization?->name ?? '-' }}</td>

                    <td>{{ $volunteer->qualified ?? '-' }}</td>
                    <td>{{ $volunteer->not_qualified ?? '-' }}</td>

                    <td>{{ $volunteer->detention_count ?? '-' }}</td>
                    <td>{{ $volunteer->imprisonment_count ?? '-' }}</td>
                    <td>{{ $volunteer->court_cases_count ?? '-' }}</td>


                    <td>{{ $volunteer->phone_number ?? '-' }}</td>
                    <td>{{ $volunteer->relative_phone_number ?? '-' }}</td>

                    <td>{{ $volunteer->national_id ?? '-' }}</td>
                    <td>{{ $volunteer->birth_date ? \Carbon\Carbon::parse($volunteer->birth_date)->format('d/m/Y') : '-' }}</td>

                    <td>{{ $volunteer->marital_status ?? '-' }}</td>
                    <td>{{ $volunteer->children_count ?? '-' }}</td>
                    <td>{{ $volunteer->male_children_count ?? '-' }}</td>
                    <td>{{ $volunteer->female_children_count ?? '-' }}</td>

                    <td>{{ $volunteer->village ?? '-' }}</td>
                    <td>{{ $volunteer->center ?? '-' }}</td>
                    <td>{{ $volunteer->governorate?->name ?? '-' }}</td>

                    <td> {{ $volunteer->weight ?? '-' }} </td>
                    <td> {{ $volunteer->height ?? '-' }} </td>
                    <td> {{ $volunteer->weight_difference ?? '-' }} </td>

                    <td>{{ $volunteer->attachment_place?->name ?? '-' }}</td>
                    <td>{{ $volunteer->previous_units ?? '-' }}</td>
                    <td>{{ $volunteer->travel ?? '-' }}</td>
                    <td>{{ $volunteer->medical_status ?? '-' }}</td>
                    <td>{{ $volunteer->notes ?? '-' }}</td>
                    <td>{{ $volunteer->reviewer ?? '-' }}</td>

                    <td>
                        {{-- <a href="{{ route('volunteers.show',$volunteer->id) }}">عرض</a> --}}
                        |
                        <a href="{{ route('archive-volunteers.edit',$volunteer->id) }}">تعديل</a>
                        |
                        <form action="{{ route('archive-volunteers.destroy',$volunteer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('حذف؟')">حذف</button>
                        </form>
                    </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="46" style="text-align:center;">
                                لا توجد بيانات
                            </td>
                        </tr>
                        @endforelse
            </tbody>
            <!-- صف النتيجة / الملخص -->
            <tfoot>
                <tr>
                    <td colspan="46" class="summary-row">
                        {{-- <strong>نتيجة العرض:</strong> إجمالي الأفراد المعروضين = 2 | الأفراد المتاحين للخدمة = 1 | الأفراد تحت العلاج = 1 --}}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="mt-3">
        {{ $archiveVolunteers->links() }}
    </div>
</div>
@endsection

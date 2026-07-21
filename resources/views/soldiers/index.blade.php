@extends('layouts.main')
@section('content')
<div class="sol-main-container">
    <!-- Page Header -->
    <div class="sol-page-header">
        <div class="sol-header-right">
            <div class="sol-page-title">
                <i>👥</i>
                <span>الجنود</span>
            </div>
        </div>
        <div class="sol-header-left">
            <button class="sol-btn-icon sol-btn-back">
                <i>←</i>
            </button>
        </div>
    </div>

    <!-- Top Actions -->
    <div class="sol-top-actions">
        <div class="sol-dropdown-container">
            <button class="sol-btn-action sol-btn-green">
                <i>+</i> إضافة إلي
                <span class="sol-dropdown-arrow">▼</span>
            </button>
            <div class="sol-dropdown-menu">
                <a href="#" class="sol-dropdown-item">الملاحق الداخلية</a>
                <a href="#" class="sol-dropdown-item">الملاحق الخارجية</a>
                <a href="#" class="sol-dropdown-item">إنهاء الخدمة</a>
                <a href="#" class="sol-dropdown-item">الانتقاء</a>
                <a href="#" class="sol-dropdown-item">الخوارج القانونية</a>
                <a href="#" class="sol-dropdown-item">التأمينات الداخلية</a>
                <a href="#" class="sol-dropdown-item">اجازات الجنود المستجدين</a>
                <a href="#" class="sol-dropdown-item">تأمين شمال سيناء</a>
                <a href="#" class="sol-dropdown-item">المصابين والشهداء</a>
                <a href="#" class="sol-dropdown-item">مشروع اجازات الجنود</a>
                <a href="#" class="sol-dropdown-item">تهمات أخري</a>
            </div>
        </div>

        <div class="sol-dropdown-container">
            <button class="sol-btn-action sol-btn-blue">
                <i>⚙</i> الأدوات
                <span class="sol-dropdown-arrow">▼</span>
            </button>
            <div class="sol-dropdown-menu">
                <a href="#" class="sol-dropdown-item">تعديل المحدد</a>
                <a href="#" class="sol-dropdown-item">نقل الى الموثرات</a>
                <a href="#" class="sol-dropdown-item">نقل الى البواقى</a>
            </div>
        </div>

        <div class="sol-dropdown-container">
            <button class="sol-btn-action sol-btn-teal">
                <i>🖨</i> طباعة النتائج
                <span class="sol-dropdown-arrow">▼</span>
            </button>
            <div class="sol-dropdown-menu">
                <a href="#" class="sol-dropdown-item">طباعة كشف أسماء</a>
                <a href="#" class="sol-dropdown-item">طباعة جواب ترحيل صرفيات</a>
            </div>
        </div>

        <div class="sol-dropdown-container">
            <button class="sol-btn-action sol-btn-red">
                <i>🖨</i> طباعة المحدد
                <span class="sol-dropdown-arrow">▼</span>
            </button>
            <div class="sol-dropdown-menu">
                <a href="#" class="sol-dropdown-item">كشف أسماء</a>
                <a href="#" class="sol-dropdown-item">جواب ترحيل صرفيات</a>
                <a href="#" class="sol-dropdown-item">أمر الخدمة</a>
                <a href="#" class="sol-dropdown-item">أنهاء الإلحاق</a>
                <a href="#" class="sol-dropdown-item">نموذج عقوبة سلوك</a>
                <a href="#" class="sol-dropdown-item">نموذج عقوبة غياب</a>
                <a href="#" class="sol-dropdown-item">نموذج عقوبة تخلف عن الطابور</a>
                <a href="#" class="sol-dropdown-item">مذكرة تفصيلية</a>
            </div>
        </div>

        <div class="sol-dropdown-container">
            <button class="sol-btn-action sol-btn-yellow">
                <i>📤</i> تصدير النتائج
                <span class="sol-dropdown-arrow">▼</span>
            </button>
            <div class="sol-dropdown-menu">
                <a href="{{ route('soldiers.export') }}" class="sol-dropdown-item">تصدير النتائج</a>
                <a href="#" class="sol-dropdown-item">تصدير المحدد</a>
            </div>
        </div>

        <a href="{{ route('soldiers.create') }}" class="sol-btn-action sol-btn-green">
            <i>+</i> إضافة جديد
        </a>

        <a href="{{ route('soldiers.importPage') }}" class="sol-btn-action sol-btn-cyan">
            <i>📥</i> استيراد نتائج
        </a>
    </div>

    <!-- Filters Container -->
    <div class="sol-filters-container">
        <div class="sol-filters-grid">
            <select class="sol-form-control">
                <option>توليد يومية عددية</option>
            </select>
            <select class="sol-form-control">
                <option>منظومة الجنود</option>
            </select>
            <select class="sol-form-control">
                <option>مركز التدريب</option>
            </select>
            <select class="sol-form-control">
                <option>تاريخ التصريح</option>
            </select>
            <select class="sol-form-control">
                <option>التخصص</option>
            </select>
            <select class="sol-form-control">
                <option>الفئة</option>
            </select>
            <select class="sol-form-control">
                <option>الوحدة الفرعية</option>
            </select>
            <select class="sol-form-control">
                <option>الوحدة الرئيسية</option>
            </select>
            <select class="sol-form-control">
                <option>المكان الفرعي</option>
            </select>
            <select class="sol-form-control">
                <option>الأماكن</option>
            </select>
            <select class="sol-form-control">
                <option>السلاح</option>
            </select>
            <select class="sol-form-control">
                <option>المحافظة</option>
            </select>
            <select class="sol-form-control">
                <option>المؤهل</option>
            </select>
            <select class="sol-form-control">
                <option>المرحلة</option>
            </select>
            <select class="sol-form-control">
                <option>درجة الرخصة</option>
            </select>
        </div>

        <div class="sol-bottom-actions-wrapper">
            <div class="sol-actions-row">
                <div class="sol-search-input-group">
                    <input type="text" class="sol-form-control sol-search-input" placeholder="الإسم">
                    <button class="sol-btn-action-small sol-btn-add-field">
                        <i>+</i> إضافة خانة
                    </button>
                </div>

                <div class="sol-button-group-main">
                    <button class="sol-btn-action-main sol-btn-green">إلغاء</button>
                    <button class="sol-btn-action-main sol-btn-blue">عرض</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div class="sol-results-count">
        عدد النتائج: {{ $soldiers->count() }}
    </div>

    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>الرقم العسكري</th>
                    <th>الدرجة</th>
                    <th>الإسم</th>
                    <th>القطاع</th>
                    <th>الوحدة</th>
                    <th>السلاح</th>
                    <th>الفئة</th>
                    <th>التخصص</th>
                    <th>تاريخ التجنيد</th>
                    <th>تاريخ التسريح</th>
                    <th>تاريخ الميلاد</th>
                    <th>الرقم القومي</th>
                    <th>درجة الرخصة</th>
                    <th>المؤهل</th>
                    <th>المهنة قبل التجنيد</th>
                    <th>الحالة الإجتماعية</th>
                    <th>الذكور الأبناء</th>
                    <th>الإناث الأبناء</th>
                    <th>إسم الأم</th>
                    <th>وظيفة الأم</th>
                    <th>مهنة الوالد</th>
                    <th>رقم التليفون</th>
                    <th>أقرب الأقارب</th>
                    <th>رقم تلفون اقرب الاقارب</th>
                    <th>المحافظة</th>
                    <th>العنوان</th>
                    <th>الطول</th>
                    <th>الوزن</th>
                    <th>تاريخ الإمداد</th>
                    <th>ملاحظات</th>
                    <th>التمام</th>
                    <th>مكان الإلحاق</th>
                    <th></th>
                </tr>
            </thead>

           <tbody>
                @forelse($soldiers as $soldier)
                <tr>

                    <td>{{ $soldier->military_number }}</td>
                    <td>{{ $soldier->rank ?? '-' }}</td>
                    <td>{{ $soldier->name }}</td>

                    <td>{{ $soldier->sector?->name ?? '-' }}</td>
                    <td>{{ $soldier->unit?->name ?? '-' }}</td>
                    <td>{{ $soldier->weapon?->name ?? '-' }}</td>

                    <td>{{ $soldier->category ?? '-' }}</td>


                    <td>{{ $soldier->specialization?->name ?? '-' }}</td>
                    <td>{{ $soldier->enlistment_date ? \Carbon\Carbon::parse($soldier->enlistment_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $soldier->discharge_date ? \Carbon\Carbon::parse($soldier->discharge_date)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $soldier->birth_date ? \Carbon\Carbon::parse($soldier->birth_date)->format('d/m/Y') : '-' }}</td>

                    <td>{{ $soldier->national_id ?? '-' }}</td>
                    <td>{{ $soldier->driving_license_grade ?? '-' }}</td>

                    <td>{{ $soldier->qualification ?? '-' }}</td>
                    <td>{{ $soldier->job_before_service ?? '-' }}</td>

                    <td>{{ $soldier->marital_status ?? '-' }}</td>
                    <td>{{ $soldier->male_children_count ?? '-' }}</td>
                    <td>{{ $soldier->female_children_count ?? '-' }}</td>

                    <td>{{ $soldier->mother_name ?? '-' }}</td>
                    <td>{{ $soldier->mother_job ?? '-' }}</td>
                    <td>{{ $soldier->father_job ?? '-' }}</td>


                    <td>{{ $soldier->phone_number ?? '-' }}</td>
                    <td>{{ $soldier->nearest_relative ?? '-' }}</td>
                    <td>{{ $soldier->nearest_relative_phone ?? '-' }}</td>

                    <td>{{ $soldier->governorate?->name ?? '-' }}</td>
                    <td>{{ $soldier->address ?? '-' }}</td>
                    <td>
                        {{ $soldier->height ?? '-' }}
                    </td>

                    <td>
                        {{ $soldier->weight ?? '-' }}
                    </td>

                    <td>{{ $soldier->supply_date ? \Carbon\Carbon::parse($soldier->supply_date)->format('d/m/Y') : '-' }}</td>


                    <td>{{ $soldier->notes ?? '-' }}</td>

                    <td>{{ $soldier->attendance ? '✔' : '✖' }}</td>

                    <td>{{ $soldier->attachment_place?->name ?? '-' }}</td>


                    <td>
                        {{-- <a href="{{ route('soldiers.show',$soldier->id) }}">عرض</a> --}}
                        |
                        <a href="{{ route('soldiers.edit',$soldier->id) }}">تعديل</a>
                        |
                        <form action="{{ route('soldiers.destroy',$soldier->id) }}" method="POST" style="display:inline;">
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
        {{ $soldiers->links() }}
    </div>
</div>
@endsection

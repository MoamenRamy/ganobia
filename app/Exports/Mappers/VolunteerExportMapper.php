<?php

namespace App\Exports\Mappers;

class VolunteerExportMapper
{
    /**
     * تحويل الصف القادم من Query إلى صف Excel
     */
    public function map(object $row): array
    {
        return [

            $row->military_number,

            $row->rank,

            $row->name,

            $row->sector,

            $row->unit,

            $row->batch_number,

            $this->date($row->enlistment_date),

            $this->date($row->high_salary_date),

            $this->date($row->current_rank_date),

            $this->date($row->southern_region_join_date),

            $this->date($row->unit_join_date),

            $row->educational_qualification,

            $row->weapon,

            $row->category,

            $row->specialization,

            $row->qualified ? 'نعم' : 'لا',

            $row->not_qualified ? 'نعم' : 'لا',

            $row->detention_count,

            $row->imprisonment_count,

            $row->court_cases_count,

            $row->phone_number,

            $row->relative_phone_number,

            $row->national_id,

            $this->date($row->birth_date),

            $row->marital_status,

            $row->children_count,

            $row->male_children_count,

            $row->female_children_count,

            $row->village,

            $row->center,

            $row->governorate,

            $row->weight,

            $row->height,

            $row->weight_difference,

            $row->attachment,

            $row->previous_units,

            $row->travel,

            $row->medical_status,

            $row->notes,

            $row->reviewer,

        ];
    }

    /**
     * تنسيق التاريخ
     */
    protected function date($value): ?string
    {
        if (empty($value)) {
            return null;
        }

        return date('Y-m-d', strtotime($value));
    }

    /**
     * عناوين الأعمدة
     */
    public function headings(): array
    {
        return [

            'الرقم العسكري',

            'الدرجة',

            'الاسم',

            'القطاع',

            'الوحدة',

            'رقم الدفعة',

            'تاريخ التطوع',

            'تاريخ صرف الراتب العالي',

            'تاريخ الترقية للدرجة الحالية',

            'تاريخ الضم للمنطقة الجنوبية',

            'تاريخ الضم للوحدة الحالية',

            'المؤهل الدراسي',

            'السلاح',

            'الفئة',

            'التخصص',

            'مؤهل',

            'غير مؤهل',

            'عدد مرات الحجز',

            'عدد مرات الحبس',

            'عدد المحاكم',

            'رقم الهاتف',

            'رقم هاتف أقرب الأقارب',

            'الرقم القومي',

            'تاريخ الميلاد',

            'الحالة الاجتماعية',

            'عدد الأطفال',

            'عدد الذكور',

            'عدد الإناث',

            'القرية',

            'المركز',

            'المحافظة',

            'الوزن',

            'الطول',

            'فرق الوزن',

            'مكان الإلحاق',

            'الوحدات السابقة',

            'السفر',

            'الموقف الطبي',

            'ملاحظات',

            'المراجع',

        ];
    }
}
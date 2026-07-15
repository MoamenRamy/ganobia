<?php

namespace App\Exports\Mappers;

class SoldierExportMapper
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

            $row->weapon,

            $row->specialization,

            $row->category,

            $this->date($row->enlistment_date),

            $this->date($row->discharge_date),

            $this->date($row->birth_date),

            $row->national_id,

            $row->driving_license_grade,

            $row->qualification,

            $row->job_before_service,

            $row->marital_status,

            $row->male_children_count,

            $row->female_children_count,

            $row->mother_name,

            $row->mother_job,

            $row->father_job,

            $row->phone_number,

            $row->nearest_relative,

            $row->nearest_relative_phone,

            $row->governorate,

            $row->address,

            $row->height,

            $row->weight,

            $this->date($row->supply_date),

            $row->notes,

            $row->attendance ? 'نعم' : 'لا',

            $row->attachment,

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

            'السلاح',

            'التخصص',

            'الفئة',

            'تاريخ التجنيد',

            'تاريخ التسريح',

            'تاريخ الميلاد',

            'الرقم القومي',

            'درجة الرخصة',

            'المؤهل',

            'المهنة قبل التجنيد',

            'الحالة الاجتماعية',

            'عدد الأبناء الذكور',

            'عدد الأبناء الإناث',

            'اسم الأم',

            'مهنة الأم',

            'مهنة الأب',

            'رقم الهاتف',

            'أقرب الأقارب',

            'هاتف أقرب الأقارب',

            'المحافظة',

            'العنوان',

            'الطول',

            'الوزن',

            'تاريخ الإمداد',

            'ملاحظات',

            'التمام',

            'مكان الإلحاق',

        ];
    }
}

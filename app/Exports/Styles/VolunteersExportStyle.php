<?php

namespace App\Exports\Styles;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Events\AfterSheet;

class VolunteersExportStyle
{
    public static function events(): array
    {
        return [

            AfterSheet::class => function (AfterSheet $event) {

                $sheet = $event->sheet->getDelegate();

                /*
                |--------------------------------------------------------------------------
                | آخر عمود
                |--------------------------------------------------------------------------
                */

                $lastColumn = $sheet->getHighestColumn();

                /*
                |--------------------------------------------------------------------------
                | تنسيق الهيدر
                |--------------------------------------------------------------------------
                */

                $sheet->getStyle("A1:{$lastColumn}1")->applyFromArray([

                    'font' => [

                        'bold' => true,

                        'size' => 12,

                        'color' => [

                            'rgb' => 'FFFFFF',

                        ],

                    ],

                    'fill' => [

                        'fillType' => Fill::FILL_SOLID,

                        'startColor' => [

                            'rgb' => '1F4E78',

                        ],

                    ],

                    'alignment' => [

                        'horizontal' => Alignment::HORIZONTAL_CENTER,

                        'vertical' => Alignment::VERTICAL_CENTER,

                    ],

                ]);

                /*
                |--------------------------------------------------------------------------
                | اتجاه الورقة
                |--------------------------------------------------------------------------
                */

                $sheet->setRightToLeft(true);

                /*
                |--------------------------------------------------------------------------
                | ارتفاع الهيدر
                |--------------------------------------------------------------------------
                */

                $sheet->getRowDimension(1)->setRowHeight(28);

                /*
                |--------------------------------------------------------------------------
                | عرض الأعمدة
                |--------------------------------------------------------------------------
                */

                $lastIndex = Coordinate::columnIndexFromString($lastColumn);

                for ($i = 1; $i <= $lastIndex; $i++) {

                    $sheet->getColumnDimension(
                        Coordinate::stringFromColumnIndex($i)
                    )->setWidth(22);
                }
            },

        ];
    }
}
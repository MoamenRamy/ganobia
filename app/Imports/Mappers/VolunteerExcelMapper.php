<?php

namespace App\Imports\Mappers;

use App\Imports\Lookup\LookupCache;
use App\Imports\Services\ImportStatistics;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class VolunteerExcelMapper
{
    protected LookupCache $lookup;
    protected ImportStatistics $stats;

    public function __construct(
        LookupCache $lookup,
        ImportStatistics $stats
    ) {
        $this->lookup = $lookup;
        $this->stats = $stats;
    }

    public function map(array $row, int $rowNumber): ?array
    {
        // $this->stats->rowRead();

        $militaryNumber = trim(
            $row['alrkm_alaaskr'] ?? ''
        );

        if (blank($militaryNumber)) {
            $this->stats->skipped();
            return null;
        }

        /*
        |--------------------------------------------------------------------------
        | Lookup
        |--------------------------------------------------------------------------
        */

        $sectorName = $row['alktaaa_alloaaa'] ?? null;
        $sectorId = $this->lookup->sector($sectorName);

        $unitName = $row['alohd'] ?? null;
        $unitId = $this->lookup->unit($unitName);

        $weaponName = $row['alslah'] ?? null;
        $weaponId = $this->lookup->weapon($weaponName);

        $specializationName = $row['altkhss'] ?? null;
        $specializationId = $this->lookup->specialty(
            $specializationName
        );

        $governmentName = $row['almhafth'] ?? null;
        $governmentId = $this->lookup->governorate(
            $governmentName
        );

        $placeName = $row['mkan_alalhak'] ?? null;
        $placeId = $this->lookup->place($placeName);

        /*
        |--------------------------------------------------------------------------
        | Lookup Errors
        |--------------------------------------------------------------------------
        */

        $this->checkLookup(
            $rowNumber,
            'القطاع',
            $sectorName,
            $sectorId
        );

        $this->checkLookup(
            $rowNumber,
            'الوحدة',
            $unitName,
            $unitId
        );

        $this->checkLookup(
            $rowNumber,
            'السلاح',
            $weaponName,
            $weaponId
        );

        $this->checkLookup(
            $rowNumber,
            'التخصص',
            $specializationName,
            $specializationId
        );

        $this->checkLookup(
            $rowNumber,
            'المحافظة',
            $governmentName,
            $governmentId
        );

        $this->checkLookup(
            $rowNumber,
            'مكان الإلحاق',
            $placeName,
            $placeId
        );

        /*
        |--------------------------------------------------------------------------
        | Final Data
        |--------------------------------------------------------------------------
        */

        return [

            'military_number' => $militaryNumber,

            'rank' => $this->string(
                $row['aldrg'] ?? null
            ),

            'name' => $this->string(
                $row['alasm'] ?? null
            ),

            'unit_id' => $unitId,

            'sector_id' => $sectorId,

            'batch_number' => $this->string(
                $row['rkm_aldfaa'] ?? null
            ),

            'enlistment_date' => $this->excelDate(
                $row['tarykh_alttoaa'] ?? null
            ),

            'high_salary_date' => $this->excelDate(
                $row['tarykh_srf_alratb_alaaal'] ?? null
            ),

            'current_rank_date' => $this->excelDate(
                $row['tarykh_altrk_lldrg_alhaly'] ?? null
            ),

            'southern_region_join_date' => $this->excelDate(
                $row['tarykh_aldm_aal_almntk_algnoby'] ?? null
            ),

            'unit_join_date' => $this->excelDate(
                $row['tarykh_aldm_aal_alohd_alhaly'] ?? null
            ),

            'educational_qualification' => $this->string(
                $row['almohl_aldras'] ?? null
            ),

            'weapon_id' => $weaponId,

            'category' => $this->string(
                $row['alfy'] ?? null
            ),

            'specialization_id' => $specializationId,

            'qualified' => $this->qualified($row),

            'not_qualified' => $this->notQualified($row),

            'detention_count' => intval(
                $row['hgz'] ?? 0
            ),

            'imprisonment_count' => intval(
                $row['hbs'] ?? 0
            ),

            'court_cases_count' => intval(
                $row['mhkm'] ?? 0
            ),

            'phone_number' => $this->string(
                $row['rkm_altlyfon'] ?? null
            ),

            'relative_phone_number' => $this->string(
                $row['rkm_altlyfon_akrb_alakarb'] ?? null
            ),

            'national_id' => $this->nationalId(
                $row['alrkm_alkom'] ?? null
            ),

            'birth_date' => $this->excelDate(
                $row['tarykh_almylad'] ?? null
            ),

            'marital_status' => $this->string(
                $row['alhal_alagtmaaay'] ?? null
            ),

            'children_count' => intval(
                $row['aadd_alabnaaa'] ?? 0
            ),

            'male_children_count' => intval(
                $row['thkor'] ?? 0
            ),

            'female_children_count' => intval(
                $row['anath'] ?? 0
            ),

            'village' => $this->string(
                $row['alkry'] ?? null
            ),

            'center' => $this->string(
                $row['almrkz'] ?? null
            ),

            'governorate_id' => $governmentId,

            'weight' => is_numeric(
                $row['alozn'] ?? null
            )
                ? (float) $row['alozn']
                : null,

            'height' => is_numeric(
                $row['altol'] ?? null
            )
                ? (float) $row['altol']
                : null,

            'weight_difference' => null,

            'attachment_id' => $placeId,

            'previous_units' => $this->string(
                $row['alohdat_alsabkh'] ?? null
            ),

            'travel' => $this->string(
                $row['sfr'] ?? null
            ),

            'medical_status' => $this->string(
                $row['mokf_tb'] ?? null
            ),

            'notes' => $this->string(
                $row['mlahthat'] ?? null
            ),

            'reviewer' => $this->string(
                $row['mragaa'] ?? null
            ),

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    protected function nationalId($value): ?string
    {
        if (blank($value)) {
            return null;
        }

        $value = preg_replace(
            '/\D/',
            '',
            (string) $value
        );

        if (strlen($value) !== 14) {
            return null;
        }

        return $value;
    }

    protected function qualified(array $row): bool
    {
        return strtoupper(
            trim($row['mohl'] ?? '')
        ) === 'P';
    }

    protected function notQualified(array $row): bool
    {
        return !blank(
            $row['ghyr_mohl'] ?? null
        );
    }

    protected function checkLookup(
        int $row,
        string $field,
        ?string $value,
        ?int $id
    ): void {
        if (!blank($value) && $id === null) {
            $this->stats->lookup(
                $row,
                $field,
                trim($value)
            );
        }
    }

    protected function string($value): ?string
    {
        if (blank($value)) {
            return null;
        }

        return trim((string) $value);
    }

    protected function excelDate($value): ?string
    {
        if (blank($value)) {
            return null;
        }

        try {

            if (is_numeric($value)) {
                return Date::excelToDateTimeObject(
                    $value
                )->format('Y-m-d');
            }

            return Carbon::parse($value)
                ->format('Y-m-d');

        } catch (\Throwable) {
            return null;
        }
    }

    public function statistics(): ImportStatistics
    {
        return $this->stats;
    }
}

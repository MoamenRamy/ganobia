<?php

namespace App\Imports\Mappers;

use App\Imports\Lookup\LookupCache;
use App\Imports\Services\ImportStatistics;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class SoldierExcelMapper
{
    protected LookupCache $lookup;
    protected ImportStatistics $stats;

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

    public function __construct(
        LookupCache $lookup,
        ImportStatistics $stats
    ) {
        $this->lookup = $lookup;
        $this->stats = $stats;
    }

    public function map(array $row, int $rowNumber): ?array
    {
        $this->stats->rowRead();

        $militaryNumber = trim($row['alrkm_alaaskry'] ?? '');

        if (blank($militaryNumber)) {
            $this->stats->skipped();
            return null;
        }

        // --- Lookup مع Debug ---

        $sectorName = $row['alohd'] ?? null;
        $sectorId = $this->lookup->sector($sectorName);

        // 🔍 Debug: سجل أول 10 أخطاء فقط
        if ($sectorId === null && !blank($sectorName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Sector not found: '{$sectorName}' at row {$rowNumber}");
        }

        $unitName = $row['alohd_alfraay'] ?? null;
        $unitId = $this->lookup->unit($unitName);

        if ($unitId === null && !blank($unitName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Unit not found: '{$unitName}' at row {$rowNumber}");
        }

        $weaponName = $row['alslah'] ?? null;
        $weaponId = $this->lookup->weapon($weaponName);

        if ($weaponId === null && !blank($weaponName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Weapon not found: '{$weaponName}' at row {$rowNumber}");
        }

        $specialtyName = $row['altkhss'] ?? null;
        $specialtyId = $this->lookup->specialty($specialtyName);

        if ($specialtyId === null && !blank($specialtyName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Specialty not found: '{$specialtyName}' at row {$rowNumber}");
        }

        $governmentName = $row['almhafth'] ?? null;
        $governmentId = $this->lookup->governorate($governmentName);

        if ($governmentId === null && !blank($governmentName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Government not found: '{$governmentName}' at row {$rowNumber}");
        }

        $placeName = $row['mkan_allhak'] ?? null;
        $placeId = $this->lookup->place($placeName);

        if ($placeId === null && !blank($placeName) && $this->stats->lookupErrors < 10) {
            // \Log::warning("⚠️ Place not found: '{$placeName}' at row {$rowNumber}");
        }

        // تسجيل أخطاء الـ Lookup في الإحصائيات
        $this->checkLookup($rowNumber, 'القطاع', $sectorName, $sectorId);
        $this->checkLookup($rowNumber, 'الوحدة', $unitName, $unitId);
        $this->checkLookup($rowNumber, 'السلاح', $weaponName, $weaponId);
        $this->checkLookup($rowNumber, 'التخصص', $specialtyName, $specialtyId);
        $this->checkLookup($rowNumber, 'المحافظة', $governmentName, $governmentId);
        $this->checkLookup($rowNumber, 'مكان الإلحاق', $placeName, $placeId);

        // --- بناء البيانات ---

        return [
            'military_number' => $militaryNumber,
            'rank' => $this->string($row['aldrg'] ?? null),
            'name' => $this->string($row['alasm'] ?? null),
            'sector_id' => $sectorId,
            'unit_id' => $unitId,
            'weapon_id' => $weaponId,
            'category' => $this->string($row['alfy'] ?? null),
            'specialization_id' => $specialtyId,
            'enlistment_date' => $this->excelDate($row['tarykh_altgnyd'] ?? null),
            'discharge_date' => $this->excelDate($row['tarykh_altsryh'] ?? null),
            'birth_date' => $this->excelDate($row['tarykh_almylad'] ?? null),
            'national_id' => $this->nationalId($row['alrkm_alkomy'] ?? null),
            'driving_license_grade' => $this->string($row['drg_alrkhs'] ?? null),
            'qualification' => $this->string($row['almohl'] ?? null),
            'job_before_service' => $this->string($row['almhn_kbl_altgnyd'] ?? null),
            'marital_status' => $this->string($row['alhal_alagtmaaay'] ?? null),
            'male_children_count' => intval($row['aadd_alabnaaa_thkor'] ?? 0),
            'female_children_count' => intval($row['aadd_alabnaaa_anath'] ?? 0),
            'mother_name' => $this->string($row['asm_alam'] ?? null),
            'mother_job' => $this->string($row['mhn_alam'] ?? null),
            'father_job' => $this->string($row['mhn_aloald'] ?? null),
            'phone_number' => $this->string($row['rkm_altlfon'] ?? null),
            'nearest_relative' => $this->string($row['akrb_alakarb'] ?? null),
            'nearest_relative_phone' => $this->string($row['rkm_akrb_alakarb'] ?? null),
            'governorate_id' => $governmentId,
            'address' => $this->string($row['alaanoan'] ?? null),
            'height' => is_numeric($row['altol'] ?? null) ? (float)$row['altol'] : null,
            'weight' => is_numeric($row['alozn'] ?? null) ? (float)$row['alozn'] : null,
            'supply_date' => $this->excelDate($row['tarykh_alamdad'] ?? null),
            'notes' => $this->string($row['mlahthat'] ?? null),
            'attendance' => ($row['altmam'] ?? 0) == 1,
            'attachment_id' => $placeId,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    protected function checkLookup(
        int $row,
        string $field,
        ?string $value,
        ?int $id
    ): void {
        if (!blank($value) && $id === null) {
            $this->stats->lookup($row, $field, trim($value));
        }
    }

    protected function string($value): ?string
    {
        if (blank($value)) {
            return null;
        }
        return trim((string)$value);
    }

    protected function excelDate($value): ?string
    {
        if (blank($value)) {
            return null;
        }

        try {
            if (is_numeric($value)) {
                return Date::excelToDateTimeObject($value)->format('Y-m-d');
            }
            return Carbon::parse($value)->format('Y-m-d');
        } catch (\Throwable) {
            return null;
        }
    }

    public function statistics(): ImportStatistics
    {
        return $this->stats;
    }
}
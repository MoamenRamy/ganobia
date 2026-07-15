<?php

namespace App\Imports\Lookup;

use App\Models\Government;
use App\Models\Place;
use App\Models\Sector;
use App\Models\Specialtie;
use App\Models\Unit;
use App\Models\Weapon;

class LookupCache
{
    protected array $sectors = [];
    protected array $units = [];
    protected array $weapons = [];
    protected array $specialties = [];
    protected array $governorates = [];
    protected array $places = [];

    public function __construct()
    {
        $this->load();
    }

    protected function load(): void
    {
        $this->sectors = $this->prepare(
            Sector::select('id', 'name')->get()
        );

        $this->units = $this->prepare(
            Unit::select('id', 'name')->get()
        );

        $this->weapons = $this->prepare(
            Weapon::select('id', 'name')->get()
        );

        $this->specialties = $this->prepare(
            Specialtie::select('id', 'name')->get()
        );

        $this->governorates = $this->prepare(
            Government::select('id', 'name')->get()
        );

        $this->places = $this->prepare(
            Place::select('id', 'name')->get()
        );
    }

    protected function prepare($collection): array
    {
        $result = [];

        foreach ($collection as $item) {
            $normalizedName = $this->normalize($item->name);

            // احتفظ بالقيمة الأصلية أيضاً كـ Key
            $result[$normalizedName] = $item->id;

            // احتفظ بالنص الأصلي أيضاً (للمطابقة التامة)
            $result[trim($item->name)] = $item->id;
        }

        return $result;
    }

    protected function normalize(?string $text): string
    {
        if (blank($text)) {
            return '';
        }

        $text = trim($text);

        // إزالة المسافات الزائدة
        $text = preg_replace('/\s+/u', ' ', $text);

        // توحيد الألف (أ, إ, آ) إلى (ا)
        $text = str_replace(['أ', 'إ', 'آ'], 'ا', $text);

        // توحيد التاء المربوطة (ة) إلى (ه)
        $text = str_replace(['ة'], 'ه', $text);

        // توحيد الألف المقصورة (ى) إلى (ي)
        $text = str_replace(['ى'], 'ي', $text);

        // إزالة علامات التشكيل
        $text = preg_replace('/[\x{064B}-\x{065F}]/u', '', $text);

        return mb_strtolower($text);
    }

    /**
     * البحث عن تطابق مع مرونة أكبر
     */
    protected function findMatch(array $map, ?string $value): ?int
    {
        if (blank($value)) {
            return null;
        }

        $normalized = $this->normalize($value);
        $original = trim($value);

        // 1. البحث بالاسم الطبيعي
        if (isset($map[$normalized])) {
            return $map[$normalized];
        }

        // 2. البحث بالاسم الأصلي
        if (isset($map[$original])) {
            return $map[$original];
        }

        // 3. البحث بجزء من الاسم (إذا كان طويلاً)
        foreach ($map as $key => $id) {
            // إذا كان النص المراد البحث عنه يحتوي على المفتاح أو العكس
            if (str_contains($normalized, $key) || str_contains($key, $normalized)) {
                return $id;
            }
        }

        return null;
    }

    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */

    public function sector(?string $name): ?int
    {
        return $this->findMatch($this->sectors, $name);
    }

    public function unit(?string $name): ?int
    {
        return $this->findMatch($this->units, $name);
    }

    public function weapon(?string $name): ?int
    {
        return $this->findMatch($this->weapons, $name);
    }

    public function specialty(?string $name): ?int
    {
        return $this->findMatch($this->specialties, $name);
    }

    public function governorate(?string $name): ?int
    {
        return $this->findMatch($this->governorates, $name);
    }

    public function place(?string $name): ?int
    {
        return $this->findMatch($this->places, $name);
    }

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */

    public function existsSector(?string $name): bool
    {
        return $this->sector($name) !== null;
    }

    public function existsUnit(?string $name): bool
    {
        return $this->unit($name) !== null;
    }

    public function existsWeapon(?string $name): bool
    {
        return $this->weapon($name) !== null;
    }

    public function existsSpecialty(?string $name): bool
    {
        return $this->specialty($name) !== null;
    }

    public function existsGovernorate(?string $name): bool
    {
        return $this->governorate($name) !== null;
    }

    public function existsPlace(?string $name): bool
    {
        return $this->place($name) !== null;
    }

    /**
     * إعادة تحميل الكاش
     */
    public function refresh(): void
    {
        $this->load();
    }
}

<?php

namespace App\Imports\Lookup;

use App\Models\Soldier;

class ExistingSoldiersCache
{
    /**
     * military_number => id
     */
    protected array $soldiers = [];

    public function __construct()
    {
        $this->load();
    }

    protected function load(): void
    {
        $this->soldiers = Soldier::query()

            ->select('id', 'military_number')

            ->pluck('id', 'military_number')

            ->toArray();
    }

    /**
     * هل المجند موجود؟
     */
    public function exists(?string $militaryNumber): bool
    {
        if (blank($militaryNumber)) {
            return false;
        }

        return isset(
            $this->soldiers[trim($militaryNumber)]
        );
    }

    /**
     * الحصول على ID
     */
    public function id(?string $militaryNumber): ?int
    {
        if (!$this->exists($militaryNumber)) {
            return null;
        }

        return $this->soldiers[
            trim($militaryNumber)
        ];
    }

    /**
     * إضافة مجند جديد أثناء الاستيراد
     */
    public function add(
        string $militaryNumber,
        ?int $id = null
    ): void {

        $this->soldiers[
            trim($militaryNumber)
        ] = $id;
    }

    /**
     * عدد المجندين المحملين
     */
    public function count(): int
    {
        return count($this->soldiers);
    }

    /**
     * إعادة تحميل الكاش
     */
    public function refresh(): void
    {
        $this->load();
    }
}
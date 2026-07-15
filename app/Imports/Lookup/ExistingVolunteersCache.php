<?php

namespace App\Imports\Lookup;

use App\Models\Volunteer;

class ExistingVolunteersCache
{
    protected array $volunteers = [];

    public function __construct()
    {
        $this->load();
    }

    protected function load(): void
    {
        $this->volunteers = Volunteer::query()
            ->select('id', 'military_number')
            ->pluck('id', 'military_number')
            ->toArray();
    }

    public function exists(?string $militaryNumber): bool
    {
        if (blank($militaryNumber)) {
            return false;
        }

        return isset(
            $this->volunteers[
                trim($militaryNumber)
            ]
        );
    }

    public function id(?string $militaryNumber): ?int
    {
        if (!$this->exists($militaryNumber)) {
            return null;
        }

        return $this->volunteers[
            trim($militaryNumber)
        ];
    }

    public function add(
        string $militaryNumber,
        ?int $id = null
    ): void {

        $this->volunteers[
            trim($militaryNumber)
        ] = $id;
    }

    public function count(): int
    {
        return count($this->volunteers);
    }

    public function refresh(): void
    {
        $this->load();
    }
}

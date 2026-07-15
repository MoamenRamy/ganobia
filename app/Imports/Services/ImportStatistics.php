<?php

namespace App\Imports\Services;

class ImportStatistics
{
    /**
     * وقت بداية الاستيراد
     */
    public float $startedAt;

    /**
     * وقت نهاية الاستيراد
     */
    public float $finishedAt = 0;

    /**
     * العدادات
     */
    public int $totalRows = 0;
    public int $insertedRows = 0;
    public int $updatedRows = 0;
    public int $skippedRows = 0;

    public int $lookupErrors = 0;
    public int $validationErrors = 0;
    public int $databaseErrors = 0;

    /**
     * تفاصيل الأخطاء
     */
    // public array $lookupMessages = [];
    /**
     * أخطاء الـ Lookup
     */
    public array $lookupMessages = [];

    /**
     * field|value => index
     */
    protected array $lookupIndex = [];
    public array $validationMessages = [];
    public array $databaseMessages = [];

    public function __construct()
    {
        $this->startedAt = microtime(true);
    }

    /*
    |--------------------------------------------------------------------------
    | Counters
    |--------------------------------------------------------------------------
    */

    public function rowRead(): void
    {
        $this->totalRows++;
    }

    public function inserted(): void
    {
        $this->insertedRows++;
    }

    public function updated(): void
    {
        $this->updatedRows++;
    }

    public function skipped(): void
    {
        $this->skippedRows++;
    }

    /*
    |--------------------------------------------------------------------------
    | Lookup Errors
    |--------------------------------------------------------------------------
    */

    // public function lookup(
    //     int $row,
    //     string $field,
    //     ?string $value
    // ): void {

    //     $this->lookupErrors++;

    //     $this->lookupMessages[] = [

    //         'row'   => $row,

    //         'field' => $field,

    //         'value' => $value,

    //     ];
    // }
    public function lookup(
        int $row,
        string $field,
        ?string $value
    ): void {

        if (blank($value)) {
            return;
        }

        $value = trim($value);

        $key = $field . '|' . $value;

        /*
        |--------------------------------------------------------------------------
        | لو الخطأ موجود قبل كده نزود العداد فقط
        |--------------------------------------------------------------------------
        */

        if (isset($this->lookupIndex[$key])) {

            $index = $this->lookupIndex[$key];

            $this->lookupMessages[$index]['count']++;

            return;
        }

        /*
        |--------------------------------------------------------------------------
        | أول مرة يظهر فيها الخطأ
        |--------------------------------------------------------------------------
        */

        $this->lookupErrors++;

        $this->lookupMessages[] = [

            'row'   => $row,

            'field' => $field,

            'value' => $value,

            'count' => 1,

        ];

        $this->lookupIndex[$key] = array_key_last(
            $this->lookupMessages
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Validation Errors
    |--------------------------------------------------------------------------
    */

    public function validation(
        int $row,
        string $column,
        string $message
    ): void {

        $this->validationErrors++;

        $this->validationMessages[] = [

            'row' => $row,

            'column' => $column,

            'message' => $message,

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Database Errors
    |--------------------------------------------------------------------------
    */

    public function database(
        int $row,
        string $message
    ): void {

        $this->databaseErrors++;

        $this->databaseMessages[] = [

            'row' => $row,

            'message' => $message,

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Finish
    |--------------------------------------------------------------------------
    */

    public function finish(): void
    {
        $this->finishedAt = microtime(true);
    }

    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */

    public function duration(): float
    {
        $end = $this->finishedAt ?: microtime(true);

        return round($end - $this->startedAt, 2);
    }

    public function rowsPerSecond(): float
    {
        if ($this->duration() == 0) {
            return 0;
        }

        return round(
            $this->totalRows / $this->duration(),
            2
        );
    }

    public function successRate(): float
    {
        if ($this->totalRows == 0) {
            return 0;
        }

        return round(

            (

                ($this->insertedRows + $this->updatedRows)

                /

                $this->totalRows

            ) * 100,

            2

        );
    }

    public function memoryUsage(): string
    {
        return round(

            memory_get_peak_usage(true) / 1024 / 1024,

            2

        ) . ' MB';
    }

    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */

    public function totalRows(): int
    {
        return $this->totalRows;
    }

    public function insertedRows(): int
    {
        return $this->insertedRows;
    }

    public function updatedRows(): int
    {
        return $this->updatedRows;
    }

    public function skippedRows(): int
    {
        return $this->skippedRows;
    }

    public function lookupErrors(): int
    {
        return $this->lookupErrors;
    }

    public function validationErrors(): int
    {
        return $this->validationErrors;
    }

    public function databaseErrors(): int
    {
        return $this->databaseErrors;
    }

    public function lookupMessages(): array
    {
        return $this->lookupMessages;
    }

    public function validationMessages(): array
    {
        return $this->validationMessages;
    }

    public function databaseMessages(): array
    {
        return $this->databaseMessages;
    }

    /*
    |--------------------------------------------------------------------------
    | التقرير النهائي
    |--------------------------------------------------------------------------
    */

    public function summary(): array
    {
        return [

            'total_rows' => $this->totalRows(),

            'inserted_rows' => $this->insertedRows(),

            'updated_rows' => $this->updatedRows(),

            'skipped_rows' => $this->skippedRows(),

            'lookup_errors' => $this->lookupErrors(),

            'validation_errors' => $this->validationErrors(),

            'database_errors' => $this->databaseErrors(),

            'success_rate' => $this->successRate(),

            'duration' => $this->duration(),

            'rows_per_second' => $this->rowsPerSecond(),

            'memory_usage' => $this->memoryUsage(),

            'lookup_messages' => $this->lookupMessages(),

            'validation_messages' => $this->validationMessages(),

            'database_messages' => $this->databaseMessages(),

        ];
    }
}

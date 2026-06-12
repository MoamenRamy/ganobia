<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('moratab');
            $table->integer('seasa');
            $table->integer('soldiers');
            $table->integer('volunteers');
            $table->integer('total');
            $table->integer('nesbat_estkmal_seasa');
            $table->integer('nesbat_estkmal_moratab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};

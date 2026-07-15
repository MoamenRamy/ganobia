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
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->string('name')->unique();
            $table->integer('moratab')->nullable();
            $table->integer('seasa')->nullable();
            $table->integer('soldiers')->nullable();
            $table->integer('volunteers')->nullable();
            $table->integer('total')->nullable();
            $table->integer('nesbat_estkmal_seasa')->nullable();
            $table->integer('nesbat_estkmal_moratab')->nullable();
            $table->timestamps();

            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('SET NULL');
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
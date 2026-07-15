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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // المشروعات .. الشعبة
            $table->unsignedBigInteger('attachment_place_id')->nullable();
            $table->timestamps();

            $table->foreign('attachment_place_id')
            ->references('id')
            ->on('attachment_places')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};

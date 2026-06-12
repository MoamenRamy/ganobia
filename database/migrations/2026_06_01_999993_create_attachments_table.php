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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soldier_id');
            $table->unsignedBigInteger('place_id');
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('soldier_id')->references('id')->on('soldiers')->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};

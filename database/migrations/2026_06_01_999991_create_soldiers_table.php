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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('military_number')->unique();      // الرقم العسكري
            $table->string('rank')->nullable();               // الدرجة
            $table->string('name');                           // الاسم

            $table->unsignedBigInteger('sector_id')->nullable();             // القطاع
            $table->unsignedBigInteger('unit_id')->nullable();               // الوحدة
            $table->unsignedBigInteger('weapon_id')->nullable();             // السلاح
            $table->string('category')->nullable();           // الفئة
            $table->unsignedBigInteger('specialization_id')->nullable();     // التخصص

            $table->date('enlistment_date')->nullable();      // تاريخ التجنيد
            $table->date('discharge_date')->nullable();       // تاريخ التسريح
            $table->date('birth_date')->nullable();           // تاريخ الميلاد

            $table->string('national_id', 14)->nullable();    // الرقم القومي

            $table->string('driving_license_grade')->nullable(); // درجة الرخصة
            $table->string('qualification')->nullable();         // المؤهل
            $table->string('job_before_service')->nullable();    // المهنة قبل التجنيد

            $table->string('marital_status')->nullable();     // الحالة الاجتماعية

            $table->unsignedTinyInteger('male_children_count')->default(0);
            $table->unsignedTinyInteger('female_children_count')->default(0);

            $table->string('mother_name')->nullable();        // اسم الأم
            $table->string('mother_job')->nullable();         // مهنة الأم
            $table->string('father_job')->nullable();         // مهنة الوالد

            $table->string('phone_number')->nullable();       // رقم التلفون

            $table->string('nearest_relative')->nullable();   // أقرب الأقارب
            $table->string('nearest_relative_phone')->nullable(); // رقم أقرب الأقارب

            $table->unsignedBigInteger('governorate_id')->nullable();        // المحافظة
            $table->text('address')->nullable();              // العنوان

            $table->decimal('height', 5, 2)->nullable();      // الطول (سم)
            $table->decimal('weight', 5, 2)->nullable();      // الوزن (كجم)

            $table->date('supply_date')->nullable();          // تاريخ الإمداد

            $table->text('notes')->nullable();                // ملاحظات

            $table->boolean('attendance')->default(true);     // التمام

            $table->unsignedBigInteger('attachment_id')->nullable();       // مكان الالحاق

            // attachment place

            $table->timestamps();

            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('SET NULL');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('SET NULL');
            $table->foreign('weapon_id')->references('id')->on('weapons')->onDelete('SET NULL');
            $table->foreign('governorate_id')->references('id')->on('governments')->onDelete('SET NULL');
            $table->foreign('specialization_id')->references('id')->on('specialties')->onDelete('SET NULL');
            $table->foreign('attachment_id')->references('id')->on('places')->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};

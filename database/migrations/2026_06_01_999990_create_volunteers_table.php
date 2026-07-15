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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();

            // البيانات الأساسية
            $table->string('military_number')->unique();        // الرقم العسكرى
            $table->string('rank')->nullable();                 // الدرجة
            $table->string('name');                             // الاسم

            // الوحدة والقطاع
            $table->unsignedBigInteger('unit_id')->nullable();      //الوحدة
            $table->unsignedBigInteger('sector_id')->nullable();    // القطاع

            // الدفعة والتواريخ
            $table->string('batch_number')->nullable();             // رقم الدفعهة

            $table->date('enlistment_date')->nullable(); // تاريخ التطوع
            $table->date('high_salary_date')->nullable(); // تاريخ صرف الراتب العالي
            $table->date('current_rank_date')->nullable(); // تاريخ الترقى للدرجة الحالية
            $table->date('southern_region_join_date')->nullable(); // تاريخ الضم على المنطقة الجنوبية
            $table->date('unit_join_date')->nullable(); // تاريخ الضم على الوحدة الحالية


            // المؤهلات
            $table->string('educational_qualification')->nullable();    // المؤهل الدراسى
            $table->unsignedBigInteger('weapon_id')->nullable();        // السلاح
            $table->string('category')->nullable();                     // الفئة
            $table->unsignedBigInteger('specialization_id')->nullable();// التخصص

            $table->boolean('qualified')->default(false);               // مؤهل
            $table->boolean('not_qualified')->default(false);           // غير مؤهل

            // الجزاءات
            $table->unsignedInteger('detention_count')->default(0); // حجز
            $table->unsignedInteger('imprisonment_count')->default(0); // حبس
            $table->unsignedInteger('court_cases_count')->default(0); // محكمة

            // التليفونات
            $table->string('phone_number')->nullable();             // رقم التلفون
            $table->string('relative_phone_number')->nullable();    // رقم تلفون اقرب الاقارب

            // البيانات الشخصية
            $table->string('national_id', 14)->nullable();          // الرقم القومى
            $table->date('birth_date')->nullable();                 // تاريخ الميلاد

            $table->string('marital_status')->nullable();           // الحاله الاجتماعية

            $table->unsignedTinyInteger('children_count')->default(0);          // عدد الاطفال
            $table->unsignedTinyInteger('male_children_count')->default(0);     // الذكور
            $table->unsignedTinyInteger('female_children_count')->default(0);   // الاناث

            // العنوان
            $table->string('village')->nullable();                          // القرية
            $table->string('center')->nullable();                           // المركز
            $table->unsignedBigInteger('governorate_id')->nullable();       // المحافظة

            // القياسات
            $table->decimal('weight', 5, 2)->nullable();                    // الوزن
            $table->decimal('height', 5, 2)->nullable();                    // الطول
            $table->decimal('weight_difference', 5, 2)->nullable();         // فرق الوزن

            // بيانات الخدمة
            $table->unsignedBigInteger('attachment_id')->nullable();        // مكان الالحاق
            $table->text('previous_units')->nullable();                     // الوحدات السابقة

            $table->string('travel')->nullable();                      // سفر

            // طبي
            $table->string('medical_status')->nullable();               // موقف طبى

            // ملاحظات ومراجعة
            $table->text('notes')->nullable();                          // ملاحظات
            $table->string('reviewer')->nullable();                     // المراجع

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
        Schema::dropIfExists('volunteers');
    }
};

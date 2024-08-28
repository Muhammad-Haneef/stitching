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
        Schema::create('hr_employees', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id');
            $table->foreignId('department_id');
            $table->foreignId('designation_id');
            $table->foreignId('country_id');
            $table->foreignId('city_id');
            $table->foreignId('gender_id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('father_name')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('cnic')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->string('ip')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('image')->nullable();

            
            $table->boolean('is_active')->nullable()->default(0);            
            $table->integer('sort_by')->nullable()->default(0);  
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_employees');
    }
};

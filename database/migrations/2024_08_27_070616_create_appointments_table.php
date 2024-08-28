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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('location_id');
            $table->foreignId('order_id');
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->foreignId('appointment_status_id');

            $table->string('appointment_date_time');

            $table->string('title', 300);
            $table->string('slug', 300);
            $table->string('description', 6000)->nullable();
            $table->string('icon')->nullable();

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
        Schema::dropIfExists('appointments');
    }
};

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
        Schema::create('measurement_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id');
            $table->foreignId('measurement_group_id');

            $table->string('title');
            $table->string('slug');
            $table->string('description', 10000)->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();

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
        Schema::dropIfExists('measurement_items');
    }
};

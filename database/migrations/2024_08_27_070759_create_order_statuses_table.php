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
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');

            $table->string('title', 300);
            $table->string('slug', 300);
            $table->string('color', 7)->nullable();
            $table->string('description', 6000)->nullable();

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
        Schema::dropIfExists('order_statuses');
    }
};

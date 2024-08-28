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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id');

            $table->integer('parent')->default(0);
            $table->string('title');
            $table->string('slug');
            $table->string('icon')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('banner')->nullable();
            $table->string('description', 6000)->nullable();
            $table->boolean('show_in_navigation')->nullable()->default(1);
            $table->boolean('show_banner')->nullable()->default(1);
            $table->boolean('show_description')->nullable()->default(1);

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            
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
        Schema::dropIfExists('categories');
    }
};

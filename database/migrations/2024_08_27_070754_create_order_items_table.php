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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->foreignId('order_id');
            $table->foreignId('category_id');
            $table->foreignId('category_root_id');
            $table->foreignId('product_id');
            $table->foreignId('style_preset_id')->nullable()->unsigned();
            $table->foreignId('style_customization_group_id')->nullable()->unsigned();
            $table->foreignId('user_measurement_id')->nullable()->unsigned();
            
            $table->string('title');
            $table->decimal('price', 2);
            $table->string('sku');
            $table->integer('qty');
            $table->string('img');
            $table->string('style');
            $table->decimal('items_extra_charges', 2);
            $table->decimal('addons_extra_charges', 2);
            $table->decimal('extra_charges', 2);
            $table->decimal('product_price', 2);
            $table->decimal('product_price_total', 2);

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
        Schema::dropIfExists('order_items');
    }
};

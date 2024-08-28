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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->foreignId('style_customization_group_id');
            $table->foreignId('measurement_group_id');
            $table->foreignId('category_id');
            $table->foreignId('brand_id');

            $table->string('sku');
            $table->string('category_ids');
            $table->string('category_titles');
            $table->string('title');
            $table->string('slug');
            $table->integer('price');
            $table->integer('sale_price');
            $table->integer('discount_percent');
            $table->integer('cost');
            $table->integer('minimum_purchase_limit')->nullable()->default(1);
            $table->integer('maximum_purchase_limit')->nullable()->default(10);
            $table->string('description', 6000);
            $table->string('refund_policy', 6000);
            $table->string('weight')->nullable();
            $table->string('short_url')->nullable();
            $table->string('qrcode')->nullable();
            $table->boolean('in_stock')->nullable()->default(1);
            
            $table->string('meta_title');
            $table->string('meta_description');
            
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
        Schema::dropIfExists('products');
    }
};

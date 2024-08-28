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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->foreignId('user_id');
            $table->foreignId('payment_method_id');
            $table->foreignId('confirmed_by')->references('id')->on('hr_employees')->constrained();
            $table->foreignId('shipper_id')->nullable();
            $table->foreignId('refer_a_friend_id')->nullable();
            $table->foreignId('payment_status_id');
            $table->foreignId('order_status_id');

            $table->string('tracking_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('instructions', 6000)->nullable();

            $table->integer('qty')->default(1);
            $table->decimal('total', 2)->default(0);
            $table->decimal('discount', 2)->nullable()->default(0);
            $table->decimal('advance', 2)->nullable()->default(0);
            $table->integer('coupon_id')->nullable()->default(0);
            $table->decimal('coupons_discount', 2)->nullable()->default(0);
            $table->decimal('redeem_amount', 2)->nullable()->default(0);
            $table->decimal('grand_total', 2)->default(0);
            $table->decimal('shipping_charges', 2)->nullable()->default(0);
            $table->decimal('net_total', 2)->default(0);
            $table->string('comments')->nullable();            

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
        Schema::dropIfExists('orders');
    }
};

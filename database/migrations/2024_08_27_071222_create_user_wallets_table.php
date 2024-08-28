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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id');
            $table->foreignId('user_id');
            $table->foreignId('order_id');
            $table->foreignId('refer_a_friend_id')->nullable()->default(0)->constrained();

            $table->decimal('debit', 2);
            $table->decimal('credit', 2);
            $table->string('description', 2000)->nullable();

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
        Schema::dropIfExists('user_wallets');
    }
};

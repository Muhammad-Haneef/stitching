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
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->foreignId('support_type_id')->nullable()->default(0);
            $table->foreignId('order_id')->nullable()->default(0);

            $table->string('ticket');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('subject');
            $table->string('message');
            $table->string('callback_time');
            
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
        Schema::dropIfExists('supports');
    }
};

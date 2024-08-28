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
        Schema::create('sms_api_integrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id');
            $table->foreignId('sms_gateway_id');

            $table->string('admin_contact');
            $table->string('api_url');
            $table->string('api_user_name');
            $table->string('api_key');
            $table->string('api_password');
            $table->string('mask');
            /*
            $table->string('on_order_sms_to_client');
            $table->string('on_order_sms_to_client_body');
            $table->string('on_order_sms_to_admin');
            $table->string('on_order_sms_to_admin_body');
            $table->string('on_complain_sms_to_client');
            $table->string('on_complain_sms_to_client_body');
            $table->string('on_complain_sms_to_admin');
            $table->string('on_complain_sms_to_admin_body');
            */
            $table->boolean('is_default_gateway');

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
        Schema::dropIfExists('sms_api_integrations');
    }
};

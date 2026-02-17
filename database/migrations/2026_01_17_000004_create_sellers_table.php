<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('seller_id');
            $table->string('seller_profile_img')->nullable();
            $table->string('full_name');
            $table->string('seller_email')->unique();
            $table->string('password');
            $table->string('store_name')->nullable();
            $table->text('seller_address');
            $table->string('phone_number');
            $table->enum('account_status', ['Activate', 'Deactivate'])->default('Activate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};

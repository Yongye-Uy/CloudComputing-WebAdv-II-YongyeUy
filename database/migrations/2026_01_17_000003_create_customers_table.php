<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_profile_images')->nullable();
            $table->string('full_name');
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone_number');
            $table->string('customers_email')->unique();
            $table->string('password');
            $table->enum('account_status', ['Activate', 'Deactivate'])->default('Activate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id');

            $table->foreignId('order_id')
                ->constrained('orders', 'order_id');

            $table->enum('payment_method', ['credit_card', 'paypal']);
            $table->enum('payment_status', ['completed', 'failed']);
            $table->timestamp('paid_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};

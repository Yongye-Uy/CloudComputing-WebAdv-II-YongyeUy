<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');

            $table->foreignId('customer_id')
                ->nullable()
                ->constrained('customers', 'customer_id');

            $table->decimal('total_items', 10, 2);
            $table->double('total_amount', 10, 2);
            $table->text('shipping_address');
            $table->integer('phone_number');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

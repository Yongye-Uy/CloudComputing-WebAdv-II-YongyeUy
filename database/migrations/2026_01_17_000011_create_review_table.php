<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id('review_id');

            $table->foreignId('customer_id')
                ->nullable()
                ->constrained('customers', 'customer_id');

            $table->foreignId('product_id')
                ->constrained('product', 'product_id');

            $table->foreignId('order_id')
                ->constrained('orders', 'order_id');

            $table->integer('rating')->default(1);
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};

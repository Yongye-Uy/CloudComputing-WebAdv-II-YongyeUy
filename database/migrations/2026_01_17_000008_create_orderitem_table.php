<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orderitem', function (Blueprint $table) {
            $table->id('order_item_id');

            $table->foreignId('order_id')
                ->constrained('orders', 'order_id');

            $table->foreignId('product_id')
                ->constrained('product', 'product_id');

            $table->integer('quantity');
            $table->decimal('price_at_purchase', 10, 2);
            $table->enum('status', ['pending','shipped','delivered','cancelled','received'])
                  ->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orderitem');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartitem', function (Blueprint $table) {
            $table->id('cart_item_id');

            $table->foreignId('customer_id')
                ->constrained('customers', 'customer_id');

            $table->foreignId('product_id')
                ->constrained('product', 'product_id');

            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartitem');
    }
};

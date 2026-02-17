<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->text('product_description');
            $table->double('product_price', 10, 2);
            $table->integer('stock_quantity');

            $table->foreignId('seller_id')
                ->constrained('sellers', 'seller_id');

            $table->foreignId('category_id')
                ->constrained('category', 'category_id');

            $table->enum('product_status', ['Activate', 'Deactivate'])->default('Activate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

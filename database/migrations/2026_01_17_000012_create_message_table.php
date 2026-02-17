<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id('message_id');
            $table->enum('sender_type', ['customer','seller','admin']);

            $table->foreignId('customer_id')
                ->nullable()
                ->constrained('customers', 'customer_id');

            $table->foreignId('seller_id')
                ->nullable()
                ->constrained('sellers', 'seller_id');

            $table->foreignId('admin_id')
                ->nullable()
                ->constrained('admin', 'admin_id');

            $table->text('messages');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};

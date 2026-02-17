<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cartitem')->insert([
            [
                'cart_item_id' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cart_item_id' => 2,
                'customer_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

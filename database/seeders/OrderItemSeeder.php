<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orderitem')->insert([
            [
                'order_item_id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price_at_purchase' => 15.00,
                'status' => 'received',
                'created_at' => '2025-07-09 06:43:30',
                'updated_at' => '2025-07-09 06:43:30',
            ],
        ]);
    }
}

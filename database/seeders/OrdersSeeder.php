<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'order_id' => 1,
                'customer_id' => 1,
                'total_items' => 1,
                'total_amount' => 15.00,
                'shipping_address' => 'Phnom Penh, PP, Phnom Penh, 12000',
                'phone_number' => 124578369,
                'created_at' => '2025-07-09 06:43:30',
                'updated_at' => '2025-07-09 06:43:30',
            ],
        ]);
    }
}


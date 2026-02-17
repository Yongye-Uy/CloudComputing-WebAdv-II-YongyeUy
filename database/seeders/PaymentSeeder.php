<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('payment')->insert([
            [
                'payment_id' => 1,
                'order_id' => 1,
                'payment_method' => 'paypal',
                'payment_status' => 'completed',
                'paid_at' => '2025-07-09 13:43:30',
                'created_at' => '2025-07-09 06:43:30',
                'updated_at' => '2025-07-09 06:43:30',
            ],
        ]);
    }
}

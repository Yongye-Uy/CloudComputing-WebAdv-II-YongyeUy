<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('review')->insert([
            [
                'review_id' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'order_id' => 1,
                'rating' => 3,
                'comment' => 'i received the products',
                'created_at' => '2025-07-09 06:46:55',
            ],
        ]);
    }
}

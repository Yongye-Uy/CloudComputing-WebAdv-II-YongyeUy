<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('message')->insert([
            [
                'message_id' => 1,
                'sender_type' => 'customer',
                'customer_id' => 1,
                'seller_id' => 1,
                'admin_id' => null,
                'messages' => 'hi i just order your products',
                'is_read' => 1,
                'created_at' => '2025-07-09 06:44:03',
                'updated_at' => '2025-07-09 06:44:03',
            ],
            [
                'message_id' => 2,
                'sender_type' => 'seller',
                'customer_id' => 1,
                'seller_id' => 1,
                'admin_id' => null,
                'messages' => 'thanks you',
                'is_read' => 0,
                'created_at' => '2025-07-09 06:47:31',
                'updated_at' => '2025-07-09 06:47:31',
            ],
            [
                'message_id' => 5,
                'sender_type' => 'admin',
                'customer_id' => null,
                'seller_id' => 1,
                'admin_id' => 1,
                'messages' => "Your product 'Rare wood cup' has been deactivated. Please contact admin for more information.",
                'is_read' => 1,
                'created_at' => '2025-07-09 07:25:01',
                'updated_at' => '2025-07-09 07:25:01',
            ],
        ]);
    }
}

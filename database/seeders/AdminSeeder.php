<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'admin_id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$12$WaR7CLNVMTx.M5FwdZBelOqMEafa9EumYdRWhb0hnoNZzWH/7tfJy',
                'created_at' => '2025-07-08 22:32:14',
                'updated_at' => '2025-07-08 22:32:14',
            ],
        ]);
    }
}

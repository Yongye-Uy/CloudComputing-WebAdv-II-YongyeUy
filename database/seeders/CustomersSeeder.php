<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customer_id' => 1,
                'customer_profile_images' => '/storage/Assets/profile/Vkqz7IREXzeOrFtvuLxteOaBKo7R93TwxC2rDTJ9.png',
                'full_name' => 'customer1',
                'age' => 20,
                'gender' => 'male',
                'phone_number' => '010300300',
                'customers_email' => 'customer1@gmail.com',
                'password' => '$2y$12$jLEnkw6qc3LjKYXFG.0hvuhNv2fbICc3MksGkLDl2ov.D0aQtBfuy',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 13:35:05',
                'updated_at' => '2025-07-08 14:14:19',
            ],
            [
                'customer_id' => 2,
                'customer_profile_images' => '/storage/Assets/profile/zZx7p6kPSkmwRRDohL9Lzl8hShSOHN3GCJCNaveR.jpg',
                'full_name' => 'customer2',
                'age' => 20,
                'gender' => 'female',
                'phone_number' => '020306503',
                'customers_email' => 'customer2@gmail.com',
                'password' => '$2y$12$nbrSz4lPBXyfVF4EHZxolu9/xkFQPn3pbCH1Jv6OpgvwoZNVERBdy',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 15:20:09',
                'updated_at' => '2025-07-08 15:20:09',
            ],
            [
                'customer_id' => 3,
                'customer_profile_images' => '/storage/Assets/profile/UMKXk0BzSzLRYCrYDR1uqcmNopIdmF6n6PdqnB2B.png',
                'full_name' => 'customer3',
                'age' => 24,
                'gender' => 'male',
                'phone_number' => '063203468',
                'customers_email' => 'customer3@gmail.com',
                'password' => '$2y$12$vJ8rk9PgFrr/E4NeF/JStO4NjhQbA7y6nq1G1.XJcnrzVjBzKPIoG',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 15:20:51',
                'updated_at' => '2025-07-08 15:20:51',
            ],
            [
                'customer_id' => 4,
                'customer_profile_images' => '/storage/Assets/profile/G5pX5zhIloG53q3uWJX0OPNj0YarHaCcQjJLaEHA.jpg',
                'full_name' => 'customer4',
                'age' => 30,
                'gender' => 'male',
                'phone_number' => '066553388',
                'customers_email' => 'customer4@gmail.com',
                'password' => '$2y$12$3X3dz3nx0nFiQifGxvgC4u0GmrUMNi.wsmLjSW1mrNvivDW5.oLeO',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 15:26:58',
                'updated_at' => '2025-07-08 15:26:58',
            ],
            [
                'customer_id' => 5,
                'customer_profile_images' => '/storage/Assets/profile/gBtfKiEmFSGjleg2OIqE9ftmpYahhnHFS42NxvDb.jpg',
                'full_name' => 'customer5',
                'age' => 18,
                'gender' => 'male',
                'phone_number' => '099335566',
                'customers_email' => 'customer5@gmail.com',
                'password' => '$2y$12$lmky01CXFMXCB88sr8QEROn9lhFGpPbrp26maRCUamenyn1y1RPpC',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 15:28:42',
                'updated_at' => '2025-07-08 15:28:42',
            ],
            [
                'customer_id' => 6,
                'customer_profile_images' => null,
                'full_name' => 'customer20',
                'age' => 20,
                'gender' => 'male',
                'phone_number' => '010300300',
                'customers_email' => 'customer20@gmail.com',
                'password' => '$2y$12$3nZNo.aRBd2oD.NJAn9fhuSGjjw7nOj6h5hGejwqpHn9y6anosUR6',
                'account_status' => 'Activate',
                'created_at' => '2025-07-09 07:31:36',
                'updated_at' => '2025-07-09 07:31:36',
            ],
        ]);
    }
}

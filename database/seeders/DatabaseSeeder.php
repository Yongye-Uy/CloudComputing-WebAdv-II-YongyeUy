<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            CustomersSeeder::class,
            SellersSeeder::class,
            ProductSeeder::class,
            ProductImagesSeeder::class,
            OrdersSeeder::class,
            OrderItemSeeder::class,
            PaymentSeeder::class,
            CartItemSeeder::class,
            ReviewSeeder::class,
            MessageSeeder::class,
        ]);
    }
}

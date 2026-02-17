<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category')->insert([
            ['category_id' => 1, 'category_name' => 'Jewelry'],
            ['category_id' => 3, 'category_name' => 'clothes'],
            ['category_id' => 4, 'category_name' => 'kitchen'],
            ['category_id' => 5, 'category_name' => 'Hat'],
            ['category_id' => 6, 'category_name' => 'Cup'],
            ['category_id' => 7, 'category_name' => 'Pot'],
            ['category_id' => 8, 'category_name' => 'bags'],
            ['category_id' => 9, 'category_name' => 'Electronic'],
        ]);
    }
}

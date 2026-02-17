<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_images')->insert([
            [
                'img_id' => 1,
                'img_url' => '/storage/Assets/images/6p7UunstKTkmZTmmqI5npAlV7PJP02EMnh7zJfRH.jpg',
                'product_id' => 1,
                'updated_at' => '2025-07-08 14:27:43',
                'created_at' => '2025-07-08 14:27:43',
            ],
            [
                'img_id' => 3,
                'img_url' => '/storage/Assets/images/KLs63qQ0Tzs2XJqgHKXJlRCq6EhKJxAKLGDXMMj9.jpg',
                'product_id' => 3,
                'updated_at' => '2025-07-08 14:32:47',
                'created_at' => '2025-07-08 14:32:47',
            ],
            [
                'img_id' => 4,
                'img_url' => '/storage/Assets/images/XF7ds8ZoH2Pn8NsEPcUq92SzJfEGiTLeWVA2aeGS.jpg',
                'product_id' => 4,
                'updated_at' => '2025-07-08 14:37:41',
                'created_at' => '2025-07-08 14:37:41',
            ],
            [
                'img_id' => 5,
                'img_url' => '/storage/Assets/images/XFBOiTYbwxWkkuuvhz6uaYPcHQEnVkgnwQDDv2D0.png',
                'product_id' => 5,
                'updated_at' => '2025-07-08 14:39:15',
                'created_at' => '2025-07-08 14:39:15',
            ],
            [
                'img_id' => 6,
                'img_url' => '/storage/Assets/images/1ZLuhlknIYHzXWCvwZ5D7DFA4hC6RlohSZMFftT0.jpg',
                'product_id' => 6,
                'updated_at' => '2025-07-08 14:43:22',
                'created_at' => '2025-07-08 14:43:22',
            ],
            [
                'img_id' => 7,
                'img_url' => '/storage/Assets/images/HzUHNlesv2a7djLCTel6WqEgXz4oH9DMus0SWyl4.png',
                'product_id' => 7,
                'updated_at' => '2025-07-08 14:47:25',
                'created_at' => '2025-07-08 14:47:25',
            ],
            [
                'img_id' => 8,
                'img_url' => '/storage/Assets/images/BQLlbwJmlyas1oUaF2cOzm0ZcthoDr83tPF5Sgub.png',
                'product_id' => 8,
                'updated_at' => '2025-07-08 14:49:10',
                'created_at' => '2025-07-08 14:49:10',
            ],
            [
                'img_id' => 9,
                'img_url' => '/storage/Assets/images/5x3XPzZOKv7gA8MJxehy41k9Xg6L4dnkd4t27011.jpg',
                'product_id' => 9,
                'updated_at' => '2025-07-08 14:51:35',
                'created_at' => '2025-07-08 14:51:35',
            ],
            [
                'img_id' => 10,
                'img_url' => '/storage/Assets/images/p12pLApmnnPwsNyKrowwEz1qpEOFDC2AHkYx7IHf.jpg',
                'product_id' => 10,
                'updated_at' => '2025-07-08 14:55:25',
                'created_at' => '2025-07-08 14:55:25',
            ],
            [
                'img_id' => 11,
                'img_url' => '/storage/Assets/images/28TAYv0lKZRKUuZanC140tQHlWrg433tIUQ34IO9.png',
                'product_id' => 11,
                'updated_at' => '2025-07-08 14:59:36',
                'created_at' => '2025-07-08 14:59:36',
            ],
            [
                'img_id' => 12,
                'img_url' => '/storage/Assets/images/QcTGj3K1vNpewrexGWF4sj2fvpquQgiITquYwFeo.png',
                'product_id' => 12,
                'updated_at' => '2025-07-08 15:05:37',
                'created_at' => '2025-07-08 15:05:37',
            ],
            [
                'img_id' => 13,
                'img_url' => '/storage/Assets/images/dkz6ovKRQLc9DgNzvmEzmb7HO2bf59apF8BGWcS0.jpg',
                'product_id' => 13,
                'updated_at' => '2025-07-08 15:09:20',
                'created_at' => '2025-07-08 15:09:20',
            ],
            [
                'img_id' => 14,
                'img_url' => '/storage/Assets/images/lBBUJssG2KodCVPVXODKFrjAQ7eRvfs1Tu7MZ0tq.jpg',
                'product_id' => 14,
                'updated_at' => '2025-07-08 15:11:50',
                'created_at' => '2025-07-08 15:11:50',
            ],
            [
                'img_id' => 15,
                'img_url' => '/storage/Assets/images/ezVi9UU2nMXGCwtWD2YEiFGrQnZUjPsllTHM1ROA.jpg',
                'product_id' => 15,
                'updated_at' => '2025-07-09 04:12:07',
                'created_at' => '2025-07-09 04:12:07',
            ],
        ]);
    }
}

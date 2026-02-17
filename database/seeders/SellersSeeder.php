<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sellers')->insert([
            [
                'seller_id' => 1,
                'seller_profile_img' => '/storage/Assets/profile/cpulSaRNUTGSEYTRaS62zttQwfenZ52Rsa6XofZC.jpg',
                'full_name' => 'seller1',
                'seller_email' => 'seller1@gmail.com',
                'password' => '$2y$12$EKpW.BlSXvJBsufYOd9MGeV3pTN0ydFHVMMs8XEYvFXJQGR95yhbC',
                'store_name' => 'store1',
                'seller_address' => 'Cambodia, PP, PP, 120000',
                'phone_number' => '011223344',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 14:16:13',
                'updated_at' => '2025-07-13 13:16:02',
            ],
            [
                'seller_id' => 2,
                'seller_profile_img' => '/storage/Assets/profile/wCRv465fnfA0cgJjksopf6UacwFNOzZ3GITcTkbs.jpg',
                'full_name' => 'seller2',
                'seller_email' => 'seller2@gmail.com',
                'password' => '$2y$12$Z0PoShWHK0NGxLFl2rcJQu9p1wIqkR9iCD9gT6BLyhNW89FxOT2uS',
                'store_name' => 'store2',
                'seller_address' => 'Cambodia, PP, PP, 120000',
                'phone_number' => '0124578369',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 14:33:53',
                'updated_at' => '2025-07-08 14:33:53',
            ],
            [
                'seller_id' => 3,
                'seller_profile_img' => '/storage/Assets/profile/ArAwsHpesh32Z3DDrbkftamArF4dKO2VBG01SEaA.jpg',
                'full_name' => 'seller3',
                'seller_email' => 'seller3@gmail.com',
                'password' => '$2y$12$iRDWJKJ5eVEZRvYoubNIZuys2Lg9KICAamNA8nD3NYdKa0Cp.ghlS',
                'store_name' => 'store3',
                'seller_address' => 'Cambodia, PP, PP, 120000',
                'phone_number' => '0221133474',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 14:44:43',
                'updated_at' => '2025-07-08 14:44:43',
            ],
            [
                'seller_id' => 4,
                'seller_profile_img' => '/storage/Assets/profile/hrDlFYBdWN2ZcHsblupKMNQFAjwFel6bK8NfAAD3.jpg',
                'full_name' => 'seller4',
                'seller_email' => 'seller4@gmail.com',
                'password' => '$2y$12$i9QL.NDrvD2c0IRvoRXV1ObGuIunN.SMngvaww/TBYuXAU4E8Bcda',
                'store_name' => 'store4',
                'seller_address' => 'Cambodia, PP, PP, 120000',
                'phone_number' => '033445566',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 14:53:09',
                'updated_at' => '2025-07-08 14:53:09',
            ],
            [
                'seller_id' => 5,
                'seller_profile_img' => '/storage/Assets/profile/u7d5hIFcStoBWlowiOlgP7V1XbYfEnYFoH243iK1.jpg',
                'full_name' => 'seller5',
                'seller_email' => 'seller5@gmail.com',
                'password' => '$2y$12$zY.nmRB6aPKQW0x8.G6tzuJq937I.IH72m7cW5EYUW1M8KonJmWHi',
                'store_name' => 'store5',
                'seller_address' => 'Cambodia, PP, PP, 120000',
                'phone_number' => '099885533',
                'account_status' => 'Activate',
                'created_at' => '2025-07-08 15:07:13',
                'updated_at' => '2025-07-08 15:07:13',
            ],
            [
                'seller_id' => 6,
                'seller_profile_img' => '/storage/Assets/profile/DFZZOzAh2QLbUiLqZTm37jtR26v9lVrnlqm5kJKR.jpg',
                'full_name' => 'seller10',
                'seller_email' => 'seller10@gmail.com',
                'password' => '$2y$12$YL2xY0fb/o52ZT7ab/s2jOfuNDZ9gZZ2yg8ioMCR0IMvDWgxhi826',
                'store_name' => 'store 10',
                'seller_address' => 'Phnom Penh, PP, Phnom Penh, 12000',
                'phone_number' => '009993311',
                'account_status' => 'Activate',
                'created_at' => '2025-07-09 07:14:51',
                'updated_at' => '2025-07-09 07:14:51',
            ],
            [
                'seller_id' => 7,
                'seller_profile_img' => null,
                'full_name' => 'Hunlean Store v2',
                'seller_email' => 'seller20@gmail.com',
                'password' => '$2y$12$Z8Ci0KhgYNsA8GlSPhGFHOlfo0LFv8JbhUVSgJqOlUZ8IQQSwKie2',
                'store_name' => 'Paragon Store',
                'seller_address' => '456 Market St',
                'phone_number' => '0976653432',
                'account_status' => 'Activate',
                'created_at' => '2025-07-09 07:36:23',
                'updated_at' => '2025-07-13 13:15:52',
            ],
            [
                'seller_id' => 8,
                'seller_profile_img' => '/storage/Assets/profile/1Mi2kvAkAnlEUkxhfUJTCl20w77zOAw65iJAQw7T.jpg',
                'full_name' => 'seller21',
                'seller_email' => 'seller21@gmail.com',
                'password' => '$2y$12$ldH/LnpFUxBmmjxRHwXzyeY.J3P8zcbQ7f5hTOPkJ2W7TS86hZ4gi',
                'store_name' => 'store 21',
                'seller_address' => 'Phnom Penh, PP, Phnom Penh, 12000',
                'phone_number' => '0124578369',
                'account_status' => 'Activate',
                'created_at' => '2025-07-09 07:45:51',
                'updated_at' => '2025-07-09 07:45:51',
            ],
        ]);
    }
}

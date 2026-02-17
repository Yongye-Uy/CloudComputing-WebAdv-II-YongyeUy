<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product')->insert([
            [ 'product_id'=>1,'product_name'=>'Rare wood cup','product_description'=>'Make from rare woods.','product_price'=>15,'stock_quantity'=>99,'seller_id'=>1,'category_id'=>6,'product_status'=>'Deactivate','created_at'=>'2025-07-08 14:27:43','updated_at'=>'2025-07-13 20:16:28'],
            [ 'product_id'=>3,'product_name'=>'coconut shell cup','product_description'=>'Good quality coconut come from coconut island.','product_price'=>5,'stock_quantity'=>9,'seller_id'=>1,'category_id'=>6,'product_status'=>'Deactivate','created_at'=>'2025-07-08 14:32:47','updated_at'=>'2025-07-13 20:16:24'],
            [ 'product_id'=>4,'product_name'=>'Set of paper cup and pots.','product_description'=>'Have a good design, really good for decorations.','product_price'=>3,'stock_quantity'=>50,'seller_id'=>2,'category_id'=>6,'product_status'=>'Activate','created_at'=>'2025-07-08 14:37:41','updated_at'=>'2025-07-08 14:37:41'],
            [ 'product_id'=>5,'product_name'=>'T-shirt','product_description'=>'Make form cotton.','product_price'=>12,'stock_quantity'=>50,'seller_id'=>2,'category_id'=>3,'product_status'=>'Activate','created_at'=>'2025-07-08 14:39:15','updated_at'=>'2025-07-08 14:40:19'],
            [ 'product_id'=>6,'product_name'=>'Hand Wove blue','product_description'=>'Male t-shirt make from cotton.','product_price'=>23,'stock_quantity'=>5,'seller_id'=>2,'category_id'=>3,'product_status'=>'Activate','created_at'=>'2025-07-08 14:43:22','updated_at'=>'2025-07-08 14:43:22'],
            [ 'product_id'=>7,'product_name'=>'Green earring','product_description'=>'Make from emerald and gold.','product_price'=>100,'stock_quantity'=>50,'seller_id'=>3,'category_id'=>1,'product_status'=>'Activate','created_at'=>'2025-07-08 14:47:25','updated_at'=>'2025-07-08 14:47:25'],
            [ 'product_id'=>8,'product_name'=>'Earring','product_description'=>'Green earring make from wood with painting green.','product_price'=>15,'stock_quantity'=>3,'seller_id'=>3,'category_id'=>1,'product_status'=>'Activate','created_at'=>'2025-07-08 14:49:10','updated_at'=>'2025-07-08 14:49:10'],
            [ 'product_id'=>9,'product_name'=>'Bamboo cups','product_description'=>'Bamboo cups make from top grade bamboo and have a simple design, good for old people.','product_price'=>6,'stock_quantity'=>30,'seller_id'=>3,'category_id'=>6,'product_status'=>'Activate','created_at'=>'2025-07-08 14:51:35','updated_at'=>'2025-07-08 14:51:35'],
            [ 'product_id'=>10,'product_name'=>'Set Cow leather bags','product_description'=>'Make from cow leather. Come with a set, no smell.','product_price'=>90,'stock_quantity'=>2,'seller_id'=>4,'category_id'=>8,'product_status'=>'Activate','created_at'=>'2025-07-08 14:55:25','updated_at'=>'2025-07-08 14:55:25'],
            [ 'product_id'=>11,'product_name'=>'Spatula','product_description'=>'Make form palm tree.','product_price'=>3,'stock_quantity'=>20,'seller_id'=>4,'category_id'=>4,'product_status'=>'Activate','created_at'=>'2025-07-08 14:59:36','updated_at'=>'2025-07-08 14:59:36'],
            [ 'product_id'=>12,'product_name'=>'Fork','product_description'=>'Long two head forks, make from coconut tree.','product_price'=>3,'stock_quantity'=>26,'seller_id'=>4,'category_id'=>4,'product_status'=>'Activate','created_at'=>'2025-07-08 15:05:37','updated_at'=>'2025-07-08 15:05:37'],
            [ 'product_id'=>13,'product_name'=>'Straw hat','product_description'=>'A straw hat that similar to luffy hat.','product_price'=>5,'stock_quantity'=>25,'seller_id'=>5,'category_id'=>5,'product_status'=>'Activate','created_at'=>'2025-07-08 15:09:20','updated_at'=>'2025-07-08 15:09:20'],
            [ 'product_id'=>14,'product_name'=>'Normal straw hat','product_description'=>'A normal straw hat make from palm tree leaf.','product_price'=>3,'stock_quantity'=>20,'seller_id'=>5,'category_id'=>5,'product_status'=>'Activate','created_at'=>'2025-07-08 15:11:50','updated_at'=>'2025-07-08 15:11:50'],
            [ 'product_id'=>15,'product_name'=>'Cowboy hat','product_description'=>'Make from good quality leather.','product_price'=>15,'stock_quantity'=>20,'seller_id'=>5,'category_id'=>5,'product_status'=>'Activate','created_at'=>'2025-07-09 04:12:05','updated_at'=>'2025-07-09 04:12:05'],
        ]);
    }
}

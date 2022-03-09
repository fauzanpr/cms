<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert(
            [
                'product_name' => 'basket ball',
                'product_price' => 50,
                'product_image' => "basketball.png"
            ]
        );

        DB::table('products')->insert(
            [
                'product_name' => 'T-Shirt',
                'product_price' => 50,
                'product_image' => "t-shirt.png"
            ]
        );

        DB::table('products')->insert(
            [
                'product_name' => 'Game',
                'product_price' => 50,
                'product_image' => "game.png"
            ]
        );

        DB::table('products')->insert(
            [
                'product_name' => 'basket ball',
                'product_price' => 50,
                'product_image' => "basketball.png"
            ]
        );

        DB::table('products')->insert(
            [
                'product_name' => 'T-Shirt',
                'product_price' => 50,
                'product_image' => "t-shirt.png"
            ]
        );

        DB::table('products')->insert(
            [
                'product_name' => 'Game',
                'product_price' => 50,
                'product_image' => "game.png"
            ]
        );
    }
}

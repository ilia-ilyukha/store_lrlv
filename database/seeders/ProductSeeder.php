<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('product')->insert([
                'name' => "Product " . $i,
                'quantity' => rand(10, 100),
                'image' => Str::random(10) . '.jpg',
                'status' => '1',
                'price' => rand(10, 100)
            ]);

            DB::table('product_description')->insert([
                'product_id' => $i,
                'description' => " Product " .$i. " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                'meta_title' => "Product " . $i . " - store-laravel.com ",
            ]);
        }
    }
}


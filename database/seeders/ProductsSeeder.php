<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            [
            'product_title'=>'watch1',
            'product_image'=>'p7.png',
            'product_description'=>'text',
            'product_cost'=>500,
            'category' =>2
            ],
            [
                'product_title'=>'ring1',
                'product_image'=>'p8.png',
                'product_description'=>'text',
                'product_cost'=>700,
                'category' =>1
            ],
            [
                'product_title'=>'TeddyBear1',
                'product_image'=>'p5.png',
                'product_description'=>'text',
                'product_cost'=>300,
                'category' =>3
            ],
            [
                'product_title'=>'Flower1',
                'product_image'=>'p6.png',
                'product_description'=>'text',
                'product_cost'=>100,
                'category' =>4
            ],
        ]);
    }
}

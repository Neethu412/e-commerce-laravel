<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
        [   
            'category_name'=>'watches'
        
        ],
        [
            'category_name' =>'rings'
        ],
        [
            'category_name'=>'flowers'
        ],
        [
            'category_name'=>'Softtoys'
        ]
    ]);
    }
}

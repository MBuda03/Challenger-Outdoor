<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name'=>'Category 1',
                'description'=>'This is a test cat'
            ],
            [
                'name'=>'Category 4',
                'description'=>'This is a test cat'
            ],
            [
                'name'=>'Category 3',
                'description'=>'This is a test cat'
            ],
            [
                'name'=>'Category 2',
                'description'=>'This is a test cat'
            ]
        ]);
    }
}

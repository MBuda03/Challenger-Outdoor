<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Product 1',
                'price'=>100.13,
                'description'=>'This is a test product',
                'category'=>'Electronics',
                'rating'=>5,
                'gallery'=>'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80'
            ],
            [
                'name'=>'Product 2',
                'price'=>200.32,
                'description'=>'This is a test product',
                'category'=>'Electronics',
                'rating'=>4,
                'gallery'=>'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80'
            ],
            [
                'name'=>'Product 3',
                'price'=>300.44,
                'description'=>'This is a test product',
                'category'=>'Electronics',
                'rating'=>3,
                'gallery'=>'https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80'
            ]
        ]);
    }
}

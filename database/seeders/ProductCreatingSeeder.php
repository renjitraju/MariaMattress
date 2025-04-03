<?php

namespace Database\Seeders;


use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductCreatingSeeder extends Seeder
{
 
    public function run(): void
    {

   
        $data = [
            [
                'name' => 'SINGLE',
                'size' => '90 x 190+25 cm',
                'price' => 54.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DOUBLE',
                'size' => '140 x 190+25 cm',
                'price' => 60.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'KING',
                'size' => '150 x 200 x 25 cm',
                'price' => 69.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        
        Product::insert($data);
    }
}

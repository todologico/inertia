<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

// seeder command: php artisan db:seed --class=Prod1TableSeeder

class Prod1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prod1')->insert([
            [
                'prod1_product' => 'Product 1',
                'prod1_code' => 'P001',
                'prod1_price1' => 10.50,
                'prod1_title1' => 'Title 1',
                'prod1_title2' => 'Title 2',
                'prod1_text1' => 'Text 1',
                'prod1_image1' => 'image1.jpg',
                'prod1_image2' => 'image2.jpg',
                'prod1_order' => 1,
                'prod1_enable' => 1,
                'prod1_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prod1_product' => 'Product 2',
                'prod1_code' => 'P002',
                'prod1_price1' => 20.75,
                'prod1_title1' => 'Title 1 for Product 2',
                'prod1_title2' => 'Title 2 for Product 2',
                'prod1_text1' => 'Text 1 for Product 2',
                'prod1_image1' => 'image1_2.jpg',
                'prod1_image2' => 'image2_2.jpg',
                'prod1_order' => 2,
                'prod1_enable' => 1,
                'prod1_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'prod1_product' => 'Product 3',
                'prod1_code' => 'P003',
                'prod1_price1' => 15.00,
                'prod1_title1' => 'Title 1 for Product 3',
                'prod1_title2' => 'Title 2 for Product 3',
                'prod1_text1' => 'Text 1 for Product 3',
                'prod1_image1' => 'image1_3.jpg',
                'prod1_image2' => 'image2_3.jpg',
                'prod1_order' => 3,
                'prod1_enable' => 1,
                'prod1_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prod1_product' => 'Product 4',
                'prod1_code' => 'P004',
                'prod1_price1' => 30.00,
                'prod1_title1' => 'Title 1 for Product 4',
                'prod1_title2' => 'Title 2 for Product 4',
                'prod1_text1' => 'Text 1 for Product 4',
                'prod1_image1' => 'image1_4.jpg',
                'prod1_image2' => 'image2_4.jpg',
                'prod1_order' => 4,
                'prod1_enable' => 1,
                'prod1_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prod1_product' => 'Product 5',
                'prod1_code' => 'P005',
                'prod1_price1' => 25.50,
                'prod1_title1' => 'Title 1 for Product 5',
                'prod1_title2' => 'Title 2 for Product 5',
                'prod1_text1' => 'Text 1 for Product 5',
                'prod1_image1' => 'image1_5.jpg',
                'prod1_image2' => 'image2_5.jpg',
                'prod1_order' => 5,
                'prod1_enable' => 1,
                'prod1_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],

                // Agrega más productos según sea necesario
        ]);
    }
}

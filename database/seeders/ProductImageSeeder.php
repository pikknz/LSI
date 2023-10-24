<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::firstOrCreate(
            ['id' => 1],
            [
                'product_id' => 1,
                'image_name' => 'example-product-1.jpg',
            ]
        );

        ProductImage::firstOrCreate(
            ['id' => 2],
            [
                'product_id' => 1,
                'image_name' => 'example-product-1-black.jpg',
            ]
        );

        ProductImage::firstOrCreate(
            ['id' => 3],
            [
                'product_id' => 2,
                'image_name' => 'example-product-2.jpg',
            ]
        );


        ProductImage::firstOrCreate(
            ['id' => 4],
            [
                'product_id' => 3,
                'image_name' => 'example-product-3.jpg',
            ]
        );

        ProductImage::firstOrCreate(
            ['id' => 5],
            [
                'product_id' => 4,
                'image_name' => 'example-product-4.jpg',
            ]
        );
    }
}

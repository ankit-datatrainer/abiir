<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Apple & Cinnamon Home Fragrance Gift Set',
                'description' => 'A wonderful gift set with the cozy aroma of apple and cinnamon.',
                'price' => 899.00,
                'original_price' => 1499.00,
                'image_url' => 'https://abiir.in/cdn/shop/files/1_63728cdf-382c-4577-9b18-741795e29053.png?v=1757659068&width=533',
                'product_url' => '#'
            ],
            [
                'title' => 'Arch Pillar Candle – Modern Decorative Soy Wax Candle for Home Décor',
                'description' => 'Elegant and modern arch pillar candle made with natural soy wax.',
                'price' => 499.00,
                'original_price' => 1999.00,
                'image_url' => 'https://abiir.in/cdn/shop/files/DSC07773.jpg?v=1758443130&width=533',
                'product_url' => '#'
            ],
            [
                'title' => 'Big Yellow Buddha Ceramic Electric Aroma Diffuser with Oils',
                'description' => 'Beautiful ceramic buddha aroma diffuser, perfect for relaxation.',
                'price' => 599.00,
                'original_price' => 999.00,
                'image_url' => 'https://abiir.in/cdn/shop/files/16.jpg?v=1756477620&width=533',
                'product_url' => '#'
            ],
            [
                'title' => 'Black Ceramic Aroma Oil Burner & Tealight Holder',
                'description' => 'Classic black ceramic oil burner for a soothing ambiance.',
                'price' => 419.00,
                'original_price' => 699.00,
                'image_url' => 'https://abiir.in/cdn/shop/files/12.jpg?v=1756304001&width=533',
                'product_url' => '#'
            ]
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}

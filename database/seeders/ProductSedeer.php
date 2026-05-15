<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
             'img' => 'nike.png',
            'brand' => 'nike air',
            'title' => 'nike air max',
            'rating' => '4.5',
            'reviews' => '40',
            'sellPrice' => '220',
            'orders' => '60+',
            'mrp' => '15',
            'discount' => '30',
            'category' => 'shoes'
        ]);
        Product::create([
             'img' => 'adidas.png',
            'brand' => 'adidas rubbond',
            'title' => 'adidas rub',
            'rating' => '6.5',
            'reviews' => '80',
            'sellPrice' => '120',
            'orders' => '20+',
            'mrp' => '25',
            'discount' => '50',
            'category' => 'shoes'
        ]);
    }
}

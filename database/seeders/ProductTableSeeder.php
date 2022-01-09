<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::truncate();
        Product::create([
            'name' => 'Black Boot in leather and textile Steelground',
            'price' => '306.50', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            'detail' => 'Pair of black Boot shoes in leather and textile with flat sole. Steelground Boot model for unisex , custom made. Steelground manufactures shoes on order with an average delivery time of 45 days',
        ]);
        Product::create([
            'name' => 'Black Boot in leather and textile Steelground',
            'price' => '322.50', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            'detail' => 'Pair of black Boot shoes in leather and textile with flat sole. Steelground Boot model for unisex , custom made. Steelground manufactures shoes on order with an average delivery time of 45 days',
        ]);
        Product::create([
            'name' => 'Black Boot in leather and textile Steelground',
            'price' => '206.50', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            'detail' => 'Pair of black Boot shoes in leather and textile with flat sole. Steelground Boot model for unisex , custom made. Steelground manufactures shoes on order with an average delivery time of 45 days',
        ]);
        Product::create([
            'name' => 'Black Boot in leather and textile Steelground',
            'price' => '350', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            'detail' => 'Pair of black Boot shoes in leather and textile with flat sole. Steelground Boot model for unisex , custom made. Steelground manufactures shoes on order with an average delivery time of 45 days',
        ]);
    }
}

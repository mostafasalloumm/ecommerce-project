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
       'imgurl' => "https://www.steelground.net/1733-large_default/st-g11-z329z432.jpg",
       'category' => "women"
        
    ]);
        Product::create([
            'name' => 'black and white with checkerwork Creepers in box leather with single sole Steelground',
            'price' => '112.63', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Creepers black and white with checkerwork shoes for unisex with single sole of 3 cm . Creepers model in box leather',
            'imgurl' => "https://www.steelground.net/2881-large_default/sc-410-z178z269.jpg",
            'category' => "women"

        ]);
        Product::create([
            'name' => 'black patent Pointed creeper shoe in leather with single sole Steelground',
            'price' => '118.15', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            'detail' => 'Pointed creeper shoe black patent shoes for unisex with single sole of 2 cm . Pointed creeper shoe model in leather',
            'imgurl' => "https://www.steelground.net/2884-large_default/sc-200-z175.jpg",
            'category' => "women"

        ]);
        Product::create([
            'name' => 'White and black boots in grained leather Steelground',
            'price' => '136.00', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Pair of white and black boots shoes in grained leather with flat sole. Steelground boots model for unisex.',
            'imgurl' => "https://www.steelground.net/2880-large_default/sb-011-z92z108.jpg",
            'category' => "women"

        ]);


        Product::create([
            'name' => 'White and black boots in grained leather Steelground',
            'price' => '136.00', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Pair of white and black boots shoes in grained leather with flat sole. Steelground boots model for unisex.',
            'imgurl' => "https://www.steelground.net/2880-large_default/sb-011-z92z108.jpg",
            'category' => "women"

        ]);



        Product::create([
            'name' => 'black and white with checkerwork Creepers in box leather with single sole Steelground',
            'price' => '112.63', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Creepers black and white with checkerwork shoes for unisex with single sole of 3 cm . Creepers model in box leather',
            'imgurl' => "https://www.steelground.net/2881-large_default/sc-410-z178z269.jpg",
            'category' => "men"

        ]);


        Product::create([
            'name' => 'Black Rangers shoes in leather Steelground',
            'price' => '121.50', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Pair of black Rangers shoes shoes in leather with round toe for unisex. Steelground Rangers shoes shoes model in leather custom made. Steelground manufactures shoes on order with an average delivery time of 45 days.',
            'imgurl' => "https://www.steelground.net/2873-large_default/sy-450-z329.jpg",
            'category' => "men"

        ]);

        Product::create([
            'name' => 'Black 8 eyelets rangers in grained leather Steelground',
            'price' => '165.50', 
            'sizes' => '36EUR/3UK 37EUR/4UK 38EUR/5UK 39EUR/6UK 40EUR/7UK 41EUR/8UK 42EUR/9UK 43EUR/10UK',
            'colors' => 'black white',
            
            'detail' => 'Pair of black 8 eyelets rangers boots in grained leather with round toe for unisex. Steelground 8 eyelets rangers boots model in grained leather custom made. Steelground manufactures shoes on order with an average delivery time of 45 days.',
            'imgurl' => "https://www.steelground.net/2014-large_default/sy-095-z92.jpg",
            'category' => "men"

        ]);
    }
}

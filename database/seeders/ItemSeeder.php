<?php

namespace Database\Seeders;

use App\Data\Models\Category;
use App\Data\Models\Item;
use App\Data\Models\Shop;
use App\Data\Models\Supplier;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory()
            ->count(20)
            ->create();
        
        // Asign categories and shops randomly to the item
        Item::all()->each(function ($item) {
            $categories = Category::inRandomOrder()->take(rand(1, 3))->get();
            $shops = Shop::inRandomOrder()->take(rand(1, 3))->get();
            $suppliers = Supplier::inRandomOrder()->take(rand(1, 3))->get();
            $item->categories()->attach($categories);
            $item->shops()->attach($shops);
            $item->suppliers()->attach($suppliers);
        });
    }
}

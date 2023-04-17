<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SupplierSeeder::class,
            ContactSeeder::class,
            CategorySeeder::class,
            ShopSeeder::class,
            ItemSeeder::class,
            OrderSeeder::class,
        ]);
    }
}

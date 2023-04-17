<?php

namespace Database\Seeders;

use App\Data\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::factory()
            ->count(50)
            ->create();
    }
}

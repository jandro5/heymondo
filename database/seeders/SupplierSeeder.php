<?php

namespace Database\Seeders;

// use App\Data\Models\Supplier;
// use App\Supplier as AppSupplier;

use App\Data\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::factory()
            ->count(20)
            ->create();
    }
}

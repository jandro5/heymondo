<?php

namespace Database\Seeders;

use App\Data\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory()
            ->count(10)
            ->create();
    }
}

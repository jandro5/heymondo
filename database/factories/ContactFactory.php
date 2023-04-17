<?php

namespace Database\Factories;

use App\Data\Models\Contact;
use App\Data\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'supplier_id' => Supplier::inRandomOrder()->first()->id,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'position' => $this->faker->jobTitle,
        ];
    }
}

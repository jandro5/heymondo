<?php

namespace Database\Factories;

use App\Data\Models\Item;
use App\Data\Models\Order;
use App\Data\Models\OrderItem;
use App\Models\User;
use App\Data\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'shop_id' => Shop::inRandomOrder()->first()->id,
            'total' => 0,
        ];
    }
}

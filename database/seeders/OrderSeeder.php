<?php

namespace Database\Seeders;

use App\Data\Models\Item;
use App\Data\Models\Order;
use App\Data\Models\OrderItem;
use App\Data\Models\Shop;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()
            ->count(5)
            ->create();

        Order::all()->each(function ($order) {
            $rand = rand(1, 5);
            $items = Item::inRandomOrder()->take($rand)->get();
            $items->each(function ($item) use ($order) {
                OrderItem::factory()->create([
                    'order_id' => $order->id,
                    'item_id' => $item->id,
                ]);
            });

            $order->total = $order->orderItems->sum(function ($orderItem) {
                return $orderItem->quantity * $orderItem->item->price;
            });
            $order->save();
        });
    }
}

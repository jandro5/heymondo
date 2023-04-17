<?php

namespace App\Data\Models;

use Database\Factories\OrderItemFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 *
 * @property $id
 * @property $order_id
 * @property $item_id
 * @property $quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Order $order
 * @property Item $item
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrderItem extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return app(OrderItemFactory::class);
    }

    protected $table = 'item_order';

    public static $rules = [
      'order_id' => 'required',
      'item_id' => 'required',
      'quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['order_id', 'item_id', 'quantity'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

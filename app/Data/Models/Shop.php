<?php

namespace App\Data\Models;

use Database\Factories\ShopFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shop
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @property Order[] $orders
 * @property ShopItem[] $shopItems
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Shop extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return app(ShopFactory::class);
    }

    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'url'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}

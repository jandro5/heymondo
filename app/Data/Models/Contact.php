<?php

namespace App\Data\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property $id
 * @property $name
 * @property $supplier_id
 * @property $email
 * @property $phone
 * @property $position
 * @property $created_at
 * @property $updated_at
 *
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contact extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return app(ContactFactory::class);
    }

    public static $rules = [
      'name' => 'required',
      'supplier_id' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'position' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'supplier_id', 'email', 'phone', 'position'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}

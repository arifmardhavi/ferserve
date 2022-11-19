<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address',
        'postal_code',
        'phone',
        'weight',
        'fruit_id',
        'origin',
        'note',
        'delivery_id',
        'take_id',
    ];

    /**
     * Get the fruit that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fruit(): BelongsTo
    {
        return $this->belongsTo(Fruit::class);
    }

    /**
     * Get the delivery that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function delivery(): BelongsTo
    {
        return $this->belongsTo(Delivery::class);
    }

    /**
     * Get the take that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function take(): BelongsTo
    {
        return $this->belongsTo(Take::class);
    }
}

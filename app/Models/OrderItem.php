<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'item_id',
        'qty',
        'price',
        'discount',
        'total',
        'note',
    ];

    // relation
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id')->withTrashed();
    }

    // relation
    public function items()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id')->withTrashed();
    }
}

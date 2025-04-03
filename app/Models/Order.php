<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'name',
        'email',
        'phone',
        'address',
        'amount',
        'status',
        'order_id'

    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('quantity', 'total_price')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'my_quantity',
        'product_price',
        'total_price',
    ];

    public function products()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

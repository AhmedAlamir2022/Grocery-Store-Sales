<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'cat_id',
        'code',
        'short_desc',
        'long_desc',
        'old_price',
        'new_price',
        'quantity',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

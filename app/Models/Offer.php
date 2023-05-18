<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cat_id',
        'sale',
        'short_desc',
        'old_price',
        'new_price',
        'end_date',
        'image',
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }
}

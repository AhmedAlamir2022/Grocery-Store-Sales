<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
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

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

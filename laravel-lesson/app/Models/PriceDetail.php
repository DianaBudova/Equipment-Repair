<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceDetail extends Model
{   
    use HasFactory;

    protected $fillable = [
        'detail',
        'price',
        'img_path',
        'brand_id'
    ];
}

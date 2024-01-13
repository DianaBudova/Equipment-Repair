<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_surname',
        'user_patronymic',
        'user_phone',
        'user_address',
        'product_repair_id',
        'price_detail_id',
        'product_brand_id',
        'type_repair_id',
        'category_id',
        'status_id',
        'summaryPrice'
    ];
}

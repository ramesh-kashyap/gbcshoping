<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'productName', 'productPrice', 'category_id','image','productDiscountPrice', 'productCoupon', 'productDiscription','activeStatus','color_id','product_id',

    ];
    
}

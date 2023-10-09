<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'brand_id',
        'product_name',
        'product_thumbnail',
        'product_description',
        'price',
        'featured',
        'hot_deals',
        'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

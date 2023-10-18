<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'customer_name',
        'c_shipping_address',
        'c_state',
        'c_city',
        'c_zipcode',
        'c_email',
        'c_phone',
        'order_total',
        'payment_type',
        'status',
        'date',
    ];
}

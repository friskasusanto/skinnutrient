<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
    	'user_id', 'product_id', 'price', 'payment_date', 'total_amount', 'status', 'date_entry', 'receiver_name', 'address', 'phone_number'
    ];
    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}

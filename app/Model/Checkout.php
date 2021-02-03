<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
    	'user_id','date_entry', 'address', 'receiver_name', 'total_amount', 'phone_number','status','total_item', 'id'
    ];
    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function item()
    {
        return $this->hasMany('App\checkoutItem', 'checkout_id');
    }
}

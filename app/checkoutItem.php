<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkoutItem extends Model
{
	protected $guarded = [
        'checkout_id'
    ];

	protected $fillable = [
    	'id','product_id','name', 'price', 'qty', 'total', 'checkout_id'
    ];

    public function checkout()
    {
        return $this->belongsTo('App\Model\Checkout', 'checkout_id');
    }
}

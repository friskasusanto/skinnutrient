<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkoutItem extends Model
{
    public function checkout()
    {
        return $this->belongsTo('App\Model\Checkout', 'checkout_id');
    }
}

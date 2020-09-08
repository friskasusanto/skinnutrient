<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
    	'user_id', 'product_id', 'item', 'amount', 'status'
    ];
    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }
}

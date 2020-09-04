<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = [
    	'user_id', 'product_id', 'price', 'jumlah', 'total_amount', 'status'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}

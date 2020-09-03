<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductGambar extends Model
{
	protected $fillable = [
    	'image', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}

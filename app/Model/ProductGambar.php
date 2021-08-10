<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductGambar extends Model
{
	protected $table = 'product_gambars';
	protected $fillable = [
    	'image', 'product_id','ref_number'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}

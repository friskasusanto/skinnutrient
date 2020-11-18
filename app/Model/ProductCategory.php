<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
	protected $fillable = [
    	'category_id', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }
}

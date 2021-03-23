<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'category_id', 'price', 'image', 'description', 'stock', 'min_price', 'max_price', 'status', 'slug', 'title', 'discount', 'best_seller', 'comming_soon'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }
    public function jenis()
    {
        return $this->belongsTo('App\Model\ProductJenis', 'jenis_id');
    }
    public function product_image()
    {
        return $this->hasMany('App\Model\ProductGambar', 'product_id');
    }
    public function product_category()
    {
        return $this->hasMany('App\Model\Productcategory', 'product_id');
    }
}

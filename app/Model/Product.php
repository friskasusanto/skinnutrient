<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'category_id', 'price', 'image', 'description', 'stock', 'min_price', 'max_price', 'status', 'slug'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }
    public function product_image()
    {
        return $this->hasMany('App\Model\ProductGambar', 'product_id');
    }
    public function product_imageUtama()
    {
        return $this->hasOne('App\Model\ProductGambar', 'product_id')->first();
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
    	'category_name', 'status', 'menu_id'
    ];

    public function menu()
    {
        return $this->belongsTo('App\Model\Menu', 'menu_id');
    }

    public function product()
    {
        return $this->hasMany('App\Model\Product', 'category_id');
    }
}

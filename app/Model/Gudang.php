<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $fillable = [
    	'user_id', 'product_id', 'jumlah', 'stock_user', 'stock_distributor', 'harga_distributor', 'status'
    ];
    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'user_post', 'judul', 'text', 'tgl_input', 'status', 'images', 'love'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

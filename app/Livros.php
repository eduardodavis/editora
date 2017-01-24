<?php

namespace App;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model implements TableInterface
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

    public function getTableHeaders()
    {
        return ['#', 'Título', 'Subtítulo', 'Preço'];
    }

    public function getValueForHeader($header)
    {
        switch ($header){
            case '#':
                return $this->id;
            case 'Título':
                return $this->title;
            case 'Subtítulo':
                return $this->subtitle;
            case 'Preço':
                return $this->price;
        }
    }
}

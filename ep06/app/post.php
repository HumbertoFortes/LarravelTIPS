<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value); //O helpper Str está a ser usado para criação de url amigaveis
    }
}

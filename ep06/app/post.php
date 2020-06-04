<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    public function setTitleAttribute($value)
    {
        $this->attribute['tlte'] = $value;
        $this->attribute['slug'] = Str::slug($value); //a variável slug serve para criação de url amigaveis
    }
}

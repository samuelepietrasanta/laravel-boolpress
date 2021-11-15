<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillables = ['autore' , 'titolo', 'contenuto', 'data'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['autore' , 'titolo', 'contenuto', 'data', 'category_id'];

    public function category(){

        $this->belongsTo('App\Category');

    }
}

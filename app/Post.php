<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['autore' , 'titolo', 'contenuto', 'data', 'category_id'];

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id','title','content','image', 'slug'
    ];
    public function Category(){
        return $this->belongsTo('App\Model\Category');
    }
}

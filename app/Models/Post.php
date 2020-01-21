<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	protected $table = 'posts';
	protected $fillable = ['title', 'content', 'category_id', 'featured'];
    
    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag', 'post_tab');
    }

   
}

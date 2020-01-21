<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    
	protected $table = 'categories';
	protected $fillable = ['name', 'slug'];
	
    public function post()
    {
    	return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }
}

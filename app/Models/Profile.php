<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['user_id', 'profile_image', 'about', 'facebook_link', 'youtube_link'];


    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }
}

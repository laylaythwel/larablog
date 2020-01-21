<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::get()->take(4);
    	return view('frontend.index', compact('posts'));
    }
}

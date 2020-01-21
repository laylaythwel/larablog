<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\User;
class HomeController extends Controller
{
    public function index()
    {
    	$postCount = Post::get()->count();
    	$tagCount = Tag::get()->count();
    	$categoryCount = Post::get()->count();
    	$userCount = User::get()->count();


    	$posts = Post::take(5)->get();
    	$tags = Tag::take(5)->get();
    	$categories = Category::take(5)->get();
    	$users = User::take(5)->get();
    	return view('admin.home', compact('postCount','tagCount','categoryCount','userCount','posts','tags','categories','users'));
    }
}

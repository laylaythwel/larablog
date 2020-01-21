<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use View\View;
class PostController extends Controller
{
    
    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	$tags = Tag::all();
    	$categories = Category::all();
        $category = Category::find($post->category_id);
        $relatedPosts = $category->post()->get();
    	return view('frontend.postDetail', compact('post','tags','categories', 'relatedPosts'));
    }

    public function postByCategory($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	$posts = $category->post()->get();
    	
        // return $posts;
    	return view('frontend.index', compact('posts'));
    }

    public function postByTag($slug)
    {
    	$tags = Tag::where('slug', $slug)->first();
    	$posts = $tags->posts()->get();
    	return view('frontend.index', compact('posts'));

    }
}

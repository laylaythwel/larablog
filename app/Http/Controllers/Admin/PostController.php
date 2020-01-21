<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StorePost;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin/post/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {

       
        $name = $request->get('name');
        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $savePath= public_path("imgs/uploads/");
        $file->move($savePath, $savePath."/$filename");

        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $description = $request->description;
        $post->content = substr($description, 25);
        $post->image = $filename;
        $post->category_id = $request->category_id;
        // dd($post);

        $post->save();
        $post->tags()->attach($request->tags);
        return redirect("admin/posts")->with('success', $request->name .'Created Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view("admin.post.show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::whereId($id)->first();
        return view("admin.post.edit",compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Category::all();
        $post = Post::whereId($id)->first();
        $name = $request->get('name');
        $file = $request->file('image');
        $filename = $post->image;

        if($file)
        {
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $savePath = public_path("imgs/uploads/");
            $file->move($savePath,$savePath. "/$filename");
        }

        $post->title = $request->title;
        $post->content = $request->description;
        $post->category_id = $request->category_id;
        $post->image = $filename;
        // dd($post);
        $post->update();
        $post->tags()->sync($request->tags);
        
        return redirect("admin/posts")->with('success', 'Updated Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::whereId($id)->first();
        $post->delete();
        return redirect("admin/posts")->with('success', 'Delete Success');
    }
}

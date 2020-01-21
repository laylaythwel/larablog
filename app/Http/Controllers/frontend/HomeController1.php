<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profiles = Profile::get()->take(6);
        $categories = Category::get()->take(6);
        // dd($categories);
        return view('frontend.index', compact('profiles', 'categories'));
    }
}

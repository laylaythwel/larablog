<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Profile;
use Validate;

class UserController extends Controller
{
    public function index()

    {
    	$users = User::all();
    	return view("admin.user.index", compact('users'));
    }

    public function create()
    {
    	return view('admin.user.add');
    }
    public function store(Request $request)
    {
    	$request->validate([
            'name' => 'required|min:2',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
       	// dd($user);
       if($user->save())
       {
       		$profile = new Profile();
       		$profile->user_id = $user->id;
       		$profile->about = "About Your Information";
       		$profile->save();
       		
       }

        return redirect("admin/users")->with('success', 'user created success');
    }
    public function edit($id)
    {
    	$user = Auth::user();
    	return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
            'name' => 'required|min:2'
        ]);
        
    	$user = User::find($id);

	        if($request->has("password")) {

	        	$password = bcrypt($request->password);
	        } else {

	        	$password = $user->password;
	        }


	       if($request->hasFile("image"))
	       {
	       		$image = $request->file('image');
	       		$image_name = uniqid() . '_' . $file->getClientOriginalName();
	       		$image->move(public_path("imgs/profiles"), $image_name);
	       } else
	       {
	       	$image_name = $user->profile->profile_image;
	       }
	       
	        $user->name = $request->name;

	        $user->email = $request->email;
	        $user->password = $request->password;

	        if($user->save())
	        {
	        	$profile = Profile::where('user_id', $user->id)->update([

	        	'about' => $request->about,
	        	'facebook_link' => $request->facebook,
	        	'youtube_link' => $request->youtube,
	        	'profile_image' => $image_name,
	        	]);
	        }       

	        
	        	return redirect("admin/users")->with('success', "User Profile updated successfully");
	        
    }

    public function editRole($permission, $user_id)
    {
      $user = User::where('id', $user_id)->update([
        "is_admin" => $permission,
      ]);
      if($user)
      {
        return redirect()->back()->with('success', 'User permission Set Successfully');
      }
    }
}

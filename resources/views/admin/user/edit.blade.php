@extends('layouts.app')

@section('title', "Edit Profile")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" enctype="multipart/form-data" action="{{ url('admin/user/edit/'. $user->id)}}">
				@csrf
			  <div class="form-group">
			    <label for="name">Enter User Name</label>
			    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
			  </div>
			  <div class="form-group">
			    <label for="email">Enter Email</label>
			    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
			  </div>
			  <div class="form-group">
			    <label for="password">Enter Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			  <div class="form-group">
			    <label for="facebook">Enter Facebook</label>
			    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $user->profile->facebook_link}}">
			   
			  </div>
			  <div class="form-group">
			    <label for="youtube">Enter Youtube</label>
			    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $user->profile->youtube_link }}">
			  </div>
			  <div class="form-group">
			    <label for="image">Choose Image</label>
			    <input type="file" class="form-control" id="image" name="image">
			    <img src="{{asset('imgs/profiles/'.$user->profile->profile_image)}}" style="width: 350px;height: 300px;">
			  </div>
			  <div class="form-group">
			    <label for="image">Enter About</label>
			    <textarea name="about" id="about" cols="30" rows="4" class="form-control">{{$user->profile->about }}</textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Update Profile</button>
			</form>
		</div>
	</div>
</div>

@endsection
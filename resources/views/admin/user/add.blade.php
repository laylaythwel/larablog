@extends('layouts.app')

@section('title', "Add New User")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" enctype="multipart/form-data" action="{{route('store.user')}}">
				@csrf
			  <div class="form-group">
			    <label for="name">Enter User Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="email">Enter Email</label>
			    <input type="text" class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
			    <label for="password">Enter Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			
			  <button type="submit" class="btn btn-primary">Add User</button>
			</form>
		</div>
	</div>
</div>

@endsection
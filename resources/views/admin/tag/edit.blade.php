@extends('layouts.app')

@section('title', "Edit Category")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" action="{{route('tags.update',$tag->id)}}">
				@csrf
				{{method_field('PUT')}}
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
			    
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>

@endsection
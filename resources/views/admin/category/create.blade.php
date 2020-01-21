@extends('layouts.app')

@section('title', "Category Home")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" action="{{route('category.store')}}">
				@csrf
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			    
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
</div>

@endsection
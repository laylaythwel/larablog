@extends('layouts.app')

@section('title', "Create Post")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="title">Enter Post Title</label>
			    <input type="text" class="form-control" id="title" name="title">
			    
			  </div>
			  <div class="form-group">
			    <label for="title">Choose Category</label>
			    <select name="category_id" id="category_id" class="form-control">
			    	@foreach($categories as $category)
			    	<option value="{{$category->id}}">{{$category->name}}</option>
			    	@endforeach
			    </select>
			    
			  </div>
			  <div class="form-group">
			    <label for="title">Choose Tag</label>
			    
			    <div class="checkbox">
			    	@foreach($tags as $tag)

			    	 <label for=""> {{ $tag->name }}</label>
			    		<input type="checkbox" name="tags[]" value="{{ $tag->id }}">	
			    	
			    	@endforeach
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="description">Enter Description</label>
			    
			    <textarea class="form-control" id="description" name="description"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="image">Upload Image</label>
			    <input type="file" class="form-control" id="image" name="image">
			  </div>
			  <button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>
</div>

@endsection
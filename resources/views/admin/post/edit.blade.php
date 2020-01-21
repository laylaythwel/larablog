@extends('layouts.app')

@section('title', "Edit Post")

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="title">Enter Post Title</label>
			    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
			    
			  </div>
			  <div class="form-group">
			    <label for="title">Choose Category</label>
			    <select name="category_id" id="category_id" class="form-control">
			    	@foreach($categories as $category)
			    	<option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
			    	@endforeach
			    </select>
			    
			  </div>
			   <div class="form-group">

			    <label for="title">Choose Tag</label>
			    
			    <div class="checkbox">
			    	@foreach($tags as $tag)

				    	 <label for=""> {{ $tag->name }}
				    		<input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
				    		@foreach($post->tags as $t) 
					    		@if( $t->id == $tag->id ) 
					    			checked 
					    		@endif 
				    		@endforeach
				    		>	
				    		
				    		

				    	</label>	
			    	@endforeach
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="description">Enter Description</label>
			    
			    <textarea class="form-control" id="description" name="description">{{$post->content}}</textarea>
			  </div>
			  <div class="form-group">
			    <label for="image">Upload Image</label>
			    <input type="file" class="form-control" id="image" name="image">
			  </div>
			  <img src="{{asset("/imgs/uploads/$post->image")}}" style="width: 350px;height: 300px;">
			  <button type="submit" class="btn btn-success mt-5">Update</button>
			</form>
		</div>
	</div>
</div>

@endsection
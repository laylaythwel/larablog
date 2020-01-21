@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2 bg-warning p-4 text-white mr-2 rounded">
			<p><i class="fa fa-tags" aria-hidden="true"></i> <span class="ml-4">{{ $tagCount }}</span> </p>
			Tag 
		</div>
		<div class="col-md-2 p-4 bg-info mr-2 rounded text-white">
			<p><i class="fa fa-bars" aria-hidden="true"></i> <span class="ml-4">{{ $categoryCount }}</span></p>Category

		</div>
		<div class="col-md-2 p-4 bg-success mr-2 rounded text-white">
			<p><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span class="ml-4">{{ $postCount }}</span></p>Post
		</div>
		<div class="col-md-2 p-4 bg-secondary rounded text-white">
			<p><i class="fa fa-user-o" aria-hidden="true"></i> <span class="ml-4">{{ $userCount }}</span></p>User
		</div>
	</div>

	<div class="row">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td><img src="{{asset("imgs/uploads/$post->image")}}" style="width:100px;height:70px;"></td></td>
      <td>{{ $post->content }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
	</div>
</div>
@endsection

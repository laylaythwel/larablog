@extends('layouts.app')

@section('title', "Lara Blog")

@section('content')
<a href="{{url('admin/post/create')}}" class="btn btn-primary btn-sm mb-3">Create New Post</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th>Category</th>
      <th>Image</th>
      <th>Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($posts as $post)
    <tr>
      <td scope="row">{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->category->name }}</td>
      <td><img src="{{asset("imgs/uploads/$post->image")}}" style="width:100px;height:70px;"></td>
      <td row="3">@php echo substr($post->content, 0, 20) @endphp</td>

      <td><a href='{{url("admin/post/$post->id/edit")}}' class="btn btn-warning btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a> | 
        <a href='{{url("admin/post/$post->id/delete")}}' onclick="return confirm('Are you sure to delete this post?')" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash text-white"></i></a>
         | <a href="{{ url("admin/post/$post->id") }}" class="btn btn-info btn-sm"><i class="fa fa-eye text-white"></i></a>
      </td>


    </tr>
   @endforeach
  </tbody>
</table>

@endsection
@extends('layouts.app')

@section('title', "Tags")

@section('content')
<a href="{{route('tags.create')}}" class="btn btn-primary btn-sm mb-3">Create New Tag</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
    <tr>
      <th scope="row">{{$tag->id}}</th>
      <td>{{$tag->name}}</td>
      
      <td><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a> | 
        <a href='{{ url("admin/tag/$tag->id/delete") }}' onclick="return confirm('Are you sure to delete this post?')" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash text-white"></i></a></td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection
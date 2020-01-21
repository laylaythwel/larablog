@extends('layouts.app')

@section('title', "Category Home")

@section('content')
<a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm mb-3">Create New Category</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      
      <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a> | 
        <a href='{{ url("admin/category/$category->id/delete") }}' onclick="return confirm('Are you sure to delete this post?')" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash text-white"></i></a></td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection
@extends('layouts.app')

@section('title', "Users")

@section('content')
<a href="{{route('user.create')}}" class="btn btn-primary btn-sm mb-3">Add New User</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>
        @if($user->is_admin == 1)
          Admin
          @else
          User
        @endif
      </td>
      <td><img src="{{asset('imgs/profiles/'.$user->profile['profile_image'])}}" style="width: 70px;height: 70px;border-radius: 50%;"></td>
      <td>
        @if($user->is_admin == 0)
        <a href="{{ route('user.edit.role', [1, $user->id]) }}" class="btn btn-warning btn-sm">Set Admin</a>
        @else
          <a href="{{ route('user.edit.role', [0, $user->id]) }}" class="btn btn-success btn-sm">Set User</a>
         
        @endif
       
      </td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection
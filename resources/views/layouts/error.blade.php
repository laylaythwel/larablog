@if(count($errors))
	@foreach($errors->all() as $error)
	<p class="alert alert-danger">{{$error}}</p>

	@endforeach

@endif

@if(Session::has('success'))
	<p class="alert alert-success">{{Session::get('success')}}</p>
@endif

@if(Session::has('warning'))
	<p class="alert alert-warning">{{Session::get('warning')}}</p>
@endif

@if(Session::has('delete'))
	<p class="alert alert-success">{{Session::get('delete')}}</p>
@endif	
@extends('layouts.app')

@section('title')
{{ $post->title}}
@endsection

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <img src="{{asset("imgs/uploads/$post->image")}}" class="card-img-top" style="width:350px;height:300px;">

                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ $post->category->name }}
                </div>
                <div class="card-text">
                    {{ $post->content }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
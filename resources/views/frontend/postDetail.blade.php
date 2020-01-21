@extends('layouts.layout')
@section('title')
{{ $post->title}}
@endsection
@section('content')
<div id="banner-area">
	<img src="{{ asset('images/banner/banner1.jpg')}}" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">

			<h2>{{ $post->category->name }}</h2>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">{{$post->title}}</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio item start -->
<section id="portfolio-item">
	<div class="container">
		<!-- Portfolio item row start -->
		<div class="row">
			<!-- Portfolio item slider start -->
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="portfolio-slider">
					<div class="flexportfolio flexslider">
						<ul class="slides">
							<li><img src="{{asset("imgs/uploads/$post->image")}}" alt=""></li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- Portfolio item slider end -->

			<!-- sidebar start -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="portfolio-desc">
						<h3 class="widget-title">{{ $post->title }}</h3>
						<small class="btn btn-info text-white">{{ $post->created_at->diffForHumans()}}</small>
						<p>{{ $post->content }}</p>
						<br />
						<small>Category: </small>
						<a href="">{{ $post->category->name }}</a>
						
						<br />
						<small>Tag: </small>
						@foreach($post->tags as $t)
							
								<a href="{{ route('post.tag', $t->slug)}}">{{ $t->name }}</a>
							
						@endforeach
						<br />

					</div>

					<div class="portfolio-desc mt-3">
						<h4 class="widget-title">All Tag List</h4>
						@foreach($tags as $tag)
						<label> # {{ $tag->name }} ,</label>
						@endforeach
					</div>

					<div class="portfolio-desc mt-3">
						<h4 class="widget-title">Related Post</h4>

						@foreach($relatedPosts as $r)
				  			<img src="{{ asset('imgs/uploads/'.$r->image)}}" alt="" style="width: 50px;height: 50px;">

						<small> {{ $r->title }} </small>
						<p>{{ substr($r->content, 0, 50)}}</p>
						@endforeach

					</div>


				</div>
			</div>
			<!-- sidebar end -->
		</div><!-- Portfolio item row end -->
	</div><!-- Container end -->
</section><!-- Portfolio item end -->
<section>
	<div class="col-sm-12">
		<div class="row">
			<div class="container">
				@include('frontend.comment')
			</div>
			
		</div>
	</div>
</section>
@endsection
@extends('layouts.layout')

@section('content')
<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="images/slider/bg1.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>Need To Invent The Future!</h2>
					<h3>We Making Difference To Great Things Possible</h3>
					<a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
					<a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>How Big Can You Dream?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
					<h3>We Making Difference To Great Things Possible</h3>

					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>


	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->


<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
					<h3>Web Design</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
					<h3>Apps Development</h3>
					<p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
					<h3>eCommerce Websites</h3>
					<p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
					<h3>Design for Startups</h3>
					<p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->
<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
				<h4 class="title classic">Our Awesome Work</h4>
			</div>
		</div> <!-- Title row end -->
	<!--Isotope filter start -->
		<div class="row text-right">
			<div class="col-12">
				<div class="isotope-nav">
					<ul>
						@foreach($categories as $category)
						<li><a href="{{ route('post.category',$category->slug)}}" target="_blank">{{ $category->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div><!-- Isotope filter end -->
	</div>

	<div class="container-fluid">
		<div class="row isotope" id="isotope">
			@foreach($posts as $post)
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{ asset('/imgs/uploads/'.$post->image)}}" alt="" style="width:100%;height:100%;">
						<figcaption>
							<h3>{{ $post->title}}</h3>
							<small>{{ $post->category->name }}</small>
							<br>
							
							<a class="link icon-pentagon" href="{{route('post.detail',$post->slug)}}"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
			@endforeach
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section>
@endsection
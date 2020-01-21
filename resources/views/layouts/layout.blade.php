<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('plugins/animate.css') }}">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{ asset('plugins/prettyPhoto.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('plugins/owl/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/owl/owl.theme.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('plugins/flex-slider/flexslider.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('plugins/cd-hero/cd-hero.css') }}">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{ asset('css/presets/preset3.css') }}" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	

	<div class="body-inner">

@include('layouts.header')

<!-- Portfolio start -->
@yield('content')
<!-- Portfolio end -->

<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client1.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client2.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client3.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client4.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client5.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client6.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client7.png') }}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{ asset('images/clients/client8.png') }}" alt="client">
					</a>
				</figure>
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->



	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Lara Blog. <span>Designed by <a
	              href="#">LLT</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{ asset('plugins/style-switcher.js') }}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ asset('plugins/owl/owl.carousel.js') }}"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{ asset('plugins/jquery.prettyPhoto.js') }}"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{ asset('plugins/flex-slider/jquery.flexslider.js') }}"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="{{ asset('plugins/cd-hero/cd-hero.js') }}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ asset('plugins/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/ini.isotope.js') }}"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{ asset('plugins/wow.min.js') }}"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{ asset('plugins/jquery.easing.1.3.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('plugins/jquery.counterup.min.js') }}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ asset('plugins/waypoints.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
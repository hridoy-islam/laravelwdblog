<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    {!! SEO::generate() !!}

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}" id="color-switcher-link">
	<script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	{{-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> --}}

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

            @yield('slider')

			@include('frontend.common.navbar')

			@yield('content')



			<footer class="page_footer ds section_padding_top_65 section_padding_bottom_50 columns_margin_bottom_40">
				<div class="container">

					<div class="row">

						<div class="col-md-3 col-sm-6 to_animate" data-animation="fadeInUp">

							<a href="./" class="logo">
								<img src="{{asset('images/logo.png')}}" alt="">
								<span class="logo_text">
									<span class="highlight">24/7 TOWY</span>
									<span>Towing Services</span>
								</span>
							</a>

							<p>
								Shank duis pancetta kevin ullamco tempor short loin pig lorem officia ut ham hock incididunt irure drumstick sage ball tip tri-tip.
							</p>

							<p>
								<a href="#" class="social-icon theme-color-icon soc-twitter"></a>
								<a href="#" class="social-icon theme-color-icon soc-facebook"></a>
								<a href="#" class="social-icon theme-color-icon soc-google"></a>
								<a href="#" class="social-icon theme-color-icon soc-linkedin"></a>
								<a href="#" class="social-icon theme-color-icon soc-pinterest"></a>
							</p>

						</div>

						<div class="col-md-3 col-sm-6 to_animate" data-animation="fadeInUp">
							<div class="topmargin_15 columns_margin_0">
								<div class="widget widget_pages">

									<h3 class="widget-title">Useful
										<strong>Links</strong>
									</h3>
									<hr class="divider_30_3 zebra_bg divider_left">
									<div class="row columns_padding_0 columns_margin_0">
										<div class="col-xs-6">
											<ul class="greylinks">
												<li>
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="services.html">Services</a>
												</li>
												<li>
													<a href="gallery-tile.html">Gallery</a>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>
											</ul>
										</div>
										<div class="col-xs-6">
											<ul class="greylinks">
												<li>
													<a href="faq.html">FAQ</a>
												</li>
												<li>
													<a href="shortcodes_typography.html">Typography</a>
												</li>
												<li>
													<a href="blog-right.html">Blog</a>
												</li>
												<li>
													<a href="contact.html">Contacts</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3 col-sm-6 to_animate" data-animation="fadeInUp">
							<div class="widget widget_text topmargin_15">
								<h3 class="widget-title">Get in
									<strong>Touch</strong>
								</h3>
								<hr class="divider_30_3 zebra_bg divider_left">
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-map-marker highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										2551 Alfred Drive Brooklyn, NY
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-envelope highlight fontsize_18"></i>
									</div>
									<div class="media-body greylinks">
										<a href="mailto:your@mail.com">support@towy.com</a>
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-phone highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										718-250-4467
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-clock-o highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										24 hours a day, 7 days a week
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-12 to_animate" data-animation="fadeInUp">
							<div class="topmargin_15">
								<div class="widget widget_twitter">
									<h3 class="widget-title">Latest
										<strong>Tweets</strong>
									</h3>
									<hr class="divider_30_3 zebra_bg divider_left">
									<div class="twitter"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="ds ms page_copyright section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="lightfont">24/7 Towy - Towing Services
								<i class="fa fa-heart highlight" aria-hidden="true"></i> All Rights Reserved &copy; 2017</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="{{asset('js/compressed.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/vendor/jquery-jvectormap-2.0.3.min.js')}}"></script>
	<script src="{{asset('js/vendor/jquery-jvectormap-world-merc.js')}}"></script>


</body>

</html>

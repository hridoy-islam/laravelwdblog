
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Customer Portal</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">



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

<body class="theme-dashboard">
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

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



            @include('frontend.common.customermenu')

			<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<!-- User Bio -->
								<div class="col-xs-12 col-sm-12">

									<div class="with_background with_padding">
                                        @yield('content')
									</div>
									<!-- .with_background -->
								</div>
								<!-- .col-* -->

							</div>

						</div>

					</div>
					<!-- .row main columns -->
				</div>
				<!-- .container -->
			</section>

			<section class="ls">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							&copy; Copyrights 2017
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
	<script src="{{asset('js/vendor/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('js/admin-charts.js')}}"></script>

</body>

</html>

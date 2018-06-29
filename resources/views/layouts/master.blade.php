<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap compiled CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Pagina Principala</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/octo.css') }}" rel="stylesheet">
	<link href="{{ asset('css/album.css') }}" rel="stylesheet">
	<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>
<body>

	<!-- HEADER + NAVBAR -->
	<div class="container">
		@include('layouts.navbar')
	</div>
	<!-- End HEADER + NAVBAR -->

	<!-- BODY CONTAINER -->
	<div class="album py-5 bg-light">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<!-- End BODY CONTAINER -->

	@include('layouts.error')

	<!-- SCRIPTS  -->
	@include('layouts.scripts')
	<!-- End SCRIPTS  -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Laravel 9</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/icons/iconmoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/app.js')}}"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
    @stack('js')
	<!-- /theme JS files -->

</head>
<body>
	<!-- Main navbar -->
	@include('layouts.navbar')
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content pt-10">

		<!-- Main sidebar -->
		{{-- @include('layouts.sidebar') --}}
		<!-- /main sidebar -->

		<!-- Main content -->
		@yield('content')
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<!-- Footer -->
	@include('layouts.footer')
	<!-- /footer -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Page</title>

	@include('layouts.global')

	<!-- Theme JS files -->
	{{-- <script src="{{asset('assets/js/app.js')}}"></script> --}}
	<!-- /theme JS files -->

</head>

<body class="bg-secondary">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">
              
				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">
                  
					<!-- Login card -->
					<form class="login-form" action="index.html">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Your credentials</span>
								</div>

	
								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">sign in with</span>
								</div>

								<div class="form-group text-center">
									<a href="{{route('google.login')}}" type="button" class="btn btn-outline-indigo btn-icon rounded-pill border-2"><i class="icon-google"></i></a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

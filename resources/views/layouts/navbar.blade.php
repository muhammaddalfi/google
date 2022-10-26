<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button type="button" class="navbar-toggler sidebar-mobile-main-toggle">
				<i class="icon-transmission"></i>
			</button>
			<button data-target="#navbar_search" type="button" class="navbar-toggler" data-toggle="collapse">
				<i class="icon-search4"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="{{asset('assets/images/logo_light.png')}}" class="d-none d-sm-block" alt="">
				<img src="{{asset('assets/images/logo_icon_light.png')}}" class="d-sm-none" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar_search">
			<div class="navbar-search d-flex align-items-center py-3 py-lg-0">
				<div class="form-group-feedback form-group-feedback-left flex-grow-1">
					<input type="text" class="form-control" placeholder="Search">
					<div class="form-control-feedback">
						<i class="icon-search4 text-white opacity-50"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="order-1 order-lg-2 d-flex flex-1 flex-lg-0 justify-content-end align-items-center">
			<span class="badge badge-success d-none d-lg-inline-block mr-3">Active</span>

			<ul class="navbar-nav flex-row align-items-center h-100">
				<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
						<img src="{{asset('assets/images/placeholders/placeholder.jpg')}}" class="rounded-pill mr-lg-2" height="34" alt="">
						<span class="d-none d-lg-inline-block">{{auth()->user()->name}}</span>
					</a>
	
					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{route('google.logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg align-self-start">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Header -->
        <div class="sidebar-section sidebar-header">
            <div class="sidebar-section-body d-flex align-items-center justify-content-center pb-0">
                <h6 class="sidebar-resize-hide flex-1 mb-0">Navigation</h6>
                <div>
                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /header -->


        <!-- User menu -->
        <div class="sidebar-section sidebar-user">
            <div class="sidebar-section-body d-flex justify-content-center">
                <a href="#">
                    <img src="{{asset('assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle" alt="">
                </a>

                <div class="sidebar-resize-hide flex-1 ml-3">
                    <div class="font-weight-semibold">{{ Auth()->user()->email }}</div>
                    <div class="font-size-sm line-height-sm text-muted">
                        Senior developer
                    </div>
                </div>
            </div>
        </div>					
        <!-- /user menu -->

        
        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('operator')}}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Menu Kendaraan</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('operator.order')}}" class="nav-link">Permohonan</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Settings</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('employee')}}" class="nav-link">Employee</a></li>
                        <li class="nav-item"><a href="{{route('vendor')}}" class="nav-link">Vendor</a></li>
                        <li class="nav-item"><a href="{{route('price')}}" class="nav-link">Price</a></li>
                        <li class="nav-item"><a href="{{route('rent')}}" class="nav-link">Rental</a></li>
                    </ul>
                </li>
                <!-- /main -->                    
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
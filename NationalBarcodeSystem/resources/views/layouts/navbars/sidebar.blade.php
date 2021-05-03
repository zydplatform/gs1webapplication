<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('admindashboard') }}">
            <img src="{{ asset('argon') }}/img/brand/newlogo1.png" class="navbar-brand-img" alt="gs1 uganda logo">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main" style="font-size:10px;">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('admindashboard') }}">
                            <img src="{{ asset('argon') }}/img/brand/newlogo1.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admindashboard') }}">
                         {{ __('GS1 Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('System Admin') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Users') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Roles') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples1">
                        <i class="fa fa-book" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Businesses') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('getprofile') }}">
                                    {{ __('Business Profiles ') }}
                                </a>
                            </li>
                           
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples1">
                        <i class="fa fa-book" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Products') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples1">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('businessproducts') }}">
                                    {{ __('Show products') }}
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples2">
                        <i class="fa fa-briefcase" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Barcodes') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples2">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Add Barcode') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Barcodes Issued') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Available Barcodes') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- </li>
                                 <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples4" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples4">
                        <i class="fa fa-briefcase" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Data Management') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples4">
                        <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Business Lines') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Business Types') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Item Catalogue') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Districts') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ __('Countries') }}
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

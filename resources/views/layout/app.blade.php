<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | @yield('siteTitle', 'POS')</title>
    
<link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    
<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-1">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/images/logo/logo1.svg')}}" alt="Logo"></a>
                        </div>
                        <div class="header-top-right">

                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="text">
                                        <h6 class="user-dropdown-name">John Ducky <span class="user-dropdown-status text-sm text-muted">Member</span></h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                  <li><a class="dropdown-item" href="#">{{__('My Account') }}</a></li>
                                  <li><a class="dropdown-item" href="#">Settings</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="auth-login.html">{{__('Logout') }}</a></li>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li
                                class="menu-item  ">
                                <a href="index.html" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>{{__('dashboard') }}</span>
                                </a>
                            </li>

                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-table"></i>
                                    <span>Tables</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  "><a href="table.html" class='submenu-link'>Category</a>
                                                <ul class="subsubmenu">
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">List</a></li>
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">Add New</a></li>
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">Edit</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu-item  "><a href="table.html" class='submenu-link'>Product</a>
                                                <ul class="subsubmenu">
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">List</a></li>
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">Add New</a></li>
                                                    <li class="subsubmenu-item"><a class="subsubmenu-link" href="">Edit</a></li>
                                                </ul>
                                            </li>
                                        </ul>  
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
			
			<div class="content-wrapper container">
			
				<div class="page-heading m-0">
					<div class="page-title">
						<div class="row">
							<div class="col-12 col-md-6 order-md-1 order-last">
								<div class="fs-5 fw-bold">@yield('pageTitle')</div>
							</div>
							<div class="col-12 col-md-6 order-md-2 order-first">
								<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
									<ol class="breadcrumb">
										<li class="breadcrumb-item active">{{__('dashboard') }}</li>
                                        @hasSection('pageSubTitle')
										<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
										    <li class="breadcrumb-item active" aria-current="page">@yield('pageSubTitle')</li>
                                        @endif
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="page-content">
					@yield('content')
				</div>
			</div>
            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; POS</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">Nasim</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<script src="{{ asset('/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
@stack('scripts')

</body>

</html>

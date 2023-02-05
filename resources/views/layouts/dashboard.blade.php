
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link href="{{asset('Backend/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('Backend/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('Backend/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('Backend/demo/demo_configurator.js')}}"></script>
	<script src="{{asset('Backend/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('Backend/js/vendor/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('Backend/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>

	<script src="{{asset('Backend/js/app.js')}}"></script>
	<script src="{{asset('Backend/demo/pages/dashboard.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/sparklines.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/lines.js')}}"></script>	
	<script src="{{asset('Backend/demo/charts/pages/dashboard/areas.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/donuts.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/bars.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/progress.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
	<script src="{{asset('Backend/demo/charts/pages/dashboard/pies.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="{{asset('Backend/demo/charts/pages/dashboard/bullets.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-expand-lg navbar-static">
		<div class="container-fluid">
			<div class="d-flex d-lg-none me-2">
				<button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
					<i class="ph-list"></i>
				</button>
			</div>

			<div class="navbar-brand flex-1 flex-lg-0">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="{{asset('Backend/images/logo_icon.svg')}}" alt="">					
				</a>
			</div>

			<ul class="nav flex-row">
				<li class="nav-item d-lg-none">
					<a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
						<i class="ph-magnifying-glass"></i>
					</a>
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown">
					<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
						<i class="ph-squares-four"></i>
					</a>

					<div class="dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0">
						<div class="d-flex align-items-center border-bottom p-3">
							<h6 class="mb-0">Browse apps</h6>
							<a href="#" class="ms-auto">
								View all
								<i class="ph-arrow-circle-right ms-1"></i>
							</a>
						</div>

						<div class="row row-cols-1 row-cols-sm-2 g-0">
							<div class="col">
								<button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3">
									<div>
										<img src="{{asset('Backend/images/demo/logos/1.svg')}}" class="h-40px mb-2" alt="">
										<div class="fw-semibold my-1">Customer data platform</div>
										<div class="text-muted">Unify customer data from multiple sources</div>
									</div>
								</button>
							</div>

							<div class="col">
								<button type="button" class="dropdown-item text-wrap h-100 align-items-start border-bottom p-3">
									<div>
										<img src="../../../assets/images/demo/logos/2.svg" class="h-40px mb-2" alt="">
										<div class="fw-semibold my-1">Data catalog</div>
										<div class="text-muted">Discover, inventory, and organize data assets</div>
									</div>
								</button>
							</div>

							<div class="col">
								<button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3">
									<div>
										<img src="{{asset('Backend/images/demo/logos/3.svg')}}" class="h-40px mb-2" alt="">
										<div class="fw-semibold my-1">Data governance</div>
										<div class="text-muted">The collaboration hub and data marketplace</div>
									</div>
								</button>
							</div>

							<div class="col">
								<button type="button" class="dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3">
									<div>
										<img src="../../../assets/images/demo/logos/4.svg" class="h-40px mb-2" alt="">
										<div class="fw-semibold my-1">Data privacy</div>
										<div class="text-muted">Automated provisioning of non-production datasets</div>
									</div>
								</button>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown" data-bs-auto-close="outside">
						<i class="ph-chats"></i>
						<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
					</a>

					<div class="dropdown-menu wmin-lg-400 p-0">
						<div class="d-flex align-items-center p-3">
							<h6 class="mb-0">Messages</h6>
							<div class="ms-auto">
								<a href="#" class="text-body">
									<i class="ph-plus-circle"></i>
								</a>
								<a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
									<i class="ph-magnifying-glass"></i>
								</a>
							</div>
						</div>

						<div class="collapse" id="search_messages">
							<div class="px-3 mb-2">
								<div class="form-control-feedback form-control-feedback-start">
									<input type="text" class="form-control" placeholder="Search messages">
									<div class="form-control-feedback-icon">
										<i class="ph-magnifying-glass"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="dropdown-menu-scrollable pb-2">
							<a href="#" class="dropdown-item align-items-start text-wrap py-2">
								<div class="status-indicator-container me-3">
									<img src="{{asset('Backend/images/demo/users/face10.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
									<span class="status-indicator bg-warning"></span>
								</div>

								<div class="flex-1">
									<span class="fw-semibold">James Alexander</span>
									<span class="text-muted float-end fs-sm">04:58</span>
									<div class="text-muted">who knows, maybe that would be the best thing for me...</div>
								</div>
							</a>

							<a href="#" class="dropdown-item align-items-start text-wrap py-2">
								<div class="status-indicator-container me-3">
									<img src="{{asset('Backend/images/demo/users/face3.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
									<span class="status-indicator bg-success"></span>
								</div>

								<div class="flex-1">
									<span class="fw-semibold">Margo Baker</span>
									<span class="text-muted float-end fs-sm">12:16</span>
									<div class="text-muted">That was something he was unable to do because...</div>
								</div>
							</a>

							<a href="#" class="dropdown-item align-items-start text-wrap py-2">
								<div class="status-indicator-container me-3">
									<img src="{{asset('Backend/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
									<span class="status-indicator bg-success"></span>
								</div>
								<div class="flex-1">
									<span class="fw-semibold">Jeremy Victorino</span>
									<span class="text-muted float-end fs-sm">22:48</span>
									<div class="text-muted">But that would be extremely strained and suspicious...</div>
								</div>
							</a>

							<a href="#" class="dropdown-item align-items-start text-wrap py-2">
								<div class="status-indicator-container me-3">
									<img src="../../../assets/images/demo/users/face4.jpg" class="w-40px h-40px rounded-pill" alt="">
									<span class="status-indicator bg-grey"></span>
								</div>
								<div class="flex-1">
									<span class="fw-semibold">Beatrix Diaz</span>
									<span class="text-muted float-end fs-sm">Tue</span>
									<div class="text-muted">What a strenuous career it is that I've chosen...</div>
								</div>
							</a>

							<a href="#" class="dropdown-item align-items-start text-wrap py-2">
								<div class="status-indicator-container me-3">
									<img src="../../../assets/images/demo/users/face25.jpg" class="w-40px h-40px rounded-pill" alt="">
									<span class="status-indicator bg-danger"></span>
								</div>
								<div class="flex-1">
									<span class="fw-semibold">Richard Vango</span>
									<span class="text-muted float-end fs-sm">Mon</span>
									<div class="text-muted">Other travelling salesmen live a life of luxury...</div>
								</div>
							</a>
						</div>

						<div class="d-flex border-top py-2 px-3">
							<a href="#" class="text-body">
								<i class="ph-checks me-1"></i>
								Dismiss all
							</a>
							<a href="#" class="text-body ms-auto">
								View all
								<i class="ph-arrow-circle-right ms-1"></i>
							</a>
						</div>
					</div>
				</li>
			</ul>

			<div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
				<div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
					<div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
						<input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search" data-bs-toggle="dropdown">
						<div class="form-control-feedback-icon">
							<i class="ph-magnifying-glass"></i>
						</div>
						<div class="dropdown-menu w-100" data-color-theme="light">
							<button type="button" class="dropdown-item">
								<div class="text-center w-32px me-3">
									<i class="ph-magnifying-glass"></i>
								</div>
								<span>Search <span class="fw-bold">"in"</span> everywhere</span>
							</button>

						</div>
					</div>

					<div>
						<a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside">
							<i class="ph-faders-horizontal"></i>
						</a>

						<div class="dropdown-menu w-100 p-3">
							<div class="d-flex align-items-center mb-3">
								<h6 class="mb-0">Search options</h6>
								<a href="#" class="text-body rounded-pill ms-auto">
									<i class="ph-clock-counter-clockwise"></i>
								</a>
							</div>

							<div class="mb-3">
								<label class="d-block form-label">Category</label>
								<label class="form-check form-check-inline">
									<input type="checkbox" class="form-check-input" checked>
									<span class="form-check-label">Invoices</span>
								</label>
								<label class="form-check form-check-inline">
									<input type="checkbox" class="form-check-input">
									<span class="form-check-label">Files</span>
								</label>
								<label class="form-check form-check-inline">
									<input type="checkbox" class="form-check-input">
									<span class="form-check-label">Users</span>
								</label>
							</div>

							<div class="mb-3">
								<label class="form-label">Addition</label>
								<div class="input-group">
									<select class="form-select w-auto flex-grow-0">
										<option value="1" selected>has</option>
										<option value="2">has not</option>
									</select>
									<input type="text" class="form-control" placeholder="Enter the word(s)">
								</div>
							</div>

							<div class="mb-3">
								<label class="form-label">Status</label>
								<div class="input-group">
									<select class="form-select w-auto flex-grow-0">
										<option value="1" selected>is</option>
										<option value="2">is not</option>
									</select>
									<select class="form-select">
										<option value="1" selected>Active</option>
										<option value="2">Inactive</option>
										<option value="3">New</option>
										<option value="4">Expired</option>
										<option value="5">Pending</option>
									</select>
								</div>
							</div>

							<div class="d-flex">
								<button type="button" class="btn btn-light">Reset</button>

								<div class="ms-auto">
									<button type="button" class="btn btn-light">Cancel</button>
									<button type="button" class="btn btn-primary ms-2">Apply</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
				<li class="nav-item ms-lg-2">
					{{-- <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
						<i class="mt-3 ph-bell"></i>
						<span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
					</a> --}}
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
						<div class="">
							<div class="mb-3 avatar avatar-xl">
								@if(Auth::user()->photo == null)
								<img class="mt-3" width="40" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
								@else
								<img style="width: 140px; height:140px;" src="{{asset('uploads/users/')}}/{{Auth::user()->photo}}" alt="..." class="avatar-img rounded-circle">
								@endif
							</div>
						</div>
						<span class="d-none d-lg-inline-block mx-lg-2">{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						<a href="#" class="dropdown-item">
							<i class="ph-user-circle me-2"></i>
							My profile
						</a>
								
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="ph-gear me-2"></i>
							Account settings
						</a>

						<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
							<i class="ph-sign-out me-2"></i>
							Logout
						</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Breadcrumbs -->
	<div class="page-header page-header-light shadow">
		<div class="page-header-content d-lg-flex">
			<div class="d-flex">
				<div class="breadcrumb py-2">
					<a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
					<a href="#" class="breadcrumb-item">Home</a>
					<span class="breadcrumb-item active">Dashboard</span>
				</div>

				<a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
					<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
				</a>
			</div>

			<div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
				<div class="d-lg-flex mb-2 mb-lg-0">
					<a href="#" class="d-flex align-items-center text-body py-2">
						<i class="ph-lifebuoy me-2"></i>
						Support
					</a>

					<div class="dropdown ms-lg-3">
						<a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
							<i class="ph-gear me-2"></i>
							<span class="flex-1">Settings</span>
						</a>

						<div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
							<a href="#" class="dropdown-item">
								<i class="ph-shield-warning me-2"></i>
								Account security
							</a>
							<a href="#" class="dropdown-item">
								<i class="ph-chart-bar me-2"></i>
								Analytics
							</a>
							<a href="#" class="dropdown-item">
								<i class="ph-lock-key me-2"></i>
								Privacy
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="ph-gear me-2"></i>
								All settings
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /breadcrumbs -->


	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content d-lg-flex">
			<div class="d-flex">
				<h4 class="page-title mb-0">
					Home - <span class="fw-normal">Dashboard</span>
				</h4>

				<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
					<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
				</a>
			</div>

			<div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
				
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-main sidebar-expand-lg align-self-start">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Sidebar header -->
				<div class="sidebar-section">
					<div class="sidebar-section-body d-flex justify-content-center">
						<h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

						<div>
							<button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
								<i class="ph-arrows-left-right"></i>
							</button>

							<button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
								<i class="ph-x"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- /sidebar header -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
                        <li class="nav-item-header pt-0">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Visit Site</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
                        <li class="nav-item">
							<a href="{{route('index.page')}}" class="nav-link">
								<i class="ph-house"></i>
								<span>
									Visit Website									
								</span>
							</a>
						</li>
						<li class="nav-item-header pt-0">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Admin</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item">
							<a href="{{route('home')}}" class="nav-link active">
								<i class="ph-house"></i>
								<span>
									Dashboard									
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-layout"></i>
								<span>Header</span>
							</a>
							<ul class="nav-group-sub collapse" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('add.header')}}" class="nav-link">Add Header Part</a></li>					
							</ul>
						</li>

						{{-- copy this --}}
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-layout"></i>
								<span>Projects</span>
							</a>
							<ul class="nav-group-sub collapse" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('add.project')}}" class="nav-link">Add Project</a></li>					
							</ul>
						</li>

						{{-- copy end --}}
						{{-- copy this --}}
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
								<i class="ph-layout"></i>
								<span>Messages</span>
							</a>
							<ul class="nav-group-sub collapse" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('view.message')}}" class="nav-link">View Message</a></li>					
							</ul>
						</li>
						{{-- copy end --}}
						
						<!-- /layout -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Main charts -->
				{{-- <div class="row">
					<div class="col-lg-12">				
                        
					</div>
				</div> --}}
				<!-- /main charts -->

				<!-- Dashboard main content -->
				<div class="row">
					<div class="col-lg-12">
						@yield('content')
					</div>
				</div>
				<!-- /dashboard content -->
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->


	<!-- Notifications -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
		<div class="offcanvas-header py-0">
			<h5 class="offcanvas-title py-3">Activity</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body p-0">
			<div class="bg-light fw-medium py-2 px-3">New notifications</div>
			<div class="p-3">
				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('Backend/images/demo/users/face1.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-success"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">James</a> has completed the task <a href="#">Submit documents</a> from <a href="#">Onboarding</a> list

						<div class="bg-light rounded p-2 my-2">
							<label class="form-check ms-1">
								<input type="checkbox" class="form-check-input" checked disabled>
								<del class="form-check-label">Submit personal documents</del>
							</label>
						</div>

						<div class="fs-sm text-muted mt-1">2 hours ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					
				</div>

				<div class="d-flex align-items-start">
					
				</div>
			</div>

			<div class="bg-light fw-medium py-2 px-3">Older notifications</div>
			<div class="p-3">
				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('Backend/images/demo/users/face25.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-success"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Nick</a> requested your feedback and approval in support request <a href="#">#458</a>

						<div class="my-2">
							<a href="#" class="btn btn-success btn-sm me-1">
								<i class="ph-checks ph-sm me-1"></i>
								Approve
							</a>
							<a href="#" class="btn btn-light btn-sm">
								Review
							</a>
						</div>

						<div class="fs-sm text-muted mt-1">3 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('Backend/images/demo/users/face24.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-grey"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to <a href="#">Product management</a> project

						<div class="bg-light rounded p-2 my-2">
							<div class="d-flex align-items-center">
								<div class="me-2">
									<img src="{{asset('Backend/images/icons/pdf.svg')}}" width="34" height="34" alt="">
								</div>
								<div class="flex-fill">
									new_contract.pdf
									<div class="fs-sm text-muted">112KB</div>
								</div>
								<div class="ms-2">
									<button type="button" class="btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill">
										<i class="ph-arrow-down"></i>
									</button>
								</div>
							</div>
						</div>

						<div class="fs-sm text-muted mt-1">1 day ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<div class="me-3">
						<div class="bg-success bg-opacity-10 text-success rounded-pill">
							<i class="ph-calendar-plus p-2"></i>
						</div>
					</div>
					<div class="flex-fill">
						All hands meeting will take place coming Thursday at 13:45.

						<div class="my-2">
							<a href="#" class="btn btn-primary btn-sm">
								<i class="ph-calendar-plus ph-sm me-1"></i>
								Add to calendar
							</a>
						</div>

						<div class="fs-sm text-muted mt-1">2 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<a href="#" class="status-indicator-container me-3">
						<img src="{{asset('Backend/images/demo/users/face4.jpg')}}" class="w-40px h-40px rounded-pill" alt="">
						<span class="status-indicator bg-danger"></span>
					</a>
					<div class="flex-fill">
						<a href="#" class="fw-semibold">Christine</a> commented on your community <a href="#">post</a> from 10.12.2021

						<div class="fs-sm text-muted mt-1">2 days ago</div>
					</div>
				</div>

				<div class="d-flex align-items-start mb-3">
					<div class="me-3">
						<div class="bg-primary bg-opacity-10 text-primary rounded-pill">
							<i class="ph-users-four p-2"></i>
						</div>
					</div>
					<div class="flex-fill">
						<span class="fw-semibold">HR department</span> requested you to complete internal survey by Friday

						<div class="fs-sm text-muted mt-1">3 days ago</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /notifications -->


	<!-- Demo config -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">
			<button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
				<i class="ph-gear"></i>
			</button>
		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Demo configuration</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Color mode</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Light theme</span>
								<div class="fs-sm text-muted">Set light theme or reset to default</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked>
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Dark theme</span>
								<div class="fs-sm text-muted">Switch to dark theme</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Auto theme</span>
								<div class="fs-sm text-muted">Set theme based on system mode</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Direction</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">RTL direction</span>
								<div class="text-muted">Toggle between LTR and RTL</div>
							</div>
						</div>
						<input type="checkbox" name="layout-direction" value="rtl" class="form-check-input cursor-pointer m-0 ms-auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Layouts</div>
			
		</div>
	</div>
	<!-- /demo config -->

</body>
</html>
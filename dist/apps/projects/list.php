<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Oswald
Product Version: 1.0.0
Upgrade to Pro: https://keenthemes.com/products/oswald-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/oswald-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Oswald HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/axel-html-free" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<?php
				include('header.php');
				?>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<!--begin::Toolbar-->
								<div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
									<!--begin::Toolbar container-->
									<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
										<!--begin::Toolbar wrapper-->
										<div class="d-flex flex-stack flex-wrap gap-4 w-100">
											<!--begin::Page title-->
											<div class="page-title d-flex flex-column gap-3 me-3">
												<!--begin::Title-->
												<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">My Projects</h1>
												<!--end::Title-->
												<!--begin::Breadcrumb-->
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold">
													<!--begin::Item-->
													<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
														<a href="../dist/index.html" class="text-gray-500">
															<i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
														</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="breadcrumb-item">
														<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Projects</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="breadcrumb-item">
														<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="breadcrumb-item text-gray-500">My Projects</li>
													<!--end::Item-->
												</ul>
												<!--end::Breadcrumb-->
											</div>
											<!--end::Page title-->
											<!--begin::Actions-->
											<div class="d-flex align-items-center gap-3 gap-lg-5">
												<!--begin::Secondary button-->
												<div class="m-0">
													<a href="#" class="btn btn-flex btn-sm btn-color-gray-700 bg-body fw-bold px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
												</div>
												<!--end::Secondary button-->
												<!--begin::Primary button-->
												<a href="#" class="btn btn-flex btn-center btn-dark btn-sm px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Reports</a>
												<!--end::Primary button-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Toolbar wrapper-->
									</div>
									<!--end::Toolbar container-->
								</div>
								<!--end::Toolbar-->
								<!--begin::Content-->
								<div id="kt_app_content" class="app-content pb-0">
									<!--begin::Stats-->
									<div class="row g-6 g-xl-9">
										<div class="col-lg-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div class="card-body p-9">
													<!--begin::Heading-->
													<div class="fs-2hx fw-bold">237</div>
													<div class="fs-4 fw-semibold text-gray-400 mb-7">Current Projects</div>
													<!--end::Heading-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-wrap">
														<!--begin::Chart-->
														<div class="d-flex flex-center h-100px w-100px me-9 mb-5">
															<canvas id="kt_project_list_chart"></canvas>
														</div>
														<!--end::Chart-->
														<!--begin::Labels-->
														<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-primary me-3"></div>
																<div class="text-gray-400">Active</div>
																<div class="ms-auto fw-bold text-gray-700">30</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
																<div class="bullet bg-success me-3"></div>
																<div class="text-gray-400">Completed</div>
																<div class="ms-auto fw-bold text-gray-700">45</div>
															</div>
															<!--end::Label-->
															<!--begin::Label-->
															<div class="d-flex fs-6 fw-semibold align-items-center">
																<div class="bullet bg-gray-300 me-3"></div>
																<div class="text-gray-400">Yet to start</div>
																<div class="ms-auto fw-bold text-gray-700">25</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Labels-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<div class="col-lg-6 col-xxl-4">
											<!--begin::Budget-->
											<div class="card h-100">
												<div class="card-body p-9">
													<div class="fs-2hx fw-bold">$3,290.00</div>
													<div class="fs-4 fw-semibold text-gray-400 mb-7">Project Finance</div>
													<div class="fs-6 d-flex justify-content-between mb-4">
														<div class="fw-semibold">Avg. Project Budget</div>
														<div class="d-flex fw-bold">
														<i class="ki-duotone ki-arrow-up-right fs-3 me-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>$6,570</div>
													</div>
													<div class="separator separator-dashed"></div>
													<div class="fs-6 d-flex justify-content-between my-4">
														<div class="fw-semibold">Lowest Project Check</div>
														<div class="d-flex fw-bold">
														<i class="ki-duotone ki-arrow-down-left fs-3 me-1 text-danger">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>$408</div>
													</div>
													<div class="separator separator-dashed"></div>
													<div class="fs-6 d-flex justify-content-between mt-4">
														<div class="fw-semibold">Ambassador Page</div>
														<div class="d-flex fw-bold">
														<i class="ki-duotone ki-arrow-up-right fs-3 me-1 text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>$920</div>
													</div>
												</div>
											</div>
											<!--end::Budget-->
										</div>
										<div class="col-lg-6 col-xxl-4">
											<!--begin::Clients-->
											<div class="card h-100">
												<div class="card-body p-9">
													<!--begin::Heading-->
													<div class="fs-2hx fw-bold">49</div>
													<div class="fs-4 fw-semibold text-gray-400 mb-7">Our Clients</div>
													<!--end::Heading-->
													<!--begin::Users group-->
													<div class="symbol-group symbol-hover mb-9">
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
															<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
															<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
															<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
															<span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
															<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
														</a>
													</div>
													<!--end::Users group-->
													<!--begin::Actions-->
													<div class="d-flex">
														<a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">All Clients</a>
														<a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Invite New</a>
													</div>
													<!--end::Actions-->
												</div>
											</div>
											<!--end::Clients-->
										</div>
									</div>
									<!--end::Stats-->
									<!--begin::Toolbar-->
									<div class="d-flex flex-wrap flex-stack my-5">
										<!--begin::Heading-->
										<h2 class="fs-2 fw-semibold my-2">Projects
										<span class="fs-6 text-gray-400 ms-1">by Status</span></h2>
										<!--end::Heading-->
										<!--begin::Controls-->
										<div class="d-flex flex-wrap my-1">
											<!--begin::Select wrapper-->
											<div class="m-0">
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body fw-bold w-125px">
													<option value="Active" selected="selected">Active</option>
													<option value="Approved">In Progress</option>
													<option value="Declined">To Do</option>
													<option value="In Progress">Completed</option>
												</select>
												<!--end::Select-->
											</div>
											<!--end::Select wrapper-->
										</div>
										<!--end::Controls-->
									</div>
									<!--end::Toolbar-->
									<!--begin::Row-->
									<div class="row g-6 g-xl-9">
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Fitnes App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Feb 21, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/disqus.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Leaf CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">May 10, 2021</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$36,400.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 30% completed">
														<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/figma-1.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Atica Banking</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Mar 14, 2021</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$605,100.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
														<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mad Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Cris Willson">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Garcie">
															<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/sentry-3.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Finance Dispatch</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Mar 10, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 60% completed">
														<div class="bg-info rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nich Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">N</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rob Otto">
															<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/xing-icon.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">9 Degree</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Jul 25, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 40% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
															<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
															<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/tvit.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">GoPro App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Jun 20, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
															<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/aven.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Buldozer CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Jul 25, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
															<img alt="Pic" src="assets/media/avatars/300-14.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/treva.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Overdue</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Aviasales App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Jun 20, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 10% completed">
														<div class="bg-danger rounded h-4px" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a href="#" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/kanba.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark">Oppo CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Nov 10, 2023</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
														<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nick Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Sean Paul">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Collin">
															<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Pagination-->
									<div class="d-flex flex-stack flex-wrap pt-10">
										<div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
										<!--begin::Pages-->
										<ul class="pagination">
											<li class="page-item previous">
												<a href="#" class="page-link">
													<i class="previous"></i>
												</a>
											</li>
											<li class="page-item active">
												<a href="#" class="page-link">1</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">2</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">3</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">4</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">5</a>
											</li>
											<li class="page-item">
												<a href="#" class="page-link">6</a>
											</li>
											<li class="page-item next">
												<a href="#" class="page-link">
													<i class="next"></i>
												</a>
											</li>
										</ul>
										<!--end::Pages-->
									</div>
									<!--end::Pagination-->
									<!--begin::Modals-->
									<!--begin::Modal - View Users-->
									<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header pb-0 border-0 justify-content-end">
													<!--begin::Close-->
													<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--begin::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
													<!--begin::Heading-->
													<div class="text-center mb-13">
														<!--begin::Title-->
														<h1 class="mb-3">Browse Users</h1>
														<!--end::Title-->
														<!--begin::Description-->
														<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
														<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
														<!--end::Description-->
													</div>
													<!--end::Heading-->
													<!--begin::Users-->
													<div class="mb-15">
														<!--begin::List-->
														<div class="mh-375px scroll-y me-n7 pe-7">
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">smith@kpmg.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$23,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">melody@altbox.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$50,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">max@kt.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$75,900</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">sean@dellito.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$10,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
																		<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">brian@exchange.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$20,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">mik@pex.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$9,300</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$15,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
																		<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">olivia@corpmail.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$23,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$45,800</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">dam@consilting.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$90,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">emma@intenso.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$5,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$70,000</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex flex-stack py-5">
																<!--begin::Details-->
																<div class="d-flex align-items-center">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-6">
																		<!--begin::Name-->
																		<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
																		<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
																		<!--end::Name-->
																		<!--begin::Email-->
																		<div class="fw-semibold text-muted">robert@benko.com</div>
																		<!--end::Email-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Details-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Sales-->
																	<div class="text-end">
																		<div class="fs-5 fw-bold text-dark">$45,500</div>
																		<div class="fs-7 text-muted">Sales</div>
																	</div>
																	<!--end::Sales-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::User-->
														</div>
														<!--end::List-->
													</div>
													<!--end::Users-->
													<!--begin::Notice-->
													<div class="d-flex justify-content-between">
														<!--begin::Label-->
														<div class="fw-semibold">
															<label class="fs-6">Adding Users by Team Members</label>
															<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
														</div>
														<!--end::Label-->
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" checked="checked" />
															<span class="form-check-label fw-semibold text-muted">Allowed</span>
														</label>
														<!--end::Switch-->
													</div>
													<!--end::Notice-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - View Users-->
									<!--begin::Modal - Users Search-->
									<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header pb-0 border-0 justify-content-end">
													<!--begin::Close-->
													<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--begin::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
													<!--begin::Content-->
													<div class="text-center mb-13">
														<h1 class="mb-3">Search Users</h1>
														<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
													</div>
													<!--end::Content-->
													<!--begin::Search-->
													<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
														<!--begin::Form-->
														<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
															<!--begin::Hidden input(Added to disable form autocomplete)-->
															<input type="hidden" />
															<!--end::Hidden input-->
															<!--begin::Icon-->
															<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
															<!--end::Input-->
															<!--begin::Spinner-->
															<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
															</span>
															<!--end::Spinner-->
															<!--begin::Reset-->
															<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
																<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
															<!--end::Reset-->
														</form>
														<!--end::Form-->
														<!--begin::Wrapper-->
														<div class="py-5">
															<!--begin::Suggestions-->
															<div data-kt-search-element="suggestions">
																<!--begin::Heading-->
																<h3 class="fw-semibold mb-5">Recently searched:</h3>
																<!--end::Heading-->
																<!--begin::Users-->
																<div class="mh-375px scroll-y me-n7 pe-7">
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
																			<span class="badge badge-light">Art Director</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
																			<span class="badge badge-light">Marketing Analytic</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Max Smith</span>
																			<span class="badge badge-light">Software Enginer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
																			<span class="badge badge-light">Web Developer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																	<!--begin::User-->
																	<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
																			<span class="badge badge-light">UI/UX Designer</span>
																		</div>
																		<!--end::Info-->
																	</a>
																	<!--end::User-->
																</div>
																<!--end::Users-->
															</div>
															<!--end::Suggestions-->
															<!--begin::Results(add d-none to below element to hide the users list by default)-->
															<div data-kt-search-element="results" class="d-none">
																<!--begin::Users-->
																<div class="mh-375px scroll-y me-n7 pe-7">
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																				<div class="fw-semibold text-muted">smith@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																				<div class="fw-semibold text-muted">melody@altbox.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
																				<div class="fw-semibold text-muted">max@kt.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																				<div class="fw-semibold text-muted">sean@dellito.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																				<div class="fw-semibold text-muted">brian@exchange.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																				<div class="fw-semibold text-muted">mik@pex.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																				<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																				<div class="fw-semibold text-muted">olivia@corpmail.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																				<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																				<div class="fw-semibold text-muted">dam@consilting.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																				<div class="fw-semibold text-muted">emma@intenso.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																				<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																				<div class="fw-semibold text-muted">robert@benko.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
																				<div class="fw-semibold text-muted">miller@mapple.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																				<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2" selected="selected">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																				<div class="fw-semibold text-muted">ethan@loop.com.au</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1" selected="selected">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																	<!--begin::Separator-->
																	<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
																	<!--end::Separator-->
																	<!--begin::User-->
																	<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
																		<!--begin::Details-->
																		<div class="d-flex align-items-center">
																			<!--begin::Checkbox-->
																			<label class="form-check form-check-custom form-check-solid me-5">
																				<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
																			</label>
																			<!--end::Checkbox-->
																			<!--begin::Avatar-->
																			<div class="symbol symbol-35px symbol-circle">
																				<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Details-->
																			<div class="ms-5">
																				<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																				<div class="fw-semibold text-muted">smith@kpmg.com</div>
																			</div>
																			<!--end::Details-->
																		</div>
																		<!--end::Details-->
																		<!--begin::Access menu-->
																		<div class="ms-2 w-100px">
																			<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																				<option value="1">Guest</option>
																				<option value="2">Owner</option>
																				<option value="3" selected="selected">Can Edit</option>
																			</select>
																		</div>
																		<!--end::Access menu-->
																	</div>
																	<!--end::User-->
																</div>
																<!--end::Users-->
																<!--begin::Actions-->
																<div class="d-flex flex-center mt-15">
																	<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
																	<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
																</div>
																<!--end::Actions-->
															</div>
															<!--end::Results-->
															<!--begin::Empty-->
															<div data-kt-search-element="empty" class="text-center d-none">
																<!--begin::Message-->
																<div class="fw-semibold py-10">
																	<div class="text-gray-600 fs-3 mb-2">No users found</div>
																	<div class="text-muted fs-6">Try to search by username, full name or email...</div>
																</div>
																<!--end::Message-->
																<!--begin::Illustration-->
																<div class="text-center px-5">
																	<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
																</div>
																<!--end::Illustration-->
															</div>
															<!--end::Empty-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Search-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Users Search-->
									<!--end::Modals-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							<!--begin::Footer-->
							<div id="kt_app_footer" class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://keenthemes.com/products/oswald-html-pro" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none border-0 rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="#" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="#" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-flag fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="#" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="#" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-semibold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-sms fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<i class="ki-duotone ki-basket fs-2 text-gray-500">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
										</i>
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="#" class="btn btn-bg-body text-primary">View All Activities
					<i class="ki-duotone ki-arrow-right fs-3 text-primary">
						<span class="path1"></span>
						<span class="path2"></span>
					</i></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
			<!--begin::Messenger-->
			<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
				<!--begin::Card header-->
				<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
					<!--begin::Title-->
					<div class="card-title">
						<!--begin::User-->
						<div class="d-flex justify-content-center flex-column me-3">
							<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
							<!--begin::Info-->
							<div class="mb-0 lh-1">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Active</span>
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Menu-->
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-dots-square fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
								</div>
								<!--end::Heading-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-3">
										<span class="menu-title">Groups</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-1">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
							<i class="ki-duotone ki-cross-square fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body" id="kt_drawer_chat_messenger_body">
					<!--begin::Messages-->
					<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">2 mins</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">5 mins</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">1 Hour</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">2 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">3 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">4 Hours</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">5 Hours</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
						<!--begin::Message(template for out)-->
						<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span class="text-muted fs-7 mb-1">Just now</span>
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for out)-->
						<!--begin::Message(template for in)-->
						<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
										<span class="text-muted fs-7 mb-1">Just now</span>
									</div>
									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(template for in)-->
					</div>
					<!--end::Messages-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
					<!--begin::Input-->
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
					<!--end::Input-->
					<!--begin:Toolbar-->
					<div class="d-flex flex-stack">
						<!--begin::Actions-->
						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-paper-clip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
								<i class="ki-duotone ki-cloud-add fs-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</button>
						</div>
						<!--end::Actions-->
						<!--begin::Send-->
						<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
						<!--end::Send-->
					</div>
					<!--end::Toolbar-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--begin::Chat drawer-->
		<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
			<!--begin::Messenger-->
			<div class="card card-flush w-100 rounded-0">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Title-->
					<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
					<!--end::Title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
							<i class="ki-duotone ki-cross fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body hover-scroll-overlay-y h-400px pt-5">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
								<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 350</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
								<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
								<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 150</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
								<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 650</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
								<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 720</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
					<!--begin::Separator-->
					<div class="separator separator-dashed my-6"></div>
					<!--end::Separator-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column me-3">
							<!--begin::Section-->
							<div class="mb-3">
								<a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
								<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
							</div>
							<!--end::Section-->
							<!--begin::Section-->
							<div class="d-flex align-items-center">
								<span class="fw-bold text-gray-800 fs-5">$ 430</span>
								<span class="text-muted mx-2">for</span>
								<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
								<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
									<i class="ki-duotone ki-minus fs-4"></i>
								</a>
								<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
									<i class="ki-duotone ki-plus fs-4"></i>
								</a>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Pic-->
						<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
							<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
						</div>
						<!--end::Pic-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer">
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Total</span>
						<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="d-flex flex-stack">
						<span class="fw-bold text-gray-600">Sub total</span>
						<span class="text-primary fw-bolder fs-5">$ 246.35</span>
					</div>
					<!--end::Item-->
					<!--end::Action-->
					<div class="d-flex justify-content-end mt-9">
						<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Messenger-->
		</div>
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
								<!--begin::Indicator label-->
								<span class="indicator-label">Upgrade Plan</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Create Project-->
		<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-9">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create Project</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y m-5">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Nav-->
								<div class="stepper-nav justify-content-center py-2">
									<!--begin::Step 1-->
									<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Project Type</h3>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Project Settings</h3>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Budget</h3>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Build A Team</h3>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Set First Target</h3>
									</div>
									<!--end::Step 5-->
									<!--begin::Step 6-->
									<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Upload Files</h3>
									</div>
									<!--end::Step 6-->
									<!--begin::Step 7-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<h3 class="stepper-title">Completed</h3>
									</div>
									<!--end::Step 7-->
								</div>
								<!--end::Nav-->
								<!--begin::Form-->
								<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post">
									<!--begin::Type-->
									<div class="current" data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-7 pb-lg-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Project Type</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a></div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-15" data-kt-buttons="true">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
													<!--begin::Input-->
													<input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="d-flex">
														<!--begin::Icon-->
														<i class="ki-duotone ki-profile-circle fs-3hx">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Project</span>
															<span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
													<!--begin::Input-->
													<input class="btn-check" type="radio" name="project_type" value="2" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="d-flex">
														<!--begin::Icon-->
														<i class="ki-duotone ki-rocket fs-3hx">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="ms-4">
															<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team Project</span>
															<span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
													<span class="indicator-label">Project Settings</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Type-->
									<!--begin::Settings-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Project Settings</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a></div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="inputGroupFile02"
													accept="img-jobs/*" multiple>
												<label class="custom-file-label" for="inputGroupFile02">Choose image
													files</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">เลือกจังหวัด</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="" id="select_province">
													<option></option>
													<option data-id="0">ทั้้งหมด</option>
													<option data-id="1">กรุงเทพมหานคร</option>
													<option data-id="2">สมุทรปราการ</option>
													<option data-id="3">นนทบุรี</option>
													<option data-id="4">ปทุมธานี</option>
													<option data-id="5">พระนครศรีอยุธยา</option>
													<option data-id="6">อ่างทอง</option>
													<option data-id="7">ลพบุรี</option>
													<option data-id="8">สิงห์บุรี</option>
													<option data-id="9">ชัยนาท</option>
													<option data-id="10">สระบุรี</option>
													<option data-id="11">ชลบุรี</option>
													<option data-id="12">ระยอง</option>
													<option data-id="13">จันทบุรี</option>
													<option data-id="14">ตราด</option>
													<option data-id="15">ฉะเชิงเทรา</option>
													<option data-id="16">ปราจีนบุรี</option>
													<option data-id="17">นครนายก</option>
													<option data-id="18">สระแก้ว</option>
													<option data-id="19">นครราชสีมา</option>
													<option data-id="20">บุรีรัมย์</option>
													<option data-id="21">สุรินทร์</option>
													<option data-id="22">ศรีสะเกษ</option>
													<option data-id="23">อุบลราชธานี</option>
													<option data-id="24">ยโสธร</option>
													<option data-id="25">ชัยภูมิ</option>
													<option data-id="26">อำนาจเจริญ</option>
													<option data-id="27">บึงกาฬ</option>
													<option data-id="28">หนองบัวลำภู</option>
													<option data-id="29">ขอนแก่น</option>
													<option data-id="30">อุดรธานี</option>
													<option data-id="31">เลย</option>
													<option data-id="32">หนองคาย</option>
													<option data-id="33">มหาสารคาม</option>
													<option data-id="34">ร้อยเอ็ด</option>
													<option data-id="35">กาฬสินธุ์</option>
													<option data-id="36">สกลนคร</option>
													<option data-id="37">นครพนม</option>
													<option data-id="38">มุกดาหาร</option>
													<option data-id="39">เชียงใหม่</option>
													<option data-id="40">ลำพูน</option>
													<option data-id="41">ลำปาง</option>
													<option data-id="42">อุตรดิตถ์</option>
													<option data-id="43">แพร่</option>
													<option data-id="44">น่าน</option>
													<option data-id="45">พะเยา</option>
													<option data-id="46">เชียงราย</option>
													<option data-id="47">แม่ฮ่องสอน</option>
													<option data-id="48">นครสวรรค์</option>
													<option data-id="49">อุทัยธานี</option>
													<option data-id="50">กำแพงเพชร</option>
													<option data-id="51">ตาก</option>
													<option data-id="52">สุโขทัย</option>
													<option data-id="53">พิษณุโลก</option>
													<option data-id="54">พิจิตร</option>
													<option data-id="55">เพชรบูรณ์</option>
													<option data-id="56">ราชบุรี</option>
													<option data-id="57">กาญจนบุรี</option>
													<option data-id="58">สุพรรณบุรี</option>
													<option data-id="59">นครปฐม</option>
													<option data-id="60">สมุทรสาคร</option>
													<option data-id="61">สมุทรสงคราม</option>
													<option data-id="62">เพชรบุรี</option>
													<option data-id="63">ประจวบคีรีขันธ์</option>
													<option data-id="64">นครศรีธรรมราช</option>
													<option data-id="65">กระบี่</option>
													<option data-id="66">พังงา</option>
													<option data-id="67">ภูเก็ต</option>
													<option data-id="68">สุราษฎร์ธานี</option>
													<option data-id="69">ระนอง</option>
													<option data-id="70">ชุมพร</option>
													<option data-id="71">สงขลา</option>
													<option data-id="72">สตูล</option>
													<option data-id="73">ตรัง</option>
													<option data-id="74">พัทลุง</option>
													<option data-id="75">ปัตตานี</option>
													<option data-id="76">ยะลา</option>
													<option data-id="77">นราธิวาส</option>
												</select>

												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
													<span class="required">หัวข้องาน</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify project name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" placeholder="" value="" name="settings_name" id="input_title" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">อธิบายรายละเอียดงาน</label>
												<!--end::Label-->
												<!--begin::Input-->
												<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Description" name="settings_description" id="input_desc"></textarea>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">เลือกหมวดงาน</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer" id="select_job_type">
													<option></option>
													<option value="ออกแบบ-ตกแต่งภายใน" data-id="1">
														ออกแบบ-ตกแต่งภายใน</option>
													<option value="สร้างบ้าน-สร้างอาคาร" data-id="2">
														สร้างบ้าน-สร้างอาคาร</option>
													<option value="ต่อเติมบ้าน-ซ่อมบ้าน" data-id="3">
														ต่อเติมบ้าน-ซ่อมบ้าน</option>
													<option value="ออกแบบ-ติดตั้งระบบไฟฟ้า" data-id="4">
														ออกแบบ-ติดตั้งระบบไฟฟ้า</option>
													<option value="ออกแบบ-ติดตั้งระบบประปา" data-id="5">
														ออกแบบ-ติดตั้งระบบประปา</option>
													<option value="ติดตั้งแอร์-ซ่อมล้างแอร์" data-id="6">
														ติดตั้งแอร์-ซ่อมล้างแอร์</option>
													<option value="โครงสร้างอาคาร" data-id="7">
														โครงสร้างอาคาร</option>
													<option value="โครงสร้างเหล็ก" data-id="8">
														โครงสร้างเหล็ก</option>
													<option value="รื้อถอน-รื้ออาคาร-ทุบตึก" data-id="9">
														รื้อถอน-รื้ออาคาร-ทุบตึก</option>
													<option value="ทาสี-ห้อง-บ้าน-อาคาร" data-id="10">
														ทาสี-ห้อง-บ้าน-อาคาร</option>
													<option value="เฟอร์นิเจอร์-Built-in" data-id="11">
														เฟอร์นิเจอร์-Built-in</option>
													<option value="เขียนแบบ-ออกแบบ-3D" data-id="12">
														เขียนแบบ-ออกแบบ-3D</option>
													<option value="งานกระเบื้อง-ปูกระเบื้อง" data-id="13">
														งานกระเบื้อง-ปูกระเบื้อง</option>
													<option value="ผ้าม่าน-พรม-มู่ลี่" data-id="14">
														ผ้าม่าน-พรม-มู่ลี่</option>
													<option value="เหล็ก-สแตนเลส-อลูมิเนียม" data-id="15">
														เหล็ก-สแตนเลส-อลูมิเนียม</option>
													<option value="พลาสติก-โพลีคาร์บอเนต" data-id="16">
														พลาสติก-โพลีคาร์บอเนต</option>
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">Release Date</label>
												<!--end::Label-->
												<!--begin::Wrapper-->
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Input-->
													<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
													<!--end::Input-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="required fs-6 fw-semibold">Notifications</label>
														<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
													</div>
													<!--end::Label-->
													<!--begin::Checkboxes-->
													<div class="d-flex">
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid me-10">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="settings_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Email</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="settings_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Phone</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
													</div>
													<!--end::Checkboxes-->
												</div>
												<!--begin::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">Project Type</button>
												<button type="button" class="btn btn-lg btn-primary" id="btn_save">
													<span class="indicator-label">submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Settings-->
									<!--begin::Budget-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Budget</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a></div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
													<span class="required">Setup Budget</span>
													<span class="ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-dark fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Dialer-->
												<div class="position-relative w-lg-250px" id="kt_modal_create_project_budget_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
													<!--begin::Decrease control-->
													<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
														<i class="ki-duotone ki-minus-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
													<!--end::Decrease control-->
													<!--begin::Input control-->
													<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget_setup" readonly="readonly" value="$50" />
													<!--end::Input control-->
													<!--begin::Increase control-->
													<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
														<i class="ki-duotone ki-plus-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
													<!--end::Increase control-->
												</div>
												<!--end::Dialer-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
													<!--begin::Col-->
													<div class="col-md-6 col-lg-12 col-xxl-6">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
																<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 col-lg-12 col-xxl-6">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="budget_usage" value="2" />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
																<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
														<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
													</div>
													<!--end::Label-->
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
														<span class="form-check-label fw-semibold text-muted">Allowed</span>
													</label>
													<!--end::Switch-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="budget-previous">Project Settings</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="budget-next">
													<span class="indicator-label">Build Team</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Budget-->
									<!--begin::Team-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Build a Team</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a></div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" placeholder="Add project memnbers by name or email.." name="invite_teammates" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-8">
												<!--begin::Label-->
												<div class="fs-6 fw-semibold mb-2">Team Members</div>
												<!--end::Label-->
												<!--begin::Users-->
												<div class="mh-300px scroll-y me-n7 pe-7">
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
																<div class="fw-semibold text-muted">smith@kpmg.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
																<div class="fw-semibold text-muted">melody@altbox.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1" selected="selected">Guest</option>
																<option value="2">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
																<div class="fw-semibold text-muted">max@kt.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
																<div class="fw-semibold text-muted">sean@dellito.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
																<div class="fw-semibold text-muted">brian@exchange.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																<div class="fw-semibold text-muted">mik@pex.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
																<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
																<div class="fw-semibold text-muted">olivia@corpmail.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
																<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1" selected="selected">Guest</option>
																<option value="2">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
																<div class="fw-semibold text-muted">dam@consilting.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
																<div class="fw-semibold text-muted">emma@intenso.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
																<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1" selected="selected">Guest</option>
																<option value="2">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
																<div class="fw-semibold text-muted">robert@benko.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
																<div class="fw-semibold text-muted">miller@mapple.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
																<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2" selected="selected">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
																<div class="fw-semibold text-muted">ethan@loop.com.au</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1" selected="selected">Guest</option>
																<option value="2">Owner</option>
																<option value="3">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Details-->
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-5">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
																<div class="fw-semibold text-muted">mik@pex.com</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Details-->
														<!--begin::Access menu-->
														<div class="ms-2 w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
																<option value="1">Guest</option>
																<option value="2">Owner</option>
																<option value="3" selected="selected">Can Edit</option>
															</select>
														</div>
														<!--end::Access menu-->
													</div>
													<!--end::User-->
												</div>
												<!--end::Users-->
											</div>
											<!--end::Input group-->
											<!--begin::Notice-->
											<div class="d-flex flex-stack mb-15">
												<!--begin::Label-->
												<div class="me-5 fw-semibold">
													<label class="fs-6">Adding Users by Team Members</label>
													<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" checked="checked" />
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Notice-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="team-previous">Budget</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="team-next">
													<span class="indicator-label">Set Target</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Team-->
									<!--begin::Targets-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Set First Target</h1>
												<!--end::Title-->
												<!--begin::Title-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a></div>
												<!--end::Title-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<label class="fs-6 fw-semibold mb-2">Target Title</label>
												<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="Project Launch" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row g-9 mb-8">
												<!--begin::Col-->
												<div class="col-md-6 fv-row">
													<label class="required fs-6 fw-semibold mb-2">Assign</label>
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
														<option></option>
														<option value="1">Karina Clark</option>
														<option value="2" selected="selected">Robert Doe</option>
														<option value="3">Niel Owen</option>
														<option value="4">Olivia Wild</option>
														<option value="5">Sean Bean</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row">
													<label class="required fs-6 fw-semibold mb-2">Due Date</label>
													<div class="position-relative d-flex align-items-center">
														<!--begin::Icon-->
														<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Datepicker-->
														<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
														<!--end::Datepicker-->
													</div>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<label class="fs-6 fw-semibold mb-2">Target Details</label>
												<textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<label class="required fs-6 fw-semibold mb-2">Tags</label>
												<input class="form-control form-control-solid" value="Important, Urgent" name="target_tags" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
														<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
													</div>
													<!--end::Label-->
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
														<span class="form-check-label fw-semibold text-muted">Allowed</span>
													</label>
													<!--end::Switch-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="fs-6 fw-semibold">Notifications</label>
														<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
													</div>
													<!--end::Label-->
													<!--begin::Checkboxes-->
													<div class="d-flex">
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid me-10">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="target_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Email</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
														<!--begin::Checkbox-->
														<label class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="target_notifications[]" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-semibold">Phone</span>
															<!--end::Label-->
														</label>
														<!--end::Checkbox-->
													</div>
													<!--end::Checkboxes-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">Build a Team</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="targets-next">
													<span class="indicator-label">Upload Files</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Targets-->
									<!--begin::Files-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-12">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Upload Files</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a></div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Dropzone-->
												<div class="dropzone" id="kt_modal_create_project_files_upload">
													<!--begin::Message-->
													<div class="dz-message needsclick">
														<!--begin::Icon-->
														<i class="ki-duotone ki-file-up fs-3hx text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Info-->
														<div class="ms-4">
															<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
															<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
														</div>
														<!--end::Info-->
													</div>
												</div>
												<!--end::Dropzone-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-8">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
												<!--End::Label-->
												<!--begin::Files-->
												<div class="mh-300px scroll-y me-n7 pe-7">
													<!--begin::File-->
													<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px">
																<img src="assets/media/svg/files/pdf.svg" alt="icon" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica Technical Requirements</a>
																<div class="fw-semibold text-muted">230kb</div>
															</div>
															<!--end::Details-->
														</div>
														<!--begin::Menu-->
														<div class="min-w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																<option></option>
																<option value="1">Remove</option>
																<option value="2">Modify</option>
																<option value="3">Select</option>
															</select>
														</div>
														<!--end::Menu-->
													</div>
													<!--end::File-->
													<!--begin::File-->
													<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px">
																<img src="assets/media/svg/files/doc.svg" alt="icon" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree CURD draftplan</a>
																<div class="fw-semibold text-muted">3.6mb</div>
															</div>
															<!--end::Details-->
														</div>
														<!--begin::Menu-->
														<div class="min-w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																<option></option>
																<option value="1">Remove</option>
																<option value="2">Modify</option>
																<option value="3">Select</option>
															</select>
														</div>
														<!--end::Menu-->
													</div>
													<!--end::File-->
													<!--begin::File-->
													<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px">
																<img src="assets/media/svg/files/css.svg" alt="icon" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User CRUD Styles</a>
																<div class="fw-semibold text-muted">85kb</div>
															</div>
															<!--end::Details-->
														</div>
														<!--begin::Menu-->
														<div class="min-w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																<option></option>
																<option value="1">Remove</option>
																<option value="2">Modify</option>
																<option value="3">Select</option>
															</select>
														</div>
														<!--end::Menu-->
													</div>
													<!--end::File-->
													<!--begin::File-->
													<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px">
																<img src="assets/media/svg/files/ai.svg" alt="icon" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Initial Logo</a>
																<div class="fw-semibold text-muted">40kb</div>
															</div>
															<!--end::Details-->
														</div>
														<!--begin::Menu-->
														<div class="min-w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																<option></option>
																<option value="1">Remove</option>
																<option value="2">Modify</option>
																<option value="3">Select</option>
															</select>
														</div>
														<!--end::Menu-->
													</div>
													<!--end::File-->
													<!--begin::File-->
													<div class="d-flex flex-stack py-4">
														<div class="d-flex align-items-center">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px">
																<img src="assets/media/svg/files/tif.svg" alt="icon" />
															</div>
															<!--end::Avatar-->
															<!--begin::Details-->
															<div class="ms-6">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower Hill Bilboard</a>
																<div class="fw-semibold text-muted">27mb</div>
															</div>
															<!--end::Details-->
														</div>
														<!--begin::Menu-->
														<div class="min-w-100px">
															<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
																<option></option>
																<option value="1">Remove</option>
																<option value="2">Modify</option>
																<option value="3">Select</option>
															</select>
														</div>
														<!--end::Menu-->
													</div>
													<!--end::File-->
												</div>
												<!--end::Files-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-8">
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack">
													<!--begin::Label-->
													<div class="me-5">
														<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
														<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
													</div>
													<!--end::Label-->
													<!--begin::Switch-->
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
														<span class="form-check-label fw-semibold text-muted">Allowed</span>
													</label>
													<!--end::Switch-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex flex-stack">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="files-previous">Set First Target</button>
												<button type="button" class="btn btn-lg btn-primary" data-kt-element="files-next">
													<span class="indicator-label">Complete</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Files-->
									<!--begin::Complete-->
									<div data-kt-stepper-element="content">
										<!--begin::Wrapper-->
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-12 text-center">
												<!--begin::Title-->
												<h1 class="fw-bold text-dark">Project Created!</h1>
												<!--end::Title-->
												<!--begin::Description-->
												<div class="text-muted fw-semibold fs-4">If you need more info, please check how to create project</div>
												<!--end::Description-->
											</div>
											<!--end::Heading-->
											<!--begin::Actions-->
											<div class="d-flex flex-center pb-20">
												<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Project</button>
												<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Project</a>
											</div>
											<!--end::Actions-->
											<!--begin::Illustration-->
											<div class="text-center px-4">
												<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Complete-->
								</form>
								<!--end::Form-->
							</div>
							<!--begin::Container-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create Project-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/projects/list/list.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
		<!--end::Custom Javascript-->
		<script>
			(function () {
				var Maha = function () {

					var job_id = null;
					var province_id = null;

					return {
						
						onChangeJobs: function () {
							// เมื่อมีการเปลี่ยนค่าใน <select>
							$("#select_province").change(function () {
								// ดึงค่า `data-id` จาก option ที่ถูกเลือก
								var selectedOption = $(this).find("option:selected");
								province_id = selectedOption.data("id");

								// แสดงค่า `data-id` ใน console (เพื่อตรวจสอบ)
								// console.log("ค่า data-id ที่ถูกเลือก: " + province_id);

								// ตอนนี้คุณสามารถใช้ค่า `data-id` ที่ดึงมาได้ตามที่คุณต้องการ
							});
							$("#select_job_type").change(function () {
								// ดึงค่า `data-id` จาก option ที่ถูกเลือก
								var selectedOption = $(this).find("option:selected");
								job_id = selectedOption.data("id");

								// แสดงค่า `data-id` ใน console (เพื่อตรวจสอบ)
								console.log("ค่า data-id ที่ถูกเลือก: " + job_id);

								// ตอนนี้คุณสามารถใช้ค่า `data-id` ที่ดึงมาได้ตามที่คุณต้องการ
							});
						},
						onClickBtnSave: function () {
							$('#btn_save').on('click', function () {
								console.log("ttt");
								Maha.submitJobs();

							});
						},
						submitJobs: function () {
							var jobs_title = $('#input_title').val();
							var description = $('#input_desc').val();
							var data = new FormData();
							data.append('jobs_title', jobs_title);
							data.append('description', description);
							data.append('jobs_id', job_id);
							// data.append('jobs_id', job_id);
							// ดึงไฟล์ภาพที่เลือกแล้วและเพิ่มไปยัง FormData
							var files = $('#inputGroupFile02')[0].files;
							for (var i = 0; i < files.length; i++) {
								data.append('img_url[]', files[i]);
							}

							$.ajax({
								url: "../db_websubmit_job.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
								method: "POST",
								data: data, // ส่งค่า product_id ไปยัง cart.php
								processData: false,  // อย่าจัดการข้อมูลเอง
								contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
								success: function (response) {
									// จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
									if (response === "success") {
										window.location = '../index.php';
									} else {
										alert(response);
									}
								}
							});

						},





						init: function () {
							Maha.onClickBtnSave();
							Maha.onChangeJobs();
						}
					}
				}();
				$(document).ready(function () {
					Maha.init();
				});
			})();

		</script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
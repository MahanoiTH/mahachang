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

<head>
	<base href="../../" />
	<title>Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme by Keenthemes</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords"
		content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
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
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank">
	<!--begin::Theme mode setup on page load-->
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Authentication - Sign-up -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
					<!--begin::Header-->
					<div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">

						<!--begin::Title-->
						<h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to มาหาช่าง</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<p class="d-none d-lg-block fw-semibold fs-2 text-white"></p>
						<!--end::Description-->
					</div>
					<!--end::Header-->
					<!--begin::Illustration-->
					<div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
						style="background-image: url(assets/media/illustrations/sketchy-1/17.png)"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-600px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" action="../business_register_db.php" novalidate="novalidate"
							data-kt-redirect-url="../dist/authentication/sign-in/basic.php" id="kt_sign_up_form"
							method="post">
							<!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">กรอกข้อมูลของคุณ สำหรับสมัครสมาชิก</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-semibold fs-4">Already have an account?
									<a href="../dist/authentication/sign-in/basic.php" class="link-primary fw-bold">Sign
										in here</a>
								</div>
								<!--end::Link-->
							</div>
							<!--end::Heading-->
							<!--begin::Action-->
							<!--end::Action-->
							<!--begin::Separator-->
							<div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div>
							<!--end::Separator-->
							<!--begin::Input group-->
							<div class="row fv-row mb-7">
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bold text-dark fs-6">ชื่อผู้ใช้งาน</label>
									<input class="form-control form-control-lg form-control-solid" type="text"
										placeholder="" name="username" autocomplete="off" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bold text-dark fs-6">ชื่อบริษัท</label>
									<input class="form-control form-control-lg form-control-solid" type="text"
										placeholder="" name="business_name" autocomplete="off" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bold text-dark fs-6">เบอร์โทรศัพท์</label>
								<input class="form-control form-control-lg form-control-solid" type="tel" placeholder=""
									name="phone" autocomplete="off" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bold text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="email"
									placeholder="" name="email" autocomplete="off" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bold text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" type="password"
											placeholder="" name="password" autocomplete="off" />
										<span
											class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
											data-kt-password-meter-control="visibility">
											<i class="ki-duotone ki-eye-slash fs-2"></i>
											<i class="ki-duotone ki-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3"
										data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
										</div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
										</div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
										</div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
									symbols.</div>
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<label class="form-label fw-bold text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid" type="password"
									placeholder="" name="confirm-password" autocomplete="off" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<label class="form-check form-check-custom form-check-solid form-check-inline">
									<input class="form-check-input" type="checkbox" name="toc" value="1" />
									<span class="form-check-label fw-semibold text-gray-700 fs-6">I Agree
										<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">

									<span class="indicator-label">ลงทะเบียน</span>

									<span class="indicator-progress">Please wait...

										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

								</button>

							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
					<!--begin::Links-->
					<div class="d-flex flex-center fw-semibold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2"
							target="_blank">About</a>
						<a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2"
							target="_blank">Support</a>
						<a href="https://keenthemes.com/products/oswald-html-pro"
							class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-up-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/custom/authentication/sign-up/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->
<!-- BEGIN CUSTOM JAVASCRIPTS -->

<script src="js/DataTables/datatables.min.js"></script>
<script src="assets/plugins/bootbox/bootbox.all.min.js"></script>
<script type="text/javascript">

	//submit new advertising
	var dataTable;
	var start_date = '';
	var end_date = '';
	var ct_name = '';
	var ct_desc = '';
	var ct_order = '';
	var acceptedFiles = [];
	var uploadDropzone;
	var advertising_id = 0;
	var attc_list = [];
	var attc_list_name = [];
	var data_url = 'admin_db_datatable_job.php';
	var submit_jobs_url = "admin_db_submit_job.php";
	var folder_name = 'main_advertising';
	var job_type_id = 1;


	(function () {

		var Maha = function () {

			return {
				onClcikSubmit: function () {
					$('#kt_sign_up_submit').on('click', function () {
						console.log('save');
						var username = $('[name="username"]').val();
						var business_name = $('[name="business_name"]').val();
						var tel = $('[name="phone"]').val();
						var email = $('[name="email"]').val();
						var password = $('[name="password"]').val();
						var data = new FormData();
						data.append('username', username);
						data.append('business_name', business_name);
						data.append('phone', tel);
						data.append('email', email);
						data.append('password', password);
						Maha.submitNewUser(data);
					});
				},
				submitNewUser: function (data) {
					$.ajax({
						url: "../business_register_db.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
						method: "POST",
						data: data, // ส่งค่า product_id ไปยัง cart.php
						processData: false,  // อย่าจัดการข้อมูลเอง
						contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
						success: function (response) {
							console.log(response);
						}
					});
				},






				init: function () {
					Maha.onClcikSubmit();
				}
			}
		}();
		$(document).ready(function () {
			Maha.init();
		});
	})();

</script>
<!-- END CUSTOM JAVASCRIPTS -->

</html>
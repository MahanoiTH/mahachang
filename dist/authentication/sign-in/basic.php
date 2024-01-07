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
	<title>มาหาช่าง</title>
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
<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>

<body id="kt_body" class="app-blank">
	<!--begin::Theme mode setup on page load-->
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
					<!--begin::Header-->
					<div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
						<!--begin::Logo-->
						
						<!--end::Logo-->
						<!--begin::Title-->
						<h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to MAHA CHANG</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<p class="d-none d-lg-block fw-semibold fs-2 text-white">Plan your blog post by choosing a topic
							creating
							<br />an outline and checking facts
						</p>
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
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" 
							 action="#">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h2 class="text-dark mb-3">สำหรับสมาชิกเข้าระบบ</h2>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-semibold fs-4">New Here?
									<a href="../dist/authentication/sign-up/basic.html"
										class="link-primary fw-bold">Create an Account</a>
								</div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bold text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="email"
									autocomplete="off" id="input_email" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="../dist/authentication/sign-in/password-reset.html"
										class="link-primary fs-6 fw-bold"></a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password"
									name="password" autocomplete="off" id="input_password" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
	<script>
		(function () {
			var Maha = function () {

				return {
					onClickLogin: function () {
						$("#kt_sign_in_submit").on('click', function () {
							var email = $("#input_email").val();
							var password = $("#input_password").val();
							$.ajax({
								url: "../db_home_login.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
								method: "POST",
								data: { email: email, password: password }, // ส่งค่า product_id ไปยัง cart.php
								success: function (response) {
									window.location = response;
								}

							});
						});
					},
					onClickBtnLink: function () {
						$("#btn_repair").on('click', function () {
							window.location.href = "repair_search.php";
						});
					},
					setElement: function () {
						$("#btnPay").hide();
						var count = $('.client_taital_main').length;
						if (count > 0) {
							$("#btnPay").show();
						}

					},
					onClickBtnPlyment: function () {
						// จัดการเหตุการณ์คลิกที่ลิงก์ "เพิ่มลงตะกร้า"
						var searchForm = document.getElementById("searchForm");

						// // เมื่อคลิกที่ปุ่มค้นหา
						// searchForm.addEventListener("submit", function (e) {
						//     // ป้องกันการส่งแบบฟอร์ม
						//     e.preventDefault();
						// });
						$("body").on("click", "#btnPay", function (e) {
							e.preventDefault(); // ป้องกันการรีเฟรชหน้าเว็บ

							var active = 0;
							// ส่งข้อมูลไปยัง cart.php โดยใช้ AJAX
							$.ajax({
								url: "payment_db.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
								method: "POST",
								data: { active: active }, // ส่งค่า product_id ไปยัง cart.php
								success: function (response) {
									// จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
									if (response === "success") {
										window.location = 'noti.php';
									} else {
										alert(response);
									}
								}
							});
						});
					},
					deleteProductInCartitem: function () {
						$('body').on('click', '.btn-delete', function () {
							var product_id = $(this).data("id");
							// ส่งข้อมูลไปยัง cart.php โดยใช้ AJAX
							$.ajax({
								url: "delete_product_cartitem.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
								method: "POST",
								data: { product_id: product_id }, // ส่งค่า product_id ไปยัง cart.php
								success: function (response) {
									//จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
									if (response === "SUCCESS") {
										alert("ลบรายการสำเร็จ");
										window.location = 'cart.php';
									} else {
										alert("เกิดข้อผิดพลาดในการลบสินค้าในตะกร้า");
									}
								}
							});
						});
					},
					goBottom: function () {
						setTimeout(function () {
							$('html, body').animate({ scrollTop: 700 }, 'fast');
						}, 100);
					},


					init: function () {
						// Oasis.submitpayment();
						// Maha.goBottom();
						Maha.deleteProductInCartitem();
						Maha.setElement();
						Maha.onClickBtnPlyment();
						Maha.onClickBtnLink();
						Maha.onClickLogin();
					}
				}
			}();
			$(document).ready(function () {
				Maha.init();
			});
		})();

	</script>
</body>
<!--end::Body-->

</html>
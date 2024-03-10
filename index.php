<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
  <meta charset="utf-8">
  <title>มาหาช่าง บริษัท รับเหมาก่อสร้าง</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link
    href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
    rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
    rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
  <!-- BEGIN STYLE CUSTOMIZER -->
  <!-- <div class="color-panel hidden-sm">
    <div class="color-mode-icons icon-color"></div>
    <div class="color-mode-icons icon-color-close"></div>
    <div class="color-mode">
      <p>THEME COLOR</p>
      <ul class="inline">
        <li class="color-red current color-default" data-style="red"></li>
        <li class="color-blue" data-style="blue"></li>
        <li class="color-green" data-style="green"></li>
        <li class="color-orange" data-style="orange"></li>
        <li class="color-gray" data-style="gray"></li>
        <li class="color-turquoise" data-style="turquoise"></li>
      </ul>
    </div>
  </div> -->
  <!-- END BEGIN STYLE CUSTOMIZER -->

  <!-- BEGIN TOP BAR -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <!-- BEGIN TOP BAR LEFT PART -->
        <div class="col-md-6 col-sm-6 additional-shop-info">
          <ul class="list-unstyled list-inline">
            <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
            <!-- BEGIN CURRENCIES -->
            <li class="shop-currencies">
              <a href="javascript:void(0);">€</a>
              <a href="javascript:void(0);">£</a>
              <a href="javascript:void(0);" class="current">$</a>
            </li>
            <!-- END CURRENCIES -->
            <!-- BEGIN LANGS -->
            <li class="langs-block">
              <a href="javascript:void(0);" class="current">Thai </a>
              <div class="langs-block-others-wrapper">
                <div class="langs-block-others">
                  <a href="javascript:void(0);">French</a>
                  <a href="javascript:void(0);">Germany</a>
                  <a href="javascript:void(0);">Turkish</a>
                </div>
              </div>
            </li>
            <!-- END LANGS -->
          </ul>
        </div>
        <!-- END TOP BAR LEFT PART -->
        <!-- BEGIN TOP BAR MENU -->
        <div class="col-md-6 col-sm-6 additional-nav">
          <ul class="list-unstyled list-inline pull-right">
            <!-- <li><a href="shop-account.html">My Account</a></li> -->
            <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li> -->
            <!-- <li><a href="shop-checkout.html">Checkout</a></li> -->
            <?php
            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
              // ถ้าเข้าสู่ระบบแล้ว แสดงลิงก์ "Logout"
              echo '<li><a href="db_home_logout.php">Log Out</a></li>';
            } else {
              echo '<li><a href="dist/authentication/sign-in/basic.php">Log In</a></li>';
            }
            ?>

          </ul>
        </div>
        <!-- END TOP BAR MENU -->
      </div>
    </div>
  </div>
  <!-- END TOP BAR -->

  <!-- BEGIN HEADER -->
  <?php
  if (isset($_SESSION['email']) && $_SESSION['email'] == "65108120039@rpu.ac.th") { // ตรวจสอบว่าฟังก์ชัน addmin คืนค่า true
    include('admin_header.php');
  } else {
    include('user_header.php');
  }
  ?>

  <!-- Header END -->

  <!-- BEGIN SLIDER -->
  <div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="item carousel-item-four active">
          <div class="container">
            <div class="carousel-position-four text-center">
              <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase"
                data-animation="animated fadeInDown">
                มาหา <br /><span class="color-red-v2">ช่าง</span><br />
              </h2>
              <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">ศูนย์รวม
                บริษัท
                รับเหมาก่อสร้าง</p>
            </div>
          </div>
        </div>

        <!-- Second slide -->
        <div class="item carousel-item-five">
          <div class="container">
            <div class="carousel-position-four text-center">
              <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                Unlimted
              </h2>
              <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                Layout Options
              </p>
              <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                Fully Responsive
              </p>
              <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
            </div>
            <img class="carousel-position-five animate-delay hidden-sm hidden-xs"
              src="assets/pages/img/shop-slider/slide2/price.png" alt="Price" data-animation="animated zoomIn">
          </div>
        </div>

        <!-- Third slide -->
        <div class="item carousel-item-six">
          <div class="container">
            <div class="carousel-position-four text-center">
              <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                Full Admin &amp; Frontend
              </span>
              <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                eCommerce UI
              </p>
              <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                Is Ready For Your Project
              </p>
            </div>
          </div>
        </div>

        <!-- Fourth slide -->
        <div class="item carousel-item-seven">
          <div class="center-block">
            <div class="center-block-wrap">
              <div class="center-block-body">
                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                  The most <br />
                  wanted bijouterie
                </h2>
                <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
        data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </a>
      <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
        data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <!-- END SLIDER -->

  <div class="main">
    <div class="container">
      <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SALE PRODUCT -->
        <h2>ประกาศโดยผู้สนับสนุน สนใจแสดงโฆษณาตำแหน่งนี้ โทร. 060 6542 111</h2>
        <div class="col-md-12 sale-product">
          <div class="owl-carousel owl-carousel5" id="content_mian_advertising">
            <div>
              <div class="product-item ct-main-advertising" data-desc="#">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a data-btn="btn_view_main_advertising" href="#product-pop-up"
                      class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                <div class="pi-price">ติดต่อ:<span></span></div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item ct-main-advertising" data-desc="#">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a data-btn="btn_view_main_advertising" href="#product-pop-up"
                      class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:<span></span></div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item ct-main-advertising" data-desc="#">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a data-btn="btn_view_main_advertising" href="#product-pop-up"
                      class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:<span></span></div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item ct-main-advertising" data-desc="#">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product4.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a data-btn="btn_view_main_advertising" href="#product-pop-up"
                      class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="javascript:;">Berry Lace Dress4</a></h3>
                <div class="pi-price">ติดต่อ:<span></span></div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item ct-main-advertising" data-desc="#">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product5.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product5.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a data-btn="btn_view_main_advertising" href="#product-pop-up"
                      class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                <div class="pi-price">ติดต่อ:<span></span></div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>

          </div>
        </div>
        <!-- END SALE PRODUCT -->
      </div>
      <!-- END SALE PRODUCT & NEW ARRIVALS -->
      <!-- BEGIN SEARCH BOX -->
      <div class="search-box margin-bottom-25" style="display: block;">
        <form>
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control">
            <span class="input-group-btn">
              <!-- <button class="btn btn-primary" type="submit">Search</button> -->
              <button class="btn btn-primary" id="btn_search">Search</button>
            </span>
          </div>
        </form>
      </div>
      <!-- END SEARCH BOX -->
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40 margin-bottom-25">
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar col-md-3 col-sm-4">
          <ul class="list-group margin-bottom-25 sidebar-menu">
            <li class="list-group-item clearfix"><a data-id="1"><i class="fa fa-angle-right"></i>
                งานออกแบบ ตกแต่งภายใน</a></li>
            <li class="list-group-item clearfix"><a data-id="2"><i class="fa fa-angle-right"></i>
                งานระบบแอร์ ระบบปรับอากาศ</a></li>
            <!-- <li class="list-group-item clearfix dropdown">
              <a href="shop-product-list.html">
                <i class="fa fa-angle-right"></i>
                งานระบบแอร์ ระบบปรับอากาศ

              </a>
              <ul class="dropdown-menu">
                <li class="list-group-item dropdown clearfix">
                  <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Shoes </a>
                  <ul class="dropdown-menu">
                    <li class="list-group-item dropdown clearfix">
                      <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                      </ul>
                    </li>
                    <li class="list-group-item dropdown clearfix">
                      <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                        <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
              </ul>
            </li> -->
            <li class="list-group-item clearfix"><a data-id="3"><i class="fa fa-angle-right"></i>
                งานระบบไฟฟ้า งานระบบไฟฟ้า</a></li>
            <li class="list-group-item clearfix"><a data-id="4"><i class="fa fa-angle-right"></i>
                งานระบบประปา งานระบบประปา</a></li>
            <li class="list-group-item clearfix"><a data-id="5"><i class="fa fa-angle-right"></i>
                งานเหล็ก งานโครงสร้างเหล็ก</a></li>
            <li class="list-group-item clearfix"><a data-id="6"><i class="fa fa-angle-right"></i>
                งานปูพื้น ปูพื้นกระเบื้อง</a></li>
            <li class="list-group-item clearfix"><a data-id="7"><i class="fa fa-angle-right"></i>
                งานเขียนแบบ ออกแบบบ้าน</a></li>
            <li class="list-group-item clearfix"><a data-id="8"><i class="fa fa-angle-right"></i>
                งานสร้างบ้าน และอสังหาฯอื่นๆ</a></li>
          </ul>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-8" id="content_jobs">
          <h2>งานออกแบบ ตกแต่งภายใน รายการแนะนำ</h2>
          <div class="owl-carousel owl-carousel3">
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-carousel3">
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/itProduct3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/itProduct3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
                <div class="sticker sticker-sale"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <!-- <a href="javascript:;" class="btn btn-default add2cart">ดูรายละเอียด</a> -->
              </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->


    </div>
  </div>

  <!-- BEGIN BRANDS -->
  <!-- <div class="brands">
    <div class="container">
      <div class="owl-carousel owl-carousel6-brands">
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
        <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
      </div>
    </div>
  </div> -->
  <!-- END BRANDS -->

  <!-- BEGIN STEPS -->
  <div class="steps-block steps-block-red">
    <div class="container">
      <div class="row">
        <div class="col-md-4 steps-block-col">
          <i class="fa fa-truck"></i>
          <div>
            <h2>ค้นหาได้ง่าย</h2>
            <em>Express delivery withing 3 days</em>
          </div>
          <span>&nbsp;</span>
        </div>
        <div class="col-md-4 steps-block-col">
          <i class="fa fa-gift"></i>
          <div>
            <h2>บริการ</h2>
            <em>3 Gifts daily for lucky customers</em>
          </div>
          <span>&nbsp;</span>
        </div>
        <div class="col-md-4 steps-block-col">
          <i class="fa fa-phone"></i>
          <div>
            <h2>ติดต่อโฆษณา</h2>
            <em>โทร. 060 6542 111 mahachang@gmail.com</em>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END STEPS -->

  <!-- BEGIN PRE-FOOTER -->
  <div class="pre-footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN BOTTOM ABOUT BLOCK -->
        <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2>About us</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut
            laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl
            aliquip commodo consequat. </p>
          <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
        </div>
        <!-- END BOTTOM ABOUT BLOCK -->
        <!-- BEGIN BOTTOM INFO BLOCK -->
        <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2>Information</h2>
          <ul class="list-unstyled">
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
          </ul>
        </div>
        <!-- END INFO BLOCK -->

        <!-- BEGIN TWITTER BLOCK -->
        <!-- <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2 class="margin-bottom-0">Latest Tweets</h2>
          <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark"
            data-link-color="#57C8EB" data-widget-id="455411516829736961"
            data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
        </div> -->
        <!-- END TWITTER BLOCK -->

        <!-- BEGIN BOTTOM CONTACTS -->
        <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2>Our Contacts</h2>
          <address class="margin-bottom-40">
            35, Lorem Lis Street, Park Ave<br>
            California, US<br>
            Phone: 300 323 3456<br>
            Fax: 300 323 1456<br>
            Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
            Skype: <a href="skype:metronic">metronic</a>
          </address>
        </div>
        <!-- END BOTTOM CONTACTS -->
      </div>
      <hr>
      <div class="row">
        <!-- BEGIN SOCIAL ICONS -->
        <div class="col-md-6 col-sm-6">
          <ul class="social-icons">
            <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
            <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
            <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
            <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
            <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
            <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
            <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
            <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
          </ul>
        </div>
        <!-- END SOCIAL ICONS -->
        <!-- BEGIN NEWLETTER -->
        <div class="col-md-6 col-sm-6">
          <div class="pre-footer-subscribe-box pull-right">
            <h2>Newsletter</h2>
            <form action="#">
              <div class="input-group">
                <input type="text" placeholder="youremail@mail.com" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- END NEWLETTER -->
      </div>
    </div>
  </div>
  <!-- END PRE-FOOTER -->

  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-4 col-sm-4 padding-top-10">
          2015 © Keenthemes. ALL Rights Reserved.
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN PAYMENTS -->
        <div class="col-md-4 col-sm-4">
          <ul class="list-unstyled list-inline pull-right">
            <li><img src="assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union"
                title="We accept Western Union"></li>
            <li><img src="assets/corporate/img/payments/american-express.jpg" alt="We accept American Express"
                title="We accept American Express"></li>
            <li><img src="assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard"
                title="We accept MasterCard"></li>
            <li><img src="assets/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal">
            </li>
            <li><img src="assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
          </ul>
        </div>
        <!-- END PAYMENTS -->
        <!-- BEGIN POWERED -->
        <div class="col-md-4 col-sm-4 text-right">
          <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
        </div>
        <!-- END POWERED -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->

  <!-- BEGIN fast view of a product -->
  <div id="product-pop-up" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-3">
          <div class="product-main-image">
            <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
          </div>
          <!-- <div class="product-other-images">
            <a href="javascript:;" class="active"><img alt="Berry Lace Dress"
                src="assets/pages/img/products/model3.jpg"></a>
            <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
            <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
          </div> -->
        </div>
        <div class="col-md-6 col-sm-6 col-xs-9">
          <h2>Cool green dress with red bell</h2>
          <div class="price-availability-block clearfix">
            <div class="price">
              <!-- <strong><span>$</span>47.00</strong>
              <em>$<span>62.00</span></em> -->
            </div>
            <div class="availability">
              <!-- Availability: <strong>In Stock</strong> -->
            </div>
          </div>
          <div class="description">
            <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna
              aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
          </div>
          <div class="product-page-options">
            <div class="pull-left">
              <label class="control-label ">ช่องทางติดต่อ:</label>
            </div>
          </div>
          <div class="product-page-options">
            <div class="pull-left">
              <label class="#">โทร:</label>
              <span id="contact_tol">0628881234</span>
            </div>
          </div>
          <div class="product-page-options">
            <div class="pull-left">
              <label class="control-label">อีเมล์:</label>
              <span id="contact_email">hdidal@gmail.com</span>
            </div>
          </div>
          <!-- <div class="product-page-cart">
            <div class="product-quantity">
              <input id="product-quantity" type="text" value="1" readonly name="product-quantity"
                class="form-control input-sm">
            </div>
            <button class="btn btn-primary" type="submit">ดูรายละเอียด</button>
            <a href="shop-item.html" class="btn btn-default">More details</a>
          </div> -->
        </div>

        <div class="sticker sticker-sale"></div>
      </div>
    </div>
  </div>
  <!-- END fast view of a product -->

  <!-- Load javascripts at bottom, this will reduce page load time -->
  <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
  <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
  <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->

  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
  <!-- slider for products -->
  <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
  <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
  <!-- Quantity -->

  <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
  <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function () {
      Layout.init();
      Layout.initOWL();
      Layout.initImageZoom();
      Layout.initTouchspin();
      Layout.initTwitter();
    });
  </script>
  <!-- CUSTOM SCRIPT -->
  <script>
    //Begin Global variable
    var job_data_url = 'db_webrequest_jobs.php';
    var job_title = 'งานออกแบบ ตกแต่งภายใน';
    var folder_name_img = 'img_jobs_approved';
    var global_job_title = 'งานออกแบบ ตกแต่งภายใน';
    //End global variable
    (function () {
      var Maha = function () {

        return {
          onClickLogin: function () {
            $("#btn_login").on('click', function () {
              var email = $("#input_email").val();
              var password = $("#input_password").val();
              $.ajax({
                url: "db_home_login.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
                method: "POST",
                data: { email: email, password: password }, // ส่งค่า product_id ไปยัง cart.php
                success: function (response) {
                  // จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                  if (response === "เข้าสู่ระบบสำเร็จ") {
                    window.location = 'index.php';
                    // alert('สสส');
                  } else {
                    // alert('สส');
                  }
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
          onClickSelectJobType: function () {
            var id = 0;
            $('.sidebar').on('click', 'a', function () {
              id = $(this).data('id');
              var job_name = $(this).text();
              global_job_title = job_name;
              // console.log(id);
              Maha.requestJobData(id);
            });

          },
          onClcikViewJob: function () {
            $('body').on('click', '.fancybox-fast-view', function () {
              // console.log('test');
              var getUrlImg = $(this).closest('.pi-img-wrapper').find('img').attr('src');
              // console.log('get: ' + getUrlImg);

              var title = $(this).closest('.product-item').find('h3').text();
              var img = $(this).closest('.product-item').find('img').attr('src');
              var desc = $(this).closest('.product-item').data('desc');
              // ดึงค่าของ data-src
              var dataSrcValue = $(this).data('src');
              var folder_name = $(this).data('type');
              var id = $(this).data('id');
              var email = $(this).data('email');
              var tol = $(this).data('tol');
              // แยกข้อมูลเป็น list
              var dataList = dataSrcValue.split(',');

              // dataList ตอนนี้คือ array ที่เก็บค่าทุกค่าที่อยู่ใน data-src
              // console.log(dataList);

              // console.log(title);
              // console.log(desc);

              $('#product-pop-up h2').text(title);
              $('#product-pop-up p').text(desc);
              $('#contact_tol').text(tol);
              $('#contact_email').text(email);

              for (var i = 0; i <= dataList.length; i++) {
                var file_url = 'upload/' + folder_name + '/' + id + '/' + dataList[i];
                $("#product-pop-up img:eq(" + i + ")").attr('src', file_url);
              }
              $('.product-main-image img').attr('src', getUrlImg);
            });
          },
          requestMainAdvertising: function () {
            $.ajax({
              url: "db_webrequest_main_advertising.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
              method: "POST",
              // data:, // ส่งค่า product_id ไปยัง cart.php
              success: function (response) {
                //จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                // alert(response);
                Maha.initDisplayMainAdvertising(JSON.parse(response));
              }
            });
          },
          requestJobData: function (id) {
            $.ajax({
              url: job_data_url, // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
              method: "POST",
              data: { job_type_id: id },
              // data:, // ส่งค่า product_id ไปยัง cart.php
              success: function (response) {
                // console.log(response);
                //จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                // alert(response);
                Maha.initDisplayJobs(JSON.parse(response));
              }
            });
          },
          initDisplayMainAdvertising2: function (data) {
            data.forEach(function (e) {

            });
            list_MainAdvertising += `
                                        <div>
                                          <div class="product-item">
                                            <div class="pi-img-wrapper">
                                              <img src="assets/pages/img/products/product1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                              <div>
                                                <a href="assets/pages/img/products/product1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" data-btn="btn_view_main_advertising" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                class="btn btn-default fancybox-fast-view">View</a>
                                              </div>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">ติดต่อ:</div>
                                            <div class="sticker sticker-new"></div>
                                          </div>
                                        </div>
                                      `;
          },
          initDisplayMainAdvertising: function (data) {
            // $('.owl-carousel5').find
            var list_urls = [];
            var list_name = [];
            var list_desc = [];
            var list_dataSrcString = [];
            var list_MainAdvertising = '';
            var folder_name = '';
            var list_id = [];
            var list_tol = [];
            var list_email = [];

            data.forEach(function (e) {
              list_name.push(e.customer_name);
              list_desc.push(e.description);
              list_id.push(e.id);
              list_tol.push(e.phone_number);
              list_email.push(e.email);
              folder_name = e.type_name;
              for (const f of e.file_urls) {
                list_urls.push({ "id": e.id, "file_url": f });
                break;
              }

              var fileUrlArray = e.file_urls;
              var dataSrcString = '';

              // ใช้ลูปเพื่อสร้าง string ที่รวมค่าจากรายการ
              for (var i = 0; i < fileUrlArray.length; i++) {
                dataSrcString += fileUrlArray[i];
                if (i < fileUrlArray.length - 1) {
                  // เพิ่ม comma ระหว่างค่า, ยกเว้นค่าที่สุดท้าย
                  dataSrcString += ',';
                }
              }
              list_dataSrcString.push(dataSrcString);


              list_MainAdvertising += `
                                        <div>
                                          <div class="product-item">
                                            <div class="pi-img-wrapper">
                                              <img src="assets/pages/img/products/product1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                              <div>
                                                <a href="assets/pages/img/products/product1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" data-btn="btn_view_main_advertising" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                class="btn btn-default fancybox-fast-view">View</a>
                                              </div>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">ติดต่อ:</div>
                                            <div class="sticker sticker-new"></div>
                                          </div>
                                        </div>
                                      `;
            });
            // console.log(list_urls);

            $('.ct-main-advertising h3 a').each(function (index) {
              $(this).text(list_name[index]);
            });

            $('.ct-main-advertising').each(function (index) {
              $(this).attr('data-desc', list_desc[index]);
            });

            $('.ct-main-advertising .fancybox-fast-view').each(function (index) {
              $(this).attr('data-type', folder_name);
            });

            $('.ct-main-advertising .fancybox-fast-view').each(function (index) {
              $(this).attr('data-src', list_dataSrcString[index]);
            });

            $('.ct-main-advertising .fancybox-fast-view').each(function (index) {
              $(this).attr('data-id', list_id[index]);
            });

            $('.ct-main-advertising .fancybox-fast-view').each(function (index) {
              $(this).attr('data-tol', list_tol[index] || '-');
            });

            $('.ct-main-advertising .fancybox-fast-view').each(function (index) {
              $(this).attr('data-email', list_email[index] || '-');
            });


            $('.ct-main-advertising img').each(function (index) {
              // สร้าง URL โดยใช้ข้อมูลจาก list_urls
              var file_url = `upload/advertising/${list_urls[index].id}/${list_urls[index].file_url}`;

              // กำหนดค่าของ src ของภาพ
              $(this).attr('src', file_url);
            });


            // $('.owl-carousel5').html(list_MainAdvertising);
          },
          initDisplayJobs: function (data) {
            var slicedData = data.slice(0, Math.floor(data.length / 3) * 3);
            // console.log(slicedData);
            var title = `<h2>${global_job_title}</h2>`;
            var count_job = 1;
            var list_jobs = '';
            list_jobs += title;
            slicedData.forEach(function (e) {
              var fileUrlArray = e.file_urls;

              // ใช้ลูปเพื่อสร้าง string ที่รวมค่าจากรายการ
              var dataSrcString = '';
              for (var i = 0; i < fileUrlArray.length; i++) {
                dataSrcString += fileUrlArray[i];
                if (i < fileUrlArray.length - 1) {
                  // เพิ่ม comma ระหว่างค่า, ยกเว้นค่าที่สุดท้าย
                  dataSrcString += ',';
                }
              }
              if (count_job == 1) {
                list_jobs += `
                                <div class="owl-carousel owl-carousel3 owl-theme owl-loaded">
                                  <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 848.001px;">
                                      <div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                        <div>
                                          <div class="product-item" data-desc="${e.desc}">
                                                  <div class="pi-img-wrapper">
                                                          <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                  class="img-responsive" alt="Berry Lace Dress">
                                                          <div>
                                                                  <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                          class="btn btn-default fancybox-button">Zoom</a>
                                                                  <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                                          class="btn btn-default fancybox-fast-view">View</a>
                                                          </div>
                                                  </div>
                                                  <h3><a href="shop-item.html">${e.name}</a></h3>
                                                  <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                                  <div class="sticker sticker-new"></div>
                                          </div>
                                        </div>
                                    </div>
                               `;
                count_job += 1;
              } else if (count_job == 2) {
                list_jobs += `
                              <div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                      <div>
                                              <div class="product-item" data-desc="${e.desc}">
                                                      <div class="pi-img-wrapper">
                                                              <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                      class="img-responsive" alt="Berry Lace Dress">
                                                              <div>
                                                                      <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                              class="btn btn-default fancybox-button">Zoom</a>
                                                                      <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                                              class="btn btn-default fancybox-fast-view">View</a>
                                                              </div>
                                                      </div>
                                                      <h3><a href="shop-item.html">${e.name}</a></h3>
                                                      <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                              </div>
                                      </div>
                              </div>
                               `;
                count_job += 1;
              } else if (count_job == 3) {
                list_jobs += `
                                              <div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                                              <div>
                                                                      <div class="product-item" data-desc="${e.desc}">
                                                                              <div class="pi-img-wrapper">
                                                                                      <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                                              class="img-responsive" alt="Berry Lace Dress">
                                                                                      <div>
                                                                                              <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                                                                      class="btn btn-default fancybox-button">Zoom</a>
                                                                                              <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                                                                      class="btn btn-default fancybox-fast-view">View</a>
                                                                                      </div>
                                                                              </div>
                                                                              <h3><a href="shop-item.html">${e.name}</a></h3>
                                                                              <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                                                      </div>
                                                              </div>
                                                      </div>
                                              </div>
                                      </div>
                                      <div class="owl-controls">
                                              <div class="owl-nav">
                                                      <div class="owl-prev" style="display: none;">prev</div>
                                                      <div class="owl-next" style="display: none;">next</div>
                                              </div>
                                              <div class="owl-dots" style="">
                                                      <div class="owl-dot active"><span></span></div>
                                              </div>
                                      </div>
                              </div>
                               `;
                count_job = 1; //reset
              }

            });
            // console.log(list_jobs);
            $('#content_jobs').html(list_jobs);
          },
          requestSelect: function () {
            $.ajax({
              url: "db_webrequest_select_jobs_type.php",
              method: "POST",
              processData: false,  // อย่าจัดการข้อมูลเอง
              contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
              success: function (response) {

                var result = JSON.parse(response);
                var option = '';
                result.forEach(function (e) {
                  option += `<li class="list-group-item clearfix"><a data-id="${e.id}"><i class="fa fa-angle-right"></i>${e.name}</a></li>`;
                });
                // console.log(option);
                $('.sidebar-menu').html(option);

                Maha.hideTabMainAdvertising();
              }
            });
          },
          hideTabMainAdvertising: function () {
            $('.list-group-item:first').hide();
          },
          onClickbtnViewMianAdvertising: function () {
            $('.sale-product').on('click', '[data-btn="btn_view_main_advertising"]', function () {
              console.log('teststst');
            });
          },
          onClickSearch: function () {

            $('#btn_search').on('click', function (event) {
              event.preventDefault();
              console.log('search');
              var str_search = $(this).closest('.input-group').find('input').val();
              console.log(str_search);

              $.ajax({
                url: "db_webrequest_search_job.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
                method: "POST",
                data: { str_keyword: str_search, job_type_id: null },
                // data:, // ส่งค่า product_id ไปยัง cart.php
                success: function (response) {
                  console.log(response);
                  Maha.initDisplaySearchJobs(JSON.parse(response));
                  //จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                  // alert(response);
                  // Maha.initDisplayJobs(JSON.parse(response));
                }
              });

            });


          },
          initDisplaySearchJobs: function (data) {
            $('#content_jobs h2').text('ผลการค้นหา');
            var count3 = 0;
            var totol_content = ``;
            var count_data = data.length;
            var totol_item3 = ``;
            if (count_data > 3) {
              console.log("เข้ามากกว่าสาม");
              data.forEach(function (e) {
                var fileUrlArray = e.file_urls;
                var dataSrcString = '';
                for (var i = 0; i < fileUrlArray.length; i++) {
                  dataSrcString += fileUrlArray[i];
                  if (i < fileUrlArray.length - 1) {
                    // เพิ่ม comma ระหว่างค่า, ยกเว้นค่าที่สุดท้าย
                    dataSrcString += ',';
                  }
                }
                if (count3 != 3) {
                  totol_item3 += `<div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                    <div>
                                      <div class="product-item" data-desc="test">
                                              <div class="pi-img-wrapper">
                                                  <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}" class="img-responsive" alt="Berry Lace Dress">
                                                  <div>
                                                    <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                      class="btn btn-default fancybox-button">Zoom</a>
                                                    <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                      class="btn btn-default fancybox-fast-view">View</a>
                                                  </div>
                                              </div>
                                              <h3><a href="shop-item.html">${e.name || '-'}</a></h3>
                                              <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                              <div class="sticker sticker-new"></div>
                                        </div>
                                    </div>
                                  </div>`;
                  count3 += 1;
                  count_data -= 1;
                  if (count_data == 0){
                    console.log('หมดแล้ว');
                    totol_content += `<div class="owl-carousel owl-carousel3 owl-theme owl-loaded margin-bottom-15">
                                    <div class="owl-stage-outer">
                                      <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 848.001px;">
                                        ${totol_item3}
                                      </div>
                                    </div>
                                        <div class="owl-controls">
                                                <div class="owl-nav">
                                                        <div class="owl-prev" style="display: none;">prev</div>
                                                        <div class="owl-next" style="display: none;">next</div>
                                                </div>
                                                <div class="owl-dots" style="">
                                                        <div class="owl-dot active"><span></span></div>
                                                </div>
                                        </div>
                                </div>`;
                  }
                } else {
                  totol_content += `<div class="owl-carousel owl-carousel3 owl-theme owl-loaded margin-bottom-15">
                                    <div class="owl-stage-outer">
                                      <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 848.001px;">
                                        ${totol_item3}
                                      </div>
                                    </div>
                                        <div class="owl-controls">
                                                <div class="owl-nav">
                                                        <div class="owl-prev" style="display: none;">prev</div>
                                                        <div class="owl-next" style="display: none;">next</div>
                                                </div>
                                                <div class="owl-dots" style="">
                                                        <div class="owl-dot active"><span></span></div>
                                                </div>
                                        </div>
                                </div>`;
                  totol_item3 = ``;
                  totol_item3 += `<div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                    <div>
                                      <div class="product-item" data-desc="test">
                                              <div class="pi-img-wrapper">
                                                  <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}" class="img-responsive" alt="Berry Lace Dress">
                                                  <div>
                                                    <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                      class="btn btn-default fancybox-button">Zoom</a>
                                                    <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                      class="btn btn-default fancybox-fast-view">View</a>
                                                  </div>
                                              </div>
                                              <h3><a href="shop-item.html">${e.name || '-'}</a></h3>
                                              <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                              <div class="sticker sticker-new"></div>
                                        </div>
                                    </div>
                                  </div>`;
                  count3 = 1;
                  count_data -= 1;
                  if (count_data == 0){
                    console.log('หมดแล้ว');
                    totol_content += `<div class="owl-carousel owl-carousel3 owl-theme owl-loaded margin-bottom-15">
                                    <div class="owl-stage-outer">
                                      <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 848.001px;">
                                        ${totol_item3}
                                      </div>
                                    </div>
                                        <div class="owl-controls">
                                                <div class="owl-nav">
                                                        <div class="owl-prev" style="display: none;">prev</div>
                                                        <div class="owl-next" style="display: none;">next</div>
                                                </div>
                                                <div class="owl-dots" style="">
                                                        <div class="owl-dot active"><span></span></div>
                                                </div>
                                        </div>
                                </div>`;
                  }
                }
              });
            } else {
              console.log("<=3");
              data.forEach(function (e) {
                var fileUrlArray = e.file_urls;
                var dataSrcString = '';
                for (var i = 0; i < fileUrlArray.length; i++) {
                  dataSrcString += fileUrlArray[i];
                  if (i < fileUrlArray.length - 1) {
                    // เพิ่ม comma ระหว่างค่า, ยกเว้นค่าที่สุดท้าย
                    dataSrcString += ',';
                  }
                }
                totol_item3 += `<div class="owl-item active" style="width: 282.667px; margin-right: 0px;">
                                    <div>
                                      <div class="product-item" data-desc="test">
                                              <div class="pi-img-wrapper">
                                                  <img src="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}" class="img-responsive" alt="Berry Lace Dress">
                                                  <div>
                                                    <a href="upload/${folder_name_img}/${e.id}/${e.file_urls[0]}"
                                                      class="btn btn-default fancybox-button">Zoom</a>
                                                    <a href="#product-pop-up" data-src="${dataSrcString}" data-type="${e.type_name}" data-id="${e.id}" data-tol="${e.phone_number || '-'}" data-email="${e.email || '-'}"
                                                      class="btn btn-default fancybox-fast-view">View</a>
                                                  </div>
                                              </div>
                                              <h3><a href="shop-item.html">${e.name || '-'}</a></h3>
                                              <div class="pi-price">ติดต่อ: ${e.phone_number || '-'}</div>
                                              <div class="sticker sticker-new"></div>
                                        </div>
                                    </div>
                                  </div>`;
              });
              totol_content += `<div class="owl-carousel owl-carousel3 owl-theme owl-loaded">
                                    <div class="owl-stage-outer">
                                      <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 848.001px;">
                                        ${totol_item3}
                                      </div>
                                    </div>
                                        <div class="owl-controls">
                                                <div class="owl-nav">
                                                        <div class="owl-prev" style="display: none;">prev</div>
                                                        <div class="owl-next" style="display: none;">next</div>
                                                </div>
                                                <div class="owl-dots" style="">
                                                        <div class="owl-dot active"><span></span></div>
                                                </div>
                                        </div>
                                </div>`;

            }
            $('#content_jobs').html(totol_content);
            $('#content_jobs').prepend('<h2>ผลการค้นหา</h2>');
            if (data.length == 0){
              $('#content_jobs').append('<br><br><br><br><h2 class="text-center">-ไม่พบข้อมูล-</h2>');
            }
          },

          init: function () {
            // Oasis.submitpayment();
            // Maha.goBottom();
            Maha.requestMainAdvertising();
            Maha.requestJobData(2);
            Maha.onClickbtnViewMianAdvertising();
            Maha.onClickSelectJobType();
            Maha.onClcikViewJob();
            Maha.requestSelect();
            Maha.onClickSearch();
          }
        }
      }();
      $(document).ready(function () {
        Maha.init();
      });
    })();

  </script>
  <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
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
  <link href="js/DataTables/datatables.min.css" rel="stylesheet">
  <!-- Theme styles END -->
  <!--BEGIN CSS THIS PAGE -->
  <style>
    .ct-fancybox-lock .ct-fancybox-overlay {
      overflow: auto;
      overflow-y: scroll;
    }

    .ct-fancybox-overlay {
      z-index: 100000;
    }

    .ct-fancybox-overlay-fixed {
      position: fixed;
      bottom: 0;
      right: 0;
    }

    .pr0 {
      padding-right: 0px !important;
    }

    .mt5 {
      margin-top: 5px !important;
    }

    .input-group-addon {
      padding: 0px;
    }

    .product-pop-up .btn-primary {
      margin-right: 1px;
    }
  </style>
  <!--END CSS THIS PAGE -->
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
  <?php include('admin_tobbar.php'); ?>
  <!-- END TOP BAR -->

  <!-- BEGIN HEADER -->
  <?php include('admin_header.php'); ?>
  <!-- Header END -->

  <div class="main">
    <div class="container">
      <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SALE PRODUCT -->
        <b class="h2 margin-bottom-40">โฆษณาหลัก ที่แสดงอยู่</b>
        <hr>
        <!-- <a href="javascript:;" class="btn btn-success add2cart pull-right">เพิ่มรายการ</a> -->
        <div class="col-md-12 sale-product">
          <div class="owl-carousel owl-carousel5">
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product4.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="javascript:;">Berry Lace Dress4</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/product5.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/product5.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/model3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
              </div>
            </div>
            <div>
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="assets/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress">
                  <div>
                    <a href="assets/pages/img/products/model7.jpg" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                <div class="pi-price">ติดต่อ:</div>
                <a href="javascript:;" class="btn btn-default add2cart">แก้ไข</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END SALE PRODUCT -->
      </div>
      <!-- END SALE PRODUCT & NEW ARRIVALS -->

      <!-- BEGIN TABLE SHOW LIST ADVERTISING -->
      <?php include('admin_table_show_list_advertising.php'); ?>

      <!-- END TABLE SHOW LIST ADVERTISING -->



    </div>
  </div>

  <!-- BEGIN MODAL ADD NEW ADVERTISING -->
  <div id="modal_add_new_advertising" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-3">
          <div class="product-main-image">
            <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
          </div>
          <div class="product-other-images">
            <a href="javascript:;" class="active"><img alt="Berry Lace Dress"
                src="assets/pages/img/products/model3.jpg"></a>
            <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
            <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-9">
          <h2>เพิ่มรายกาารโฆษณาหลักใหม่</h2>
          <div class="price-availability-block clearfix">
            <div class="cs-name">
              <label for="">ชื่อลูกค้า(บริษัท)</label>
              <textarea id="message" name="message" rows="4" cols="40"></textarea>
            </div>
            <div class="cs-description">
              <label for="">รายละเอียด(คำโฆษณา)</label>
              <textarea id="message" name="message" rows="4" cols="40"></textarea>
            </div>
            <div class="order-by">
              <label for="">ลำดับ(โฆษณาหลักจะแสดงแค่5อันดับแรก)</label>
              <input type="text" class="text">
            </div>
            <div class="row mt5">
              <label class="col-sm-12  mt5 pr0">วันที่เริ่มโฆษณา</label>
            </div>
            <div class="row mt5">
              <div class="col-sm-11">
                <div class="form-group">
                  <div id="start_date" class="input-group date date-picker form_datetime bs-datetime col-sm-12"
                    data-date-format="dd M yyyy" data-date-start-date="+0d">
                    <div class="input-icon right">
                      <i class="fa"></i>
                      <input name="search_start_date" type="text" class="form-control" placeholder="เลือกวันที่เริ่ม">
                    </div>
                    <span class="input-group-addon btn-primary">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-calendar"></i>
                      </button>
                    </span>
                  </div>
                  <span class="help-block"></span>
                </div>
              </div>
            </div>
            <div class="row mt5">
              <label class="col-sm-12  mt5 pr0">วันที่สิ้นสุดโฆษณา</label>
            </div>
            <div class="row mt5">
              <div class="col-sm-11">
                <div class="form-group">
                  <div id="start_date" class="input-group date date-picker form_datetime bs-datetime col-sm-12"
                    data-date-format="dd M yyyy" data-date-start-date="+0d">
                    <div class="input-icon right">
                      <i class="fa"></i>
                      <input name="search_start_date" type="text" class="form-control" placeholder="เลือกวันที่สิ้นสุด">
                    </div>
                    <span class="input-group-addon btn-primary">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-calendar"></i>
                      </button>
                    </span>
                  </div>
                  <span class="help-block"></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="sticker sticker-sale"></div>
      </div>
    </div>
  </div>
  <!-- END MODAL ADD NEW ADVERTISING -->
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
  <!-- BEGIN FOOTER -->
  <?php include('admin_footer.php'); ?>
  <!-- END FOOTER -->

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
  <!-- DATEPICKER -->
  <script src="js/bootstrap-datepicker-th.js" type="text/javascript"></script>
  <script src="js/bootstrap-datepicker.th.min.js" type="text/javascript"></script>

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
  <!-- END PAGE LEVEL JAVASCRIPTS -->
  <!-- BEGIN CUSTOM JAVASCRIPTS -->

  <script src="js/DataTables/datatables.min.js"></script>
  <script>
    (function () {

      var Maha = function () {

        return {
          onclickBtnSearch: function () {
            $('#btn_search').on('click', function () {
              var job_id = $('#inputGroupSelect01').find("option:selected");
              job_type_id = job_id.data("id");
              Maha.requestBusiness();
            });
          },
          onClickBtnEditDeleteJob: function () {
            $('body').on('click', '.btn-edit_delete', function () {
              console.log('asdf');

            });
          },
          initModalAdvertising: function () {
            $('#btn_add_new_addvertising').on('click', function () {
              console.log('ttttasd');
              $('#modal_add_new_advertising').show();
            });
            $('#btn_close').on('click', function () {
              $('#modal_add_new_advertising').hide();
            });
          },
          dataTableListAdvertising: function () {
            var dataTable = $('#cs_table_main_advertising').DataTable({
              ajax: 'data/objects.txt',
              columns: [
                { data: 'name' },
                { data: 'position' },
                { data: 'id' },
                { data: 'start_date' },
                { data: 'start_date' },
                {
                  data: function (data) {
                    return '<button type="button" class="btn btn-default" ><i class="fa fa-edit"></i></button><button type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i> </button>';
                  },
                }
              ]

            });

          },
          initSetDatePicker: function () {
            $('.date-picker').datepicker({
              thaiyear: true,
              language: 'th', // can use when import moment.js in this project is at _LayoutTemplate
              autoclose: !0,
              startDate: '-10y',
            });

          },




          init: function () {
            Maha.dataTableListAdvertising();
            // Maha.initModalAdvertising();
            Maha.initSetDatePicker();
          }
        }
      }();
      $(document).ready(function () {
        Maha.init();
      });
    })();

  </script>
  <!-- END CUSTOM JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
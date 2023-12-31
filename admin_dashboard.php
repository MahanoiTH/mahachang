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
  <link href="css/dropzone.css" rel="stylesheet">
  <!-- <link href="js/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet"> -->
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

    .ct-dropzone {
      margin-bottom: 20px;
      width: 100%;
    }

    .dropzone {
      width: 98%;
      margin: 1%;
      border: 2px dashed #3498db;
      border-radius: 5px;
      transition: 0.2s;
      min-height: 450px;
    }

    .dropzone.dz-drag-hover {
      border: 2px solid #3498db;
    }

    .dz-message.needsclick img {
      width: 50px;
      display: block;
      margin: auto;
      opacity: 0.6;
      margin-bottom: 15px;
    }

    span.plus {
      display: none;
    }

    .dropzone.dz-started .dz-message {
      display: inline-block !important;
      width: 120px;
      float: right;
      border: 1px solid rgba(238, 238, 238, 0.36);
      border-radius: 30px;
      height: 120px;
      margin: 16px;
      transition: 0.2s;
    }

    .dropzone.dz-started .dz-message span.text {
      display: none;
    }

    .dropzone.dz-started .dz-message span.plus {
      display: block;
      font-size: 70px;
      color: #aaa;
      line-height: 110px;
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
          <!-- <div class="product-main-image"> -->
          <div class="ct-dropzone">
            <!-- <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive"> -->
            <div id="dropzone">
              <form class="dropzone needsclick" id="dz_upload">
                <div class="dz-message needsclick">
                  <span class="text">
                    <img src="http://www.freeiconspng.com/uploads/------------------------------iconpngm--22.png"
                      alt="Camera" />
                    Drop files here or click to upload.
                  </span>
                  <span class="plus">+</span>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- </div> -->
        <div class="col-md-6 col-sm-6 col-xs-9">
          <h2>เพิ่มรายกาารโฆษณาหลักใหม่</h2>
          <div class="price-availability-block clearfix">
            <div class="cs-name">
              <label for="">ชื่อลูกค้า(บริษัท)</label>
              <textarea id="ct_name" name="ct_name" rows="4" cols="40"></textarea>
            </div>
            <div class="cs-description">
              <label for="">รายละเอียด(คำโฆษณา)</label>
              <textarea id="ct_desc" name="ct_desc" rows="4" cols="40"></textarea>
            </div>
            <label for="">ลำดับ(โฆษณาหลักจะแสดงแค่5อันดับแรก)</label>
            <div class="row mt5">
              <div class="col-sm-11 "><input id="ct_order" type="text" class="form-control"></div>
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
                      <input name="start_date" type="text" class="form-control" placeholder="เลือกวันที่เริ่ม">
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
                      <input name="end_date" type="text" class="form-control" placeholder="เลือกวันที่สิ้นสุด">
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
            <hr>
            <div class="row mt5">
              <div class="col-sm-11">
                <a id="btn_save_new_advertising" class="btn btn-success pull-right">บันทึก</a>
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
  <script src="assets/plugins/moment.min.js" type="text/javascript"></script>
  <script src="js/dropzone.js" type="text/javascript"></script>
  <!-- <script src="js/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script> -->


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
  <script type="text/javascript" start_date>

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
    var data_url = 'admin_db_datatable_main_advertising.php';
    var submit_jobs_url = "admin_db_submitMainAdvertising.php";
    var folder_type = 'advertising';
    var job_type_id = 1;


    (function () {

      var Maha = function () {

        return {
          initDropzone: function () {
            if (uploadDropzone) {
              console.log("Destroying existing Dropzone instance");
              uploadDropzone.destroy();
              console.log("Destroyed");
            }

            uploadDropzone = new Dropzone("#dz_upload", {
              url: "upload.php",
              paramName: "file", // The name that will be used to transfer the file
              maxFilesize: 5, // MB,
              addRemoveLinks: true,
              parallelUploads: 1,
              acceptedFiles: ".jpeg,.jpg,.png,.gif",
              init: function () {
                this.on("success", function (file, response) {
                  console.log(response); // คำตอบจากการอัปโหลด
                  console.log(file.name);
                  // attc_list.push({ 'id': 0 , 'name': file.name, 'active': 1});
                  attc_list_name.push(file.name);
                  console.log(attc_list_name);
                });
                this.on("addedfile", function (file) {
                  // Capture accepted files when a new file is added
                  if (file.accepted) {
                    acceptedFiles.push(file);
                  }
                });
              }
            });

          },
          removeFilesFromDropzone: function (element) {
            var attc_id = $(element).data('id');
            var fileName = $(element).data('filename');
            $(element).parent().remove() // remove current files from dropzone
            if ($('#dz_upload .dz-preview').length == 0) { // if no files in dropzone return to it default state
              $('#dz_upload .dz-message').removeClass('hidden');
              //$('#dz_upload .dz-message').css({'display' : 'block'})
            }
            // create list of files for submit
            // push this file id active = 0
            attc_list.push({ 'id': attc_id, 'fileurl': '', 'name': fileName, 'ref_file_type_id': 0, 'active': 0 })
            //console.log(attc_list);
          },
          onchangeTableType: function () {
            $('#select_jobs').on('change', function () {
              var id = $(this).val();
              Maha.changTable(id);
              // console.log(id);
            });
          },
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
              $('#ct_name').val('');
              $('#ct_desc').val('');
              $('#ct_order').val('');
              advertising_id = 0;
              console.log('ttttasd');
              // $('#modal_add_new_advertising').show();
            });
            $('#btn_close').on('click', function () {
              // $('#modal_add_new_advertising').hide();
            });
          },
          dataTableListAdvertising: function () {

            dataTable = $('#cs_table_main_advertising').DataTable({

              method: "POST", // Added method option
              columnDefs: [
                { width: '20%', targets: 0 }, // กำหนดความกว้างของคอลัมน์ที่ 0
                { width: '40%', targets: 1 }, // กำหนดความกว้างของคอลัมน์ที่ 1
                { width: '5%', targets: 2 }, // กำหนดความกว้างของคอลัมน์ที่ 2
                { width: '12%', targets: 3 },  // กำหนดความกว้างของคอลัมน์ที่ 3
                { width: '12%', targets: 4 },  // กำหนดความกว้างของคอลัมน์ที่ 4
                { width: '11%', targets: 5 }   // กำหนดความกว้างของคอลัมน์ที่ 5
              ],
              columns: [
                { data: 'customer_name' },
                { data: 'description' },
                { data: 'advertising_order' },
                { data: 'start_date' },
                { data: 'end_date' },
                {
                  data: function (data) {
                    return `<button data-btn="edit" data-id="${data.id}" data-name="${data.customer_name}" data-desc="${data.description}" data-order="${data.advertising_order}" href="#modal_add_new_advertising" type="button" class="fancybox-fast-view btn btn-default" ><i class="fa fa-edit"></i></button><button data-id="${data.id}" data-btn="delete" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i> </button>`;
                  },
                }
              ],
              ajax: {
                url: data_url,
                type: 'POST',
                dataSrc: function (data) {
                  // Assuming your server returns an object with a property named 'data'
                  // Adjust this part based on your actual server response structure
                  return data.data;
                },
              },
              order: [
                [2, 'asc'] // Specify the column index and sorting order as an array
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
          onClickBtnSaveAddNewAdvertising: function () {
            $('#btn_save_new_advertising').on('click', function () {
              console.log("add");

              // ตรวจสอบค่าว่างในฟิลด์
              ct_name = $('#ct_name').val();
              ct_desc = $('#ct_desc').val();
              ct_order = $('#ct_order').val();

              if (!ct_name || !ct_desc || !ct_order) {
                alert('กรุณากรอกข้อมูลในทุกช่อง');
                return false;
              }

              // ตรวจสอบค่าว่างใน start_date และ end_date
              start_date = moment($("#start_date").datepicker('getDate')).format('YYYY-MM-DD');
              end_date = moment($("#end_date").datepicker('getDate')).format('YYYY-MM-DD');

              if (!start_date || !end_date) {
                alert('กรุณาเลือกวันที่เริ่มต้นและสิ้นสุด');
                return false;
              }

              console.log(start_date);
              var active = 1;
              Maha.submitNewAdvertising(active);
            });

          },
          onClickBtnEditMainAdvertising: function () {
            $('#cs_table_main_advertising_wrapper').on('click', '[data-btn="edit"]', function () {
              advertising_id = $(this).data('id');
              var name = $(this).data('name');
              var desc = $(this).data('desc');
              var order = $(this).data('order');
              console.log(name);
              console.log(desc);
              console.log(order);


              $('#ct_name').val(name);
              $('#ct_desc').val(desc);
              $('#ct_order').val(order);


              console.log('test');
            });


          },
          onClickBtnDeleteMainAdvertising: function () {
            $('#cs_table_main_advertising_wrapper').on('click', '[data-btn="delete"]', function () {
              console.log('start');
              advertising_id = $(this).data('id');
              var active = 0;
              Maha.submitNewAdvertising(active);
            });
          },
          submitNewAdvertising: function (active) {
            var data = new FormData();
            if (active == 1) {

              data.append('id', advertising_id);
              data.append('ct_name', ct_name);
              data.append('ct_desc', ct_desc);
              data.append('ct_order', ct_order);
              data.append('start_date', start_date);
              data.append('end_date', end_date);
              data.append('active', active);
            } else {
              data.append('id', advertising_id);
              data.append('active', active);
            }
            // ดึงไฟล์ภาพที่เลือกแล้วและเพิ่มไปยัง FormData

            $.ajax({
              url: submit_jobs_url, // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
              method: "POST",
              data: data, // ส่งค่า product_id ไปยัง cart.php
              processData: false,  // อย่าจัดการข้อมูลเอง
              contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
              success: function (response) {
                // จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                if (response === "success") {
                  // window.location = 'business_profile_jobs.php';
                  console.log(response);
                  window.location.reload();
                } else {
                  alert(response);
                  Maha.submitFile(response);
                }
              }
            });
          },
          submitFile: function (id) {
            // ดึงไฟล์ภาพที่เลือกแล้วและเพิ่มไปยัง FormData
            // ดึงไฟล์ภาพที่ Dropzone ได้รับ
            // var files = Maha.uploadDropzone.getQueuedFiles();
            // var fileNames = [{fil"_1.jpg", "_6.jpg"];
            var active = 1;
            var data = new FormData();
            data.append('folder_id', id);
            data.append("attc_list", attc_list_name);
            data.append("active", active);
            data.append("folder_type", folder_type);
            data.append("job_type_id", job_type_id);
            // data.append('file_names', fileNames);
            // วนลูปเพื่อเพิ่มแต่ละไฟล์ลงใน FormData
            $.ajax({
              url: "admin_db_ajax_move_files_advertising.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
              method: "POST",
              data: data, // ส่งค่า product_id ไปยัง cart.php
              processData: false,  // อย่าจัดการข้อมูลเอง
              contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
              success: function (response) {
                // จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                if (response === "success") {
                  // window.location = 'business_profile_jobs.php';
                  console.log(response);
                } else {
                  alert(response);
                }
              }
            });
          },
          changTable: function (table_id) {
            var number = parseInt(table_id);
            console.log(number);

            switch (number) {
              case 1:
                data_url = 'admin_db_datatable_main_advertising.php';
                $('#modal_add_new_advertising h2').text('รายการโฆษณาหลัก');
                submit_jobs_url = '';
                job_type_id = 1;
                break;
              case 2:
                data_url = 'db_datatable_jobs_interior_design.php';
                $('#modal_add_new_advertising h2').text('งานออกแบบ ตกแต่งภายใน');
                submit_jobs_url = 'db_websubmit_jobs_interior_design.php';
                folder_type = 'interior_design';
                job_type_id = 2;
                break;
              case 3:
                data_url = 'db_datatable_jobs_air_conditioning.php';
                $('#modal_add_new_advertising h2').text('งานระบบแอร์ ระบบปรับอากาศ');
                submit_jobs_url = 'air_conditioning';
                job_type_id = 3;
                break;
              case 4:
                data_url = "db_datatable_jobs_electrical.php";
                $('#modal_add_new_advertising h2').text('งานระบบไฟฟ้า งานระบบไฟฟ้า');
                submit_jobs_url = 'electrical';
                job_type_id = 4;
                break;
              case 5:
                data_url = "db_datatable_jobs_plumbing.php";
                $('#modal_add_new_advertising h2').text('งานระบบประปา งานระบบประปา');
                submit_jobs_url = 'plumbing';
                job_type_id = 5;
                break;
              case 6:
                data_url = "db_datatable_jobs_steel.php";
                $('#modal_add_new_advertising h2').text('งานเหล็ก งานโครงสร้างเหล็ก');
                submit_jobs_url = 'steel';
                job_type_id = 6;
                break;
              case 7:
                data_url = "db_datatable_jobs_flooring.php";
                $('#modal_add_new_advertising h2').text('งานปูพื้น ปูพื้นกระเบื้อง');
                submit_jobs_url = 'flooring';
                job_type_id = 7;
                break;
              case 8:
                data_url = "db_datatable_jobs_design.php";
                $('#modal_add_new_advertising h2').text('งานเขียนแบบ ออกแบบบ้าน');
                submit_jobs_url = 'design';
                job_type_id = 8;
                break;
              case 9:
                data_url = "db_datatable_jobs_construction.php";
                $('#modal_add_new_advertising h2').text('งานสร้างบ้าน และอสังหาฯอื่นๆ');
                submit_jobs_url = 'construction';
                job_type_id = 9;
                break;
              default:
                data_url = "Invalid Number"; // เพิ่มเคสนี้เพื่อจัดการกรณีที่ตัวเลขไม่ได้ระบุใน case ใดเลย
            }

            console.log(data_url);
            dataTable.destroy();
            Maha.dataTableListAdvertising();

          },





          init: function () {
            Maha.dataTableListAdvertising();
            Maha.initModalAdvertising();
            Maha.initSetDatePicker();
            Maha.onClickBtnSaveAddNewAdvertising();
            Maha.onClickBtnEditMainAdvertising();
            Maha.onClickBtnDeleteMainAdvertising();
            Maha.initDropzone();
            Maha.onchangeTableType();
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
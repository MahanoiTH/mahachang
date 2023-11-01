<!DOCTYPE html>
<html>
<?php include("db_check_login.php");
?>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Inance</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
        .layout_padding {
            padding-bottom: 60px;
            padding-top: 10px;
        }

        .content-repair {
            overflow-y: auto;
            height: 1000px;
        }

        .img_job_container {
            margin-top: 5px;
        }

        .img_bs_jobs {
            height: 150px;
            width: 300px;
        }
    </style>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <?php
        include("layout_header.php");
        ?>
        <!-- end header section -->



        <!-- professional section -->

        <section class="professional_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected data-id="-1">เลือกหมวดงาน...</option>
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
                    </div>
                    <div class="col-md-7 text-center">
                        <div class="detail-box">
                            <form>
                                <input type="text" class="form-control">
                            </form>

                        </div>
                    </div>
                    <div class="col-md-1">
                        <button id="btn_search" class="btn btn-success">
                            ค้นหา
                        </button>
                    </div>

                </div>
            </div>
        </section>

        <!-- end professional section -->

    </div>
    <section class="client_section mt-2">
        <div class="container content-repair">
            <div class="heading_container heading_center">
                <h2>
                    ผลการค้นหา
                </h2>
            </div>
            <div class="content-repair-body"></div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ส่งรายละเอียดงาน ให้บริษัทประเมิณราคา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control" placeholder="ข้อความ">
                        <div class="input-group mb-3 mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">ส่ง</button>
                </div>
            </div>
        </div>
    </div>





    <!-- footer section -->
    <?php
    include("layout_footer.php");
    ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

    <script>
        (function () {
            var job_type_id = -1;
            var Maha = function () {

                return {
                    onclickBtnSearch: function () {
                        $('#btn_search').on('click', function () {
                            var job_id = $('#inputGroupSelect01').find("option:selected");
                            job_type_id = job_id.data("id");
                            Maha.requestBusiness();
                        });
                    },
                    requestBusiness: function () {
                        var data = new FormData();
                        // data.append('description', description);
                        // data.append('jobs_id', job_id);
                        data.append('job_type_id', job_type_id)
                        $.ajax({
                            url: "db_webrequest_search_business.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
                            method: "POST",
                            data: data, // ส่งค่า product_id ไปยัง cart.php
                            processData: false,  // อย่าจัดการข้อมูลเอง
                            contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
                            success: function (result) {
                                if (result == 'error') {
                                    $(".content-repair-body").html('');
                                } else {
                                    var data = JSON.parse(result);
                                    console.log(result);
                                    Maha.createDataBusiness(data);
                                }

                                // จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                                // if (response === "success") {
                                //     window.location = 'noti.php';
                                // } else {
                                //     alert(response);
                                // }
                            }
                        });
                    },
                    createDataBusiness: function (data) {
                        console.log("start");
                        var html_bs = '';

                        for (var i = 0; i < data.length; i++) {
                            var img_url_jobs = data[i].img_url;
                            var path_img_jobs = '\img-jobs/2/' + img_url_jobs;
                            console.log("sadff");
                            html_bs += `<div class="box">
                                            <div class="client_id">
                                                <div class="img-box">
                                                    <img src="images/client-1.jpg" alt="">
                                                </div>
                                                <div class="client_detail">
                                                    <div class="client_info">
                                                        <h6>${data[i].username}</h6>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="client_text">
                                                <p>
                                                  ${data[i].description}
                                                </p>
                                                <a data-toggle="modal" href="#exampleModal" class="btn btn-success">ช่องทางติดต่่อ</a>
                                                <a href="" class="btn btn-success">ผลงาน</a>
                                                <a data-toggle="modal" href="#exampleModal" class="btn btn-info">ส่งรายละเอียดประเมิณราคา</a>
                                            </div>
                                            <div class="img_job_container">
                                                <img class="img_bs_jobs" src="${img_url_jobs}" />
                                            </div>
                                        </div>
                                        `;

                        }
                        $(".content-repair-body").html(html_bs);
                    },


                    init: function () {
                        Maha.requestBusiness();
                        Maha.onclickBtnSearch();
                    }
                }
            }();
            $(document).ready(function () {
                Maha.init();
            });
        })();

    </script>


</body>

</html>
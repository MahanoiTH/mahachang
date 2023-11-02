<!DOCTYPE html>
<html>

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

    <title>mahachang</title>

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
        /* Reset some default styles */
        .content-pf {
            background-color: #e4e6eb !important;
        }
        body,
        ul {
            margin: 0;
            padding: 0;
        }

        /* Basic styling for the sidebar */
        .sidebar {
            background-color: #333;
            color: #fff;
            height: 100vh;
            top: 122px;
            left: 0;
            /* padding: 20px; */
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            margin-bottom: 10px;
        }

        /* Styling for the content area */


        /* Optional styling for the header and paragraph in the content area */
        .content h1 {
            font-size: 24px;
        }

        .content p {
            font-size: 16px;
        }

        /* Responsive design: Adjust the layout for smaller screens */


        .layout_padding {
            padding-bottom: 60px;
            padding-top: 10px;
        }

        .content-pf {
            background-color: #fff;
        }

        .contact_section input {
            color: #333;
        }

        #image-container {
            display: flex;
            /* กำหนดให้รูปภาพแสดงเป็นแนวนอน */
            flex-wrap: wrap;
            /* กำหนดให้ขึ้นบรรทัดใหม่เมื่อขนาดของหน้าจอจำกัด */
            gap: 10px;
            /* ระยะห่างระหว่างรูปภาพ */
        }

        #image-container img {
            max-width: 200px;
            /* กำหนดขนาดสูงสุดของรูปภาพ */
            height: auto;
            /* ให้สูงของรูปภาพปรับตามอัตราส่วน */
        }

        .sidebar>ul>li {
            background: 0 0;
            margin: 0;
            padding: 0;
            margin-top: 1px !important;
        }

        .sidebar>ul>li>a {
            display: block;
            margin: 0;
            padding: 25px 15px 6px 43px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 300;
            background: 0 0;
        }

        .sidebar>ul> :hover {
            background-color: #007bff;
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


        <div class="row content-pf">
            <div class="col-2">
                <div class="sidebar">
                    <ul>
                        <li><a href="#">หน้าหลัก</a></li>
                        <li><a href="#">ข้อมูลการรับงาน</a></li>
                        <li><a href="#">ผลงาน</a></li>
                        <li><a href="business_profile_edit.php">แก้ไขโปรไฟล์</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10 content-pf">
                <section class="contact_section layout_padding">
                    <div class="container">
                        <div class="heading_container">
                            <h2>
                                กรอกข้อมูลการรับงาน
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="">
                                    <div>
                                        <input id="input_desc" type="text" class="message-box"
                                            placeholder="คำอธิบายการรับงาน" />
                                    </div>
                                    <div>
                                        <select class="form-select" name="HotType" style="width:150px;" tabindex="1"
                                            fdprocessedid="x31fzo" aria-label="Default select example">
                                            <option value="">เลือกประเภท -----------------</option>

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
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02"
                                            accept="img-jobs/*" multiple>
                                        <label class="custom-file-label" for="inputGroupFile02">Choose image
                                            files</label>
                                    </div>
                                    <div id="image-container"></div>

                                    <div class="d-flex">
                                        <a class="btn btn-success mt-2" id="btn_save">
                                            บันทึก
                                            <a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end professional section -->








        <!-- footer section -->
        <?php
        //include("layout_footer.php");
        ?>
        <!-- footer section -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script src="js/custom.js"></script>

        <script>
            (function () {
                var job_id = null;

                var Maha = function () {

                    return {
                        onChangeJobs: function () {
                            // เมื่อมีการเปลี่ยนค่าใน <select>
                            $(".form-select").change(function () {
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
                            var description = $('#input_desc').val();

                            var data = new FormData();
                            data.append('description', description);
                            data.append('jobs_id', job_id);
                            // ดึงไฟล์ภาพที่เลือกแล้วและเพิ่มไปยัง FormData
                            var files = $('#inputGroupFile02')[0].files;
                            for (var i = 0; i < files.length; i++) {
                                data.append('img_url[]', files[i]);
                            }

                            $.ajax({
                                url: "db_websubmit_job.php", // เปลี่ยนเป็น URL ของ cart.php ที่คุณใช้งาน
                                method: "POST",
                                data: data, // ส่งค่า product_id ไปยัง cart.php
                                processData: false,  // อย่าจัดการข้อมูลเอง
                                contentType: false,  // ประเภทข้อมูลอ้างอิงไปที่ไฟล์แนบ
                                success: function (response) {
                                    // จัดการการตอบสนองจาก cart.php ที่ส่งกลับมา
                                    if (response === "success") {
                                        window.location = 'noti.php';
                                    } else {
                                        alert(response);
                                    }
                                }
                            });

                        },


                        init: function () {
                            // Oasis.submitpayment();
                            // Maha.goBottom();
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







</body>

</html>
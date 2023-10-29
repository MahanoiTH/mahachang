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
            padding: 20px;
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
        display: flex;  /* กำหนดให้รูปภาพแสดงเป็นแนวนอน */
        flex-wrap: wrap; /* กำหนดให้ขึ้นบรรทัดใหม่เมื่อขนาดของหน้าจอจำกัด */
        gap: 10px; /* ระยะห่างระหว่างรูปภาพ */
    }

    #image-container img {
        max-width: 200px; /* กำหนดขนาดสูงสุดของรูปภาพ */
        height: auto; /* ให้สูงของรูปภาพปรับตามอัตราส่วน */
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
                        <li><a href="#">ข้อมูล</a></li>
                        <li><a href="#">รายงาน</a></li>
                        <li><a href="#">ตั้งค่า</a></li>
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
                                        <input type="text" class="message-box" placeholder="คำอธิบายการรับงาน" />
                                    </div>
                                    <div>
                                        <select class="form-select" name="HotType" style="width:150px;" tabindex="1"
                                            fdprocessedid="x31fzo" aria-label="Default select example">
                                            <option value="">เลือกประเภท -----------------</option>

                                            <option value="ออกแบบ-ตกแต่งภายใน">
                                                ออกแบบ-ตกแต่งภายใน</option>

                                            <option value="สร้างบ้าน-สร้างอาคาร">
                                                สร้างบ้าน-สร้างอาคาร</option>

                                            <option value="ต่อเติมบ้าน-ซ่อมบ้าน">
                                                ต่อเติมบ้าน-ซ่อมบ้าน</option>

                                            <option value="ออกแบบ-ติดตั้งระบบไฟฟ้า">
                                                ออกแบบ-ติดตั้งระบบไฟฟ้า</option>

                                            <option value="ออกแบบ-ติดตั้งระบบประปา">
                                                ออกแบบ-ติดตั้งระบบประปา</option>

                                            <option value="ติดตั้งแอร์-ซ่อมล้างแอร์">
                                                ติดตั้งแอร์-ซ่อมล้างแอร์</option>

                                            <option value="โครงสร้างอาคาร">
                                                โครงสร้างอาคาร</option>

                                            <option value="โครงสร้างเหล็ก">แ
                                                โครงสร้างเหล็ก</option>

                                            <option value="รื้อถอน-รื้ออาคาร-ทุบตึก">
                                                รื้อถอน-รื้ออาคาร-ทุบตึก</option>

                                            <option value="ทาสี-ห้อง-บ้าน-อาคาร">
                                                ทาสี-ห้อง-บ้าน-อาคาร</option>

                                            <option value="เฟอร์นิเจอร์-Built-in">
                                                เฟอร์นิเจอร์-Built-in</option>

                                            <option value="เขียนแบบ-ออกแบบ-3D">
                                                เขียนแบบ-ออกแบบ-3D</option>

                                            <option value="งานกระเบื้อง-ปูกระเบื้อง">
                                                งานกระเบื้อง-ปูกระเบื้อง</option>

                                            <option value="ผ้าม่าน-พรม-มู่ลี่">
                                                ผ้าม่าน-พรม-มู่ลี่</option>

                                            <option value="เหล็ก-สแตนเลส-อลูมิเนียม">
                                                เหล็ก-สแตนเลส-อลูมิเนียม</option>

                                            <option value="พลาสติก-โพลีคาร์บอเนต">
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

                                    <div class="d-flex ">
                                        <button>
                                            SEND
                                        </button>
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
            $(document).ready(function () {
                // เมื่อมีการเลือกไฟล์
                $("#inputGroupFile02").on("change", function (event) {
                    
                    const imageContainer = $("#image-container");
                    imageContainer.empty(); // เคลียร์รูปภาพที่แสดงก่อนหน้า

                    const files = event.target.files;
                    $.each(files, function (index, file) {
                        if (file.type.startsWith("img-jobs/")) {
                            const reader = new FileReader();
                            reader.onload = function () {
                                const img = $("<img>");
                                img.attr("src", reader.result);
                                img.css("max-width", "200px"); // ปรับขนาดรูปภาพตามต้องการ
                                imageContainer.append(img);
                            };
                            reader.readAsDataURL(file);
                            console.log("start");
                        }
                    });
                });
            });
        </script>

        

        
        


</body>

</html>
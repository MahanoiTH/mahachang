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
    <!-- เพิ่ม CSS สำหรับ Dropzone.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .profile-edit-container {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #004a9d;
        }

        /* เพิ่มสไตล์ให้กล่องรูปที่เลือก */
        .rounded-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            background-color: #ccc;
            margin-top: 10px;
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
                                แก้ไขโปรไฟล์
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-edit-container">
                                    <h1>แก้ไขโปรไฟล์</h1>
                                    <form id="profile-form">
                                        <div class="form-group">
                                            <label for="company-name">ชื่อบริษัท:</label>
                                            <input type="text" id="company-name" name="companyName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="profile-image">อัปโหลดรูปโปรไฟล์:</label>
                                            <input type="file" id="profile-image" name="profileImage" accept="image/*"
                                                required>
                                            <!-- สร้างกล่องรูปที่เลือกแสดงรูป -->
                                            <div id="image-preview" class="rounded-image"></div>
                                        </div>
                                        <button type="submit">บันทึก</button>
                                    </form>
                                </div>
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
        <!-- เพิ่ม JavaScript สำหรับ Dropzone.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

        <script>
            (function () {
                Dropzone.autoDiscover = false;
                var Maha = function () {

                    return {

                        initFrom: function () {

                            const profileImageInput = $("#profile-image");
                            const imagePreview = $("#image-preview");

                            // เมื่อรูปถูกเลือก
                            profileImageInput.change(function () {
                                const file = this.files[0];
                                if (file) {
                                    const reader = new FileReader();

                                    reader.onload = function (e) {
                                        const imageSrc = e.target.result;
                                        imagePreview.css("background-image", "url(" + imageSrc + ")");
                                    };

                                    reader.readAsDataURL(file);
                                }
                            });

                            $("#profile-form").submit(function (e) {
                                e.preventDefault();

                                const companyName = $("#company-name").val();
                                const selectedImage = profileImageInput[0].files[0];

                                if (!companyName) {
                                    alert("โปรดระบุชื่อบริษัท");
                                    return;
                                }

                                if (!selectedImage) {
                                    alert("โปรดเลือกรูปโปรไฟล์");
                                    return;
                                }

                                // สามารถดำเนินการบันทึกชื่อบริษัทและอัปโหลดรูปโปรไฟล์ได้ที่นี่
                                // คุณสามารถใช้ JavaScript หรือ Ajax เพื่อส่งข้อมูลไปยังเซิร์ฟเวอร์หรือ API ของคุณ
                            });
                        },


                        init: function () {
                            Maha.initFrom();
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
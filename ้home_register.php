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

    <title>สมัครสมาชิก</title>

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
        .btn-mahachang {
            margin-top: 25px;
            display: inline-block;
            font-family: 'Merriweather Sans', sans-serif;
            text-transform: uppercase;
            padding: 10px 45px;
            background-color: #ff8a1d;
            border: 1px solid #ff8a1d;
            border-radius: 2px;
            color: #ffffff;
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
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="images/professional-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <div class="detail-box">
                            <h2>
                                สมัครสมาชิก
                            </h2>
                            <form action="db_home_register.php" method="post">
                                <div>
                                    <input name="username" class="form-control " type="text" placeholder="Name" />
                                </div>
                                <div>
                                    <input name="phone" class="form-control mt-2" type="text"
                                        placeholder="Phone Number" />
                                </div>
                                <div>
                                    <input name="email" class="form-control mt-2" type="email" placeholder="Email" />
                                </div>
                                <div>
                                    <input name="password" class="form-control mt-2" type="text" class="message-box"
                                        placeholder="Password" />
                                </div>
                                <div>
                                    <input class="form-control mt-2" type="text" class="message-box"
                                        placeholder="Confirm Password" />
                                </div>
                                <div>
                                    <input name="insert" type="submit" value="ลงทะเบียน" class="btn-mahachang">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end professional section -->








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


</body>

</html>
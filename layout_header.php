<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!-- header section strats -->
<header class="header_section">
  <div class="header_top">
    <div class="container-fluid">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : mahachang@gmail.com
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            มาหา ช่าง
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
              // ถ้าเข้าสู่ระบบแล้ว แสดงลิงก์ "Logout"
              echo '';
            } else {
              echo '<li class="nav-item">
              <a class="nav-link" href="้home_register.php"> ลงทะเบียน</a>
            </li>';
            }
            ?>

            <li class="nav-item">
              <a class="nav-link" href="about.php"> เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">บริการ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">ติดต่อเรา</a>
            </li>
          </ul>
          <?php
            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
              // ถ้าเข้าสู่ระบบแล้ว แสดงลิงก์ "Logout"
              echo '<img src="images/client-1.jpg" alt="" class="user-pic" onclick="toggleMenu()">
                    <div class="submenu-wrapper" id="subMenu">
                      <div class="submenu">
                        <div class="user-info">
                          <img src="images/client-1.jpg" alt="">
                          <h2>autthapon</h2>
                        </div>
                        <hr />
          
                        <a href="business_profile.php" class="submenu-link">
                          <p>Profile</p>
                          <span></span>
                        </a>
          
                        <a href="submenu-link" class="submenu-link">
                          <p>Message</p>
                          <span></span>
                        </a>
          
                        <a href="db_home_logout.php" class="submenu-link">
          
                          <p><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</p>
                          <span></span>
                        </a>
          
                      </div>
                    </div>';
            } else {
              echo '<img src="images/logo-users.png" alt="" class="user-pic" onclick="toggleMenu()">';
            }
            ?>
          
        </div>
      </nav>
    </div>
  </div>
</header>
<script>
  let submenu = document.getElementById("subMenu");
  function toggleMenu() {
    submenu.classList.toggle("openMenu");
  }
</script>
<!-- end header section -->
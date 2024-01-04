<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

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
            <li><a href="shop-account.html">My Account</a></li>
            <li><a href="shop-wishlist.html">My Wishlist</a></li>
            <li><a href="shop-checkout.html">Checkout</a></li>
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
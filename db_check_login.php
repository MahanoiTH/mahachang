<?PHP 
    // การใช้ session บังคับให้ login ก่อนเสมอ
    // coffee_insert
    session_start();
    if ($_SESSION['email'] == "") {
        echo "<script type='text/javascript'>";
        echo "alert('Please Login');";
        echo "window.location = 'dist/authentication/sign-in/basic.php';";
        echo "</script>";
    }
?>
<?php
include('../server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : '';

    if (empty($company_name) || empty($phone)) {
        // ข้อมูลไม่ครบ
        echo "<script type='text/javascript'>";
        echo "alert('กรุณากรอกทุกช่อง');";
        echo "window.location = 'home_profile.php'; ";
        echo "</script>";
    } else {
        // ทำการอัปเดตข้อมูลในฐานข้อมูล
        $sql = "UPDATE users SET company_name = '$company_name', phone = '$phone' WHERE user_id = '$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>";
            echo "alert('แก้ไขข้อมูลสำเร็จ');";
            echo "window.location = 'home_profile.php'; ";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('Error back to update again');";
            echo "window.location = 'home_profile.php'; ";
            echo "</script>";
        }
    }
}
?>

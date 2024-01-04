<?php
include('server.php');

// รับข้อมูลจากฟอร์ม login.html
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบการส่งข้อมูล POST
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // ตรวจสอบความปลอดภัยและป้องกัน SQL Injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($password); // แนะนำใช้ htmlspecialchars() เพื่อป้องกันการใส่สคริปต์

    // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
    if (empty($email) || empty($password)) {
        // ข้อมูลไม่ครบ
        echo "<script type='text/javascript'>";
        echo "alert('กรุณากรอกทุกช่อง');";
        echo "window.location = 'home_register.php'; ";
        echo "</script>";
    } else {
        // ดำเนินการตรวจสอบข้อมูลเข้าสู่ระบบ
        if (checkLogin($email, $password)) {
            // echo 'เข้าสู่ระบบสำเร็จ';
            if ($_SESSION['email'] === "65108120039@rpu.ac.th"){
                echo "../admin_dashboard.php";
            } else {
                echo "../index.php";
            }
        } else {
            echo'เข้าสู่ระบบไม่สำเร็จ';
        }
    }
}

function checkLogin($email, $password) {
    global $conn;
    
    // ทำการตรวจสอบข้อมูลเข้าสู่ระบบในฐานข้อมูลหรือแหล่งข้อมูลอื่น ๆ
    // คุณควรใช้การเข้ารหัสรหัสผ่านที่ปลอดภัยและไม่เก็บรหัสผ่านในรูปแบบข้อความธรรมดา
    // และต้องการใช้เทคนิคที่ดีเพื่อเก็บรหัสผ่าน รวมถึงการใช้การเข้ารหัสรายละเอียดในการเก็บรหัสผ่าน
    // และตรวจสอบข้อมูลที่ได้จากฐานข้อมูลหรือแหล่งข้อมูลว่าสามารถเข้าสู่ระบบได้หรือไม่
    $email = mysqli_real_escape_string($conn, $email); // ใช้ mysqli_real_escape_string() เพื่อป้องกัน SQL Injection
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // เทียบรหัสผ่านที่ผู้ใช้ป้อนกับรหัสผ่านที่เก็บในฐานข้อมูล
        if (password_verify($password, $storedPassword)) {
            // รหัสผ่านถูกต้อง
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['type_id'] = $row['type_id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            return true;
        }
    }

    return false; // ไม่สามารถเข้าสู่ระบบได้
}
?>

<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insert'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $user_type = 2; // กำหนดให้เป็นลูกค้าตลอด

    // ตรวจสอบความปลอดภัยและป้องกัน SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $phone = mysqli_real_escape_string($conn, $phone);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = password_hash($password, PASSWORD_DEFAULT); // เข้ารหัสรหัสผ่าน

    // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
    if (empty($username) || empty($phone) || empty($email) || empty($password)) {
        // ข้อมูลไม่ครบ
        echo "<script type='text/javascript'>";
        echo "alert('กรุณากรอกทุกช่อง');";
        echo "window.location = 'home_register.php'; ";
        echo "</script>";
    } else {
        // Check email ซ้ำหรือไม่
        $email_check_query = "SELECT * FROM users WHERE email = '$email'";
        $email_query = mysqli_query($conn, $email_check_query);
        $email_result = mysqli_fetch_assoc($email_query);

        // Check username ซ้ำหรือไม่
        $username_check_query = "SELECT * FROM users WHERE username = '$username'";
        $username_query = mysqli_query($conn, $username_check_query);
        $username_result = mysqli_fetch_assoc($username_query);

        if ($email_result['email'] === $email) {
            echo "<script type='text/javascript'>";
            echo "alert('อีเมล ไมถูกต้องหรือลงทะเบียนแล้ว');";
            echo "window.location = 'home_register.php'; ";
            echo "</script>";
        } elseif ($username_result['username'] === $username) {
            echo "<script type='text/javascript'>";
            echo "alert('ชื่อผู้ใช้งาน ไม่ถูกต้องหรือถูกใช้งานแล้ว');";
            echo "window.location = 'home_register.php'; ";
            echo "</script>";
        } else {
            // ทำการสร้างบันทึกผู้ใช้ใหม่
            $sql = "INSERT INTO users (username, phone, email, type_id, password) 
            VALUES ('$username', '$phone', '$email', '$user_type', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>";
                echo "alert('สมัครสมาชิกสำเร็จ');";
                echo "window.location = 'index.php'; ";
                echo "</script>";
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('Error back to insert again');";
                echo "window.location = 'home_register.php'; ";
                echo "</script>";
            }
        }
    }
}
?>

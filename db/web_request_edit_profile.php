<?php
include('../server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบว่าค่า 'job_type_id' ถูกส่งมาหรือไม่
    if ($_SESSION['user_id']) {
        $user_id = $_SESSION['user_id'];

        $sql = "SELECT * 
                FROM users
                WHERE user_id = $user_id";

        $result = $conn->query($sql);

        if ($result !== false && $result->num_rows > 0) {
            $row = $result->fetch_assoc(); // ใช้ fetch_assoc() เพื่อดึงข้อมูลเดียว
            // แปลงอาเรย์ข้อมูลเป็น JSON
            echo json_encode($row);
        } else {
            echo "error";
        }
    } else {
        echo "Missing"; // 
    }
}

?>

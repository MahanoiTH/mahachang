<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบว่าค่า 'user_id' ถูกส่งมาหรือไม่
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT business_jobs.*, provinces.*
                FROM business_jobs
                JOIN provinces ON business_jobs.province_id = provinces.province_id
                WHERE business_jobs.user_id = $user_id AND business_jobs.active = 1";

        $result = $conn->query($sql);

        if ($result !== false) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            // แปลงอาเรย์ข้อมูลเป็น JSON
            echo json_encode($data);
        } else {
            echo "error";
        }
    } else {
        echo "Missing 'user_id' parameter"; // แจ้งเตือนว่าพารามิเตอร์ไม่ถูกส่งมา
    }
}
?>

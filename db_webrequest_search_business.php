<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบว่าค่า 'job_type_id' ถูกส่งมาหรือไม่
    if (isset($_POST['job_type_id'])) {
        $job_type_id = $_POST['job_type_id'];

        if ($job_type_id == -1) {
            $sql = "SELECT business_jobs.description, business_jobs.img_url, users.username
                    FROM business_jobs
                    INNER JOIN users ON business_jobs.user_id = users.id 
                    WHERE users.active = 1";
        } else {
            // ตรวจสอบค่า job_type_id ก่อนใช้ในคำสั่ง SQL
            if (!is_numeric($job_type_id)) {
                echo "Invalid 'job_type_id' parameter";
                exit;
            }

            $sql = "SELECT business_jobs.description, business_jobs.img_url, users.company_name
                    FROM business_jobs
                    INNER JOIN users ON business_jobs.user_id = users.id
                    WHERE business_jobs.job_id = $job_type_id";
        }

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
        echo "Missing 'job_type_id' parameter"; // แจ้งเตือนว่าพารามิเตอร์ไม่ถูกส่งมา
    }
}
?>

<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ct_name = $_POST['ct_name'];
    $ct_desc = $_POST['ct_desc'];
    $ct_order = $_POST['ct_order'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $active = $_POST['active'];

    // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
    if (empty($ct_name) || empty($ct_desc) || empty($ct_order) || empty($start_date) || empty($end_date) || empty($active)) {
        // ข้อมูลไม่ครบ
        echo "error";
    } else {
        // Process and move uploaded image files to the designated folder
        // Insert data into the database
        $sql = "INSERT INTO customer_advertising (advertising_order, active,start_date, end_date, customer_name, description) 
                VALUES ('$ct_order', '$active', '$start_date', '$end_date', '$ct_name', '$ct_desc')";
        if ($conn->query($sql) === TRUE) {
            // echo "success";
            $last_insert_id = $conn->insert_id;
            echo $last_insert_id;
        } else {
            echo "error";
        }
    }
}
?>
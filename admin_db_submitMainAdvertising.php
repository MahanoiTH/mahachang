<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $active = $_POST['active'];

    // new main advertising
    if ($id == 0) {
        $ct_name = $_POST['ct_name'];
        $ct_desc = $_POST['ct_desc'];
        $ct_order = $_POST['ct_order'];
        $ct_tol = $_POST['ct_tol'];
        $ct_email = $_POST['ct_email'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
        if (empty($ct_name) || empty($ct_desc) || empty($ct_order) || empty($start_date) || empty($end_date) || empty($active)) {
            // ข้อมูลไม่ครบ
            echo "error";
        } else {
            // Process and move uploaded image files to the designated folder
            // Insert data into the database
            $sql = "INSERT INTO customer_advertising (advertising_order, active, start_date, end_date, customer_name, description, phone_number, email) 
                    VALUES ('$ct_order', '$active', '$start_date', '$end_date', '$ct_name', '$ct_desc', '$ct_tol', '$ct_email')";
            if ($conn->query($sql) === TRUE) {
                // echo "success";
                $last_insert_id = $conn->insert_id;
                echo $last_insert_id;
            } else {
                echo "error";
            }
        }
    } else {
        // Check if required data is not empty
        if (empty($active) && empty($id)) {
            // Data is incomplete
            echo "error null";
        } else {
            if ($active == 0) {
                // Update data in the database when active is 0
                $sql = "UPDATE customer_advertising 
                        SET active = '$active'
                        WHERE id = $id";
            } else {
                $ct_name = $_POST['ct_name'];
                $ct_desc = $_POST['ct_desc'];
                $ct_order = $_POST['ct_order'];
                $ct_email = $_POST['ct_email'];
                $ct_tol = $_POST['ct_tol'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                // Check if required data is not empty
                if (empty($ct_name) || empty($ct_desc) || empty($ct_order)) {
                    // Data is incomplete
                    echo "error";
                } else {
                    // Update data in the database when active is not 0
                    $sql = "UPDATE customer_advertising 
                            SET advertising_order = '$ct_order',
                                active = '$active',
                                customer_name = '$ct_name',
                                description = '$ct_desc'
                            WHERE id = $id";
                }
            }

            if ($conn->query($sql) === TRUE) {
                echo "success";
            } else {
                echo "error connect";
            }
        }
    }
}
?>

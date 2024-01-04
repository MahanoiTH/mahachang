<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $active = $_POST['active'];
    $create_by = $_SESSION['user_name'];
    // new main advertising
    if ($id == 0) {
        $ct_name = $_POST['ct_name'];
        $ct_desc = $_POST['ct_desc'];
        $ct_order = $_POST['ct_order'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
        if (empty($ct_name) || empty($ct_desc) || empty($ct_order) || empty($start_date) || empty($end_date) || empty($active)) {
            // ข้อมูลไม่ครบ
            echo "error";
        } else {
            // Process and move uploaded image files to the designated folder
            // Insert data into the database
            $sql = "INSERT INTO jobs_steel (job_order, active, created_by, start_date, end_date, client_name, job_description) 
                    VALUES ('$ct_order', '$active', '$create_by', '$start_date', '$end_date', '$ct_name', '$ct_desc')";
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
                $sql = "UPDATE jobs_steel 
                        SET active = '$active'
                        WHERE id = $id";
            } else {
                $ct_name = $_POST['ct_name'];
                $ct_desc = $_POST['ct_desc'];
                $ct_order = $_POST['ct_order'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                // Check if required data is not empty
                if (empty($ct_name) || empty($ct_desc) || empty($ct_order)) {
                    // Data is incomplete
                    echo "error";
                } else {
                    // Update data in the database when active is not 0
                    $sql = "UPDATE jobs_steel 
                            SET job_order = '$ct_order',
                                active = '$active',
                                client_name = '$ct_name',
                                job_description = '$ct_desc'
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

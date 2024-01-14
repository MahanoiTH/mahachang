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
        $job_type_id = $_POST['job_type_id'];
        $order = $_POST['job_order'];
        $company_name = $_POST['company_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $tol = $_POST['tol'];
        $desc = $_POST['desc'];
        $email = $_POST['email'];
        $created_by = $_SESSION['user_name'];
        // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
        if (empty($company_name) || empty($desc) || empty($job_type_id)) {
            // ข้อมูลไม่ครบ
            echo "error";
        } else {
            // Process and move uploaded image files to the designated folder
            // Insert data into the database
            $sql = "INSERT INTO job (job_type_id, job_order, active, created_by, start_date, end_date, phone_number, company_name, job_description, email) 
                    VALUES ('$job_type_id', '$order', '$active', '$created_by', '$start_date', '$end_date', '$tol', '$company_name', '$desc', '$email')";
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
                $sql = "UPDATE job 
                        SET active = '$active'
                        WHERE id = $id";
            } else {
                $company_name = $_POST['ct_name'];
                $desc = $_POST['ct_desc'];
                $order = $_POST['ct_order'];
                $email = $_POST['ct_email'];
                $tol = $_POST['ct_tol'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                // Check if required data is not empty
                if (empty($company_name) || empty($desc) || empty($order)) {
                    // Data is incomplete
                    echo "error";
                } else {
                    // Update data in the database when active is not 0
                    $sql = "UPDATE job 
                            SET job_order = '$ct_order',
                                active = '$active',
                                company_name = '$ct_name',
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

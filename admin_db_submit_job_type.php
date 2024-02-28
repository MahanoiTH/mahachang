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
        $ct_folder_name = $_POST['ct_folder_name'];
        $ct_keywords = $_POST['ct_keywords'];
        // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
        if (empty($ct_name) || empty($active)) {
            // ข้อมูลไม่ครบ
            echo "error";
        } else {
            // Process and move uploaded image files to the designated folder
            // Insert data into the database
            $sql = "INSERT INTO jobs_type (job_name,folder_name,key_words, active) 
                    VALUES ('$ct_name','$$ct_folder_name','$ct_keywords', '$active')";
            if ($conn->query($sql) === TRUE) {
                // echo "success";
                echo "add new type success!!!";
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
                $sql = "UPDATE jobs_type 
                        SET active = '$active'
                        WHERE id = $id";
            } else {
                $ct_name = $_POST['ct_name'];
                $ct_folder_name = $_POST['ct_folder_name'];
                $ct_keywords = $_POST['ct_keywords'];
                // Check if required data is not empty
                if (empty($ct_name)) {
                    // Data is incomplete
                    echo "error";
                } else {
                    // Update data in the database when active is not 0
                    $sql = "UPDATE jobs_type 
                            SET job_name = '$ct_name',
                                folder_name = '$ct_folder_name',
                                key_words = '$ct_keywords',
                                active = '$active',
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
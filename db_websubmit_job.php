<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jobs_id = $_POST['jobs_id'];
    $jobs_title = $_POST['jobs_title'];
    $description = $_POST['description'];
    $img_url = $_FILES['img_url']; // Change to use $_FILES to handle file uploads
    $user_id = $_SESSION['user_id'];

    // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
    if (empty($user_id) || empty($jobs_id) || empty($description) || empty($img_url)) {
        // ข้อมูลไม่ครบ
        echo "error";
    } else {
        // Handle image uploads and database insertion
        $img_folder = "img-jobs/". $user_id ."/"; // Change this to the folder where you want to store images
        if (!is_dir($img_folder)) {
            mkdir($img_folder, 0755, true); // สร้างไดเรกทอรี่หากยังไม่มี
        }
        // Process and move uploaded image files to the designated folder
        $uploaded_files = [];
        foreach ($img_url['name'] as $key => $name) {
            $tmp_name = $img_url['tmp_name'][$key];
            $new_name = $img_folder . $name;
            if (move_uploaded_file($tmp_name, $new_name)) {
                $uploaded_files[] = $new_name;
            }
        }

        // Insert data into the database
        if (!empty($uploaded_files)) {
            $sql = "INSERT INTO business_jobs (user_id, job_id,business_jobs_title, description, img_url) 
                VALUES ('$user_id', '$jobs_id', '$description', '" . implode(',', $uploaded_files) . "')";

            if ($conn->query($sql) === TRUE) {
                echo "success";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    }
}
?>

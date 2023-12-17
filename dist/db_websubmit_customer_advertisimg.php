<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming these values are still relevant to your form
    $active = $_POST['active'];
    $create_by = $_SESSION['user_id']; // Assuming you want to use the user_id from the session
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $phone_number = $_POST['phone_number'];
    $file_name = $_FILES['file_name']['name']; // Assuming file_name is the name attribute of your file input
    $addition_file_name = $_FILES['addition_file_name']['name']; // Assuming addition_file_name is the name attribute of another file input
    $customer_name = $_POST['customer_name'];
    $description = $_POST['description'];
    $email = $_POST['email'];

    // ตรวจสอบว่าข้อมูลถูกส่งมาหรือไม่
    if (empty($create_by) || empty($active) || empty($start_date) || empty($end_date) || empty($file_name) || empty($customer_name) || empty($description) || empty($email)) {
        // ข้อมูลไม่ครบ
        echo "error";
    } else {
        // Handle file uploads and database insertion
        $file_folder = "advertising_files/"; // Change this to the folder where you want to store files
        if (!is_dir($file_folder)) {
            mkdir($file_folder, 0755, true); // สร้างไดเรกทอรี่หากยังไม่มี
        }

        // Process and move uploaded files to the designated folder
        $uploaded_files = [];
        foreach ($_FILES as $key => $file) {
            $tmp_name = $file['tmp_name'];
            $new_name = $file_folder . $file['name'];
            if (move_uploaded_file($tmp_name, $new_name)) {
                $uploaded_files[$key] = $new_name;
            }
        }

        // Insert data into the database
        if (!empty($uploaded_files)) {
            $sql = "INSERT INTO customer_advertising (active, create_by, start_date, end_date, phone_number, file_name, addition_file_name, customer_name, description, email) 
                VALUES ('$active', '$create_by', '$start_date', '$end_date', '$phone_number', '$uploaded_files[file_name]', '$uploaded_files[addition_file_name]', '$customer_name', '$description', '$email')";
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

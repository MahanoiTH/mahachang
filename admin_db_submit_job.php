<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming 'active' and 'id' are always set for simplicity. Adjust based on real application logic.
    $active = $_POST['active'];
    $id = $_POST['id'];

    // Prepared statement placeholder variables
    $stmt = null;
    $sql = "";

    if ($id == 0) {
        // Handling new main advertising insert
        // Assume all necessary fields are provided. Validate as required.
        $job_type_id = $_POST['job_type_id'];
        $order = $_POST['job_order'];
        $company_name = $_POST['company_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $tol = $_POST['tol'];
        $desc = $_POST['desc'];
        $key_word = $_POST['key_word'];
        $email = $_POST['email'];
        $created_by = $_SESSION['user_name']; // Make sure session is started and user_name is set.

        // Assuming your form has an input field of type 'file' named 'image'
        if (isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $upload_directory = 'uploads/'; // Make sure this directory exists and is writable
            $upload_path = $upload_directory . $file_name;
            move_uploaded_file($file_tmp, $upload_path);
            // You may want to store $upload_path or $file_name in the database along with other job details
        }

        // Prepare statement to insert new job
        $sql = "INSERT INTO job (job_type_id, job_order, active, created_by, start_date, end_date, phone_number, company_name, job_description, email, key_words) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iisssssssss", $job_type_id, $order, $active, $created_by, $start_date, $end_date, $tol, $company_name, $desc, $email, $key_word);

    } else {
        // Handle job update
        if ($active == 0) {
            // Only updating 'active' status
            $sql = "UPDATE job SET active = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $active, $id);
        } else {
            // Updating multiple fields
            $company_name = $_POST['company_name'];
            $desc = $_POST['desc'];
            $key_word = $_POST['key_word'];
            $order = $_POST['job_order'];
            $email = $_POST['email'];
            $tol = $_POST['tol'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $sql = "UPDATE job SET job_order = ?, active = ?, company_name = ?, job_description = ?, key_words = ?, email = ?, phone_number = ?, start_date = ?, end_date = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iisssssssi", $order, $active, $company_name, $desc, $key_word, $email, $tol, $start_date, $end_date, $id);
        }
    }

    // Execute prepared statement
    if ($stmt && $stmt->execute()) {
        echo ($id == 0) ? $conn->insert_id : "success"; // For new entries, output last insert ID, otherwise just confirm success
    } else {
        echo "error"; // Simplified error handling. Consider more specific error messaging in real applications.
    }

    if ($stmt) {
        $stmt->close();
    }
}

?>

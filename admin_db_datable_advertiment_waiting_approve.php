<?php
// jobs type = 2
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $JOB_TYPE_ID = $_POST['job_type_id'];

    $sql = "SELECT * FROM waiting_approval WHERE waiting_approval.active = 1 AND waiting_approval.job_type_id = $JOB_TYPE_ID";
    $result = $conn->query($sql);

    // Check for errors in query execution
    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        $data = array();

        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            // Convert the comma-separated file URLs to an array
            $formattedRow = array(
                // 'newColumnName1' => $row['oldColumnName1'],
                'id' => $row['id'],
                'active' => $row['active'],
                'order' => $row['job_order'],
                'name' => $row['client_name'],
                'desc' => $row['job_description'],
                'email' => $row['email'],
                'phone_number' => $row['phone_number'],
                'start_date' => $row['start_date'],
                'end_date' => $row['end_date'],
                // Add more columns as needed
            );
            $data[] = $formattedRow;
        }

        // Close the result set
        $result->close();

        // Close the database connection
        $conn->close();

        // Convert the data array to JSON and echo it
        echo json_encode(array('data' => $data));
    }
} else {
    // Handle cases where the request method is not POST
    echo json_encode(array('error' => 'Invalid request method'));
}
?>

<?php
// jobs type = 2
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_type_id = $_POST['job_type_id'];

    $sql = "SELECT * FROM job WHERE job.active = 1 AND job.job_type_id = $job_type_id";
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
                'name' => $row['company_name'],
                'desc' => $row['job_description'],
                'key_word' => $row['key_words'],
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

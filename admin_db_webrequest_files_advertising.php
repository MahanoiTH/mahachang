<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = $_POST['job_id'];

    $sql = "SELECT *
            FROM waiting_approval_attachment
            WHERE waiting_approval_attachment.active = 1 AND waiting_approval_attachment.job_id = $job_id";

    $result = $conn->query($sql);

    // Check for errors in query execution
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        $data = array();

        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            // Convert the comma-separated file URLs to an array
            $formattedRow = array(
                'id' => $row['id'],
                'job_id' => $row['job_id'],
                'file_name' => $row['file_url'],
                // Add more columns as needed
            );
            $data[] = $formattedRow;
        }

        // Close the database connection
        $conn->close();

        // Convert the data array to JSON and echo it
        echo json_encode($data);
    }
}
?>

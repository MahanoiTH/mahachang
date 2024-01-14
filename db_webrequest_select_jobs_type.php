<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT *
            FROM jobs_type
            WHERE jobs_type.active = 1 ";

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
                'name' => $row['job_name'],
                'folder_name' => $row['folder_name'],
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

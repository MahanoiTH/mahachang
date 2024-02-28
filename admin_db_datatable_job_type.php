<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "SELECT * FROM jobs_type WHERE jobs_type.active = 1";
    $result = $conn->query($sql);

    // Check for errors in query execution
    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        $data = array();

        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            $formattedRow = array(
                // 'newColumnName1' => $row['oldColumnName1'],
                'id' => $row['id'],
                'name' => $row['job_name'],
                'keyword' => $row['key_words'],
                'folder_name' => $row['folder_name'],
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

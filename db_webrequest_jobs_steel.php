<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_steel.id,jobs_steel.job_order, jobs_steel.phone_number, jobs_steel.client_name, jobs_steel.job_description,
                    GROUP_CONCAT(jobs_steel_attachment.file_url) AS file_urls
            FROM jobs_steel
            LEFT JOIN jobs_steel_attachment ON jobs_steel.id = jobs_steel_attachment.job_id 
            WHERE jobs_steel.active = 1 AND (jobs_steel_attachment.active = 1 OR jobs_steel_attachment.active IS NULL)
            GROUP BY jobs_steel.id";

    $result = $conn->query($sql);

    // Check for errors in query execution
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        $data = array();

        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            // Convert the comma-separated file URLs to an array
            $row['file_urls'] = explode(',', $row['file_urls']);
            $data[] = $row;
        }

        // Close the database connection
        $conn->close();

        // Convert the data array to JSON and echo it
        echo json_encode($data);
    }
}
?>

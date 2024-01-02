<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_construction.id,jobs_construction.job_order, jobs_construction.phone_number, jobs_construction.client_name, jobs_construction.job_description,
                    GROUP_CONCAT(jobs_construction_attachment.file_url) AS file_urls
            FROM jobs_construction
            LEFT JOIN jobs_construction_attachment ON jobs_construction.id = jobs_construction_attachment.job_id 
            WHERE jobs_construction.active = 1 AND (jobs_construction_attachment.active = 1 OR jobs_construction_attachment.active IS NULL)
            GROUP BY jobs_construction.id";

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

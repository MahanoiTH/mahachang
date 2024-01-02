<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_air_conditioning.id,jobs_air_conditioning.job_order, jobs_air_conditioning.phone_number, jobs_air_conditioning.client_name, jobs_air_conditioning.job_description,
                    GROUP_CONCAT(jobs_air_conditioning_attachment.file_url) AS file_urls
            FROM jobs_air_conditioning
            LEFT JOIN jobs_air_conditioning_attachment ON jobs_air_conditioning.id = jobs_air_conditioning_attachment.job_id 
            WHERE jobs_air_conditioning.active = 1 AND (jobs_air_conditioning_attachment.active = 1 OR jobs_air_conditioning_attachment.active IS NULL)
            GROUP BY jobs_air_conditioning.id";

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

<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_electrical.id,jobs_electrical.job_order, jobs_electrical.phone_number, jobs_electrical.client_name, jobs_electrical.job_description,
                    GROUP_CONCAT(jobs_electrical_attachment.file_url) AS file_urls
            FROM jobs_electrical
            LEFT JOIN jobs_electrical_attachment ON jobs_electrical.id = jobs_electrical_attachment.job_id 
            WHERE jobs_electrical.active = 1 AND (jobs_electrical_attachment.active = 1 OR jobs_electrical_attachment.active IS NULL)
            GROUP BY jobs_electrical.id";

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
            $formattedRow = array(
                'id' => $row['id'],
                'order' => $row['job_order'],
                'name' => $row['client_name'],
                'desc' => $row['job_description'],
                'phone_number' => $row['phone_number'],
                'file_urls' => $row['file_urls'],
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

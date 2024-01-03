<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_design.id,jobs_design.job_order, jobs_design.phone_number, jobs_design.client_name, jobs_design.job_description,
                    GROUP_CONCAT(jobs_design_attachment.file_url) AS file_urls
            FROM jobs_design
            LEFT JOIN jobs_design_attachment ON jobs_design.id = jobs_design_attachment.job_id 
            WHERE jobs_design.active = 1 AND (jobs_design_attachment.active = 1 OR jobs_design_attachment.active IS NULL)
            GROUP BY jobs_design.id";

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

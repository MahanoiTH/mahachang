<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_plumbing.id,jobs_plumbing.job_order, jobs_plumbing.phone_number, jobs_plumbing.client_name, jobs_plumbing.job_description,jobs_plumbing.email,
                    GROUP_CONCAT(jobs_plumbing_attachment.file_url) AS file_urls
            FROM jobs_plumbing
            LEFT JOIN jobs_plumbing_attachment ON jobs_plumbing.id = jobs_plumbing_attachment.job_id 
            WHERE jobs_plumbing.active = 1 AND (jobs_plumbing_attachment.active = 1 OR jobs_plumbing_attachment.active IS NULL)
            GROUP BY jobs_plumbing.id";

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
                'email' => $row['email'],
                'file_urls' => $row['file_urls'],
                'type_name' => 'plumbing',
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

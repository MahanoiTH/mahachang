<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $job_type_id = $_POST['job_type_id'];

    $sql = "SELECT job.id,job.job_order, job.phone_number, job.company_name, job.job_description, job.email,
                    GROUP_CONCAT(job_attachment.file_url) AS file_urls
            FROM job
            LEFT JOIN job_attachment ON job.id = job_attachment.job_id 
            WHERE job.active = 1 AND job.job_type_id = $job_type_id AND (job_attachment.active = 1 OR job_attachment.active IS NULL)
            GROUP BY job.id";

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
                'name' => $row['company_name'],
                'desc' => $row['job_description'],
                'phone_number' => $row['phone_number'],
                'email' => $row['email'],
                'file_urls' => $row['file_urls'],
                'type_name' => 'air_conditioning',
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

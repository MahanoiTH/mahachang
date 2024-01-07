<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT jobs_interior_design.id,jobs_interior_design.advertising_order, jobs_interior_design.phone_number, jobs_interior_design.customer_name, jobs_interior_design.description, jobs_interior_design.email,
                    GROUP_CONCAT(jobs_interior_design_attachment.file_url) AS file_urls
            FROM jobs_interior_design
            LEFT JOIN jobs_interior_design_attachment ON jobs_interior_design.id = jobs_interior_design_attachment.job_id 
            WHERE jobs_interior_design.active = 1 AND (jobs_interior_design_attachment.active = 1 OR jobs_interior_design_attachment.active IS NULL)
            GROUP BY jobs_interior_design.id";

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
                'order' => $row['advertising_order'],
                'name' => $row['customer_name'],
                'desc' => $row['description'],
                'phone_number' => $row['phone_number'],
                'email' => $row['email'],
                'file_urls' => $row['file_urls'],
                'type_name' => 'interior_design',
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

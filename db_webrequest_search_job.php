<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $job_type_id = $_POST['job_type_id'];
    $str_keyword = isset($_POST['str_keyword']) ? $_POST['str_keyword'] : null;

    // Initialize the SQL query without WHERE clause
    $sql = "SELECT job.id, job.job_order, job.phone_number, job.company_name, job.job_description, job.email,
                    GROUP_CONCAT(job_attachment.file_url) AS file_urls
            FROM job
            LEFT JOIN job_attachment ON job.id = job_attachment.job_id 
            WHERE job.active = 1";

    if (!empty($str_keyword)) {
        // If str_keyword is provided, filter by str_keyword only
        $sql .= " AND job.key_words LIKE ?";
    } else {
        // If str_keyword is not provided, filter by job_type_id
        $sql .= " AND job.job_type_id = ?";
    }

    $sql .= " AND (job_attachment.active = 1 OR job_attachment.active IS NULL)
             GROUP BY job.id";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if (!empty($str_keyword)) {
        $like_keyword = '%' . $str_keyword . '%';
        $stmt->bind_param("s", $like_keyword); // Bind str_keyword parameter
    } else {
        $stmt->bind_param("i", $job_type_id); // Bind job_type_id parameter
    }

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check for errors in query execution
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        $data = array();

        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            $row['file_urls'] = explode(',', $row['file_urls']); // Convert file URLs into an array
            $formattedRow = array(
                'id' => $row['id'],
                'order' => $row['job_order'],
                'name' => $row['company_name'],
                'desc' => $row['job_description'],
                'phone_number' => $row['phone_number'],
                'email' => $row['email'],
                'file_urls' => $row['file_urls'],
                'type_name' => 'air_conditioning', // Consider dynamically retrieving this value based on job_type_id
            );
            $data[] = $formattedRow;
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();

        // Convert the data array to JSON and output it
        echo json_encode($data);
    }
}
?>

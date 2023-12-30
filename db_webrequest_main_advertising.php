<?php
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "SELECT customer_advertising.id,customer_advertising.advertising_order, customer_advertising.phone_number, customer_advertising.customer_name, customer_advertising.description,
                    GROUP_CONCAT(cs_advertising_attachment.file_url) AS file_urls
            FROM customer_advertising
            LEFT JOIN cs_advertising_attachment ON customer_advertising.id = cs_advertising_attachment.advertising_id 
            WHERE customer_advertising.active = 1 AND (cs_advertising_attachment.active = 1 OR cs_advertising_attachment.active IS NULL)
                AND customer_advertising.advertising_order BETWEEN 1 AND 5
            GROUP BY customer_advertising.id";

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

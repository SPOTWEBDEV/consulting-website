<?php

include('../../connection.php');



// echo json_encode(["greeting" => "hello world"]);


// Query to fetch the services
$query = "SELECT id, title, content FROM services"; // Adjust this query based on your table structure
$result = mysqli_query($connection, $query);

$services = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // No need to decode the message, just return it as-is
        $services[] = [
            'id' => $row['id'],
            'name' => $row['title'],
            'message' => $row['content'] // Directly use HTML content from the DB
        ];
    }
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($services);

?>
<?php
// Database configuration
include "connect.php";

$id = $_GET['id'];

// Fetch the image data from the 'image' table
$sql = "SELECT foto FROM tr_process where compid = '".$id."'"; // Retrieve the latest uploaded image
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['foto'];

    // Display the image
    echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image">';
} else {
    echo "No image found in the database.";
}

// Close the database connection
$con->close();
?>

<?php
// Database configuration
include "connect.php";

$id = $_GET['bid'];

// Fetch the image data from the 'image' table
    $sql = "SELECT image FROM image where compid = 'HLP-2023-10-15-78823'"; // Retrieve the latest uploaded image
$result = $con->query($sql);

if ($result)
{
    while ($row = $result->fetch_assoc())
    {
    $imageData = $row['image'];
    $imageType = determineImageType($imageData);
    echo '<img src="data:' . $imageType . ';base64,' . base64_encode($imageData) . '" alt="Image" style="max-width:500px;">';
    }
    
    
} else {
    echo "Error: " . $conn->error;
}   
$con->close();
    
   
// Function to determine image type based on file extension
function determineImageType($imageData) {
    // Check the first few bytes of the image data to determine the file type
    $jpegSignature = "\xFF\xD8\xFF";
    $pngSignature = "\x89\x50\x4E\x47\x0D\x0A\x1A\x0A";

    if (strpos($imageData, $jpegSignature) === 0) {
        return 'image/jpeg';
    } elseif (strpos($imageData, $pngSignature) === 0) {
        return 'image/png';
    } else {
        return 'image/unknown'; // If the image type can't be determined
    }
}
   


?>

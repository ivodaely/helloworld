<?php
// Database configuration
include "connect.php";

if(isset($_POST['submit'])) {
    $image = $_FILES['image']['tmp_name'];

    if(!empty($image)) {
        $imageData = addslashes(file_get_contents($image));
        $id = 'aa';

        // Insert the image data into the 'image' table
        $sql = "INSERT INTO tr_complaint (compid,foto) VALUES ('$id,$imageData')";
        if ($con->query($sql) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Please select an image to upload.";
    }
}

// Close the database connection
$con->close();
?>

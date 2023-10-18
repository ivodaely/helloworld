<?php

include "connect.php";
// Include the PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

// Check if the button was clicked
if (isset($_POST['but_add'])) {

    $airline = $_POST['airline'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $wa = $_POST['wa'];
    $bandara = $_POST['bandara'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $kat = $_POST['kategori'];
    $flight = $_POST['flight'];
    $ac = $_POST['ac'];
    $parking = $_POST['parking'];
    $stdx = $_POST['stdx'];
    $atdy = $_POST['atdy'];
    $delay = $_POST['delay'];
    $ket = $_POST['ket'];
    $status = "Open";
   // $image = $_FILES['image']['tmp_name'];
    //$imageData = file_get_contents($image);
   
    date_default_timezone_set('Asia/Bangkok'); // Set the time zone to GMT+7 
    $formattedDate = DateTime::createFromFormat('d/m/Y', $tanggal);
    $tglnew = $formattedDate->format('Y-m-d');

    $bandarcode = "select bandaraid from db_bandara where bandara like '".$bandara."'";
	$rbandara = $con->query($bandarcode);
	$wbandara = $rbandara->fetch_array();
	$kdbandara = $wbandara['bandaraid'];
     
	
    // Create a unique complaint ID
    $todate = date("Y-m-d");
    $random = str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);
    $complaint_id = "$kdbandara-$todate-$random";

// Create a prepared statement
$query = "INSERT INTO tr_complaint (compid, airline, nama_pelapor, whatsapp, email, tempat_kejadian, tanggal_kejadian, waktu, jenis_komplain, flight_num, ac_reg, park_stand, stdx, stdy, delay, keterangan, status, rate, pic, insert_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Initialize a prepared statement
$stmt = mysqli_prepare($con, $query);

// Bind parameters to the prepared statement
mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $complaint_id, $airline, $nama, $wa, $email, $bandara, $tglnew, $waktu, $kat, $flight, $ac, $parking, $stdx, $atdy, $delay, $ket, $status, $rate, $pic, $todate);


        foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                $compid_x = $complaint_id;
                $file_name = $_FILES['image']['name'][$key];
                $image = file_get_contents($_FILES['image']['tmp_name'][$key]);
        
                // Insert file information into the database using prepared statements
                $sql = "INSERT INTO image (compid, image) VALUES (?, ?)";
                $stmt2 = mysqli_prepare($con, $sql);
                mysqli_stmt_bind_param($stmt2, "sb", $compid_x, $image);
                mysqli_stmt_send_long_data($stmt2, 1, $image);
                mysqli_stmt_execute($stmt2);
                
            }

// Send the binary image data
//mysqli_stmt_send_long_data($stmt, 1, $imageData);

if (mysqli_stmt_execute($stmt)) {
    // Create a new PHPMailer instance
        $mail = new PHPMailer();

        // SMTP configuration for Gmail
        $mail->isSMTP();
        $mail->Host       = 'simpel.biz'; // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'complaint@simpel.biz'; // Your Gmail email address
        $mail->Password   = 'simpel2023'; // Your Gmail password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Set the sender and recipient
        $mail->setFrom('complaint@simpel.biz', 'SIMPEL - PERTAMINA'); // Your address
        $mail->addAddress($email, $nama); // Recipient's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = ' [SIMPEL.BIZ] Customer Complaint Report-' . $complaint_id;
        $mail->Body    = 'Dear ' . $nama . ', <br> <br> Thank you for writing your complaint. We appreciate any positive input to make our company better. <br>Here is your complaint ticket number  You can track your complaint report regularly via https://simpel.biz/tracking.php?tiket=' . $complaint_id . '<br><br>Thanks,<br><br>Pertamina';
        
        


        //Send the email
        if ($mail->send()) {
            header("Location: complaint_done.php?id=$complaint_id");
        } else {
            echo 'Error: ' . $mail->ErrorInfo;
        }
} else {
    echo "Error: " . mysqli_error($con);
}



}
?>

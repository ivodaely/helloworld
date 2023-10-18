 <?php
 
 include "connect.php";


    if(isset($_POST['but_add'])){
     $id = $_GET['id'];
     $q = "select nama_pelapor, airline from tr_complaint where compid = '".$id."'";
     $r = $con->query ($q);
     $w = $r->fetch_array();
     $nm = $w ['nama_pelapor'];
     $air = $w ['airline'];
     
     
     $s1 = $_POST['satisfied-1'];
     $s2 = $_POST['satisfied-2'];
     $s3 = $_POST['satisfied-3'];
     $s4 = $_POST['satisfied-4'];
     $s5 = $_POST['satisfied-5'];
     $s6 = $_POST['satisfied-6'];
     $s7 = $_POST['satisfied-7'];
     $s8 = $_POST['satisfied-8'];
     $s9 = $_POST['satisfied-9'];
     $s10 = $_POST['satisfied-10'];
     $s11 = $_POST['satisfied-11'];
     $s12 = $_POST['satisfied-12'];
     $s13 = $_POST['satisfied-13'];
     $s14 = $_POST['satisfied-14'];
     $s15 = $_POST['satisfied-15'];
     $sug = $_POST['suggest'];
     
     
	 
	  $qin = "INSERT INTO tr_feedback (satisfied1,satisfied2,satisfied3,satisfied4,satisfied5,satisfied6,satisfied7,satisfied8,satisfied9,satisfied10,satisfied11,satisfied12,satisfied13,satisfied14,satisfied15,suggest,nama,airline,insert_date) VALUES ('".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$s8."','".$s9."','".$s10."','".$s11."','".$s12."','".$s13."','".$s14."','".$s15."','".$sug."','".$nm."','".$air."',now())";
                                                             
		mysqli_query($con,$qin);
		header('Location: feedback_tq.php');
    
               

     } 
?>
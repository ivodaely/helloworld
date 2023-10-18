<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'simpelbi_admin';
$DATABASE_PASS = 'simpel2023';
$DATABASE_NAME = 'simpelbi_simpel';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

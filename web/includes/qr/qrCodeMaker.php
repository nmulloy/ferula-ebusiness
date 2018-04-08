<?php
session_start();

include "qrcode.php";
include 'dbh.inc.php';

$id = $_SESSION['u_id'];
$sqlget = "SELECT * FROM userpersonalinfo WHERE user_id = $id";
$sqldata = mysqli_query($conn, $sqlget);

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
	$fName = $row['fName'] ;
	$lName = $row['lName'] ;
	$gender = $row['gender'];
	$address = $row['address'];
	$city = $row['city'];
	$county = $row['county'];
	$country = $row['country'];
	$contactNumber = $row['contactNum'];
	$dob = $row['DOB'];
	$insurance = $row['insurance'];
	$height = $row['height'];
	$weight =  $row['weight'];
	$bloodType =  $row['blood'];
}

// Create QRcode object 
$qc = new QRCODE(); 

// create text QR code 
$qc->TEXT("firstName: " .$fName . "\nlastName:" .$lName . "\nGender:" .$gender . "\nAddress:" .$address. "\nCity:" .$city . "\nCounty:" .$county . 
"\nCountry:" .$country . "\nContactNumber:" .$contactNumber . "\nDOB:" .$dob. "\nInsurance:" .$insurance . "\nheight:" .$height . "\nWeight:" .$weight . "\nBlood Type:" .$bloodType); 

// render QR code
$qc->QRCODE(400,"info.png");

header("Location: /web/Myfiles.php");
exit();
?>
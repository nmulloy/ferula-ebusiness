<?php
	include 'dbh.inc.php';
	
	$sqlget = "SELECT * FROM chronicdisease";
	$sqldata = mysqli_query($conn, $sqlget);
	
	echo $sqldata;
	
?>
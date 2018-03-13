<?php
	include_once 'includes/dbh.inc.php';
?>

<html>
<head>
</head>
<body>
	<?php
		$dataToSearch = "nmulloy@tcd.ie" ;//data to search in sql statement
		$sql = "SELECT * FROM users WHERE user_email =?;"; //? used as placeholder
		//Create prepared statement
		$stmt = mysqli_stmt_init($conn);//state database to use here
		//Prepare the prepared statement
		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo "SQL statement failed";
		} else {
			//bind parameters to the placeholder
			mysqli_stmt_bind_param($stmt, "s", $dataToSearch);
			//run parameters inside database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		
			while( $row = mysqli_fetch_assoc($result)) {
				echo $row['user_email'] . "<br>";
			}
		}
	?>
</body>
</html>
<?php
	include_once 'includes/dbh.inc.php';
?>

<html>
<head>
</head>
<body>
	<?php
		$sql = "SELECT * FROM users WHERE user_first = 'niall';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while( $row = mysqli_fetch_assoc($result)) {
				echo $row['user_email'] . "<br>";
			}
		}
	?>
</body>
</html>
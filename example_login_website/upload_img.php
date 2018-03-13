<?php
	session_start();
?>

<html>
<head>
	</title></title>
</head>
<body>
	
	<?php
		if(isset($_SESSION['u_id'])){
	
			echo "YOU LOGGED IN!";
				
			echo '<form action ="upload.php" method = "POST" enctype = "multipart/form-data">
			<input type ="file" name = "file">
			<button type = "submit" name= "submit"> UPLOAD </button>
			</form>';
			};
	?>
	
	
	<p> Login as user </p>
	<form action = "includes/login.inc.php" method = "POST">
		<input type= "text" name="uidLogin" placeholder = "Username/email">
		<input type= "password" name="pwd" placeholder = "password">
		<button type = "submit" name = "submit"> Login </button>
	</form>
	
	<p> Logout as user </p>
	<form action= "includes/logout.inc.php" method="POST">
		<button type="submit" name="submit">Logout</button>
	</form>
</body>
</html>
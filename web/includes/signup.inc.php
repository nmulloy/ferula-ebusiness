<?php
	
	if(isset($_POST['submit'])){
		
		include_once 'dbh.inc.php';
		
		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		
		//error handlers
		if(empty($first) || empty($last) || empty($email) || empty($pwd)){
			header("Location: ../landing_page.php?signup=empty");
			exit();
		} else {
			//check if input characters are valid
			
			if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/" , $last)) {
				header("Location: ../landing_page.php?signup=invalid");
				exit();
			} else {
				/*//check if email is valid
				if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=email");
					exit();
				} else{*/
					$sql = "SELECT * FROM users WHERE user_email= '$email'";
					$result = mysqli_query($conn,$sql);
					$resultCheck = mysqli_num_rows($result);
					
					if($resultCheck > 0){
						header("Location: ../landing_page.php?signup=usertaken");
						exit();
					} else{
						//hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//echo "$first $last $email $uid $hashedPwd";
						//insert the user into the database
						$sqlConnect = "INSERT INTO users (user_first, user_last, user_email, user_pwd)
						VALUES  ('$first', '$last', '$email', '$hashedPwd');";
						$result= mysqli_query($conn, $sqlConnect);
							header("Location: ../med_form.html");
							exit();
					}	
				}
			//}
		}
	}else{
		"Location: ../signup.php?signup=failure";
	}
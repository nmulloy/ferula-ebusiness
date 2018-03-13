<?php
	
	session_start();
	
	if(isset($_POST['submit'])){
		
		include 'dbh.inc.php';
		
		$email = $_POST['uidLogin'];
		$pwd = $_POST['pwd'];
		
		//error handlers
		
		//check if inputs are empty
		if(empty($email) || empty($pwd)) {
			header("Location: ../login_page.php?login=empty");
			exit();
		} else{
			$sql = "SELECT * FROM users WHERE user_email='$email' ";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				header("Location: ../login_page.php?login=error");
				exit();
			} else {
				if($row = mysqli_fetch_assoc($result)) {
					//dehashing the password
					$hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
					if($hashedPwdCheck == false) {
						header("Location: ../login_page.php?login=error");
						exit();
					} elseif($hashedPwdCheck == true) {
						//login the user here
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						header("Location: ../MyFiles.php");
						exit();
					}
				}
			}
		}
	} else{
		header("Location: ../login_page.php?login=error");
		exit();
		}
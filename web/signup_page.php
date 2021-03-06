<?php
	session_start();
?>	
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
</head>
<body class="login-page ">
 <div class="page-header" filter-color="orange">
        <div class="page-header-image"style="background-image:url(./assets/img/login.jpg)"></div>
        <div class="container">
			
			<div class="col-lg-8 content-center">
                <div class="card card-login card-plain">
			<form class="form" method="POST" action="includes/signup.inc.php">
                        <div class="header header-primary text-center">
                            <div>
                                <h1> Sign Up </h1>
                            </div>
                        </div>
						
                        <div class="content">
						
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="first" class="form-control" placeholder="Firstname">
                            </div>
							
							<div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="last" class="form-control" placeholder="Lasttname">
                            </div>
					
							<div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
							
							
							
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" name="pwd" placeholder="Password" class="form-control" />
                            </div>
							
							
                        </div>
                        <div class="footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-round btn-lg btn-block">Create</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="./login_page.php" class="link">Back</a>
                            </h6>
                        </div>
                        
                    </form>

        </div>
        <footer class="footer">
            <div class="container">
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
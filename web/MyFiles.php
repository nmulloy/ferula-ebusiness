<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MyFiles</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
	<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
   
</head>

<body class="landing-page sidebar-collapse">
    <!-- Start of Navbar -->
		<?php
			include_once "navbar.php"; // this will include a.php
		?>
	<!-- End Navbar -->
	
	<div class="wrapper">
        <div class="section-nav"><!-- creates a scetion, with a border as not to interfere with the nav-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <button class="btn btn-primary btn-lg" id = "personal-button" >Personal</button>
						<button class="btn btn-primary btn-lg" id = "shared-button"> Shared </button>
                    </div>
                </div>
            </div>
        	
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto ">
						 <div class="separator separator-primary"></div>
						 <div id = "personal" class = "text-center"> <!-- start of personal files, this bit needs backend work to dynamically generate people-->
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div> <img class = "img-fluid rounded-img main-account" src="./assets/img/ryan.jpg" /></div>
								<p> Ryan </p>
							</div>
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div> <img class = "img-fluid rounded-img" src="./assets/img/Emma_Stone.jpg" /></div>
								<p> Not Actual Wife</p>
							</div>
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div > <img class = "img-fluid rounded-img" src="./assets/img/add_file.png" /></div>
								<p> Add File </p>
							</div> 
						</div><!-- end of personal files -->
						
						<div id = "shared" class = "text-center"> <!-- start of shared files-->
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div> <img class = "img-fluid rounded-img" src="./assets/img/Eva.jpg" /></div>
								<p> Eva </p>
							</div>
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div> <img class = "img-fluid rounded-img" src="./assets/img/reynolds.jpg" /></div>
								<p> Better Ryan </p>
							</div>
							<div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
							<div > <img class = "img-fluid rounded-img" src="./assets/img/add_people.jpg" /></div>
								<p> Add people </p>
							</div> 
						</div><!-- end of personal files -->
						
                    </div>
                </div>
            </div>
		</div>	
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
<script type="text/javascript">

</script>

</html>	
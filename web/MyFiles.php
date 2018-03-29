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
                        <button class="btn btn-primary btn-lg" id = "personal-button" >My File</button>
						<button class="btn btn-primary btn-lg" id = "shared-button"> Other Files </button>
                    </div>
                </div>
            </div>
        	
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto ">
						 <div class="separator separator-primary"></div>
						 
						</div>
                        <div id="personal" >
                            <div class="section-nav">
                                <div class = "container">
                                   <div class="row">
                                        
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                              <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Personal information
                                                </a>
                                              </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                              <div class="card-block">
                                                <P>First name : Crystal</P>
                                                <P>Last name : Gon</P>
                                                <p>Gender : Female</p>
                                                <p> Address :</p>
                                                <p>City : Dublin</p>
                                                <p>County : Dublin</p>
                                                <p>Contact Number : </p>
                                                <p>Date of Birth : 12/04/1997</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Emergency Contact
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="card-block">
                                                Blah blah
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Doctor/GP Informations
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                              <div class="card-block">
                                                blah blah
                                              </div>
                                            </div>
                                          </div>

                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingFour">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Current Medication
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="card-block">
                                                Blah blah
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        </div>
                                    </div>
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
            <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Instagram
                            </a>
                        </li>
                    
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Crystal and Rob</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Mahamed, Thomas and Niall</a>.
                </div>
            </div>
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
<script type="text/javascript">

</script>

</html>	

<!DOCTYPE html>
<html lang="en">
<!--     HOME PAGE WHEN NOT LOGED IN     -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ferula Homepage</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/home.css">

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <?php
        include_once "navbar_landing_page.php"; // this will include a.php
    ?>
	<!--end of navbar-->

    <div class="wrapper">
        <div class="page-header clear-filter">
            <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/home_img.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <img class="img-responsive" src="./assets/img/ferula-orange.png" alt="FERULA">
                    <p id="subheader"><i>Health information for anyone, at anytime, anywhere.</i></p>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">About Us</h2>
                        <h5 class="description">We provide an online platform that allows you to store all your health informations.</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('./assets/img/medical_pic.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">Knowledge based error takes place when a doctor lacks knowledge about the patient's condition. We help you prevent those kind of errors in emergency situations.
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('./assets/img/medical_folder.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('./assets/img/medical_fam.jpg')"></div>
                            <h3>Our Features</h3>
                            <p>Our proposed solution is to create a simple and clear website/application that anyone could use to store all their medical information. You will be able to create an account on which all your sensitive medical information is stored. Upon creation of your account, you will be asked to fill a very detailed health questionnaire. </p>
                            <p>The benefits of this application, is that all your informations can be accessed at anytime and anywhere with an internet access.</p>
                            <p>After creation of your account you will be sent a card displaying a QR code which is directly linked to your information. In case of emergency, the doctor will scan the QR code, which will open a page displaying the your medical informations.</p>
                            </p>An additional feature of our web application is the possibility for you to create multiple files, (eg. your own file as well as the one of your children) as well as sharing your health information, with friends and companion.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="section section-contact-us text-center" id="subscribeSection">
            <div class="container">
                <h2 class="title">Would you like to subscribe?</h2>
                <p class="description">Your health is very important to us.</p>
                <div class="row">
					<div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
						<form class= "signup-form" action="includes/signup.inc.php" method = "POST">
						
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
									<input type="text" name="last" class="form-control" placeholder="Surname">
								</div>
						
								<div class="input-group form-group-no-border input-lg">
									<span class="input-group-addon">
										<i class="now-ui-icons ui-1_email-85"></i>
									</span>
									<input type="text" name="email" class="form-control" placeholder="Email">
								</div>
								
								
								<div class="input-group form-group-no-border input-lg">
									<span class="input-group-addon">
										<i class="now-ui-icons objects_key-25"></i>
									</span>
									<input type="password" name="pwd" placeholder="Password" class="form-control" />
								</div>
								
								<div class="input-group form-group-no-border input-lg">
									<span class="input-group-addon">
										<i class="now-ui-icons objects_key-25"></i>
									</span>
									<input type="password" name="pwdConfirm" placeholder="Confirm Password" class="form-control" />
								</div>
								
								 <div class="footer text-center">
								<button type="submit" name="submit" class="btn btn-primary btn-round btn-lg btn-block">Subscribe</button>
								</div>
							
							</div>
						
						</form>
					</div>
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
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>	
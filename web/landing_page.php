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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
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
                    <h1 class="title">F E R U L A</h1>
                    <p id="subheader"><i>Health information for anyone, at anytime, anywhere.</i></p>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">About Us</h2>
                        <h5 class="description">Quick description of our app</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('./assets/img/medical_pic.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">"Medical error is the third leading cause of death. In 1999, the Institute of Medicine shows that 98,000 deaths occur due to medical errors."
                                    <br>
                                    <br>
                                    <small>-A. Cary, 2016</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('./assets/img/medical_folder.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('./assets/img/medical_fam.jpg')"></div>
                            <h3>Title of more detailed description</h3>
                            <p>Very detailed description blah blah blah this is random text Knowledge based error can happen when giving penicillin to a patient prior having established whether the patient is allergic or not. Giving penicillin to an allergic patient can lead in the worst cases to anaphylaxis.
                            </p> 
                            <p>
                                More random text The Pennsylvania Patient Safety Advisory, in 2008, mentioned more than 3,800 cases in which patients received medications to which they had documented allergies. One of them, Betty. As a child, she was rushed to the hospital after being given penicillin. Years later, she died as she was given penicillin in order to treat her stre
                            </p>
                            <p> even more random text ur product is very attractive to users in the way that users feel in control. As we would like to preserve the attractiveness of our product, we desire to provide our services for free. As a result, we would like to ask our users, upon account creation, if they would be willing to share their medical information anonymously. This w
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Would you like to subscribe?</h2>
                <p class="description">Your health is very important to us.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email...">
                        </div>

                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons objects_key-25"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Password...">
                        </div>

                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons objects_key-25"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Confirm Password...">
                        </div>

                        <div class="send-button">
                            <a href="./med_form.html" class="btn btn-primary btn-round btn-block btn-lg">Subscribe</a>
                        </div>
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
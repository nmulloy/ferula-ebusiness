<?php
include 'includes/dbh.inc.php' ;
$uID = $_SESSION['u_id'];
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$sqlShared = "SELECT receiver FROM Shares WHERE sender = '$uID'";
$result = mysqli_query($conn, $sqlShared);
$row = mysqli_fetch_assoc($result);
$fnameQuery = "SELECT user_first, user_last FROM users WHERE user_id = '$row[receiver]'";
$nameResult = mysqli_query($conn, $fnameQuery);
?>
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
    <link rel="stylesheet" href="./assets/css/myfiles.css">

</head>

<body class="landing-page sidebar-collapse">
    <!-- Start of Navbar -->
    <?php
        include_once "navbar.php"; // this will include a.php
    ?>
	<!-- End Navbar -->

	<div class="wrapper">
        <div class="section-nav" ><!-- creates a scetion, with a border as not to interfere with the nav-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <a class="btn btn-primary btn-lg" href = "MyFiles.php" id = "personal-button" >My File</a>
						<button class="btn btn-primary btn-lg" id = "shared-button"> Shared With Me </button>
                        <button class="btn btn-primary btn-lg" id = "isharing-button"> I Share With  </button>

                    </div>
                </div>
            </div>

            <div class="container" >
                <div class="row">


						<div id = "shared" class = "text-center"> <!-- start of shared files-->
						  <?php
                while ($rows = mysqli_fetch_assoc($nameResult)) {
                ?>
                <div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
  							<div > <img class = "img-fluid rounded-img" src="./assets/img/add_people.jpg" /></div>
  								<p> <td> <?php echo $rows['user_first'];  ?></td>
                  <td> <?php echo $rows['user_last']; ?></td> </p>
  							</div>
                  <?php
                }
                  ?>
                  <div class= "add-file col-lg-2 col-md-4 col-xs-12 ml-auto mr-auto" >
                    <div > <img class = "img-fluid rounded-img" src="./assets/img/add_people.jpg" /></div>
                    <a class="btn btn-primary" href="ShareFile.php" role="button">Add People</a>
                  </div>
						</div><!-- end of shared files files -->
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

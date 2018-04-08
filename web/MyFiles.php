<?php
include('includes/dbh.inc.php');
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
                        <button class="btn btn-primary btn-lg" id = "personal-button" >My File</button>
						<button class="btn btn-primary btn-lg" id = "shared-button"> Shared With Me </button>
                        <button class="btn btn-primary btn-lg" id = "isharing-button"> I Share With  </button>

                    </div>
                </div>
            </div>

            <div class="container" >
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
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Personal information</a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-block">
                                                    <P>First name : Joe</P>
                                                    <P>Last name : O'Connell</p>
                                                    <p>Gender : Male</p>
                                                    <p> Address :</p>
                                                    <p>City : Dublin</p>
                                                    <p>County : Dublin</p>
                                                    <p>Country : Ireland</p>
                                                    <p>Contact Number : </p>
                                                    <p>Date of Birth : 12/04/1990</p>
                                                    <P>Health Insurance Company : VHI</P>
                                                    <P>Height (M) : 1.82</p>
                                                    <p>Weight (KG) : 80</p>
                                                    <p> Blood Type : B</p>
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
                                                <P>First name : Mary</P>
                                                <P>Last name : O'Connell</p>
                                                <p>Gender : Female</p>
                                                <p>Contact Number : </p>
                                                <p>Relationship : Wife</p>
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
                                                    <P>First name :</P>
                                                    <P>Last name :</p>
                                                    <p>Address :</p>
                                                    <p>City : Dublin</p>
                                                    <p>County : Dublin</p>
                                                    <p>Country : Ireland</p>
                                                    <p>Contact Number : </p>
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
                                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                              <div class="card-block">
                                                <P>Name of Medication : </P>
                                                <P>Dosage and Frequency :</p>

                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingFive">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Current Medical History
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                                              <div class="card-block">
                                                <P>Do you have any helath concerns? : No</P>
                                                <P>Are you allergic to any Food, insects, latex, etc?: No</p>
                                                <p>Are you allergic to any medication? : Penicillin</p>
                                                <p> Do you have any problems with you vision? : Yes</p>
                                                <p>Do you wear glasses or contacts? : Yes</p>
                                                <p>Do you have any problems with your hearing? : No</p>
                                                <p>Do you have any problem with your speech? : No</p>
                                                <p>Do you have a high blood pressure? : No </p>
                                                <p>Do you have any heart problems? : No</p>
                                                <p>Do you have any neck or back injuries? : No</p>
                                                <p>Do you have any problems breathing or coughing? : No</p>
                                                <p>Do you suffer from attention deficit? : No</p>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingSix">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Chronic Disease Assessment
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                                              <div class="card-block">
                                                <p>Do you suffer from asthma? : No </p>
                                                <p>If yes, what type? : No</p>
                                                <p>Do you have diabetes? : No</p>
                                                <p>If yes, which type? : No</p>
                                                <p>Do you suffer from seizures? : No</p>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingSeven">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Family History
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
                                              <div class="card-block">
                                                <p>Any heart attack below the age of 50 years old? : No</p>
                                                <p>Any stroke below the age of 50 years old? : No</p>
                                                <p>High blood pressure? : No</p>
                                                <p>Elevated cholesterol? : No</p>
                                                <p>Diabetes? : No</p>
                                                <p>Asthma or Hay fever? : No</p>
                                                <p>Congenital heart diseases (existing at birth bu not hereditary)? : No</p>
                                                <p>Heart Operations? : No</p>
                                                <p>Glaucoma? : No</p>
                                                <p>Obesity? : No</p>
                                                <p>Leukemia or cancer under the age of 50? : No</p>
                                                <p>Additional comments : No</p>

                                              </div>
                                            </div>
                                          </div>

                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingEight">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Past Medical History
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
                                              <div class="card-block">
                                                <p>Have you ever had a heart attack? : No</p>
                                                <p>Have you ever had Rheumatic Fever? : No</p>
                                                <p>Have you ever had a Heart Murmur? : No</p>
                                                <p>Have you ever suffered from disease of the arteries? : No</p>
                                                <p>Have you ever suffered from varicose veins? : No</p>
                                                <p>Have you ever suffered from arthritis? : No</p>
                                                <p>Have you ever suffered from dizziness or fainting spells? : No</p>
                                                <p>Have you ever suffered from epilepsy or seizures? : No</p>
                                                <p>Have you ever had a sroke? : No</p>
                                                <p>Have you ever suffered from diphteria? : No</p>
                                                <p>Have you ever had Scarlet fever? : No</p>
                                                <p>Have you ever suffered from infectious mononucleosis? : No</p>
                                                <p>Have you ever suffered from Anemia? : No</p>
                                                <p>Have you ever had any thyroid problems? : No</p>
                                                <p>Have you ever suffered from pneumonia? : No</p>
                                                <p>Have you ever suffered any injuries to your back, arms, or legs? : No</p>
                                                <p>Have you ever broken any bones? : No</p>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="card">
                                            <div class="card-header" role="tab" id="headingNine">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseFive">
                                                Heart Diseases Risk Factor
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
                                              <div class="card-block">
                                                <p>Have you ever smoked? : No</p>
                                                <p>How many per day? : No</p>
                                                <p>If you stopped, when was it? : No</p>
                                                <p>What age did yo start? : No</p>
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
						      <div> <img class = "img-fluid rounded-img" src="./assets/img/maryoconnell.png" /></div>
								<p> Mary O'Connell </p>
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
                    <div > <a class = "img-fluid rounded-img" src="./assets/img/add_people.jpg"  href = "ShareFile.php">
                    <p> Add people </p>
                  </a>
                    </div>
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

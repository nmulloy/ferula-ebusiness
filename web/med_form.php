<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Medical Form</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
  <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
  <link href="./assets/css/form.css" rel="stylesheet"/>
  <link href="./assets/css/modal.css" rel="stylesheet"/>
   
</head>
<body class="index-page sidebar-collapse">
    <!-- Navbar -->
   <?php
        include_once "navbar.php"; // this will include a.php
    ?>
  <!--end of navbar-->
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
<h1>Medical Form</h1>
<form action="med_form_action.php" method="post"/>

<fieldset>
  <legend>Personal Information:</legend>
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br>
  Gender:<br>
  <input type="text" name="gender">
  <br>
  Address:<br>
  <input type="text" name="Address">
  <br>
  City:<br>
  <input type="text" name="City">
  <br>
  County:<br>
  <input type="text" name="County">
  <br>
  Country:<br>
  <input type="text" name="Country">
  <br>
  Contact Number:<br>
  <input type="text" name="contactNumber">
  <br>
  Date of Birth:<br>
  <input type="date" name="dateOfBirth">
  <br>
  Health Insurance Company:<br>
  <input type="text" name="healthInsuranceCompany">
  <br>
  Height in Metres:<br>
  <input type="text" name="height">
  <br>
  Weight in Kgs:<br>
  <input type="text" name="weight">
  <br>
  Blood Type:<br>
  <input type="text" name="bloodType">
</fieldset>
<br>
<fieldset>
  <legend>Emergency Contact:</legend>
  First name:<br>
  <input type="text" name="eFirstName">
  <br>
  Last name:<br>
  <input type="text" name="eLastName">
  <br>
  Contact Number:<br>
  <input type="tel" name="eContactNumber">
  <br>
  Relationship:<br>
  <input type="text" name="relationship">
</fieldset>
<br>
<fieldset>
  <legend>Doctor/GP Information:</legend>
  First name:<br>
  <input type="text" name="gpFirstName">
  <br>
  Last name:<br>
  <input type="text" name="gpLastName">
  <br>
  Address:<br>
  <input type="text" name="gpAddress">
  <br>
  City:<br>
  <input type="text" name="gpCity">
  <br>
  County:<br>
  <input type="text" name="gpCounty">
  <br>
  Country:<br>
  <input type="text" name="gpCountry">
  <br>
  Contact Number:<br>
  <input type="tel" name="gpContactNumber">
</fieldset>
<fieldset>
  <legend>Current Medication:</legend>
  Name of Medication:<br>
  <textarea name="medication" rows="5" cols="30"></textarea>
  <br>
  Dosage and Frequency:<br>
  <textarea name="meddose" rows="5" cols="30"></textarea>
</fieldset>
<br>
<fieldset>
  <legend>Current Medical History:</legend>
  Do you have any health concerns?<br>
  <textarea name="healthConcerns" rows="5" cols="30"></textarea>
  <br>
  Do you have any allergies (Eg: Food, insects, latex, etc)?<br>
  <textarea name="allergies" rows="5" cols="30"></textarea>
  <br>
  Do you have any allergies to medication?<br>
  <textarea name="medAllergies" rows="5" cols="30"></textarea>
  <br>
  <div>
    <label for="yes_no_visionProblems">Do you have any problems with your vision?</label>
    <p>
    <input type="radio" name="yes_noVision" value = 1>Yes</input>
    <input type="radio" name="yes_noVision" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_glasses">Do you wear glasses or contacts?</label>
    <p>
    <input type="radio" name="yes_noGlasses" value = 1>Yes</input>
    <input type="radio" name="yes_noGlasses" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_hearingProblems">Do you have any problems with your hearing?</label>
    <p>
    <input type="radio" name="yes_noHearingProblems" value = 1>Yes</input>
    <input type="radio" name="yes_noHearingProblems" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_speechProblems">Do you have any problems with your speech?</label>
    <p>
    <input type="radio" name="yes_noSpeechProblems" value = 1>Yes</input>
    <input type="radio" name="yes_noSpeechProblems" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_highBloodPressure">Do you have high blood pressure?</label>
    <p>
    <input type="radio" name="yes_noBloodPressure" value = 1>Yes</input>
    <input type="radio" name="yes_noBloodPressure" value = 0>No</input>
    </p>
  </div>
  Do you have any heart problems?<br>
  <textarea name="problemsHeart" rows="5" cols="30"></textarea>
  <br>
  Do you have any neck or back injuries?<br>
  <textarea name="neckBackInjuries" rows="5" cols="30"></textarea>
  <br>
  <div>
    <label for="yes_no_breatheProblems">Do you have any problems breathing or coughing?</label>
    <p>
    <input type="radio" name="yes_noBreatheProblems" value = 1>Yes</input>
    <input type="radio" name="yes_noBreatheProblems" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_adhd">Do you suffer from Attention deficit disorder?</label>
    <p>
    <input type="radio" name="yes_noADHD" value = 1>Yes</input>
    <input type="radio" name="yes_noADHD" value = 0>No</input>
    </p>
  </div>
</fieldset>
<br>
<fieldset>
  <legend>Chronic Disease Assessment:</legend>
  <div>
    <label for="yes_no_hasAsthma">Do you suffer from asthma?</label>
    <p>
    <input type="radio" name="yes_noAsthma" value = 1>Yes</input>
    <input type="radio" name="yes_noAsthma" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_asthmaType">If yes to the above question, please tick the box below which best describes it</label>
    <p>
    <input type="radio" name="yes_noasthmaType" value = 6>Intermittent</input>
    <input type="radio" name="yes_noasthmaType" value = 5>Mild</input>
    <input type="radio" name="yes_noasthmaType" value = 4>Persistent</input>
    <input type="radio" name="yes_noasthmaType" value = 3>Moderate persistent</input>
    <input type="radio" name="yes_noasthmaType" value = 2>Severe persistent</input>
    <input type="radio" name="yes_noasthmaType" value = 1>Exercise Induced</input>
    </p>
  </div>
  <div>
    <label for="yes_no_hasDiabetes">Do you have diabetes?</label>
    <p>
    <input type="radio" name="yes_noDiabetes" value = 1>Yes</input>
    <input type="radio" name="yes_noDiabetes" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="type_of_Diabetes">If yes to the above question, which type?</label>
    <p>
    <input type="radio" name="yes_noTypeDiabetes" value = 1>Type 1</input>
    <input type="radio" name="yes_noTypeDiabetes" value = 2>Type 2</input>
    </p>
  </div>
  <div>
    <label for="yes_no_seizures">Do you suffer from seizures?</label>
    <p>
    <input type="radio" name="yes_noseizures" value = 1>Yes</input>
    <input type="radio" name="yes_noseizures" value = 0>No</input>
    </p>
  </div>

</fieldset>
<br>
<fieldset>
  <legend>Family History:</legend>
  <p>Have you or your blood relatives had any of the following</p>
  <div>
    <label for="yes_no_heart">Heart attack under the age of 50</label>
    <p>
    <input type="radio" name="yes_noheart" value = 1>Yes</input>
    <input type="radio" name="yes_noheart" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_stroke">Stroke under the age of 50</label>
    <p>
    <input type="radio" name="yes_nostroke" value = 1>Yes</input>
    <input type="radio" name="yes_nostroke" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_highBlood">High Blood pressure</label>
    <p>
    <input type="radio" name="yes_noHighBlood" value = 1>Yes</input>
    <input type="radio" name="yes_noHighBlood" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_cholesterol">Elevated cholesterol</label>
    <p>
    <input type="radio" name="yes_nocholesterol" value = 1>Yes</input>
    <input type="radio" name="yes_nocholesterol" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_diabetes">Diabetes</label>
    <p>
    <input type="radio" name="yes_noRelDiabetes" value = 1>Yes</input>
    <input type="radio" name="yes_noRelDiabetes" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_asthma">Asthma or hay fever</label>
    <p>
    <input type="radio" name="yes_noRelAsthma" value = 1>Yes</input>
    <input type="radio" name="yes_noRelAsthma" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_heartDiseases">Congenital heart diseases (existing at birth but not hereditary)</label>
    <p>
    <input type="radio" name="yes_noRelheartDiseases" value = 1>Yes</input>
    <input type="radio" name="yes_noRelheartDiseases" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_heartOps">Heart Operations</label>
    <p>
    <input type="radio" name="yes_noheartOps" value = 1>Yes</input>
    <input type="radio" name="yes_noheartOps" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_glaucoma">Glaucoma</label>
    <p>
    <input type="radio" name="yes_noGlaucoma" value = 1>Yes</input>
    <input type="radio" name="yes_noGlaucoma" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_obesity">Obesity</label>
    <p>
    <input type="radio" name="yes_noObesity" value = 1>Yes</input>
    <input type="radio" name="yes_noObesity" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_cancer">Leukemia or cancer under the age of 60</label>
    <p>
    <input type="radio" name="yes_noLeukemia" value = 1>Yes</input>
    <input type="radio" name="yes_noLeukemia" value = 0>No</input>
    </p>
  </div>
  Additional Comments:<br>
  <textarea name="familyHistComments" rows="5" cols="30"></textarea>
</fieldset>
<br>
<fieldset>
  <legend>Past Medical History:</legend>
  <div>
    <label for="yes_no_heartAttack">Have you ever had a heart attack?</label>
    <p>
    <input type="radio" name="yes_noRelheartAttack" value = 1>Yes</input>
    <input type="radio" name="yes_noRelheartAttack" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_rheaumaticFever">Have you ever had Rheumatic Fever?</label>
    <p>
    <input type="radio" name="yes_norheaumaticFever" value = 1>Yes</input>
    <input type="radio" name="yes_norheaumaticFever" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_heartMurmur">Have you ever had a Heart Murmur?</label>
    <p>
    <input type="radio" name="yes_noheartMurmur" value = 1>Yes</input>
    <input type="radio" name="yes_noheartMurmur" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_diseaseArteries">Have you ever suffered from disease of the arteries?</label>
    <p>
    <input type="radio" name="yes_nodiseaseArteries" value = 1>Yes</input>
    <input type="radio" name="yes_nodiseaseArteries" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_varicoseVeins">Have you ever suffered from varicose veins?</label>
    <p>
    <input type="radio" name="yes_novaricoseVeins" value = 1>Yes</input>
    <input type="radio" name="yes_novaricoseVeins" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_arthritis">Have you ever suffered from arthritis?</label>
    <p>
    <input type="radio" name="yes_noarthritis" value = 1>Yes</input>
    <input type="radio" name="yes_noarthritis" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_dizziness">Have you ever suffered from dizziness or fainting spells?</label>
    <p>
    <input type="radio" name="yes_nodizziness" value = 1>Yes</input>
    <input type="radio" name="yes_nodizziness" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_epilepsy">Have you ever suffered from epilepsy or seizures?</label>
    <p>
    <input type="radio" name="yes_noepilepsy" value = 1>Yes</input>
    <input type="radio" name="yes_noepilepsy" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_stroke">Have you ever had a stroke?</label>
    <p>
    <input type="radio" name="yes_nopaststroke" value = 1>Yes</input>
    <input type="radio" name="yes_nopaststroke" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_diphtheria">Have you ever suffered from diphtheria?</label>
    <p>
    <input type="radio" name="yes_nodiphtheria" value = 1>Yes</input>
    <input type="radio" name="yes_nodiphtheria" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_scarletFever">Have you ever had scarlet fever?</label>
    <p>
    <input type="radio" name="yes_noscarletFever" value = 1>Yes</input>
    <input type="radio" name="yes_noscarletFever" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_mononucleosis">Have you ever suffered from Infectious mononucleosis?</label>
    <p>
    <input type="radio" name="yes_nomononucleosis" value = 1>Yes</input>
    <input type="radio" name="yes_nomononucleosis" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_anemia">Have you ever suffered from Anemia?</label>
    <p>
    <input type="radio" name="yes_noanemia" value = 1>Yes</input>
    <input type="radio" name="yes_noanemia" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_thyroid">Have you ever had any Thyroid problems?</label>
    <p>
    <input type="radio" name="yes_nothyroid" value = 1>Yes</input>
    <input type="radio" name="yes_nothyroid" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_pneumonia">Have you ever suffered from Pneumonia?</label>
    <p>
    <input type="radio" name="yes_nopneumonia" value = 1>Yes</input>
    <input type="radio" name="yes_nopneumonia" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_injuries">Have you ever suffered any injuries to your back, arms, or legs?</label>
    <p>
    <input type="radio" name="yes_noinjuries" value = 1>Yes</input>
    <input type="radio" name="yes_noinjuries" value = 0>No</input>
    </p>
  </div>
  <div>
    <label for="yes_no_brokenBones">Have you ever broken any bones?</label>
    <p>
    <input type="radio" name="yes_nobrokenBones" value = 1>Yes</input>
    <input type="radio" name="yes_nobrokenBones" value = 0>No</input>
    </p>
  </div>
</fieldset>
<br>
<fieldset>
  <legend>Heart Disease Risk Factors:</legend>
  <div>
    <label for="yes_no_smoking">Have you ever smoked?</label>
    <p>
    <input type="radio" name="yes_nosmoking" value = 1>Yes</input>
    <input type="radio" name="yes_nosmoking" value = 0>No</input>
    </p>
  </div>
  If you smoked(now or in the past), how many per day?<br>
  <textarea name="smokingPerDay" rows="5" cols="30"></textarea>
  <br>
  If you have stopped, when was it?<br>
  <textarea name="timeSinceQuit" rows="5" cols="30"></textarea>
  <br>
  If you smoked(now or in the past), what age did you start?<br>
  <textarea name="ageOfSmoke" rows="5" cols="30"></textarea>
</fieldset>
<div id="mod" class="send-button" onclick="pop_up()">
  <p class="btn btn-primary btn-round btn-block btn-lg">Submit</p>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div>
    <label for="yes_no_consent">Do you give us permission to anonymously share your medical data?</label>
    <p>
    <input type="radio" name="yes_noConsent">Yes</input>
    <input type="radio" name="yes_noConsent">No</input>
    </p>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-round btn-block">Submit</button>
  </div>

</div>
</form>

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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("mod");

// When the user clicks on the button, open the modal 
function pop_up() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</html>

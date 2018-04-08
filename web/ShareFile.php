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
     <!-- Navbar -->
    <?php
        include_once "navbar.php"; // this will include a.php
    ?>
	<!--end of navbar-->

  <!-- Start of Form -->
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ml-auto mr-auto text-center">
          <h1>Share Your File </h1>
          <form action ="ShareFileProcess.php" method = "post"/>
          <div class = "form-group">
            <label for = "email">Your Email Address </label>
            <input type = "Email" class = "form-control is-valid" name = "email" id = "email" required>
          </div>
          <div class = "form-group">
            <label for = "email">Receiver Email Address </label>
            <input type = "Email" class = "form-control is-valid" name = "Remail" id = "email" required>
          </div>
        </div>
        <div class = "col-lg-8 ml-auto mr-auto">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name ="ShareAll" id="ShareAll" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="ShareAll">
              Share All Details
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name ="CustomShare" id="CustomShare" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShare">
              Custom Share
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name ="CustomSharePersonalInfo" id="CustomSharePersonalInfo" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomSharePersonalInfo">
              Personal Information
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name ="CustomShareEmergencyContact" id="CustomShareEmergencyContact" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShare">
              Emergency Contact
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomShareDoctorInfo" value="1" id="CustomShareDoctorInfo" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShareDoctorInfo">
              Doctor Information
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomShareCurrentMed" value="1" id="CustomShareCurrentMed" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShareCurrentMed">
              Current Medication
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomSharePresentMedicalHistory" value="1" id="CustomSharePresentMedicalHistory" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomSharePresentMedicalHistory">
              Present Medical History
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomShareChronicDiseaseAssessment" value="1" id="CustomShareChronicDiseaseAssessment" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShareChronicDiseaseAssessment">
              Chronic disease assessment
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomShareFamDiseases" value="1" id="CustomShareFamDiseases" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShareFamDiseases">
              Family Diseases
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomSharePastMedHistory" value="1" id="CustomSharePastMedHistory" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomSharePastMedHistory">
              Past Medical History
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name ="CustomShareHeartDiseaseRiskFacts" value="1" id="CustomShareHeartDiseaseRiskFacts" tabIndex="1" onClick="ckChange(this)">
            <label class="form-check-label" for="CustomShareHeartDiseaseRiskFacts">
              Heart Diseases Risk Factors
            </label>
          </div>
          <button type="submit" name = "submitted" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <div>
  </div>


</body>
<!--   Core JS Files   -->
<script>
function ckChange(ckType){
  if (ckType.name == "Share All") {
    var ckName = document.getElementsByName("Custom Share");
    var checked = document.getElementById(ckType.id);

    if (checked.checked) {
      for (var i = 0; i < ckName.length; i++) {
        if (!ckName[i].checked) {
          ckName[i].disabled = true;
        } else {
          ckName[i].disabled = false;
        }
      }
    }
  }
  if (ckType.name == "Custom Share") {
    var ckName = document.getElementsByName("Share All");
    var checked = document.getElementById(ckType.id);

    if (checked.checked) {
      for (var i = 0; i < ckName.length; i++) {
        if (!ckName[i].checked) {
          ckName[i].disabled = true;
        } else {
          ckName[i].disabled = false;
        }
      }
    }
  }
}
</script>

<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>

</script>

</html>

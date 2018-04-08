<?php


include_once ('includes/dbh.inc.php');

//GET logged-in user ID (Not sure how to do this)
$senderID = $_SESSION['u_id'];
//GET receiver user ID from email
$email = $_POST['email'];
$sql = "SELECT user_uid FROM users WHERE user_email= '$email'";
$receiverID = mysqli_query($conn,$sql);

//get checkvalues
$shareAll = false;
$personalInfo = false;
$emergContact = false;
$doctorInfo = false;
$currentMed = false;
$presMedHist = false;
$chronDisease = false;
$famDisease = false;
$pastMedHist = false;
$heartDiseaseRisk = false;
if (isset($_POST['ShareAll']))
{
   $shareAll = true;

}
else {
    if (isset($_POST['CustomSharePersonalInfo']))
    {
      $personalInfo = true;
    }
    if (isset($_POST['CustomShareEmergencyContact']))
    {
      $emergContact = true;
    }
    if (isset($_POST['CustomShareDoctorInfo']))
    {
      $doctorInfo = true;
    }
    if (isset($_POST['CustomShareCurrentMed']))
    {
      $currentMed = true;
    }if (isset($_POST['CustomSharePresentMedicalHistory']))
    {
      $presMedHist = true;
    }if (isset($_POST['CustomShareChronicDiseaseAssessment']))
    {
      $chronDisease = true;
    }if (isset($_POST['CustomShareFamDiseases']))
    {
      $famDisease = true;
    }if (isset($_POST['CustomSharePastMedHistory']))
    {
      $pastMedHist = true;
    }if (isset($_POST['CustomShareHeartDiseaseRiskFacts']))
    {
      $heartDiseaseRisk = true;
    }
}

$sql = "INSERT INTO Shares (sender, receiver, shareall, personalinfo, emergcontact, docinfo,
  currentmed, presmedhist, chronicdisease, famdisease, pastmedhist, heartdiseaserisk)
  VALUES ('$receiverID', '$senderID', '$shareAll', '$personalInfo', '$emergContact', '$doctorInfo', '$currentMed', '$presMedHist', '$chronDisease', '$famDisease',
     '$pastMedHist', '$heartDiseaseRisk')";

  if (mysqli_query($conn, $sql)) {
    header("Location: MyFiles.php");
  } else {
    header("Location: ShareFile.php");
  }


mysqli_close($conn);



 ?>

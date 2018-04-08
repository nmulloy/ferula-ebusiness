<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
//GET logged-in user ID (Not sure how to do this)
$email = $_POST['email'];
$sql = "SELECT user_id FROM users WHERE user_email= '$email'";
$senderID = mysqli_query($conn,$sql);
//GET receiver user ID from email
$Remail = $_POST['Remail'];
$sql = "SELECT user_id FROM users WHERE user_email= '$Remail'";
$receiverID = mysqli_query($conn,$sql);
$sRow = mysqli_fetch_assoc($senderID);
$rRow = mysqli_fetch_assoc($receiverID);

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

$sql = "INSERT INTO shares (Sender, Receiver, ShareAll, PersonalInfo, EmergContact, DocInfo,
  CurrentMed, PresMedHist, ChronicDisease, FamDisease, PastMedHist, HeartDiseaseRisk)
  VALUES ('$sRow[user_id]', '$rRow[user_id]', '$shareAll', '$personalInfo', '$emergContact', '$doctorInfo', '$currentMed', '$presMedHist', '$chronDisease', '$famDisease',
     '$pastMedHist', '$heartDiseaseRisk')";

  if (mysqli_query($conn, $sql)) {
    echo $_SESSION['u_id'];
    //header("Location: MyFiles.php");
  } else {
  //  header("Location: ShareFile.php");
  }


mysqli_close($conn);



 ?>

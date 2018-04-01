<?php

define('DB_NAME', 'ferula');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


//database setup
$link = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
  die('Could not connect: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected) {
  die('Can\'t use ' . DB_NAME . ' : ' . mysqli_error());
}

//GET logged-in user ID
$senderID = 0;
//GET receiver user ID from email
$receiverID = 0;

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
  if (isset($_POST['CustomShare']))
  {
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
}

$sql = "INSERT INTO Shares (receiver, sender, shareall, personalinfo, emergcontact, docinfo,
  currentmed, presmedhist, chronicdisease, famdisease, pastmedhist, heartdiseaserisk)
  VALUES ('$receiverID', '$senderID', '$shareAll', '$personalInfo', '$emergContact', '$doctorInfo', '$currentMed', '$presMedHist', '$chronDisease', '$famDisease',
     '$pastMedHist', '$heartDiseaseRisk')";

  if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

//if (!mysqli_query($link, $sql, MYSQLI_STORE_RESULT)) {
  //die ('Error: ' . mysqli_error());
//}

//$value = $_POST["input1"];

//$sql = "INSERT INTO shares (input1) VALUES ('$value')";

//if (!mysqli_query($link, $sql, MYSQLI_STORE_RESULT)) {
//  die ('Error: ' . mysqli_error());
//}

//Echo "It's all legit mate ";
mysqli_close($link);


//$name = $_GET['color'];

//if (isset($_GET['CustomShare'])) {
  //  echo "You chose the following customShares(s): <br>";

    //foreach ($name as $customShare){
      //  echo $customShare."<br />";
    //}
//} else {
  //  echo "You did not choose a color.";
//}

 ?>

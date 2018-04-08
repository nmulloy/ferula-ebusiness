<?php
	session_start();
	
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  header('Location: MyFiles.php');
//personal info
$fName = $_POST['firstname'];
$lName = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$county = $_POST['County'];
$country = $_POST['Country'];
$contactNum = $_POST['contactNumber'];
$dob = $_POST['dateOfBirth'];
$Insure = $_POST['healthInsuranceCompany'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood = $_POST['bloodType'];
$consent = $_POST['yes_noConsent'];
$query = "INSERT INTO userpersonalinfo (fName, lName, gender, address, city, county, country, contactNum, DOB, insurance, height, weight, blood, consent)
  VALUES ('$fName', '$lName', '$gender', '$address', '$city', '$county',
  '$country', '$contactNum', '$dob', '$Insure', '$height', '$weight', '$blood', '$consent')";
  if (mysqli_query($conn, $query)) {
  }
//EmergContact
$emergFname = $_POST['eFirstName'];
$emergLname = $_POST['eLastName'];
$emergTel = $_POST['eContactNumber'];
$emergRel = $_POST['relationship'];
$sql2 = "INSERT INTO emergcontact (fName, lName, number, relation)
 VALUES ('$emergFname', '$emergLname', '$emergTel', '$emergRel')";
 if (mysqli_query($conn,  $sql2)) {
 }
//doc information
$gpFname = $_POST['gpFirstName'];
$gpLname = $_POST['gpLastName'];
$gpAddress = $_POST['gpAddress'];
$gpCity = $_POST['gpCity'];
$gpCounty = $_POST['gpCounty'];
$gpCountry = $_POST['gpCountry'];
$gpNum = $_POST['gpContactNumber'];
$sql3= "INSERT INTO docinfo (fName, lName, address, city, county, country, number)
 VALUES ('$gpFname', '$gpLname', '$gpAddress', '$gpCity', '$gpCounty',
 '$gpCountry', '$gpNum')";
 if (mysqli_query($conn,  $sql3)) {
 }
//currentMed
$currentMedName = $_POST['medication'];
$medDose = $_POST['meddose'];
//curentMedhist
$healthConcerns = $_POST['healthConcerns'];
$allergies = $_POST['allergies'];
$medAllergies = $_POST['medAllergies'];
$vision = $_POST['yes_noVision'];
$glasses = $_POST['yes_noGlasses'];
$hearing = $_POST['yes_noHearingProblems'];
$speech = $_POST['yes_noSpeechProblems'];
$bloodPress = $_POST['yes_noBloodPressure'];
$heartProbs = $_POST['problemsHeart'];
$neckBackInj = $_POST['neckBackInjuries'];
$breatheProblems = $_POST['yes_noBreatheProblems'];
$adhd = $_POST['yes_noADHD'];
$sql4= "INSERT INTO currentmed (currentMeds, currentMedDose, healthConcerns, allergies, medAllergies, vision, glasses, hearing, speech,
  bloodPress, heartProbs, neckBackInj, breathProblems, adhd) VALUES ('$currentMedName', '$medDose', '$healthConcerns', '$allergies',
  '$medAllergies', '$vision', '$glasses', '$hearing', '$speech', '$bloodPress', '$heartProbs', '$neckBackInj',
'$breatheProblems', '$adhd')";
if (mysqli_query($conn, $sql4)) {
}
//Chronic Disease Assessment
$asthma = $_POST['yes_noAsthma'];
$asthmaType = 0;
if ($asthma == 1) {
  $asthmaType = $_POST['yes_no_asthmaType'];
}
$diabetes = $_POST['yes_noDiabetes'];
$diabetesType = 0;
if ($diabetes == 1) {
  $diabetesType = $_POST['yes_noTypeDiabetes'];
}
$seizures = $_POST['yes_noseizures'];
$sql5= "INSERT INTO chronicdisease (asthma, asthmaType, diabetes, diabetesType, seizures)
 VALUES ('$asthma', '$asthmaType', '$diabetes', '$diabetesType', '$seizures')";
if (mysqli_query($conn, $sql5)) {
}
//Family History
$heartAttack50 = $_POST['yes_noheart'];
$stroke50 = $_POST['yes_nostroke'];
$highBlood = $_POST['yes_noHighBlood'];
$famCholesterol = $_POST['yes_nocholesterol'];
$famDiabetes = $_POST['yes_noRelDiabetes'];
$famAsthma = $_POST['yes_noRelAsthma'];
$famHeartDiseases = $_POST['yes_noRelheartDiseases'];
$famHeartOps = $_POST['yes_noheartOps'];
$famGlaucome = $_POST['yes_noGlaucoma'];
$famObesity = $_POST['yes_noObesity'];
$famCancer = $_POST['yes_noLeukemia'];
$famComments = $_POST['familyHistComments'];
$sql6= "INSERT INTO famhistory (heartAttack, stroke, highBlood, cholesterol, diabetes, asthma, heartDisease, heartOps, glaucoma, obesity, cancer, comments)
 VALUES ('$heartAttack50', '$stroke50', '$highBlood', '$famCholesterol',
 '$famDiabetes', '$famAsthma', '$famHeartDiseases', '$famHeartOps',
'$famGlaucome', '$famObesity', '$famCancer', '$famComments')";
if (mysqli_query($conn, $sql6)) {
}
//pastMedHist
$heartAttack = $_POST['yes_noRelheartAttack'];
$rheumaticFever = $_POST['yes_no_rheaumaticFever'];
$heartMurmer = $_POST['yes_noheartMurmur'];
$diseaseArteries = $_POST['yes_nodiseaseArteries'];
$varicoseVeins = $_POST['yes_novaricoseVeins'];
$arthritis = $_POST['yes_noarthritis'];
$dizziness = $_POST['yes_no_dizziness'];
$epilepsy = $_POST['yes_noepilepsy'];
$pastStroke = $_POST['yes_nopaststroke'];
$diphtheria = $_POST['yes_nodiphtheria'];
$scarletFever = $_POST['yes_noscarletFever'];
$mononucleosis = $_POST['yes_nomononucleosis'];
$anemia = $_POST['yes_noanemia'];
$thyroid = $_POST['yes_nothyroid'];
$pneumonia = $_POST['yes_nopneumonia'];
$injuries = $_POST['yes_noinjuries'];
$brokenBones = $_POST['yes_nobrokenBones'];
$sql7= "INSERT INTO pastmedhistory (heartAttack, rheumatic, murmer, arteries,
   veins, arthritis, dizziness, epilepsy, pastStroke, diphtheria,
    scarletfever, mononucleosis, anemia, thyroid, pneumonia, injuries,
     brokenBones)
 VALUES ('$heartAttack', '$rheumaticFever', '$heartMurmer', '$diseaseArteries',
 '$varicoseVeins', '$arthritis', '$dizziness', '$epilepsy',
'$pastStroke', '$diphtheria', '$scarletFever', '$mononucleosis',
'$anemia', '$thyroid', '$pneumonia', '$injuries', '$brokenBones')";
if (mysqli_query($conn, $sql7)) {
}

//Heart Disease Risk Factors
$smoking = $_POST['yes_nosmoking'];
$smokePerDay = $_POST['smokingPerDay'];
$timeSinceQuit = $_POST['timeSinceQuit'];
$smokeAge = $_POST['ageOfSmoke'];
$sql8= "INSERT INTO heartriskfacts (smoking, perDay, sinceQuit, age)
 VALUES ('$smoking', '$smokePerDay', '$timeSinceQuit', '$smokeAge')";
if (mysqli_query($conn, $sql8)) {
}
?>

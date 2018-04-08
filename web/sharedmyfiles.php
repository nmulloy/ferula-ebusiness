<?php
$servername = "localhost"; //could you fill these in
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Sender, PersonalInfo, EmergContact, DocInfo,
CurrentMed, ChronicDisease, FamDisease, PastMedHist, HeartDiseaseRisk FROM shares WHERE Receiver = 'GET THIS USER' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $a=array($row["Sender"]->fetch_assoc());
    $trueB = '1'; //WHAT EQUALS TRUE FOR THESE QUESTIONS?
    while($row = $result->fetch_assoc()) {
        if($row["PersonalInfo"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM userpersonalinfo WHERE user_id = ")->fetch_assoc());
        }

        if($row["EmergContact"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM emergcontact WHERE user_id = ")->fetch_assoc());
        }
        if($row["DocInfo"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM docinfo WHERE user_id = ")->fetch_assoc());
        }
        if($row["CurrentMed"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM currentmed WHERE user_id = ")->fetch_assoc());
        }
        if($row["ChronicDisease"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM chronicdisease WHERE user_id = ")->fetch_assoc());
        }
        if($row["FamDisease"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM famhistory WHERE user_id = ")->fetch_assoc());
        }
        if($row["PastMedHist"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM pastmedhistory WHERE user_id = ")->fetch_assoc());
        }
        if($row["HeartDiseaseRisk"]->fetch_assoc() == $trueB){
          array_push($a,$conn->query("SELECT * FROM heartriskfacts WHERE user_id = ")->fetch_assoc());
        }
    }
} else {
    TELL THE USER TO GO FUCK THEMSELVES FOR MAKING US DO MORE WORK XD;
}

//$a should contain all the shared data now its just about showing it big word on SHOULD
$conn->close();
?>

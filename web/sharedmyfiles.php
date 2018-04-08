<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$senderfName = $_GET['userfirst'];
$senderlName = $_GET['userlast'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT user_id FROM users WHERE user_first = '$senderfName' AND user_last = '$senderlName'";
$qResult = mysqli_query($conn, $query);
$name = mysqli_fetch_assoc($qResult);

$id = $_SESSION['u_id'];
$sender = $name['user_id'];
$sql = "SELECT ShareAll, PersonalInfo, EmergContact, DocInfo,
CurrentMed, PresMedHist, ChronicDisease, FamDisease, PastMedHist, HeartDiseaseRisk FROM shares WHERE Receiver = $id AND Sender = $sender";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_assoc($result);
$ShareAll = $rows['ShareAll'];
if ($rows['ShareAll'] == 1) {
    $sqlget = "SELECT * FROM userpersonalinfo WHERE user_id = $sender";
  	$sqldata = mysqli_query($conn, $sqlget);

  	echo'<div class="container" >
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
                                                  <div class="card-block">';
  												while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
                                                    echo "<p>First name : ". $row['fName'] . "</p>
  												  <p>Last name :". $row['lName']. "</p>
  													<p>Gender :". $row['gender']. "</p>
  													<p>Address :". $row['address']. "</p>
  													<p>City :". $row['city']. "</p>
  													<p>County:". $row['county']. "</p>
  													<p>Country :". $row['country']. "</p>
  													<p>Contact Number :". $row['contactNum']. "</p>
  													<p>Date Of Birth:". $row['DOB']. "</p>
  													<p>Health Insurance Company  :". $row['insurance']. "</p>
  													<p>Height (M)  :". $row['height']. "</p>
  													<p>Weight (KG) :". $row['weight']. "</p>



                          	<p>Blood Type:". $row['blood']. "</p>";
  												}
                          echo '</div>
                                             </div>
                                         </div>';
    echo '<div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Emergency Contact
                </a>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-block">';

  $sqlget = "SELECT * FROM emergcontact WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
  echo "<p>First name : ". $row['fName'] . "</p>
  <p>Last name :". $row['lName']. "</p>
  <p>Contact Number :". $row['number']. "</p>
  <p>Relationship : ". $row['relation']. "</p>";

  }

          echo '</div>
        </div>
    </div>';

    echo '
    <div class="card">
        <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Doctor/GP Informations
                </a>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block">';
            $sqlget = "SELECT * FROM docinfo WHERE user_id = $sender";
            $sqldata = mysqli_query($conn, $sqlget);
            while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
            echo "<p>First name : ". $row['fName'] . "</p>
            <p>Last name :". $row['lName']. "</p>
            <p>Address :". $row['address']. "</p>
            <p>City :" .$row['city']. "</p>
                          <p>County :" .$row['county']. "</p>
                          <p>Country :" .$row['country']. "</p>
                          <p>Contact Number :" .$row['GPnumber'].  "</p>";
            }
            echo'</div>
                  </div>
              </div>';

    echo ' <div class="card">
      <div class="card-header" role="tab" id="headingFour">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Current Medication
          </a>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="card-block">';

          $sqlget = "SELECT * FROM currentmed WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
  echo "<p>Current Medication : ". $row['currentMeds'] . "</p>
  <p>Current Dose :". $row['CurrentMedDose']. "</p>
  <p>Health Concerns:". $row['healthConcerns']. "</p>";
  }
  echo'
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
        <div class="card-block">';
  $sqlget = "SELECT * FROM currentmed WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
  echo " <p>Allergies :" .$row['allergies']. "</p>
  <p>Medical Allergies :" .$row['medAllergies']. "</p>
              <p>Vision Issues:" .($row['vision'] == 0 ? ' No':' Yes')."</p>
  <p>Do You Wear Glasses :" .($row['glasses'] == 0 ? ' No':' Yes'). "</p>
              <p>Do You Have Hearing Issues :" .($row['hearing'] == 0 ? ' No':' Yes').  "</p>
  <p>Do You Have Speaking Issues :" .($row['speech'] == 0 ? ' No':' Yes'). "</p>
  <p>Do You Have High Blood Pressure :" .($row['bloodPress'] == 0 ? ' No':' Yes'). "</p>
  <p>Do You Have A history Of Heart Problems :" .$row['heartProbs']. "</p>
  <p>Do You Breathing Problems :" .($row['breathProblems'] == 0 ? ' No':' Yes'). "</p>
  <p>Do You Have ADHD :" .($row['adhd'] == 0 ? ' No':' Yes'). "</p>";
  }
  echo'
        </div>
      </div>
    </div>';
  echo '<div class="card">
      <div class="card-header" role="tab" id="headingSix">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Chronic Disease Assessment
          </a>
        </h5>
      </div>
      <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
        <div class="card-block">';
         $sqlget = "SELECT * FROM chronicdisease WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
         echo "<p>Do you suffer from asthma? :" .($row['asthma'] == 0 ? ' No':' Yes')."</p>
          <p>If yes, what type? : ".($row['asthmaType'] == 0 ? ' No':' Yes')."</p>
          <p>Do you have diabetes? : ".($row['diabetes'] == 0 ? ' No':' Yes')."</p>
          <p>If yes, which type? : ".($row['diabetesType'] == 0 ? ' No':' Yes')."</p>
          <p>Do you suffer from seizures? : " .($row['seizures'] == 0 ? ' No':' Yes')."</p>";
  };
       echo' </div>
      </div>
    </div>';

    echo '<div class="card">
      <div class="card-header" role="tab" id="headingSeven">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Family History
          </a>
        </h5>
      </div>
      <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
        <div class="card-block">';
  $sqlget = "SELECT * FROM famhistory WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
          echo"<p>Any heart attack below the age of 50 years old? :" .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
          <p>Any stroke below the age of 50 years old? : " .($row['stroke'] == 0 ? ' No':' Yes')."</p>
          <p>High blood pressure? : " .($row['highBlood'] == 0 ? ' No':' Yes')."</p>
          <p>Elevated cholesterol? : " .($row['cholesterol'] == 0 ? ' No':' Yes')."</p>
          <p>Diabetes? : " .($row['diabetes'] == 0 ? ' No':' Yes')."</p>
          <p>Asthma or Hay fever? : " .($row['asthma'] == 0 ? ' No':' Yes')."</p>
          <p>Congenital heart diseases (existing at birth bu not hereditary)? : " .($row['heartDisease'] == 0 ? ' No':' Yes')."</p>
          <p>Heart Operations? : " .($row['heartOps'] == 0 ? ' No':' Yes')."</p>
          <p>Glaucoma? : " .($row['glaucoma'] == 0 ? ' No':' Yes')."</p>
          <p>Obesity? : " .($row['obesity'] == 0 ? ' No':' Yes')."</p>
          <p>Leukemia or cancer under the age of 50? : " .($row['cancer'] == 0 ? ' No':' Yes')."</p>
          <p>Additional comments : ".$row['comments']."</p>";
  }
  echo'
        </div>
      </div>
    </div>';

    echo '<div class="card">
      <div class="card-header" role="tab" id="headingEight">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Past Medical History
          </a>
        </h5>
      </div>
      <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
        <div class="card-block">';
  $sqlget = "SELECT * FROM pastmedhistory WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
          echo"<p>Have you ever had a heart attack? : " .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had Rheumatic Fever? : " .($row['rheumatic'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had a Heart Murmur? : " .($row['murmer'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from disease of the arteries? : " .($row['arteries'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from varicose veins? : " .($row['veins'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from arthritis? : " .($row['arthritis'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from dizziness or fainting spells? : " .($row['dizziness'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from epilepsy or seizures? : " .($row['epilepsy'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had a stroke? : " .($row['pastStroke'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from diphteria? : " .($row['diphtheria'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had Scarlet fever? : " .($row['scarletfever'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from infectious mononucleosis? : " .($row['mononucleosis'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from Anemia? : " .($row['anemia'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had any thyroid problems? : " .($row['thyroid'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from pneumonia? : " .($row['pneumonia'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered any injuries to your back, arms, or legs? : " .($row['injuries'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever broken any bones? :" .($row['brokenBones'] == 0 ? ' No':' Yes')."</p>";
  };
  echo'
        </div>
      </div>
    </div>';

    echo '<div class="card">
      <div class="card-header" role="tab" id="headingEight">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Past Medical History
          </a>
        </h5>
      </div>
      <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
        <div class="card-block">';
  $sqlget = "SELECT * FROM pastmedhistory WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
          echo"<p>Have you ever had a heart attack? : " .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had Rheumatic Fever? : " .($row['rheumatic'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had a Heart Murmur? : " .($row['murmer'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from disease of the arteries? : " .($row['arteries'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from varicose veins? : " .($row['veins'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from arthritis? : " .($row['arthritis'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from dizziness or fainting spells? : " .($row['dizziness'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from epilepsy or seizures? : " .($row['epilepsy'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had a stroke? : " .($row['pastStroke'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from diphteria? : " .($row['diphtheria'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had Scarlet fever? : " .($row['scarletfever'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from infectious mononucleosis? : " .($row['mononucleosis'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from Anemia? : " .($row['anemia'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever had any thyroid problems? : " .($row['thyroid'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered from pneumonia? : " .($row['pneumonia'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever suffered any injuries to your back, arms, or legs? : " .($row['injuries'] == 0 ? ' No':' Yes')."</p>
          <p>Have you ever broken any bones? :" .($row['brokenBones'] == 0 ? ' No':' Yes')."</p>";
  };
  echo'
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
        <div class="card-block">';
  $sqlget = "SELECT * FROM heartriskfacts WHERE user_id = $sender";
  $sqldata = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
          echo" <p>Have you ever smoked? : " .($row['smoking'] == 0 ? ' No':' Yes')."</p>
          <p>How many per day? : ".$row['perDay']. "</p>
          <p>If you stopped, when was it? : ".$row['sinceQuit']. "</p>
          <p>What age did yo start? : " .$row['age']. "</p>";
  };
  echo'
  </div>
  </div>
  </div>';

}
else {
$personalInfo = $rows['PersonalInfo'];
$emergContact = $rows['EmergContact'];
$doctorInfo = $rows['DocInfo'];
$presMedHist = $rows['PresMedHist'];
$chronDisease = $rows['ChronicDisease'];
$famDisease = $rows['FamDisease'];
$pastMedHist = $rows['PastMedHist'];
$heartDiseaseRisk = $rows['HeartDiseaseRisk'];


if ($personalInfo == 1) {
  $sqlget = "SELECT * FROM userpersonalinfo WHERE user_id = $sender";
	$sqldata = mysqli_query($conn, $sqlget);

	echo'<div class="container" >
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
                                                <div class="card-block">';
												while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
                                                  echo "<p>First name : ". $row['fName'] . "</p>
												  <p>Last name :". $row['lName']. "</p>
													<p>Gender :". $row['gender']. "</p>
													<p>Address :". $row['address']. "</p>
													<p>City :". $row['city']. "</p>
													<p>County:". $row['county']. "</p>
													<p>Country :". $row['country']. "</p>
													<p>Contact Number :". $row['contactNum']. "</p>
													<p>Date Of Birth:". $row['DOB']. "</p>
													<p>Health Insurance Company  :". $row['insurance']. "</p>
													<p>Height (M)  :". $row['height']. "</p>
													<p>Weight (KG) :". $row['weight']. "</p>



                        	<p>Blood Type:". $row['blood']. "</p>";
												}
                        echo '</div>
                                           </div>
                                       </div>';
}
if ($emergContact == true) {
  echo '<div class="card">
      <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Emergency Contact
              </a>
          </h5>
      </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="card-block">';

$sqlget = "SELECT * FROM emergcontact WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
echo "<p>First name : ". $row['fName'] . "</p>
<p>Last name :". $row['lName']. "</p>
<p>Contact Number :". $row['number']. "</p>
<p>Relationship : ". $row['relation']. "</p>";

}

        echo '</div>
      </div>
  </div>';
}

if ($doctorInfo == true) {
  echo '
  <div class="card">
      <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Doctor/GP Informations
              </a>
          </h5>
      </div>
      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-block">';
          $sqlget = "SELECT * FROM docinfo WHERE user_id = $sender";
          $sqldata = mysqli_query($conn, $sqlget);
          while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
          echo "<p>First name : ". $row['fName'] . "</p>
          <p>Last name :". $row['lName']. "</p>
          <p>Address :". $row['address']. "</p>
          <p>City :" .$row['city']. "</p>
                        <p>County :" .$row['county']. "</p>
                        <p>Country :" .$row['country']. "</p>
                        <p>Contact Number :" .$row['GPnumber'].  "</p>";
          }
          echo'</div>
                </div>
            </div>';
          }
if ($presMedHist == true) {
  echo ' <div class="card">
    <div class="card-header" role="tab" id="headingFour">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Current Medication
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="card-block">';

        $sqlget = "SELECT * FROM currentmed WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
echo "<p>Current Medication : ". $row['currentMeds'] . "</p>
<p>Current Dose :". $row['CurrentMedDose']. "</p>
<p>Health Concerns:". $row['healthConcerns']. "</p>";
}
echo'
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
      <div class="card-block">';
$sqlget = "SELECT * FROM currentmed WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
echo " <p>Allergies :" .$row['allergies']. "</p>
<p>Medical Allergies :" .$row['medAllergies']. "</p>
            <p>Vision Issues:" .($row['vision'] == 0 ? ' No':' Yes')."</p>
<p>Do You Wear Glasses :" .($row['glasses'] == 0 ? ' No':' Yes'). "</p>
            <p>Do You Have Hearing Issues :" .($row['hearing'] == 0 ? ' No':' Yes').  "</p>
<p>Do You Have Speaking Issues :" .($row['speech'] == 0 ? ' No':' Yes'). "</p>
<p>Do You Have High Blood Pressure :" .($row['bloodPress'] == 0 ? ' No':' Yes'). "</p>
<p>Do You Have A history Of Heart Problems :" .$row['heartProbs']. "</p>
<p>Do You Breathing Problems :" .($row['breathProblems'] == 0 ? ' No':' Yes'). "</p>
<p>Do You Have ADHD :" .($row['adhd'] == 0 ? ' No':' Yes'). "</p>";
}
echo'
      </div>
    </div>
  </div>';
        }
if ($chronDisease == true) {
  echo '<div class="card">
    <div class="card-header" role="tab" id="headingSix">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Chronic Disease Assessment
        </a>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="card-block">';
       $sqlget = "SELECT * FROM chronicdisease WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
       echo "<p>Do you suffer from asthma? :" .($row['asthma'] == 0 ? ' No':' Yes')."</p>
        <p>If yes, what type? : ".($row['asthmaType'] == 0 ? ' No':' Yes')."</p>
        <p>Do you have diabetes? : ".($row['diabetes'] == 0 ? ' No':' Yes')."</p>
        <p>If yes, which type? : ".($row['diabetesType'] == 0 ? ' No':' Yes')."</p>
        <p>Do you suffer from seizures? : " .($row['seizures'] == 0 ? ' No':' Yes')."</p>";
};
     echo' </div>
    </div>
  </div>';
}

if ($famDisease == true) {
  echo '<div class="card">
    <div class="card-header" role="tab" id="headingSeven">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Family History
        </a>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="card-block">';
$sqlget = "SELECT * FROM famhistory WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
        echo"<p>Any heart attack below the age of 50 years old? :" .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
        <p>Any stroke below the age of 50 years old? : " .($row['stroke'] == 0 ? ' No':' Yes')."</p>
        <p>High blood pressure? : " .($row['highBlood'] == 0 ? ' No':' Yes')."</p>
        <p>Elevated cholesterol? : " .($row['cholesterol'] == 0 ? ' No':' Yes')."</p>
        <p>Diabetes? : " .($row['diabetes'] == 0 ? ' No':' Yes')."</p>
        <p>Asthma or Hay fever? : " .($row['asthma'] == 0 ? ' No':' Yes')."</p>
        <p>Congenital heart diseases (existing at birth bu not hereditary)? : " .($row['heartDisease'] == 0 ? ' No':' Yes')."</p>
        <p>Heart Operations? : " .($row['heartOps'] == 0 ? ' No':' Yes')."</p>
        <p>Glaucoma? : " .($row['glaucoma'] == 0 ? ' No':' Yes')."</p>
        <p>Obesity? : " .($row['obesity'] == 0 ? ' No':' Yes')."</p>
        <p>Leukemia or cancer under the age of 50? : " .($row['cancer'] == 0 ? ' No':' Yes')."</p>
        <p>Additional comments : ".$row['comments']."</p>";
}
echo'
      </div>
    </div>
  </div>';
}
if ($pastMedHist == true) {
  echo '<div class="card">
    <div class="card-header" role="tab" id="headingEight">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Past Medical History
        </a>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="card-block">';
$sqlget = "SELECT * FROM pastmedhistory WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
        echo"<p>Have you ever had a heart attack? : " .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had Rheumatic Fever? : " .($row['rheumatic'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had a Heart Murmur? : " .($row['murmer'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from disease of the arteries? : " .($row['arteries'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from varicose veins? : " .($row['veins'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from arthritis? : " .($row['arthritis'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from dizziness or fainting spells? : " .($row['dizziness'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from epilepsy or seizures? : " .($row['epilepsy'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had a stroke? : " .($row['pastStroke'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from diphteria? : " .($row['diphtheria'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had Scarlet fever? : " .($row['scarletfever'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from infectious mononucleosis? : " .($row['mononucleosis'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from Anemia? : " .($row['anemia'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had any thyroid problems? : " .($row['thyroid'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from pneumonia? : " .($row['pneumonia'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered any injuries to your back, arms, or legs? : " .($row['injuries'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever broken any bones? :" .($row['brokenBones'] == 0 ? ' No':' Yes')."</p>";
};
echo'
      </div>
    </div>
  </div>';
}

if ($heartDiseaseRisk == true) {
  echo '<div class="card">
    <div class="card-header" role="tab" id="headingEight">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Past Medical History
        </a>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="card-block">';
$sqlget = "SELECT * FROM pastmedhistory WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
        echo"<p>Have you ever had a heart attack? : " .($row['heartAttack'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had Rheumatic Fever? : " .($row['rheumatic'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had a Heart Murmur? : " .($row['murmer'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from disease of the arteries? : " .($row['arteries'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from varicose veins? : " .($row['veins'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from arthritis? : " .($row['arthritis'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from dizziness or fainting spells? : " .($row['dizziness'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from epilepsy or seizures? : " .($row['epilepsy'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had a stroke? : " .($row['pastStroke'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from diphteria? : " .($row['diphtheria'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had Scarlet fever? : " .($row['scarletfever'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from infectious mononucleosis? : " .($row['mononucleosis'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from Anemia? : " .($row['anemia'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever had any thyroid problems? : " .($row['thyroid'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered from pneumonia? : " .($row['pneumonia'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever suffered any injuries to your back, arms, or legs? : " .($row['injuries'] == 0 ? ' No':' Yes')."</p>
        <p>Have you ever broken any bones? :" .($row['brokenBones'] == 0 ? ' No':' Yes')."</p>";
};
echo'
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
      <div class="card-block">';
$sqlget = "SELECT * FROM heartriskfacts WHERE user_id = $sender";
$sqldata = mysqli_query($conn, $sqlget);
while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
        echo" <p>Have you ever smoked? : " .($row['smoking'] == 0 ? ' No':' Yes')."</p>
        <p>How many per day? : ".$row['perDay']. "</p>
        <p>If you stopped, when was it? : ".$row['sinceQuit']. "</p>
        <p>What age did yo start? : " .$row['age']. "</p>";
};
echo'
</div>
</div>
</div>';
}
}
echo '  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>';
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
						<a class="btn btn-primary btn-lg" href = "SharedFiles.php" = "shared-button"> Shared With Me </a>
                        <button class="btn btn-primary btn-lg" id = "isharing-button"> I Share With  </button>

                    </div>
                </div>
            </div>

            <?php
			include_once "sharedmyfiles.php"; // this will include a.php
			?>

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

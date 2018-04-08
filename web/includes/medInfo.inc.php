<?php
	session_start();
	include 'dbh.inc.php';

	$id = $_SESSION['u_id'];
	$sqlget = "SELECT * FROM userpersonalinfo WHERE user_id = $id";
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
                                              <div class="card-block">';


											  $sqlget = "SELECT * FROM emergcontact WHERE user_id = $id";
												$sqldata = mysqli_query($conn, $sqlget);
												while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
												echo "<p>First name : ". $row['fName'] . "</p>
													<p>Last name :". $row['lName']. "</p>
													<p>Contact Number :". $row['number']. "</p>
													<p>Relationship : ". $row['relation']. "</p>";

												}

                                              echo '</div>
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
                                                <div class="card-block">';

												$sqlget = "SELECT * FROM docinfo WHERE user_id = $id";
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
                                              <div class="card-block">';

                                                $sqlget = "SELECT * FROM currentmed WHERE user_id = $id";
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
											  $sqlget = "SELECT * FROM currentmed WHERE user_id = $id";
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
                                              <div class="card-block">';
                                               $sqlget = "SELECT * FROM chronicdisease WHERE user_id = $id";
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
                                              <div class="card-block">';
												$sqlget = "SELECT * FROM famhistory WHERE user_id = $id";
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
                                              <div class="card-block">';
											  $sqlget = "SELECT * FROM pastmedhistory WHERE user_id = $id";
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
											   $sqlget = "SELECT * FROM heartriskfacts WHERE user_id = $id";
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
									      </div>
                                              </div>
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

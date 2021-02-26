<?php

 if (isset($_POST["submit"])) {

   $name = $_POST["name"];
   $lastName = $_POST["lastName"];
   $birthdate = $_POST["birthdate"];
   $today = date("Y-m-d");
   $ageCalc = date_diff(date_create($birthdate), date_create($today));
   $age = $ageCalc->format('%Y');
   $ssn = $_POST["ssn"];
   $gender = $_POST['gender'];
   $ethnicity = $_POST["ethnicity"];
   $maritalStatus = $_POST['maritalStatus'];
   $medicalPlan = $_POST['medicalPlan'];
   $religion = $_POST["religion"];
   $email = $_POST["email"];
   $occupation = $_POST["occupation"];
   $address = $_POST["addressone"];
   $addressTwo = $_POST["addresstwo"];
   $zipCode = $_POST["zip"];
   $city = $_POST['cities'];
   $phoneHome = $_POST["phoneHome"];
   $phonePersonal = $_POST["phonePersonal"];
   $emergencyName = $_POST["emergencyName"];
   $emergencyLastName = $_POST["emergencyLastName"];
   $emergencyRelaionship = $_POST["emergencyRelationship"];
   $emergencyEmail = $_POST["emergencyEmail"];
   $emergencyAddress = $_POST["emergencyAddress"];
   $emergencyAddresstwo = $_POST["emergencyAddresstwo"];
   $emergencyZip = $_POST["emergencyZip"];
   $emergencyCity = $_POST["emergencyCity"];
   $emergencyCellphone = $_POST["emergencyCellphone"];
   $conditions = implode(",", $_POST['conditions']);
   $familyConditions = implode(",", $_POST['familyConditions']);
   $allergies = implode(",", $_POST['allergies']);
   $otherC = $_POST["otherConditions"];
   $otherFC = $_POST["otherFamilyConditions"];
   $otherA = $_POST["otherAllergies"];
   $massage = $_POST["massage"];
   $massageType = $_POST["massageType"];
   $massageTherapist = $_POST["massageTherapist"];
   $massageReason = $_POST["massageReason"];
   $massageWorkout = $_POST["massageWorkout"];
   $massageDiet = $_POST["massageDiet"];
   $massageStress = $_POST["massageStress"];
   $comments = $_POST["comments"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';


   if (invalidEmail($email) !== false) {
     header("location: ../patients.php?error=invalidemail");
     exit();
   }

   createPatient($conn, $name, $lastName, $birthdate, $age, $ssn, $gender, $ethnicity, $maritalStatus, $medicalPlan, $religion, $email, $occupation, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $conditions, $familyConditions, $allergies, $otherC, $otherFC,
   $otherA, $massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet, $massageStress, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo, $emergencyZip, $emergencyCity, $emergencyCellphone, $comments);

}

 else {
   header("location: ../patients.php");
   exit();
 }

<?php

if (isset($_POST["submit"])) {

  $id = $_POST["id"];
  $lname = $_POST["lastname"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $bday = $_POST["birthdate"];
  $today = date("Y-m-d");
  $ageCalc = date_diff(date_create($bday), date_create($today));
  $age = $ageCalc->format('%Y');
  $email = $_POST["email"];
  $ethnicity = $_POST["ethnicity"];
  $marital = $_POST["marital"];
  $religion = $_POST["religion"];
  $medicalPlan = $_POST["medicalPlan"];
  $phoneHome = $_POST["phoneHome"];
  $phonePersonal = $_POST["phonePersonal"];
  $occupation = $_POST["occupation"];
  $address = $_POST["address"];
  $addressTwo = $_POST["addressTwo"];
  $zipCode = $_POST["zipCode"];
  $town = $_POST["town"];
  $conditions = $_POST["conditions"];
  $familyConditions = $_POST["familyHistory"];
  $allergies = $_POST["allergies"];
  $otherC = $_POST["otherConditions"];
  $otherFC = $_POST["otherFamilyCon"];
  $otherA = $_POST["otherAllergies"];
  $vitalSigns = $_POST["vitalSigns"];
  $medicNotes = $_POST["medicNotes"];
  $medicOrders = $_POST["medicOrders"];
  $massage = $_POST["massage"];
  $massageType = $_POST["massageType"];
  $massageTherapist = $_POST["massageTherapist"];
  $massageReason = $_POST["massageReason"];
  $massageWorkout = $_POST["massageWorkout"];
  $massageDiet = $_POST["massageDiet"];
  $massageStress = $_POST["massageStress"];
  $Ename = $_POST["Ename"];
  $Elastname = $_POST["Elastname"];
  $Ecell = $_POST["Ecell"];
  $Eemail = $_POST["Eemail"];
  $Erelation = $_POST["Erelation"];
  $Eaddress = $_POST["Eaddress"];
  $Eaddtwo = $_POST["Eaddtwo"];
  $Ecity = $_POST["Ecity"];
  $Ezip = $_POST["Ezip"];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';


  if (invalidEmail($email) !== false) {
    header("location: ../patients.php?error=invalidemail");
    exit();
  }

  editPatient($conn, $id, $lname, $name, $gender, $bday, $age, $email,  $ethnicity, $marital, $religion, $medicalPlan, $phoneHome, $phonePersonal, $occupation, $address, $addressTwo, $zipCode, $town,
  $conditions, $familyConditions, $allergies, $otherC, $otherFC, $otherA, $vitalSigns, $medicNotes, $medicOrders,$massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet,
  $massageStress,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip) ;

}

else {
  header("location: ../patients.php");
  exit();
}

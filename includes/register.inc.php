<?php

 if (isset($_POST["submit"])) {

   $username = $_POST["username"];
   $password = $_POST["password"];
   $passwordRepeat = $_POST["passwordRepeat"];
   $name = $_POST["name"];
   $lastName = $_POST["lastName"];
   $email = $_POST["email"];
   $birthdate = $_POST["birthdate"];
   $today = date("Y-m-d");
   $ageCalc = date_diff(date_create($birthdate), date_create($today));
   $age = $ageCalc->format('%Y');
   $ssn = $_POST["ssn"];
   $address = $_POST["addressone"];
   $addressTwo = $_POST["addresstwo"];
   $zipCode = $_POST["zip"];
   $city = $_POST['cities'];
   $phoneHome = $_POST["phoneHome"];
   $phonePersonal = $_POST["phonePersonal"];
   $accessLevel = $_POST["accessLevel"];
   $emergencyName = $_POST["emergencyName"];
   $emergencyLastName = $_POST["emergencyLastName"];
   $emergencyRelaionship = $_POST["emergencyRelationship"];
   $emergencyEmail = $_POST["emergencyEmail"];
   $emergencyAddress = $_POST["emergencyAddress"];
   $emergencyAddresstwo = $_POST["emergencyAddresstwo"];
   $emergencyZip = $_POST["emergencyZip"];
   $emergencyCity = $_POST["emergencyCity"];
   $emergencyCellphone = $_POST["emergencyCellphone"];
   $comments = $_POST["comments"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($name, $email, $username, $password, $passwordRepeat, $lastName, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel) !== false) {
     header("location: ../doctors.php?error=emptyinput");
     exit();
   }

   if (invalidUsername($username) !== false) {
     header("location: ../doctors.php?error=invalidusername");
     exit();
   }


   if (invalidEmail($email) !== false) {
     header("location: ../doctors.php?error=invalidemail");
     exit();
   }

   if (passwordMatch($password, $passwordRepeat) !== false) {
     header("location: ../doctors.php?error=passwordsdontmatch");
     exit();
   }

   if (usernameExist($conn, $username, $email) !== false) {
     header("location: ../doctors.php?error=usernametaken");
     exit();
   }

   createUser($conn, $username, $password, $name, $lastName, $email, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo, $emergencyZip, $emergencyCity, $emergencyCellphone
 ,$comments);

 }

 else {
   header("location: ../doctors.php");
   exit();
 }

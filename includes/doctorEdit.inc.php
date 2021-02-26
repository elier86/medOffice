<?php

if (isset($_POST["submit"])) {

  $id = $_POST["id"];
  $lname = $_POST["lastname"];
  $name = $_POST["name"];
  $username = $_POST["username"];
  $bday = $_POST["birthdate"];
  $today = date("Y-m-d");
  $ageCalc = date_diff(date_create($bday), date_create($today));
  $age = $ageCalc->format('%Y');
  $email = $_POST["email"];
  $address = $_POST["address"];
  $addressTwo = $_POST["addressTwo"];
  $zipCode = $_POST["zipCode"];
  $town = $_POST["town"];
  $phoneHome = $_POST["homePhone"];
  $phonePersonal = $_POST["phoneNumber"];
  $access = $_POST["access"];
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
    header("location: ../doctors.php?error=invalidemail");
    exit();
  }

  editDoctor($conn, $id, $lname, $name, $username, $bday, $age, $email, $phoneHome, $phonePersonal, $address,  $addressTwo, $zipCode, $town, $access
  ,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip) ;

}

else {
  header("location: ../doctors.php");
  exit();
}

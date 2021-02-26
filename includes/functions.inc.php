<?php

 function emptyInputSignup($name, $email, $username, $password, $passwordRepeat, $lastName, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel) {
   $result;
   if (empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat) || empty($lastName) || empty($birthdate) || empty($age) || empty($ssn) || empty($address) || empty($addressTwo) || empty($phoneHome)
     || empty($phonePersonal) || empty($accessLevel) || empty($zipCode) || empty($city)) {
     $result = true;
   }

   else {
     $result = false;
   }

   return $result;
 }

 function invalidUsername($username) {
   $result;
   if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
     $result = true;
   }

   else {
     $result = false;
   }

   return $result;
 }

 function invalidEmail($email) {
   $result;
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $result = true;
   }

   else {
     $result = false;
   }

   return $result;
 }

 function passwordMatch($password, $passwordRepeat) {
   $result;
   if ($password !== $passwordRepeat) {
     $result = true;
   }

   else {
     $result = false;
   }

   return $result;
 }

 function usernameExist($conn, $username, $email) {
  $sql = "SELECT * FROM admins WHERE adminUsername = ? OR email = ? AND isHidden = 'Enabled';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signIN.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }

  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
 }

 function nurseExist($conn, $username, $email) {
  $sql = "SELECT * FROM nurses WHERE adminUsername = ? OR email = ? AND isHidden = 'Enabled';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signIN.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }

  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
 }

  function createUser($conn, $username, $password, $name, $lastName, $email, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo,
  $emergencyZip, $emergencyCity, $emergencyCellphone, $comments) {
   $sql = "INSERT INTO admins (adminUsername, adminPassword, adminName, adminSurname, email, birthdate, age, ssn, address, addressTwo, zipCode,townPR, homePhone, phoneNumber, accessLevel,emergencyName, emergencyLastName, emergencyRelationship,
    emergencyEmail, emergencyAddress, emergencyAddresstwo, emergencyZip, emergencyCity, emergencyCellphone, comments)
   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? , ? , ? ,? , ?, ? ,?, ?);";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../doctors.php?error=stmtfailed");
     exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssss", $username, $hashedPassword, $name, $lastName, $email, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo,
   $emergencyZip, $emergencyCity, $emergencyCellphone, $comments);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../doctors.php?error=none");
   exit();
 }

 function emptyInputLogin($username, $password) {
   $result;
   if (empty($username) || empty($password)) {
     $result = true;
   }

   else {
     $result = false;
   }

   return $result;
 }

 function loginUser($conn, $username, $password) {
   $usernameExists = usernameExist($conn, $username, $username);

   if ($usernameExists === false) {
     header("location: ../signIN.php?error=usernamedontexists");
     exit();
   }

   $passwordHashed = $usernameExists["adminPassword"];
   $checkPassword = password_verify($password, $passwordHashed);

   if ($checkPassword === false) {
     header("location: ../signIN.php?error=wronglogin");
     exit();

   }
   else if ($checkPassword === true) {
     session_start();
     $_SESSION["numEmployee"] = $usernameExists["numEmployee"];
     $_SESSION["adminUsername"] = $usernameExists["adminUsername"];
     header("location: ../dashboard.php");
     exit();
   }
 }

   function loginNurse($conn, $username, $password) {
     $usernameExists = usernameExist($conn, $username, $username);

     if ($usernameExists === false) {
       header("location: ../signIN.php?error=usernamedontexists");
       exit();
     }

     $passwordHashed = $usernameExists["adminPassword"];
     $checkPassword = password_verify($password, $passwordHashed);

     if ($checkPassword === false) {
       header("location: ../signIN.php?error=wronglogin");
       exit();

     }

   else if ($checkPassword === true) {
     session_start();
     $_SESSION["numEmployee"] = $usernameExists["numEmployee"];
     $_SESSION["adminUsername"] = $usernameExists["adminUsername"];
     header("location: ../dashboard.php");
     exit();
   }

 }

 function createNurse($conn, $username, $password, $name, $lastName, $email, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo,
 $emergencyZip, $emergencyCity, $emergencyCellphone, $comments) {
  $sql = "INSERT INTO nurses (adminUsername, adminPassword, adminName, adminSurname, email, birthdate, age, ssn, address, addressTwo, zipCode,townPR, homePhone, phoneNumber, accessLevel,emergencyName, emergencyLastName, emergencyRelationship,
   emergencyEmail, emergencyAddress, emergencyAddresstwo, emergencyZip, emergencyCity, emergencyCellphone, comments)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? , ? , ? ,? , ?, ? ,?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../nurses.php?error=stmtfailed");
    exit();
  }

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssss", $username, $hashedPassword, $name, $lastName, $email, $birthdate, $age, $ssn, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $accessLevel, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo,
  $emergencyZip, $emergencyCity, $emergencyCellphone,$comments);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../nurses.php?error=none");
  exit();
}

function emptyInputPatient($name, $lastName, $birthdate, $age, $ssn, $gender, $ethnicity, $maritalStatus, $medicalPlan, $religion, $email, $occupation, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal) {
  $result;
  if (empty($name) || empty($lastName) || empty($birthdate) || empty($age) || empty($ssn) || empty($gender) || empty($ethnicity) || empty($maritalStatus) || empty($medicalPlan) || empty($religion) || empty($email) || empty($occupation)
    || empty($address) || empty($addressTwo) || empty($zipCode) || empty($city) || empty($phoneHome) || empty($phonePersonal)) {
    $result = true;
  }

  else {
    $result = false;
  }

  return $result;
}

function createPatient($conn, $name, $lastName, $birthdate, $age, $ssn, $gender, $ethnicity, $maritalStatus, $medicalPlan, $religion, $email, $occupation, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $conditions, $familyConditions, $allergies, $otherC, $otherFC,
$otherA, $massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet, $massageStress, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo, $emergencyZip, $emergencyCity, $emergencyCellphone, $comments) {
 $sql = "INSERT INTO patientProfile (patientName, patientLastName, patientBirthdate, patientAge, ssn, patientGender, patientEthnicity, maritalStatus, medicalPlan, religion, email, occupation, address, addresstwo, zipCode,
  town, phoneHome, phonePersonal, conditions, familyHistory, allergies, otherConditions, otherFamilyCon, otherAllergies, massage, massageType, massageTherapist, massageReason, massageWorkout, massageDiet, massageStress, emergencyName, emergencyLastName, emergencyRelationship,
   emergencyEmail, emergencyAddress, emergencyAddresstwo, emergencyZip, emergencyCity, emergencyCellphone, comments)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?, ?);";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../patients.php?error=stmtfailed");
   exit();
 }


 mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssssssssssss",$name, $lastName, $birthdate, $age, $ssn, $gender, $ethnicity, $maritalStatus, $medicalPlan, $religion, $email, $occupation, $address, $addressTwo, $zipCode, $city, $phoneHome, $phonePersonal, $conditions, $familyConditions, $allergies, $otherC, $otherFC,
 $otherA, $massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet, $massageStress, $emergencyName, $emergencyLastName, $emergencyRelaionship, $emergencyEmail, $emergencyAddress, $emergencyAddresstwo, $emergencyZip, $emergencyCity, $emergencyCellphone, $comments);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../patients.php?error=none");
 exit();
}



function editPatient($conn, $id, $lname, $name, $gender, $bday, $age, $email,  $ethnicity, $marital, $religion, $medicalPlan, $phoneHome, $phonePersonal, $occupation, $address, $addressTwo, $zipCode, $town, $conditions, $familyConditions, $allergies ,
$otherC, $otherFC, $otherA, $vitalSigns, $medicNotes, $medicOrders,$massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet, $massageStress,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip) {
 $sql = "UPDATE patientProfile
 SET patientLastName = '$lname', patientName = '$name', patientGender = '$gender', patientBirthdate = '$bday', patientAge = '$age', email = '$email', patientEthnicity = '$ethnicity',
 maritalStatus = '$marital', religion = '$religion', medicalPlan = '$medicalPlan', phoneHome = '$phoneHome', phonePersonal = '$phonePersonal', occupation = '$occupation', address = '$address', addresstwo = '$addressTwo',
 zipCode = '$zipCode', town = '$town', conditions = '$conditions', familyHistory = '$familyConditions', allergies = '$allergies', otherConditions = '$otherC', otherFamilyCon = '$otherFC', otherAllergies = '$otherA',
 vitalSigns = '$vitalSigns', medicNotes = '$medicNotes', medicOrders = '$medicOrders', massage = '$massage', massageType = '$massageType', massageTherapist = '$massageTherapist', massageReason = '$massageReason', massageWorkout ='$massageWorkout', massageStress = '$massageStress',
 emergencyName = '$Ename', emergencyLastName = '$Elastname', emergencyCellphone = '$Ecell', emergencyEmail = '$Eemail', emergencyRelationship = '$Erelation', emergencyAddress = '$Eaddress', emergencyAddresstwo = '$Eaddtwo', emergencyCity = '$Ecity', emergencyZip = '$Ezip'
 WHERE patientID = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../patientEdit.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssssssssssssss", $lname, $name, $gender, $bday, $age, $email,  $ethnicity, $marital, $religion, $medicalPlan, $phoneHome, $phonePersonal, $occupation, $address, $addressTwo, $zipCode, $town, $conditions, $familyConditions, $allergies,
 $otherC, $otherFC, $otherA, $vitalSigns, $medicNotes, $medicOrders, $massage, $massageType, $massageTherapist, $massageReason, $massageWorkout, $massageDiet, $massageStress,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../patientEdit.php?error=none");
 exit();
}


function   editDoctor($conn, $id, $lname, $name, $username, $bday, $age, $email, $phoneHome, $phonePersonal, $address,  $addressTwo, $zipCode, $town, $access
,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip) {
 $sql = "UPDATE admins
 SET adminSurname = '$lname', adminName = '$name', adminUsername = '$username', birthdate = '$bday', age = '$age', email = '$email', homePhone = '$phoneHome', phoneNumber = '$phonePersonal', address = '$address', addressTwo = '$addressTwo', zipCode = '$zipCode', townPR = '$town',
 accessLevel = '$access', emergencyName = '$Ename', emergencyLastName = '$Elastname', emergencyCellphone = '$Ecell', emergencyEmail = '$Eemail', emergencyRelationship = '$Erelation', emergencyAddress = '$Eaddress', emergencyAddresstwo = '$Eaddtwo', emergencyCity = '$Ecity', emergencyZip = '$Ezip'
 WHERE numEmployee = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../doctorEdit.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssss", $lname, $name, $username, $bday, $age, $email, $phoneHome, $phonePersonal, $address,  $addressTwo, $zipCode, $town, $access,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../doctorEdit.php?error=none");
 exit();
}

function   editNurse($conn, $id, $lname, $name, $username, $bday, $age, $email, $phoneHome, $phonePersonal, $address,  $addressTwo, $zipCode, $town, $access
,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip) {
 $sql = "UPDATE nurses
 SET adminSurname = '$lname', adminName = '$name', adminUsername = '$username', birthdate = '$bday', age = '$age', email = '$email', homePhone = '$phoneHome', phoneNumber = '$phonePersonal', address = '$address', addressTwo = '$addressTwo', zipCode = '$zipCode', townPR = '$town',
 accessLevel = '$access', emergencyName = '$Ename', emergencyLastName = '$Elastname', emergencyCellphone = '$Ecell', emergencyEmail = '$Eemail', emergencyRelationship = '$Erelation', emergencyAddress = '$Eaddress', emergencyAddresstwo = '$Eaddtwo', emergencyCity = '$Ecity', emergencyZip = '$Ezip'
 WHERE numEmployee = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../nurseEdit.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssss", $lname, $name, $username, $bday, $age, $email, $phoneHome, $phonePersonal, $address,  $addressTwo, $zipCode, $town, $access,$Ename, $Elastname, $Ecell, $Eemail, $Erelation, $Eaddress, $Eaddtwo, $Ecity, $Ezip);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../nurseEdit.php?error=none");
 exit();
}

function editStatusToReady($conn, $id, $vitalSigns) {
 $sql = "UPDATE appointment
 SET status = 'Ready', vitalSigns = '$vitalSigns'
 WHERE patientID = '$id' AND appointmentDate = CURDATE();";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../dashboard.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $status, $vitalSigns);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../dashboard.php?error=none");
 exit();
}

function editStatusToCompleted($conn, $id, $medicNotes, $medicOrders) {
 $sql = "UPDATE appointment
 SET status = 'Completed', medicNotes = '$medicNotes', medicOrders = '$medicOrders'
 WHERE patientID = '$id' AND appointmentDate = CURDATE();";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../dashboard.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "sss", $status, $medicNotes, $medicOrders);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../dashboard.php?error=none");
 exit();
}

function editStatusToCancelled($conn, $id) {
 $sql = "UPDATE appointment
 SET status = 'Cancelled'
 WHERE patientID = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../dashboard.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "s", $status);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../dashboard.php?error=none");
 exit();
}


function editStatusToB($conn, $id) {
 $sql = "UPDATE appointment
 SET status = 'Pending'
 WHERE patientID = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../dashboard.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "s", $status);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../dashboard.php?error=none");
 exit();
}


function emptyCheck($id) {
  $result;
  if (empty($id)) {
    $result = true;
  }
}


function makeAP($conn, $date, $id, $doctor, $status) {
 $sql = "INSERT INTO appointment (appointmentDate, patientID, doctorId, status) VALUES (?, ?, ?, ?);";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../appointment.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "ssss", $date, $id, $doctor, $status);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../appointment.php?error=none");
 exit();
 }

 function editAp($conn, $id, $currdate, $date, $doctor, $status) {
  $sql = "UPDATE appointment
  SET appointmentDate = '$date' , doctorId = '$doctor', status = '$status'
  WHERE patientID = '$id' AND appointmentDate = '$currdate';";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../appointmentAll.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $date, $id, $doctor, $status);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../appointmentAll.php?error=none");
  exit();
  }


function changeDoctor($conn, $id, $status) {
 $sql = "UPDATE admins
 SET isHidden = '$status'
 WHERE numEmployee = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../doctors.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "s", $status);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../doctors.php?error=good");
 exit();
}

function changeNurse($conn, $id, $status) {
 $sql = "UPDATE nurses
 SET isHidden = '$status'
 WHERE numEmployee = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../nurses.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_bind_param($stmt, "s", $status);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../nurses.php?error=good");
 exit();
}



function deletePatient($conn, $id) {
 $sql = "DELETE FROM patientProfile
 WHERE patientID = '$id';";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../patientDelete.php?error=stmtfailed");
   exit();
 }

 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../patients.php?error=deleted");
 exit();
}

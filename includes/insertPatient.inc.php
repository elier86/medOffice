<?php

function createPatient($conn, $name, $lastName) {
 $sql = "INSERT INTO patients (patientName, patientLastName) VALUES (?, ?);";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
   header("location: ../patients.php?error=stmtfailed");
   exit();
 }


 mysqli_stmt_bind_param($stmt, "ss", $conn, $name, $lastName);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../patients.php?error=none");
 exit();
}

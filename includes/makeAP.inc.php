<?php

if (isset($_POST["makeAP"])) {

  $date = $_POST["date"];
  $id = $_POST["id"];
  $doctor = $_POST["doctorID"];
  $status = "Pending";

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';


  if (!$date) {
    header("location: ../appointment.php?error=emptyP");
    exit();
  }

  if (!$doctor) {
    header("location: ../appointment.php?error=emptyD");
    exit();
  }

  makeAP($conn, $date, (int)$id, (int)$doctor, $status);

}

else {
  header("location: ../appointment.php");
  exit();
}

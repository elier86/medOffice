<?php

if (isset($_POST["changeP"])) {

  $id = $_POST['id'];
  $vitalSigns = $_POST['vitalSigns'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // if (emptyCheck(strval($id)) !== false) {
  if ($id === null) {
    header("location: ../dashboard.php?error=emptyP");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToReady($conn, $id, $vitalSigns);

  }

}



if (isset($_POST["backR"])) {

  $id = $_POST['id'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // if (emptyCheck(strval($id)) !== false) {
  if ($id === null) {
    header("location: ../dashboard.php?error=emptyBackR");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToB($conn, $id);

  }

}



if (isset($_POST["nextCancel"])) {

  $id = $_POST['id'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // if (emptyCheck(strval($id)) !== false) {
  if ($id === null) {
    header("location: ../dashboard.php?error=nextCancel");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToCancelled($conn, $id) ;

  }

}



if (isset($_POST["changeB"])) {

  $id = $_POST['id'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // if (emptyCheck(strval($id)) !== false) {
  if ($id === null) {
    header("location: ../dashboard.php?error=emptyB");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToB($conn, $id);

  }

}



if (isset($_POST["undo"])) {

  $id = $_POST['id'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  // if (emptyCheck(strval($id)) !== false) {
  if ($id === null) {
    header("location: ../dashboard.php?error=emptyUndo");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToB($conn, $id);

  }

}



if (isset($_POST["changeC"])) {

  $id = $_POST["id"];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if ($id === null) {
    header("location: ../dashboard.php?error=emptyC");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToCancelled($conn, $id) ;

  }

}



if (isset($_POST["changeR"])) {

  $id = $_POST["id"];
  $medicNotes = $_POST['medicNotes'];
  $medicOrders = $_POST['medicOrders'];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if ($id === null) {
    header("location: ../dashboard.php?error=emptyR");
    exit();
  }

  else {
    header("location: ../dashboard.php?error=none");
    editStatusToCompleted($conn, $id, $medicNotes, $medicOrders) ;

  }

}




if (isset($_POST["edit"])) {

  $id = $_POST["id"];
  $currdate = $_POST['currentDate'];
  $date = $_POST["date"];
  $doctor = $_POST["doctor"];
  $status = $_POST["status"];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if ($id === null) {
    header("location: ../appointmentAll.php?error=emptyinput");
    exit();
  }

  else {
    header("location: ../appointmentAll.php?error=none");
    editAp($conn, $id, $currdate, $date, $doctor, $status) ;

  }

}

else {
  header("location: ../dashboard.php");
  exit();
}

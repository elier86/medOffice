<?php

if (isset($_POST["submit"])) {

  $id = $_POST["id"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  deletePatient($conn, $id) ;

}

else {
  header("location: ../patients.php");
  exit();
}

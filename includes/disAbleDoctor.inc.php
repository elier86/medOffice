<?php

if (isset($_POST["submit"])) {

  $id = $_POST['id'];
  $status = $_POST['change'];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

    changeDoctor($conn, $id, $status);

}

else {
  header("location: ../doctors.php");
  exit();
}

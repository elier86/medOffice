<?php

 $serverName = 'localhost';
 $dbUserName = 'root';
 $dbPassword = '';
 $dbName = 'medOffice';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

 if (!$conn){
   die("Connection failed: " . mysqli_connect_error());
 }

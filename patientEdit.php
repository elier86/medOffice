
<?php
include_once 'sideSearch.php';
 ?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Patients:</h1>
        <img class="patientimg" src="https://www.flaticon.com/svg/static/icons/svg/3034/3034882.svg" alt="Patient Image" height="80px" width="80px" style="position:absolute; left:160px; top:5px;" >
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a class="btn btn-primary" href="patients.php" role="button"> << Go back and Cancel</a>
          </div>

        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        <?php

        require_once 'includes/dbh.inc.php';
        if (isset($_POST["submit_btn"])) {
          $patient = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Record Number</th>
        <th>Last Name</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthdate (YYYY-MM-DD)</th>
        <th>Age</th>
        <th>Email</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo '<form method="POST" action="includes/patientEdit.inc.php">';
          echo "<tr>";
          echo "<td>" . '<input type="text" name="id" value="' . $row['patientID'] . '" readonly>' . "</td>";
          echo "<td>" . '<input type="text" name="lastname" value="' . $row['patientLastName'] . '">' . "</td>";
          echo "<td>" . '<input type="text" name="name" value="' . $row['patientName'] . '">' . "</td>";
          echo "<td>" . '
                       <select class="custom-select d-block w-100" name="gender" >
                       <option value="' . $row['patientGender'] . '">' . $row['patientGender'] . '</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Other">Other</option></select>' . "</td>";
         echo "<td>" . '<input type="text" name="birthdate" value="' . $row['patientBirthdate'] . '">' . "</td>";
          echo "<td>" . $row['patientAge'] . "</td>";
          echo "<td>" . '<input type="text" name="email" value="' . $row['email'] . '">' . "</td>";
          echo "</tr>";


        }
        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }

      if (isset($_POST["submit_btn"])) {
        $patient = $_POST["pid"];
      $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
      echo "<table class=table table-striped table-sm>
      <tr>
      <th>Ethnicity</th>
      <th>Marital Status</th>
      <th>Medical Plan</th>
      <th>Religion</th>
      <th>Phone Home</th>
      <th>Phone Personal</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . '
                      <select class="custom-select d-block w-100" name="ethnicity" >
                      <option value="' . $row['patientEthnicity'] . '">' . $row['patientEthnicity'] . '</option>
                      <option value="American">American</option>
                      <option value="Hispanic or Latino">Hispanic or Latino</option>
                      <option value="Afroamerican">Afroamerican</option>
                      <option value="White">White</option>
                      <option value="Asian">Asian</option></select>' . "</td>";

        echo "<td>" . '
                           <select class="custom-select d-block w-100" name="marital" >
                           <option value="' . $row['maritalStatus'] . '">' . $row['maritalStatus'] . '</option>
                           <option value="Single">Single</option>
                           <option value="Married">Married</option>
                           <option value="Widowed">Widowed</option></select>' . "</td>";


                           echo "<td>" . '
                                       <select class="custom-select d-block w-100" name="medicalPlan" >
                                       <option value="' . $row['medicalPlan'] . '">' . $row['medicalPlan'] . '</option>
                                       <option value="MMM">MMM</option>
                                       <option value="MCS">MCS</option>
                                       <option value="SSS">SSS</option>
                                       <option value="Humana">Humana</option>
                                       <option value="Reforma">Reforma</option>
                                       <option value="First Medical">First Medical</option>
                                       <option value="PMC">PMC</option>
                                       <option value="Private">Private</option></select>' . "</td>";

        echo "<td>" . '<input type="text" name="religion" value="' . $row['religion'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="phoneHome" value="' . $row['phoneHome'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="phonePersonal" value="' . $row['phonePersonal'] . '">' . "</td>";
        echo "</tr>";


      }
      echo "</table>";
      echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
    }

    if (isset($_POST["submit_btn"])) {
      $patient = $_POST["pid"];
    $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
    echo "<table class=table table-striped table-sm>
    <tr>
    <th>Occupation</th>
    <th>Addres</th>
    <th>Addres Two</th>
    <th>Town</th>
    <th>Zip Code</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . '<input type="text" name="occupation" value="' . $row['occupation'] . '">' . "</td>";
      echo "<td>" . '<input type="text" name="address" value="' . $row['address'] . '">' . "</td>";
      echo "<td>" . '<input type="text" name="addressTwo" value="' . $row['addresstwo'] . '">' . "</td>";
      echo "<td>" . '
                   <select class="custom-select d-block w-100" name="town" >
                   <option value="' . $row['town'] . '">' . $row['town'] . '</option>
                   <option value="Adjuntas">Adjuntas</option>
                   <option value="Aguada">Aguada</option>
                   <option value="Aguadilla">Aguadilla</option>
                   <option value="Aguas Buenas">Aguas Buenas</option>
                   <option value="Aibonito">Aibonito</option>
                   <option value="Arecibo">Arecibo</option>
                   <option value="Arroyo">Arroyo</option>
                   <option value="Añasco">Añasco</option>
                   <option value="Barceloneta">Barceloneta</option>
                   <option value="Barranquitas">Barranquitas</option>
                   <option value="Bayamón">Bayamón</option>
                   <option value="Cabo Rojo">Cabo Rojo</option>
                   <option value="Caguas">Caguas</option>
                   <option value="Camuy">Camuy</option>
                   <option value="Canóvanas">Canóvanas</option>
                   <option value="Carolina">Carolina</option>
                   <option value="Cataño">Cataño</option>
                   <option value="Cayey">Cayey</option>
                   <option value="Ceiba">Ceiba</option>
                   <option value="Ciales">Ciales</option>
                   <option value="Cidra">Cidra</option>
                   <option value="Coamo">Coamo</option>
                   <option value="Comerío">Comerío</option>
                   <option value="Corozal">Corozal</option>
                   <option value="Culebra">Culebra</option>
                   <option value="Dorado">Dorado</option>
                   <option value="Fajardo">Fajardo</option>
                   <option value="Florida">Florida</option>
                   <option value="Guayama">Guayama</option>
                   <option value="Guayanilla">Guayanilla</option>
                   <option value="Guaynabo">Guaynabo</option>
                   <option value="Gurabo">Gurabo</option>
                   <option value="Guánica">Guánica</option>
                   <option value="Hatillo">Hatillo</option>
                   <option value="Hormigueros">Hormigueros</option>
                   <option value="Humacao">Humacao</option>
                   <option value="Isabela">Isabela</option>
                   <option value="Jayuya">Jayuya</option>
                   <option value="Juana Díaz">Juana Díaz</option>
                   <option value="Juncos">Juncos</option>
                   <option value="Lajas">Lajas</option>
                   <option value="Lares">Lares</option>
                   <option value="Las Marías">Las Marías</option>
                   <option value="Las Piedras">Las Piedras</option>
                   <option value="Loiza">Loiza</option>
                   <option value="Luquillo">Luquillo</option>
                   <option value="Manatí">Manatí</option>
                   <option value="Maricao">Maricao</option>
                   <option value="Maunabo">Maunabo</option>
                   <option value="Mayagüez">Mayagüez</option>
                   <option value="Moca">Moca</option>
                   <option value="Morovis">Morovis</option>
                   <option value="Naguabo">Naguabo</option>
                   <option value="Naranjito">Naranjito</option>
                   <option value="Orocovis">Orocovis</option>
                   <option value="Patillas">Patillas</option>
                   <option value="Peñuelas">Peñuelas</option>
                   <option value="Ponce">Ponce</option>
                   <option value="Quebradillas">Quebradillas</option>
                   <option value="Rincón">Rincón</option>
                   <option value="Rio Grande">Rio Grande</option>
                   <option value="Sabana Grande">Sabana Grande</option>
                   <option value="Salinas">Salinas</option>
                   <option value="San Germán">San Germán</option>
                   <option value="San Juan">San Juan</option>
                   <option value="San Lorenzo">San Lorenzo</option>
                   <option value="San Sebastián">San Sebastián</option>
                   <option value="Santa Isabel">Santa Isabel</option>
                   <option value="Toa Alta">Toa Alta</option>
                   <option value="Toa Baja">Toa Baja</option>
                   <option value="Trujillo Alto">Trujillo Alto</option>
                   <option value="Utuado">Utuado</option>
                   <option value="Vega Alta">Vega Alta</option>
                   <option value="Vega Baja">Vega Baja</option>
                   <option value="Vieques">Vieques</option>
                   <option value="Villalba">Villalba</option>
                   <option value="Yabucoa">Yabucoa</option>
                   <option value="Yauco">Yauco</option></select>' . "</td>";
      echo "<td>" . '<input type="text" name="zipCode" value="' . $row['zipCode'] . '">' . "</td>";
     echo "</tr>";
      echo "</tr>";


    }
    echo "</table>";
    echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
  }

      if (isset($_POST["submit_btn"])) {
        $patient = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Conditions</th>
        <th>Family History</th>
        <th>Allergies</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . '<textarea rows="3" cols="50" name="conditions">'. $row['conditions'] .'</textarea>' . "</td>";
          echo "<td>" . '<textarea rows="3" cols="50" name="familyHistory">'. $row['familyHistory'] .'</textarea>' . "</td>";
          echo "<td>" . '<input type="textarea" name="allergies" value="' . $row['allergies'] . '">' . "</td>";
          echo "</tr>";
        }

        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }

      if (isset($_POST["submit_btn"])) {
        $patient = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Other Conditions</th>
        <th>Other Family Conditions</th>
        <th>Other Allergies</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . '<textarea rows="3" cols="50" name="otherConditions">'. $row['otherConditions'] .'</textarea>' . "</td>";
          echo "<td>" . '<textarea rows="3" cols="50" name="otherFamilyCon">'. $row['otherFamilyCon'] .'</textarea>' . "</td>";
          echo "<td>" . '<input type="textarea" name="otherAllergies" value="' . $row['otherAllergies'] . '">' . "</td>";
          echo "</tr>";
        }

        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }


      if (isset($_POST["submit_btn"])) {
        $patient = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Vital Signs</th>
        <th>Medic Notes</th>
        <th>Medic Orders</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . '<textarea rows="8" cols="50" name="vitalSigns">'. $row['vitalSigns'] .'</textarea>' . "</td>";
          echo "<td>" . '<textarea rows="8" cols="50" name="medicNotes">'. $row['medicNotes'] .'</textarea>' . "</td>";
          echo "<td>" . '<textarea rows="8" cols="50" name="medicOrders">'. $row['medicOrders'] .'</textarea>' . "</td>";
          echo "</tr>";
        }

        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }

      if (isset($_POST["submit_btn"])) {
        $patient = $_POST["pid"];
      $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
      echo "<table class=table table-striped table-sm>
      <tr>
      <th>Have you ever recieved a massage?</th>
      <th>Type of massage</th>
      <th>Therapist</th>
      <th>What was the reason for your massage?</th>
      <th>What type of workout do you do?</th>
      <th>Do you follow a diet?</th>
      <th>Whats your level of stress? 1-10</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . '<input type="text" name="massage" value="' . $row['massage'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageType" value="' . $row['massageType'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageTherapist" value="' . $row['massageTherapist'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageReason" value="' . $row['massageReason'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageWorkout" value="' . $row['massageWorkout'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageDiet" value="' . $row['massageDiet'] . '">' . "</td>";
        echo "<td>" . '<input type="text" name="massageStress" value="' . $row['massageStress'] . '">' . "</td>";



        echo "</tr>";


      }
      echo "</table>";
      echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
    }


    if (isset($_POST["submit_btn"])) {
      $patient = $_POST["pid"];
    $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
    echo '<h1 class="h2">Emergency Contact</h1>';
  echo "<table class=table table-striped table-sm>
  <tr>
  <th>Name</th>
  <th>Last Name</th>
  <th>Cellphone</th>
  <th>Email</th>
  <th>Relationship</th>

  </tr>";

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . '<input type="text" name="Ename" value="' . $row['emergencyName'] . '">' . "</td>";
    echo "<td>" . '<input type="text" name="Elastname" value="' . $row['emergencyLastName'] . '">' . "</td>";
    echo "<td>" . '<input type="text" name="Ecell" value="' . $row['emergencyCellphone'] . '">' . "</td>";
    echo "<td>" . '<input type="text" name="Eemail" value="' . $row['emergencyEmail'] . '">' . "</td>";
    echo "<td>" . '<input type="text" name="Erelation" value="' . $row['emergencyRelationship'] . '">' . "</td>";
    echo "</tr>";


  }
  echo "</table>";
  echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
  }

  if (isset($_POST["submit_btn"])) {
    $patient = $_POST["pid"];
  $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
  echo "<table class=table table-striped table-sm>
  <tr>
  <th>Address</th>
  <th>Address Two</th>
  <th>Town</th>
  <th>Zip Code</th>

  </tr>";

  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . '<input type="text" name="Eaddress" value="' . $row['emergencyAddress'] . '">' . "</td>";
  echo "<td>" . '<input type="text" name="Eaddtwo" value="' . $row['emergencyAddresstwo'] . '">' . "</td>";
  echo "<td>" . '
                <select class="custom-select d-block w-100" name="Ecity" >
                <option value="' . $row['emergencyCity'] . '">' . $row['emergencyCity'] . '</option>
                <option value="Adjuntas">Adjuntas</option>
                <option value="Aguada">Aguada</option>
                <option value="Aguadilla">Aguadilla</option>
                <option value="Aguas Buenas">Aguas Buenas</option>
                <option value="Aibonito">Aibonito</option>
                <option value="Arecibo">Arecibo</option>
                <option value="Arroyo">Arroyo</option>
                <option value="Añasco">Añasco</option>
                <option value="Barceloneta">Barceloneta</option>
                <option value="Barranquitas">Barranquitas</option>
                <option value="Bayamón">Bayamón</option>
                <option value="Cabo Rojo">Cabo Rojo</option>
                <option value="Caguas">Caguas</option>
                <option value="Camuy">Camuy</option>
                <option value="Canóvanas">Canóvanas</option>
                <option value="Carolina">Carolina</option>
                <option value="Cataño">Cataño</option>
                <option value="Cayey">Cayey</option>
                <option value="Ceiba">Ceiba</option>
                <option value="Ciales">Ciales</option>
                <option value="Cidra">Cidra</option>
                <option value="Coamo">Coamo</option>
                <option value="Comerío">Comerío</option>
                <option value="Corozal">Corozal</option>
                <option value="Culebra">Culebra</option>
                <option value="Dorado">Dorado</option>
                <option value="Fajardo">Fajardo</option>
                <option value="Florida">Florida</option>
                <option value="Guayama">Guayama</option>
                <option value="Guayanilla">Guayanilla</option>
                <option value="Guaynabo">Guaynabo</option>
                <option value="Gurabo">Gurabo</option>
                <option value="Guánica">Guánica</option>
                <option value="Hatillo">Hatillo</option>
                <option value="Hormigueros">Hormigueros</option>
                <option value="Humacao">Humacao</option>
                <option value="Isabela">Isabela</option>
                <option value="Jayuya">Jayuya</option>
                <option value="Juana Díaz">Juana Díaz</option>
                <option value="Juncos">Juncos</option>
                <option value="Lajas">Lajas</option>
                <option value="Lares">Lares</option>
                <option value="Las Marías">Las Marías</option>
                <option value="Las Piedras">Las Piedras</option>
                <option value="Loiza">Loiza</option>
                <option value="Luquillo">Luquillo</option>
                <option value="Manatí">Manatí</option>
                <option value="Maricao">Maricao</option>
                <option value="Maunabo">Maunabo</option>
                <option value="Mayagüez">Mayagüez</option>
                <option value="Moca">Moca</option>
                <option value="Morovis">Morovis</option>
                <option value="Naguabo">Naguabo</option>
                <option value="Naranjito">Naranjito</option>
                <option value="Orocovis">Orocovis</option>
                <option value="Patillas">Patillas</option>
                <option value="Peñuelas">Peñuelas</option>
                <option value="Ponce">Ponce</option>
                <option value="Quebradillas">Quebradillas</option>
                <option value="Rincón">Rincón</option>
                <option value="Rio Grande">Rio Grande</option>
                <option value="Sabana Grande">Sabana Grande</option>
                <option value="Salinas">Salinas</option>
                <option value="San Germán">San Germán</option>
                <option value="San Juan">San Juan</option>
                <option value="San Lorenzo">San Lorenzo</option>
                <option value="San Sebastián">San Sebastián</option>
                <option value="Santa Isabel">Santa Isabel</option>
                <option value="Toa Alta">Toa Alta</option>
                <option value="Toa Baja">Toa Baja</option>
                <option value="Trujillo Alto">Trujillo Alto</option>
                <option value="Utuado">Utuado</option>
                <option value="Vega Alta">Vega Alta</option>
                <option value="Vega Baja">Vega Baja</option>
                <option value="Vieques">Vieques</option>
                <option value="Villalba">Villalba</option>
                <option value="Yabucoa">Yabucoa</option>
                <option value="Yauco">Yauco</option></select>' . "</td>";
  echo "<td>" . '<input type="text" name="Ezip" value="' . $row['emergencyZip'] . '">' . "</td>";

  echo "</tr>";


  }
  echo "</table>";
  echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
  echo '<button class="btn btn-success" type="submit" name="submit">Save Changes</button>';
  echo '<a class="btn btn-primary float-right" href="patients.php" role="button"><< Go back and Cancel</a>';
  echo  '</form><br><br>';
  }





    if (isset($_POST["submit_btn"])) {
      $patient = $_POST["pid"];
      $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
      while($row = mysqli_fetch_array($result))
      {
      echo '<br><h1 class="h2">DELETE PATIENT:</h1>';
      echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      echo "<td>" . '<form method="POST" action="patientDelete.php"><input type="hidden" name="pid" value="' . $row['patientID'] . '"><input class="btn btn-warning float-center" type="submit" name="submit_delete" value="Delete Record"></form>' . "</td>";

      }
          }
        mysqli_close($conn);
        ?>





  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all the fields!</p>";
    }
    elseif ($_GET["error"] == "invalidEmail") {
      echo "<p>Choose a proper email!</p>";
  }
  elseif ($_GET["error"] == "stmtfailed") {
    echo "<p>Something went wrong, try again!</p>";
}
elseif ($_GET["error"] == "none") {
  echo "<p>Changes Saved!</p>";
}
    }
   ?>
  </div>

    </main>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

<?php
include_once 'sidenav.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctors:</h1>
        <img src="https://www.flaticon.com/svg/static/icons/svg/607/607414.svg" alt="doctor image" height="80px" width="80px" style="position:absolute; left:160px; top:5px;">

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a class="btn btn-primary" href="doctors.php" role="button"><< Go back and Cancel</a>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">


        <?php

        require_once 'includes/dbh.inc.php';
        if (isset($_POST["submit_btn"])) {
          $doctor = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM admins WHERE numEmployee = '$doctor' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Employee Number</th>
        <th>Last Name</th>
        <th>Name</th>
        <th>Username</th>
        <th>Birthdate (YYYY-MM-DD)</th>
        <th>Age</th>
        <th>Email</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo '<form method="POST" action="includes/doctorEdit.inc.php">';
          echo "<tr>";
          echo "<td>" . '<input type="text" name="id" value="' . $row['numEmployee'] . '" readonly>' . "</td>";
          echo "<td>" . '<input type="text" name="lastname" value="' . $row['adminSurname'] . '">' . "</td>";
          echo "<td>" . '<input type="text" name="name" value="' . $row['adminName'] . '">' . "</td>";
          echo "<td>" . '<input type="text" name="username" value="' . $row['adminUsername'] . '">' . "</td>";
          echo "<td>" . '<input type="text" name="birthdate" value="' . $row['birthdate'] . '">' . "</td>";
          echo "<td>" . $row['age'] . "</td>";
          echo "<td>" . '<input type="text" name="email" value="' . $row['email'] . '">' . "</td>";
          echo "</tr>";


        }
        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }


      if (isset($_POST["submit_btn"])) {
        $doctor = $_POST["pid"];
      $result = mysqli_query($conn,"SELECT * FROM admins WHERE numEmployee = '$doctor' ");
    echo "<table class=table table-striped table-sm>
    <tr>
    <th>Addres</th>
    <th>Addres Two</th>
    <th>Town</th>
    <th>Zip Code</th>
    <th>Home Phone</th>
    <th>Personal Phone</th>
    <th>Admin or Not Level</th>

    </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . '<input type="text" name="address" value="' . $row['address'] . '">' . "</td>";
      echo "<td>" . '<input type="text" name="addressTwo" value="' . $row['addressTwo'] . '">' . "</td>";
      echo "<td>" . '
                    <select class="custom-select d-block w-100" name="town" >
                    <option value="' . $row['townPR'] . '">' . $row['townPR'] . '</option>
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
            echo "<td>" . '<input type="text" name="homePhone" value="' . $row['homePhone'] . '">' . "</td>";
            echo "<td>" . '<input type="text" name="phoneNumber" value="' . $row['phoneNumber'] . '">' . "</td>";
            echo "<td>" . '
                          <select class="custom-select d-block w-100" name="access" >
                          <option value="' . $row['accessLevel'] . '">' . $row['accessLevel'] . '</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option></select>' . "</td>";

      echo "</tr>";


    }
    echo "</table>";
    echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
  }

  if (isset($_POST["submit_btn"])) {
    $doctor = $_POST["pid"];
  $result = mysqli_query($conn,"SELECT * FROM admins WHERE numEmployee = '$doctor' ");
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
  $doctor = $_POST["pid"];
$result = mysqli_query($conn,"SELECT * FROM admins WHERE numEmployee = '$doctor' ");
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
echo '<a class="btn btn-primary float-right" href="doctors.php" role="button"><< Go back and Cancel</a>';
echo  '</form><br><br>';
}


  if (isset($_POST["submit_btn"])) {
    $doctor = $_POST["pid"];
  $result = mysqli_query($conn,"SELECT * FROM admins WHERE numEmployee = '$doctor' ");
  echo '<br><h1 class="h2">DISABLE Doctor:</h1>';
  echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
  echo '<form method="POST" action="includes/disAbleDoctor.inc.php">';
  while($row = mysqli_fetch_array($result))
  {
  echo '<input type="hidden" name="id" value="' . $row['numEmployee'] . '">
                <select class="custom-select d-block w-100" name="change" >
                <option value="Enabled">Enable</option>
                <option value="Disabled">Disable</option></select><br>';
  }

   echo '<button class="btn btn-info" type="submit" name="submit">Enable / Disable</button>';
   echo '</form>';
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

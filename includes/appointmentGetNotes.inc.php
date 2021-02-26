<?php
include_once 'sideAP.inc.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a class="btn btn-primary" href="../dashboard.php" role="button"><< Cancel and Go Back!</a>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">


      <?php
      if (isset($_POST["changeR"])) {

        $id = $_POST['id'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

      $result = mysqli_query($conn,"SELECT * FROM appointment
      INNER JOIN admins ON   appointment.doctorId = admins.numEmployee
      INNER JOIN patientProfile ON appointment.patientID = patientProfile.patientID
      WHERE patientProfile.patientID = '$id' AND appointment.appointmentDate = CURDATE()");
      echo '<form method="POST" action="appointmentStatus.inc.php">';
      echo "<table class=table table-striped table-sm>
      <tr>

      <th>Patient</th>
      <th>Appointment Date</th>
      <th>Doctor</th>
      <th>Medic Notes</th>
      <th>Medic Orders</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";

        echo "<td>" .  '<label><input type="hidden" name="id" value="' . $row['patientID'] . '">' . $row['patientName'], " ", $row['patientLastName'] . "</td>";
        echo "<td>" . $row['appointmentDate'] . "</td>";
        echo "<td>" . "Dr ", $row['adminName']," ",  $row['adminSurname'] . "</td>";
        echo "<td>" . '<textarea rows="8" cols="50" name="medicNotes">'. $row['medicNotes'] .'</textarea>' . "</td>";
        echo "<td>" . '<textarea rows="8" cols="50" name="medicOrders">'. $row['medicOrders'] .'</textarea>' . "</td>";

        echo "</tr>";
      }
      echo "</table>";
      echo '<hr style="height:2px;border-width:0;color:gray;background-color:gray">';
    }


    if (isset($_POST["changeR"])) {

      $id = $_POST['id'];

      require_once 'dbh.inc.php';
      require_once 'functions.inc.php';

    $result = mysqli_query($conn,"SELECT * FROM appointment
    INNER JOIN admins ON   appointment.doctorId = admins.numEmployee
    INNER JOIN patientProfile ON appointment.patientID = patientProfile.patientID
    WHERE patientProfile.patientID = '$id' AND appointment.appointmentDate = CURDATE()");
    echo '<form method="POST" action="appointmentStatus.inc.php">';
    echo "<table class=table table-striped table-sm>
    <tr>

    <th>Conditions</th>
    <th>Family Conditions</th>
    <th>Allergies</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";

      echo "<td>" . $row['conditions'] . "</td>";
      echo "<td>" . $row['familyHistory'] . "</td>";
      echo "<td>" . $row['allergies'] . "</td>";

      echo "</tr>";
    }
    echo "</table>";
    echo '<hr style="height:2px;border-width:0;color:gray;background-color:gray">';
    echo '<button class="btn btn-success" type="submit" name="changeR">Save and Continue >></button>';
    echo ' <a class="btn btn-primary float-right" href="../dashboard.php" role="button"><< Cancel and Go Back!</a>';
    echo '</form>';
  }
      ?>


      <?php
      if (isset($_POST["changeB"])) {

        $id = $_POST['id'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

      $result = mysqli_query($conn,"SELECT * FROM appointment
      INNER JOIN admins ON   appointment.doctorId = admins.numEmployee
      INNER JOIN patientProfile ON appointment.patientID = patientProfile.patientID
      WHERE patientProfile.patientID = '$id' AND appointment.appointmentDate = CURDATE()");
      echo '<form method="POST" action="appointmentStatus.inc.php">';
      echo '<h1 class="h2">Move patient back to Pending?</h1>';
      echo "<table class=table table-striped table-sm>
      <tr>

      <th>Patient</th>
      <th>Patient Cellphones</th>
      <th>Appointment Date</th>
      <th>Doctor</th>
      <th>Satus</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";

        echo "<td>" .  '<label><input type="hidden" name="id" value="' . $row['patientID'] . '">' . $row['patientName'], " ", $row['patientLastName'] . "</td>";
        echo "<td>" . " Home Number: ", $row['phoneHome'], '<br>', " Personal Number: ", $row['phonePersonal'] . "</td>";
        echo "<td>" . $row['appointmentDate'] . "</td>";
        echo "<td>" . "Dr ", $row['adminName']," ",  $row['adminSurname'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";

        echo "</tr>";
      }
      echo "</table>";
      echo '<hr style="height:2px;border-width:0;color:gray;background-color:gray">';
      echo '<button class="btn btn-danger" type="submit" name="changeB">Move patient back to Pending >></button>';
      echo ' <a class="btn btn-primary float-right" href="../dashboard.php" role="button"><< Go Back!</a>';
      echo '</form>';
    }

      mysqli_close($conn);
      ?>


      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
              <script src="dashboard.js"></script></body>
      </html>

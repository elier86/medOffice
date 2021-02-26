<?php
include_once 'appointAll.inc.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
        <a class="btn btn-primary float-right" href="../appointmentAll.php" role="button"><< Go back</a>

      </div>

      <hr style="height:2px;border-width:0;color:gray;background-color:gray">


      <?php
      require_once 'dbh.inc.php';

      if (isset($_POST["submit"])) {
        $patient = $_POST["id"];
        $date = $_POST["date"];
      $result = mysqli_query($conn,"SELECT * FROM appointment
      INNER JOIN admins ON   appointment.doctorId = admins.numEmployee
      INNER JOIN patientProfile ON appointment.patientID = patientProfile.patientID
      WHERE patientProfile.patientID =  '$patient' AND appointment.appointmentDate >= CURDATE()  ");
      echo '<form method="POST" action="appointmentStatus.inc.php">';
      echo "<table class=table table-striped table-sm>
      <tr>

      <th>Patient</th>
      <th>Patient Cellphones</th>
      <th>Appointment Date</th>
      <th>Doctor</th>
      <th>Appointment Status</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";

        echo "<td>" .  '<input type="radio" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName'], " ", $row['patientLastName'] . "</td>";
        echo "<td>" . " Home Number: ", $row['phoneHome'], '<br>', " Personal Number: ", $row['phonePersonal'] . "</td>";
        echo "<td>" . '<input type="hidden" name="currentDate" value="' . $row['appointmentDate'] . '"> ' . '<input type="text" name="date" value="' . $row['appointmentDate'] . '">' . "</td>";
        echo "<td>" . '<select class="custom-select d-block w-100" name="doctor" >';
        $innerresult = mysqli_query($conn, "SELECT * FROM admins");
        while ($innerRow = mysqli_fetch_array($innerresult))
        {
        echo '<option value="' . $innerRow['numEmployee'] . '">'. "Dr. " .  $innerRow['adminName'] . " " .  $innerRow['adminSurname'] .' </option>';
      }
        echo "</td>";
        echo "<td>" . '
                     <select class="custom-select d-block w-100" name="status" >
                     <option value="' . $row['status'] . '">' . $row['status'] . '</option>
                     <option value="Pending">Pending</option>
                     <option value="Cancelled">Cancelled</option></select>' . "</td>";

        echo "</tr>";
      }
      echo "</table>";
      echo '<hr style="height:2px;border-width:0;color:gray;background-color:gray">';
      echo  '<button class="btn  float-right btn-success" type="submit" name="edit">Save Changes</button>';
      echo "</form>";
}
      mysqli_close($conn);
      ?>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
              <script src="../dashboard.js"></script></body>
      </html>

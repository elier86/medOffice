<?php
include_once 'appointmentsideSearch.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointments</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">

          </div>
        </div>
      </div>
<!-- aqui iria el calendario -->



<?php

require_once 'includes/dbh.inc.php';

$result = mysqli_query($conn,"SELECT * FROM patientProfile ORDER BY patientLastName ASC");
echo "<table class=table table-striped table-sm>
<tr>
<th>Full Name</th>
<th>Record Number</th>
<th>Appointment Date</th>
<th>Doctor ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo '<form method="POST" action="includes/makeAP.inc.php">';
  echo "<tr>";
  echo "<td>" . $row['patientLastName']," ",  $row['patientName'] .  "</td>";
  echo "<td>" . '<input type="hidden" name="id" value="' . $row['patientID'] . '">'  . $row['patientID'] . "</td>";
  echo "<td>" . '<input type="date" name="date" >' . "</td>";
  echo "<td>" . '<select class="custom-select d-block w-100" name="doctorID" >';
  echo '<option value="">Choose...</option>';

  $innerresult = mysqli_query($conn, "SELECT * FROM admins");
  while ($innerRow = mysqli_fetch_array($innerresult))
  {

     echo '<option value="' . $innerRow['numEmployee'] . '">'. "Dr. " .  $innerRow['adminName'] . " " .  $innerRow['adminSurname'] .' </option>';
  }

echo "</td>";
  echo "<td>" . '<button class="btn btn-primary" type="submit" name="makeAP">Make Appointment</button>' . "</td>";
  echo "</tr>";
  echo '</form>';

}
echo "</table>";
echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyP") {
    echo "<p>No date or doctor was selected!</p>";
  }

}

if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyD") {
    echo "<p>No date or doctor was selected!</p>";
  }

}
?>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

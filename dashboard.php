<?php
include_once 'sidenav.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a class="btn btn-info" href="appointmentAll.php" role="button">View all appointments! &raquo;</a>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
<!-- aqui iria el calendario -->
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Today's Patients</h4>
      </div>
      <div class="card-body">
        <?php
        require_once 'includes/dbh.inc.php';

        $result = mysqli_query($conn,"SELECT * FROM patientProfile INNER JOIN appointment ON patientProfile.patientID = appointment.patientID WHERE appointment.status = 'Pending' AND appointment.appointmentDate = CURDATE() ");
        echo '<form method="POST" action="includes/appointmentGetVital.inc.php">';
        echo "  <ul class=list-unstyled mt-3 mb-4>";


        while($row = mysqli_fetch_array($result))
        {

          echo "<li>" . '<input type="checkbox" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName']," ",  $row['patientLastName'] . '</label>' . "</li>";


        }
        echo "</ul>";
        echo  '<button class="btn btn-success" type="submit" name="changeP">Change Status >></button><br><br>';
        echo  '<button class="btn btn-danger" type="submit" name="changeC">Cancel Appointment</button><br><br>';
        echo '</form>';

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyP") {
            echo "<p>No patient was selected!</p>";
          }

        }


        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyC") {
            echo "<p>No patient was selected!</p>";
          }

        }

        ?>
      </div>
    </div>


    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Vital Signs Ready</h4>
      </div>
      <div class="card-body">
        <?php
        require_once 'includes/dbh.inc.php';
        $result = mysqli_query($conn,"SELECT * FROM patientProfile INNER JOIN appointment ON patientProfile.patientID = appointment.patientID WHERE appointment.status = 'Ready' AND appointment.appointmentDate = CURDATE() ");
        echo '<form method="POST" action="includes/appointmentGetNotes.inc.php">';
        echo "  <ul class=list-unstyled mt-3 mb-4>";


        while($row = mysqli_fetch_array($result))
        {

          echo "<li>" . '<label><input type="checkbox" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName']," ",  $row['patientLastName'] . '</label>' . "</li>";


        }
        echo "</ul>";
        echo  '<button class="btn btn-success" type="submit" name="changeR">Change Status >></button><br><br>';
        echo  '<button class="btn btn-info" type="submit" name="changeB"><< Move back</button>';
        echo  "</form>";

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyB") {
            echo "<p>No patient was selected!</p>";
          }

        }

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyR") {
            echo "<p>No patient was selected!</p>";
          }

        }
        ?>
      </div>
    </div>


    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Done</h4>
      </div>
      <div class="card-body">
        <?php
        require_once 'includes/dbh.inc.php';
        $result = mysqli_query($conn,"SELECT * FROM patientProfile INNER JOIN appointment ON patientProfile.patientID = appointment.patientID WHERE appointment.status = 'Completed' AND appointment.appointmentDate = CURDATE() ");
        echo '<form method="POST" action="includes/appointmentStatus.inc.php">';
        echo "  <ul class=list-unstyled mt-3 mb-4>";


        while($row = mysqli_fetch_array($result))
        {
          echo "<li>" . '<label><input type="checkbox" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName']," ",  $row['patientLastName'] . '</label>' . "</li>";

        }
        echo "</ul>";
        echo  '<button class="btn btn-info" type="submit" name="backR"><< Move back</button>';
        echo  "</form>";

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyBackR") {
            echo "<p>No patient was selected!</p>";
          }

        }

        ?>

      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal">Cancelled Patients</h4>
  </div>
  <div class="card-body">
    <?php
    require_once 'includes/dbh.inc.php';

    $result = mysqli_query($conn,"SELECT * FROM patientProfile
      INNER JOIN appointment ON patientProfile.patientID = appointment.patientID WHERE appointment.status = 'Cancelled' AND appointment.appointmentDate = CURDATE() ");
    echo '<form method="POST" action="includes/appointmentStatus.inc.php">';
    echo "  <ul class=list-unstyled mt-3 mb-4>";

    while($row = mysqli_fetch_array($result))
    {

      echo "<li>" . '<label><input type="checkbox" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName']," ",  $row['patientLastName'] . '</label>' . "</li>";


    }
    echo "</ul>";
    echo  '<button class="btn btn-success" type="submit" name="undo">Undo Cancellation</button><br><br>';
    echo  "</form>";



    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyUndo") {
        echo "<p>No patient was selected!</p>";
      }

    }
    ?>
  </div>
</div>
</div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal">Next Up</h4>
  </div>
  <div class="card-body">
    <?php
    require_once 'includes/dbh.inc.php';

    $result = mysqli_query($conn,"SELECT * FROM appointment
    INNER JOIN admins ON   appointment.doctorId = admins.numEmployee
    INNER JOIN patientProfile ON appointment.patientID = patientProfile.patientID
    WHERE  appointment.appointmentDate > CURDATE() AND appointment.status = 'Pending' ");
    echo '<form method="POST" action="includes/appointmentStatus.inc.php">';
    echo "  <ul class=list-unstyled mt-3 mb-4>";


    while($row = mysqli_fetch_array($result))
    {

      echo "<li>"  . '<label><input type="checkbox" name="id" value="' . $row['patientID'] . '"> ' . $row['patientName'], " ", $row['patientLastName'], " on the ", $row['appointmentDate'], " will be attended by Dr ", $row['adminName']," ",  $row['adminSurname'] . '</label>' . "</li>";


    }
    echo "</ul>";
    echo  '<button class="btn btn-danger" type="submit" name="nextCancel">Cancel Appointment</button>';
    echo  "</form>";



    if (isset($_GET["error"])) {
      if ($_GET["error"] == "nextCancel") {
        echo "<p>No patient was selected!</p>";
      }

    }
mysqli_close($conn);
    ?>
  </div>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

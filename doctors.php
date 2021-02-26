<?php
include_once 'sidenav.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctors:</h1>
        <img src="https://www.flaticon.com/svg/static/icons/svg/607/607414.svg" alt="doctor image" height="80px" width="80px" style="position:absolute; left:160px; top:5px;">

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
<p><a class="btn btn-primary float-right" href="doctorsRegister.php" role="button">Add new doctor &raquo;</a></p>
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
<!-- aqui iria el calendario -->


<div class="table-responsive">
  <?php
  require_once 'includes/dbh.inc.php';
  $result = mysqli_query($conn,"SELECT * FROM admins ORDER BY adminSurname ASC");
  echo "<table class=table table-striped table-sm>
  <tr>

  <th>Last Name</th>
  <th>Name</th>
  <th>Access Level</th>
  <th>Employee Number</th>
  <th>Enable or Disable</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {

    echo "<tr>";

    echo "<td>" . $row['adminSurname'] . "</td>";
    echo "<td>" . $row['adminName'] . "</td>";
    echo "<td>" . $row['accessLevel'] . "</td>";
    echo "<td>" . $row['numEmployee'] . "</td>";
    echo "<td>" . $row['isHidden'] . "</td>";
    echo "<td>" . '<form method="POST" action="doctorEdit.php"><input type="hidden" name="pid" value="' . $row['numEmployee'] . '"><input type="submit" name="submit_btn" value="Update"></form>' . "</td>";
    echo "</tr>";

  }
  echo "</table>";

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "good") {
      echo "<p>Change was successfull!</p>";
    }
  }

  mysqli_close($conn);
  ?>

</div>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<p><a class="btn btn-primary float-right" href="doctorsRegister.php" role="button">Add new doctor &raquo;</a></p>

  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all the fields!</p>";
    }
    elseif ($_GET["error"] == "invalidUsername") {
      echo "<p>Choose a proper username!</p>";
    }
    elseif ($_GET["error"] == "invalidEmail") {
      echo "<p>Choose a proper email!</p>";
  }
  elseif ($_GET["error"] == "passwordMatch") {
    echo "<p>Passwords dont match!</p>";
  }
  elseif ($_GET["error"] == "stmtfailed") {
    echo "<p>Something went wrong, try again!</p>";
}
elseif ($_GET["error"] == "usernametaken") {
  echo "<p>Username already taken!</p>";
}
elseif ($_GET["error"] == "none") {
  echo "<p>Sign Up successfull!</p>";
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

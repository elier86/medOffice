
<?php
include_once 'searchStyle.inc.php';
 ?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Patients:</h1>
        <img class="patientimg" src="https://www.flaticon.com/svg/static/icons/svg/3034/3034882.svg" alt="Patient Image" height="80px" width="80px" style="position:absolute; left:160px; top:5px;" >
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-primary" href="../patients.php" role="button">Go back &raquo;</a>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">


        <?php
        require_once 'dbh.inc.php';



        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM patientProfile WHERE patientID LIKE '%$search%' OR patientLastName LIKE '%$search%' OR patientName LIKE '%$search%' ORDER BY patientLastName ASC";
        $result = mysqli_query($conn, $sql);

        $queryResults = mysqli_num_rows($result);

        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Last Name</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Medical Plan</th>
        <th>Record Number</th>
        </tr>";
          while($row = mysqli_fetch_array($result))
          {
            echo "<tr>";
            echo "<td>" . $row['patientLastName'] . "</td>";
            echo "<td>" . $row['patientName'] . "</td>";
            echo "<td>" . $row['patientGender'] . "</td>";
            echo "<td>" . $row['patientAge'] . "</td>";
            echo "<td>" . $row['medicalPlan'] . "</td>";
            echo "<td>" . $row['patientID'] . "</td>";
            echo "<td>" . '<form method="POST" action="../patientEdit.php"><input type="hidden" name="pid" value="' . $row['patientID'] . '"><input type="submit" name="submit_btn" value="Update"></form>' . "</td>";
            echo "<td>" . '<form method="POST" action="../patientDelete.php"><input type="hidden" name="pid" value="' . $row['patientID'] . '"><input type="submit" name="submit_delete" value="Delete Record"></form>' . "</td>";
            echo "</tr>";
          }

          echo "</table>";



        mysqli_close($conn);
        ?>




    <a class="btn btn-primary" href="../patients.php" role="button">Go back &raquo;</a>
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
  echo "<p>Sign Up successfull!</p>";
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
        <script src="../dashboard.js"></script></body>
</html>

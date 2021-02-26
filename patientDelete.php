
<?php
include_once 'sideSearch.php';
 ?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Patients:</h1>
        <img class="patientimg" src="https://www.flaticon.com/svg/static/icons/svg/3034/3034882.svg" alt="Patient Image" height="80px" width="80px" style="position:absolute; left:160px; top:5px;" >
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        <?php

        echo "Are you sure you want to delete the following record? You can't undo this action!!";

        require_once 'includes/dbh.inc.php';
        if (isset($_POST["submit_delete"])) {
          $patient = $_POST["pid"];
        $result = mysqli_query($conn,"SELECT * FROM patientProfile WHERE patientID = '$patient' ");
        echo "<table class=table table-striped table-sm>
        <tr>
        <th>Record Number</th>
        <th>Last Name</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Age</th>
        <th>Email</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
          echo '<form method="POST" action="includes/patientDelete.inc.php">';
          echo "<tr>";
          echo "<td>" . '<input type="text" name="id" value="' . $row['patientID'] . '" readonly>' . "</td>";
          echo "<td>" . $row['patientLastName'] . "</td>";
          echo "<td>" . $row['patientName'] . "</td>";
          echo "<td>" . $row['patientGender'] . "</td>";
          echo "<td>" . $row['patientBirthdate'] . "</td>";
          echo "<td>" . $row['patientAge'] . "</td>";
          echo "<td>" . '<input type="text" name="email" value="' . $row['email'] . '">' . "</td>";
          echo "</tr>";


        }
        echo "</table>";
        echo '<hr style="width:100%;text-align:left;margin-left:0;color:gray;background-color:gray;height:5px">';
      }


      echo "Remember, this action is final!!!";

        mysqli_close($conn);
        ?>
        <br>
<button class="btn btn-danger" type="submit" name="submit">Confirm</button>
        </form>



  <a class="btn btn-warning" href="patients.php" role="button"><< Cancel </a>

  </div>

    </main>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

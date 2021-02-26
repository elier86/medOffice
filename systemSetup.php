<?php
include_once 'sidenav.php';
 ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">System Setup</h1>
        <img src="https://www.flaticon.com/svg/static/icons/svg/762/762634.svg" alt="nurse image" height="80px" width="80px" style="position:absolute; left:230px; top:5px;">
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
        
          </div>
        </div>
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
<!-- aqui iria el calendario -->

<h2>Manage your system</h2>
<div class="table-responsive">
  <table class="table table-bordered success">
      <thead>
        <tr >
          <th >Company Name</th>
          <td>medOffice</td>
        </tr>
        <tr>
          <th class="info">Company Address</th>
          <td>Alturas de Mayaguez, PR</td>
        </tr>
        <tr>
          <th class="info">Contact Information</th>
          <td>555-555-5555
            <br>
          medOffice@email.com</td>

        </tr>
        <tr>
          <th class="info">Company Webpage</th>
          <td>www.medoffice.com</td>
        </tr>
        <tr >
          <th colspan="1"></th>
          <td>
            <input type="button" name="editBtn" value="Edit info" class="btn btn-primary">
            <input type="button" id="approve_btn" class="btn btn-success" name="approve_btn" value="Save"></td>

        </tr>
      </thead>

    </table>
</div>

    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

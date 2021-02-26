<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>medOffice</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://www.flaticon.com/svg/static/icons/svg/822/822111.svg" alt="" width="72" height="72">
    <h2>Register a Nurse</h2>
    <p class="lead">Please, fill out the form below.</p>
  </div>
    </div>
    <div class="col-md-8 order-md-1">

      <h4 class="mb-3">Personal Information</h4>

      <form class="needs-validation" action="includes/registerNurse.inc.php" method="post">
        <div class="row">

          <div class="col-md-6 mb-3">
            <label for="lastName">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" >
              </div>

              <div class="col-md-6 mb-3">
                <label for="password">Last Name</label>
                <input type="text" class="form-control" name="lastName" placeholder="Last Name" >
              </div>
        </div>



        <div class="mb-3">
          <label for="age">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" >

        </div>

        <div class="mb-3">
          <label for="name">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" name="password" placeholder="Password">

          </div>
        </div>

        <div class="mb-3">
          <label for="text">Re-enter password </label>
          <input type="password" class="form-control" name="passwordRepeat" placeholder="Re-enter password">
        </div>


        <div class="mb-3">
          <label for="email">Email<span class="text-muted"></span></label>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="row">
        <div class="col-md-6  mb-3">
          <label for="age">Birthdate</label>
          <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" >
        </div>

        <div class="col-md-6  mb-3">
          <label for="age">SSN</label>
          <input type="text" class="form-control" name="ssn" placeholder="SSN" >
        </div>
          </div>

        <div class="mb-3">
          <label for="age">Address</label>
          <input type="text" class="form-control" name="addressone" placeholder="Address" >
        </div>

        <div class="mb-3">
          <label for="age">Address (Floor, Suit, House Number...)</label>
          <input type="text" class="form-control" name="addresstwo" placeholder="Address" >
        </div>

        <div class="row">
        <div class="col-md-6 mb-3">
          <label for="address">Zip Code</label>
          <input type="text" class="form-control"  placeholder="Zip Code" name="zip" >
        </div>

        <div class="col-md-6 mb-3">

          <?php
          include_once 'cities.php';
           ?>
        </div>
      </div>

        <div class="row">
        <div class="col-md-5 mb-3">
          <label for="age">Home Phone Number</label>
          <input type="text" class="form-control" name="phoneHome" placeholder="Phone Number" >
        </div>

        <div class="col-md-5 mb-3">
          <label for="age">Personal Phone Number</label>
          <input type="text" class="form-control" name="phonePersonal" placeholder="Phone Number" >
        </div>
      </div>

        <div class="py-5 text-center">
        <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2>Emergency Contact</h2>
        <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" name="emergencyName"  placeholder="Name">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="emergencyLastName" placeholder="Last Name">
          </div>
        </div>

        <div class="row">
        <div class="col-md-4 mb-3">
          <label for="status">Relationship</label>
          <select class="custom-select d-block w-100" name="emergencyRelationship" >
            <option value="">Choose...</option>
            <option value="Spouse/Husband">Spouse/Husband</option>
            <option value="Son/Daughter">Son/Daughter</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label for="ocuppation">Email</label>
          <input type="text" class="form-control" name="emergencyEmail"  placeholder="Email">
        </div>
        </div>


      <div class="row">
      <div class="col-md-6 mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control"  placeholder="Address" name="emergencyAddress" >
      </div>

      <div class="col-md-6 mb-3">
        <label for="address">Address (Floor, Suit, House Number...)</label>
        <input type="text" class="form-control"  placeholder="Address" name="emergencyAddresstwo" >
      </div>
    </div>

    <div class="row">
    <div class="col-md-6 mb-3">
      <label for="address">Zip Code</label>
      <input type="text" class="form-control"  placeholder="Zip Code" name="emergencyZip" >
    </div>

    <div class="col-md-6 mb-3">

      <?php
      include_once 'emergencyCity.php';
       ?>
    </div>
  </div>

      <div class="row">
      <div class="col-md-5 mb-3">
        <label for="phone">Phone number</label>
        <input type="text" class="form-control" placeholder="Home number" name="emergencyCellphone" >
      </div>
      </div>

      <div class="row">
      <div class="col-md-6 mb-3">
        <label for="address">Comments</label>
        <textarea name="comments" rows="8" cols="80"></textarea>
      </div>

        </div>
        </div>
        <button class="btn btn-success  btn-block btn-lg" type="submit" name="submit">Save and Register</button>
      <p><a class="btn btn-danger btn-block btn-lg" href="nurses.php" role="button">Cancel</a></p>

      </form>




  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 medOffice</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>

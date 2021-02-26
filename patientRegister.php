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
    <img class="d-block mx-auto mb-4" src="https://www.flaticon.com/svg/static/icons/svg/3034/3034882.svg" alt="" width="72" height="72">
    <h2>Register a Patient</h2>
    <p class="lead">Please, fill out the form below.</p>
    <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">

    <h2>Demographic Information</h2>
  </div>
    </div>
    <div class="col-md-8 order-md-1">

      <form class="needs-validation" action="includes/registerPatient.inc.php" method="post">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Name">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
          </div>
        </div>

        <div class="row">
        <div class="col-md-5 mb-3">
          <label for="birthdate">Birthdate <span class="text-muted"></span></label>
          <input type="date" class="form-control" size="30" name="birthdate" placeholder="">
        </div>

        <div class="col-md-6 mb-3">
          <label for="ocuppation">Email</label>
          <input type="text" class="form-control" name="email"  placeholder="Email">
        </div>


        <div class="col-md-6 mb-3">
          <label for="ocuppation">Occupation</label>
          <input type="text" class="form-control" name="occupation"  placeholder="Occupation">
        </div>
      </div>

      <div class="row">
      <div class="col-md-6 mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control"  placeholder="Address" name="addressone" >
      </div>

      <div class="col-md-6 mb-3">
        <label for="address">Address (Floor, Suit, House Number...)</label>
        <input type="text" class="form-control"  placeholder="Address" name="addresstwo" >
      </div>
    </div>

    <div class="row">

      <div class="col-md-6 mb-3">

        <?php
        include_once 'cities.php';
         ?>
      </div>


    <div class="col-md-6 mb-3">
      <label for="address">Zip Code</label>
      <input type="text" class="form-control"  placeholder="Zip Code" name="zip" >
    </div>


  </div>

      <div class="row">
      <div class="col-md-5 mb-3">
        <label for="phone">Phone number</label>
        <input type="text" class="form-control" placeholder="Home number" name="phoneHome" >
      </div>

      <div class="col-md-5 mb-3">
        <label for="phone">Phone number</label>
        <input type="text" class="form-control" placeholder="Personal number" name="phonePersonal" >
      </div>
      </div>

    <div class="row">
        <div class="col-md-5 mb-3">
          <label for="SSN">SSN<span class="text-muted">(Last 4 digits only)</span></label>
          <input type="text" class="form-control" name="ssn"  placeholder="SSN">
        </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Gender</label>
            <select class="custom-select d-block w-100" name="gender">
              <option value="">Choose...</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="col-md-4 mb-3">
            <label for="state">Ethnicity</label>
            <select class="custom-select d-block w-100" name="ethnicity" >
              <option value="">Choose...</option>
              <option value="American">American</option>
              <option value="Hispanic or Latino">Hispanic or Latino</option>
              <option value="Afroamerican">Afroamerican</option>
              <option value="White">White</option>
              <option value="Asian">Asian</option>
            </select>
          </div>

          <div class="col-md-4 mb-3">
            <label for="status">Marital Status</label>
            <select class="custom-select d-block w-100" name="maritalStatus" >
              <option value="">Choose...</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>

          <div class="col-md-4 mb-3">
            <label for="plan">Medical Plan</label>
            <select class="custom-select d-block w-100" name="medicalPlan" >
              <option value="">Choose...</option>
              <option value="MMM">MMM</option>
              <option value="MCS">MCS</option>
              <option value="SSS">SSS</option>
              <option value="Humana">Humana</option>
              <option value="Reforma">Reforma</option>
              <option value="First Medical">First Medical</option>
              <option value="PMC">PMC</option>
              <option value="Private">Private</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for="zip">Religion</label>
            <input type="text" class="form-control" name="religion"  placeholder="Religion" >
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

              <?php
              include_once 'emergencyCity.php';
               ?>
            </div>

          <div class="col-md-6 mb-3">
            <label for="address">Zip Code</label>
            <input type="text" class="form-control"  placeholder="Zip Code" name="emergencyZip" >
          </div>


        </div>

            <div class="row">
            <div class="col-md-5 mb-3">
              <label for="phone">Phone number</label>
              <input type="text" class="form-control" placeholder="Home number" name="emergencyCellphone" >
            </div>
            </div>



        <div class="py-5 text-center">
        <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
        <h2>Medical History</h2>
        <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
        </div>


        <table class="table table-striped table-sm">
          <thead>
            <tr>
      <th>  <h4 class="mb-3">Conditions</h4> </th>
      <th><h4 class="mb-3">Family History</h4></th>
      <th><h4 class="mb-3">Allergies</h4></th>
            </tr>
          </thead>

          <tbody>
            <tr>
          <td>
          <input type="checkbox" name="conditions[]" value="Diabetes"> Diabetes <br/>
          <input type="checkbox" name="conditions[]" value="Carpal Tunnel"> Carpal Tunnel <br/>
          <input type="checkbox" name="conditions[]" value="High Pressure "> High Pressure <br/>
          <input type="checkbox" name="conditions[]" value="Low Pressure"> Low  Pressure <br/>
          <input type="checkbox" name="conditions[]" value="Joint Problems"> Joint Problems <br/>
          <input type="checkbox" name="conditions[]" value="Respiratory Problem"> Respiratory Problems <br/>
          <input type="checkbox" name="conditions[]" value="Spinal Problem"> Spinal Problem <br/>
          <input type="checkbox" name="conditions[]" value="Arthritis"> Arthritis <br/>
          <input type="checkbox" name="conditions[]" value="Circulatory Problems"> Circulatory Problems <br/>
          <input type="checkbox" name="conditions[]" value="Heart/Cardiac Problems"> Heart/Cardiac Problems <br/>
          <input type="checkbox" name="conditions[]" value="Skeletal Trauma"> Skeletal Trauma <br/>
          <input type="checkbox" name="conditions[]" value="Varicose Veins"> Varicose Veins <br/>
          <input type="checkbox" name="conditions[]" value="Blood Clots"> Blood Clots <br/>
          <input type="checkbox" name="conditions[]" value="Muscle Injuries"> Muscle Injuries <br/>
          <input type="checkbox" name="conditions[]" value="Skin Problem"> Skin Problems <br/>
          <input type="checkbox" name="conditions[]" value="Abdominal Pain"> Abdominal Pain <br/>
          <input type="checkbox" name="conditions[]" value="Digistive Problems"> Digestive Problems <br/>
          <input type="checkbox" name="conditions[]" value="Fatigue"> Fatigue <br/>
          <input type="checkbox" name="conditions[]" value="Depression"> Depression <br/>
          <input type="checkbox" name="conditions[]" value="Anxiety"> Anxiety <br/>
          <input type="checkbox" name="conditions[]" value="Chest Pain"> Chest Pain <br/>

          </td>

          <td>
            <input type="checkbox" name="familyConditions[]" value="Diabetes"> Diabetes <br/>
            <input type="checkbox" name="familyConditions[]" value="Carpal Tunnel"> Carpal Tunnel <br/>
            <input type="checkbox" name="familyConditions[]" value="High Pressure "> High Pressure <br/>
            <input type="checkbox" name="familyConditions[]" value="Low Pressure"> Low  Pressure <br/>
            <input type="checkbox" name="familyConditions[]" value="Joint Problems"> Joint Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Respiratory Problem"> Respiratory Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Spinal Problem"> Spinal Problem <br/>
            <input type="checkbox" name="familyConditions[]" value="Arthritis"> Arthritis <br/>
            <input type="checkbox" name="familyConditions[]" value="Circulatory Problems"> Circulatory Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Heart/Cardiac Problems"> Heart/Cardiac Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Skeletal Trauma"> Skeletal Trauma <br/>
            <input type="checkbox" name="familyConditions[]" value="Varicose Veins"> Varicose Veins <br/>
            <input type="checkbox" name="familyConditions[]" value="Blood Clots"> Blood Clots <br/>
            <input type="checkbox" name="familyConditions[]" value="Muscle Injuries"> Muscle Injuries <br/>
            <input type="checkbox" name="familyConditions[]" value="Skin Problem"> Skin Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Abdominal Pain"> Abdominal Pain <br/>
            <input type="checkbox" name="familyConditions[]" value="Digistive Problems"> Digestive Problems <br/>
            <input type="checkbox" name="familyConditions[]" value="Fatigue"> Fatigue <br/>
            <input type="checkbox" name="familyConditions[]" value="Depression"> Depression <br/>
            <input type="checkbox" name="familyConditions[]" value="Anxiety"> Anxiety <br/>
            <input type="checkbox" name="familyConditions[]" value="Chest Pain"> Chest Pain <br/>
          </td>

          <td>
            <input type="checkbox" name="allergies[]" value="Aspirin"> Aspirin <br/>
            <input type="checkbox" name="allergies[]" value="Penniscillin"> Penniscillin <br/>
            <input type="checkbox" name="allergies[]" value="Iodine"> Iodine <br/>
            <input type="checkbox" name="allergies[]" value="Sulfa"> Sulfa <br/>
            <input type="checkbox" name="allergies[]" value="Insulin"> Insulin <br/>
          </td>

          </tr>
    </tbody>

  </table>
          <div class="mb-3">
            <label for="phone">Other conditons</label>
            <input type="text" class="form-control" id="" placeholder="Conditions" name="otherConditions">
          </div>

          <div class="mb-3">
            <label for="phone">Other family history</label>
            <input type="text" class="form-control" id="" placeholder="Family Conditions" name="otherFamilyConditions">
          </div>

          <div class="mb-3">
            <label for="phone">Other allergies</label>
            <input type="text" class="form-control" id="" placeholder="Allergies" name="otherAllergies">
          </div>

          <div class="py-5 text-center">
          <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
          <h2>Massage History</h2>
          <hr class="mb-4" style="height:2px;border-width:0;color:gray;background-color:gray">
          </div>

          <div class="row">
          <div class="col-md-4 mb-3">
            <label for="state">Have you ever recieved a professional massage?</label>
            <select class="custom-select d-block w-100" name="massage" >
              <option value="">Choose...</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

        </div>

          <div class="mb-3">
            <label for="phone">What type of massage?</label>
            <input type="text" class="form-control" id="" placeholder="Massage" name="massageType">
          </div>

          <div class="mb-3">
            <label for="phone">Name of massage therapist</label>
            <input type="text" class="form-control" id="" placeholder="Name of Therapist" name="massageTherapist">
          </div>

          <div class="mb-3">
            <label for="phone">Main reason for getting a massage</label>
            <input type="text" class="form-control" id="" placeholder="Reason" name="massageReason">
          </div>

          <div class="row">
          <div class="col-md-4 mb-3">
            <label for="state">Do you workout regularly?</label>
            <select class="custom-select d-block w-100" name="" >
              <option value="">Choose...</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
            <div class="col-md-6 mb-3">
              <label for="address">If yes, please describe</label>
              <input type="text" class="form-control"  placeholder="Workout" name="massageWorkout" >
            </div>
        </div>

        <div class="row">
        <div class="col-md-4 mb-3">
          <label for="state">Do you eat a balanced diet?</label>
          <select class="custom-select d-block w-100" name="massageDiet" >
            <option value="">Choose...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>

        <div class="col-md-4 mb-3">
          <label for="state">Rate your level of stress</label>
          <select class="custom-select d-block w-100" name="massageStress" >
            <option value="">Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
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
<p><a class="btn btn-danger btn-block btn-lg" href="patients.php" role="button">Cancel</a></p>
      </form>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
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

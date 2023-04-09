<?php
 //we need session for the log in thingy XD 
include("../includes/functions.php");
include ("header.php")
?>

      <section class="home-section ms-3">
<!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
<div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
 <div class="card-body">
 <div class="page-breadcrumb border-bottom border-secondary">
                <div class="row align-items-center">
                    <div class="col-5">
                      <div class="d-flex align-items-start">
                        <ion-icon class="me-2" size="large" style="color:#FF8B13;" name="git-pull-request-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Teacher's Appointment Request</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="studDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment Request</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          </div>

    <div class="card rounded-0 border-0 shadow mt-3 p-3">
      <div class="card-body">
        
        <div class="container pt-2">
          <form method="post" action="teachers_appointment_query.php">
            <h3 class=" mb-3 font-weight-normal border-bottom border-secondary">Fill out the following form</h3>
            <label for="inputEmail" class="sr-only">Employee ID:</label>
            <input name="stud_emp_id" type="number" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only">Firstname:</label>
            <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only mt-2">Lastname:</label>
            <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
            <label for="inputEmail" class="sr-only mt-2">Referral:</label>
            <input name="referral" type="text" id="inputEmail" class="form-control bg-light text-muted" placeholder="Year & Section" value="Guidance" readonly>
            <label for="inputEmail" class="sr-only mt-3">State Reason/Concern:</label>
            <select class="form-select-sm " name="concern" id="validationCustom04" required>
              <option selected disabled value="">Select...</option>
              <option><a class=" dropdown-item option" value="Bullying">Bullying</a></option>
              <option><a class=" dropdown-item option" value="Fear">Fear</a></option>
              <option><a class=" dropdown-item option" value="Depression">Depression</a></option>
              <option><a class=" dropdown-item option" value="Mental Health">Mental Health</a></option>
              <option><a class=" dropdown-item option" value="Lying">Lying</a></option>
              <option><a class=" dropdown-item option" value="Stressed">Stressed</a></option>
            </select><br>
            <button name="submit" class="btn btn-primary end-0 mt-3 " value="submit" type="submit">Request</button>
          </form>
        </div>
      </div>
    </div>
    


<!--------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->

      </section>
      <?php
      include 'footer.php';
      ?>
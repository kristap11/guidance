<?php
 //we need session for the log in thingy XD 
include("includes/functions.php");
include ("assets/body/upper.php")
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
                        <h4 class="text-dark fw-bold">Appointment Request</h4>
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
          <form method="post" action="student/appointment_query.php">
            <h3 class=" mb-3 font-weight-normal border-bottom border-secondary">Fill out the following form</h3>
            <input name="status" type="hidden" id="inputEmail" class="form-control" value="pending" required autofocus>
            <label for="inputEmail" class="sr-only">Student Number:</label>
            <input name="stud_emp_id" type="text" id="inputEmail" class="form-control" placeholder="Student Number" required autofocus>
            <label for="inputEmail" class="sr-only">Firstname:</label>
            <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only mt-2">Lastname:</label>
            <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
            <label for="inputEmail" class="sr-only mt-3">Course:</label>
            <select class="form-control" name="course" id="validationCustom04" required>
              <option selected disabled value="">Select...</option>
              <option><a class=" dropdown-item option" value="BS Information Technology">BS Information Technology</a></option>
              <option><a class=" dropdown-item option" value="BS Hospitality Management">BS Hospitality Management</a></option>
              <option><a class=" dropdown-item option" value="BS Office Administration">BS Office Administration</a></option>
              <option><a class=" dropdown-item option" value="BS Business Administration">BS Business Administration</a></option>
              <option><a class=" dropdown-item option" value="BS Criminology">BS Criminology</a></option>
              <option><a class=" dropdown-item option" value="Bachelor of Elementary Education">Bachelor of Elementary Education</a></option>
              <option><a class=" dropdown-item option" value="Bachelor of Secondary Education">Bachelor of Secondary Education</a></option>
              <option><a class=" dropdown-item option" value="BS Computer Engineering">BS Computer Engineering</a></option>
              <option><a class=" dropdown-item option" value="BS Tourism">BS Tourism</a></option>
              <option><a class=" dropdown-item option" value="BS Entrepreneurship">BS Entrepreneurship</a></option>
              <option><a class=" dropdown-item option" value="BS Accounting Information System">BS Accounting Information System</a></option>
              <option><a class=" dropdown-item option" value="BS Psychology">BS Psychology</a></option>
              <option><a class=" dropdown-item option" value="BS Information Science">BS Information Science</a></option>
            </select>
            <label for="inputEmail" class="sr-only mt-2">Year & Section:</label>
            <input name="year_section" type="text" id="inputEmail" class="form-control" placeholder="Year & Section" required autofocus>
            <label for="inputEmail" class="sr-only mt-2">Referral:</label>
            <input name="referral" type="text" id="inputEmail" class="form-control bg-light text-muted" placeholder="...." value="Guidance" readonly>
            <label for="inputEmail" class="sr-only mt-3">State Reason/Concern:</label>
            <select class="form-select " name="concern" id="validationCustom04" required>
              <option selected disabled value="">Select...</option>
              <option><a class=" dropdown-item option" value="Bullying">Bullying</a></option>
              <option><a class=" dropdown-item option" value="Fear">Fear</a></option>
              <option><a class=" dropdown-item option" value="Depression">Depression</a></option>
              <option><a class=" dropdown-item option" value="Mental Health">Mental Health</a></option>
              <option><a class=" dropdown-item option" value="Lying">Lying</a></option>
              <option><a class=" dropdown-item option" value="Stressed">Stressed</a></option>
            </select>
            <button name="submit" class="btn btn-primary end-0 mt-3 " value="submit" type="submit">Request</button>
          </form>
        </div>
      </div>
    </div>
    


<!--------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->

      </section>
      <?php
      include 'assets/body/lower.php';
      ?>
<?php
    include 'header.php';
?>

<section class="home-section ms-3 " style="background-color:#edf2f9;">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#1C82AD" name="people-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Profiling</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../profiling.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profiling</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

<div class="card rounded-0 border-0 shadow">
  <div class="card-body">
  <div id="regiration_form" action="add_profile_query.php"  method="post">
  <fieldset class="container text-dark p-3">
  <div class="container pt-2">
          <form method="post" action="appointment_query.php">
          <div class="d-flex align-items-start">
                        <ion-icon class="me-2" size="large" style="color:#FF8B13;" name="git-pull-request-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Student's Appointment Request</h4>
                      </div>
            <h5 class=" mt-3 mb-3 font-weight-normal border-bottom border-secondary">Fill out the following form</h5>
            <input name="status" type="hidden" id="inputEmail" class="form-control" value="pending" required autofocus>
            <label for="inputEmail" class="sr-only">Student Number:</label>
            <input name="stud_emp_id" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only">Firstname:</label>
            <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only mt-2">Lastname:</label>
            <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
            <label for="inputEmail" class="sr-only mt-3">Course:</label>
            <select class="form-select-sm " name="course" id="validationCustom04" required>
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
            </select><br>
            <label for="inputEmail" class="sr-only mt-2">Year & Section:</label>
            <input name="year_section" type="number" id="inputEmail" class="form-control" placeholder="Year & Section" required autofocus>
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
      <button type="button" name="password" class="next btn btn-sm btn-primary"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button> 
  </fieldset>
  <fieldset class="container p-3 text-dark">
  <form method="post" action="teachers_appointment_query.php">
  <div class="d-flex align-items-start">
                        <ion-icon class="me-2" size="large" style="color:#FF8B13;" name="git-pull-request-sharp"></ion-icon>
                        <h5 class="text-dark fw-bold">Employee's Appointment Request</h5>
                      </div>
            <h4 class="mt-3 mb-3 font-weight-normal border-bottom border-secondary">Fill out the following form</h3>
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

  <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
   </fieldset>
</div>
  </div>
</div>

  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<?php
  include 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>
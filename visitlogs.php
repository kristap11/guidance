<?php
  include 'assets/body/upper.php';
?>

<section class="home-section ms-3" style="background-color:#edf2f9;">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#735F32"  name="log-in-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Visit Log</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Visit Logs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>


      <div class="card p-3 border-0 overflow-auto mb-3 bg-light rounded-0 shadow" style="height:690px;">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#visit"><ion-icon class="me-1" name="person-add-sharp"></ion-icon>
              Add Visitors
            </button>
    <div class="mt-3">
         <table id="visit_log" class="table table-striped border-dark table-bordered">
            <thead>
              <tr>
                <th scope="col">Student Number</th>
                <th scope="col">Student Name</th>
                <th scope="col">Visit Purpose</th>
                <th scope="col">Course/Year/Section</th>
                <th scope="col">Date and Time</th>
              </tr>
            </thead>
         <tbody>
         <?php
            require 'includes/sms_db.php';
            $rows = mysqli_query($conn, "SELECT * FROM guidance_visit_log ORDER BY date_time DESC")
        ?>
          <?php foreach ($rows as $row) : ?>
      <tr>
      <td><?php echo $row["stud_id"]; ?></td>
        <td><?php echo $row["fname"];echo '&nbsp';  echo $row["lname"];?></td>
        <td><?php echo $row["visit_purpose"]; ?></td>
        <td><?php echo $row["course"];echo '&nbsp'; echo $row["year_section"];?></td>
        <td><?php echo $row["date_time"];  ?></td>


      </tr>
      <?php endforeach; ?>
          </tbody>
        </table>    
        </div>
      </div>
    </div>

<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<!----------- Add visitor ---------------->
<form action="pages/visit_logs/visit_logs_query.php" method="post">
<div class="modal fade" id="visit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <ion-icon class="me-1" size="large" name="person-add-sharp"></ion-icon>
        <h1 class="modal-title ms-2 fs-5" id="exampleModalLabel">Add Visitor</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <label>Student Number</label>
          <input type="text" id="stud_id" name="stud_id" class="form-control" required autofocus>
          <label>First Name</label>
          <input type="text" id="fname" name="fname" class="form-control" required autofocus>
          <label>last Name</label>
          <input type="text" id="lname" name="lname" class="form-control" required autofocus>
          <label>Course</label>
          <input type="text" id="course" name="course" class="form-control" required autofocus>
          <label>Year & Section</label>
          <input type="text" id="year_section" name="year_section" class="form-control" required autofocus>
          <div class="mt-2">
          <label>Visit Purpose:</label>
            <select class="form-select-sm" name="visit_purpose" required>
              <option selected disabled value="">Choose...</option>
              <option><a class=" dropdown-item option" value="Excuse Letter">Excuse Letter</a></option>
              <option><a class=" dropdown-item option" value="Cert. of Candidacy">Cert. of Candidacy</a></option>
              <option><a class=" dropdown-item option" value="Clearance">Clearance</a></option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Cancel</button>
        <button type="submit" value="submit" name="submit" class="btn btn-primary"><ion-icon class="me-1" name="add-circle-sharp"></ion-icon>Add</button>
      </div>
    </div>
  </div>
</div>
</form>





<?php
  include 'assets/body/lower.php';
?>

<script>  
 $(document).ready(function(){  
      $('#visit_log').DataTable();  
 });  
 </script>  
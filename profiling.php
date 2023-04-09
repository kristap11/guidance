<?php
  include 'includes/sms_db.php';
  require 'assets/body/upper.php';
?>
<section class="home-section ms-3" style="background-color:#edf2f9;">
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
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profiling</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
 
  <div class="card p-3 border-0 overflow-auto mb-3 bg-light rounded-0 shadow" style="height:780px;">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
          <div class="dropdown d-flex align-items-center">
            <a class="btn btn-primary ms-1" role="button" href="pages/profiling/add_profile.php"><ion-icon class="me-1" name="person-add-sharp"></ion-icon>Add</a>

          </div>   
        </div>  
    <table id="profiling" class="table table-striped border-dark table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year & Section</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
    <?Php
    $query="SELECT * FROM guidance_profiling";
    if($stmt=$conn->query($query)){
      while ($row=$stmt->fetch_array()) {
      echo "
      <tr>
        <td>$row[stud_id]</td>
        <td>$row[fname]$row[lname]</td>
        <td>$row[course]</td>
        <td>$row[year_section]</td>
        <td>$row[status]</td>
        <td>
          <a class='btn btn-primary' type='button' href='pages/profiling/viewStudent.php?stud_id=$row[stud_id]'><ion-icon class='me-1' name='eye-sharp'></ion-icon>View</a>

          <a class='btn btn-warning' type='button' href='pages/services/indv_counseling.php?stud_id=$row[stud_id]'><ion-icon class='me-1' name='create-sharp'></ion-icon>Start Counseling</a>
        
          </td>
      </tr>";
      }

    }
    ?>
    <tbody>
    </table>
    </div>
  </div>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>



<?php
  include 'assets/body/lower.php';
?>


<script>  
 $(document).ready(function(){  
      $('#profiling').DataTable();  
 });  
 </script>  
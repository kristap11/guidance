<?php

include 'assets/body/upper.php';

?>
<section class="home-section ms-3">
  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark mb-3">
        <div class="row align-items-center">
          <div class="col-5">
            <div class="d-flex align-items-start">
              <ion-icon class="me-2" size="large" style="color:#C58940" name="school-sharp"></ion-icon>
              <h4 class="text-dark fw-bold">Scholarship</h4>
            </div>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Acad</li>
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
      <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><ion-icon class="me-1" name="folder-sharp"></ion-icon>Add Candidate</button>

      <div class="mt-3">
        <table id="acad" class="table mt-3 table-striped table-bordered border-dark">
          <thead>
            <th>student_id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>middle_name</th>
            <th>section</th>
            <th>type_of_honor</th>
            <th>overall_average</th>
            <th>reviewed_date</th>
            <th>evaluated_by</th>
            <th>school_year</th>
          </thead>
          <tbody>
          <?php
          require 'includes/sms_db.php';
          $query = "SELECT * FROM guidance_academic";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>

            <tr>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['middle_name'] ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['type_of_honor']; ?></td>
                <td><?php echo $row['overall_average']; ?></td>
                <td><?php echo $row['reviewed_date']; ?></td>
                <td><?php echo $row['evaluated_by']  ?></td>
                <td><?php echo $row['school_year']; ?></td>
                <!-- <td><a class="btn btn-primary" href="scholarship.php?file_id=<?php echo $row['id'] ?>" role="button"><ion-icon class="me-1" name="download-outline"></ion-icon>Download</a></td> -->
              </tr>
          <?php
          }

          ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
</section>

<!-- Insert File -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">INPUT INFORMATION HERE:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="pages/acad/acad_query.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <label for="message-text" class="pt-3"><strong>Student ID:</strong></label>
            <div class="pb-2">
              <input class="form-control" type="text" placeholder="Student ID" name="stud_id" required>
            </div>
            <div class="col-md-4 ml-auto">
              <label for="message-text" class="pt-3"><strong>Lastname:</strong></label>
              <input class="form-control" type="text" placeholder="Lastname" name="last_name" required>
            </div>
            <div class="col-md-4 ml-auto">
              <label for="message-text" class="pt-3"><strong>Firstname:</strong></label>
              <input class="form-control" type="text" placeholder="Firstname" name="first_name" required>
            </div>
            <div class="col-md-4 ml-auto">
              <label for="message-text" class="pt-3"><strong>Middlename:</strong></label>
              <input class="form-control" type="text" placeholder="Middlename" name="mid_name" required>
            </div>
            <div class="col-md-6 ml-auto">
            <label for="message-text" class="pt-3"><strong>Type of honor:</strong></label>
            <select class="form-control" name="honor" id="validationCustom04" required>
                <option selected disabled value="">Type of honor</option>
                <option value="cum_laude">cum laude</option>
                <option value="magna_cum_laude">magna cum laude</option>
                <option value="summa_cum_laude">summa cum laude</option>
              </select>
            </div>
            <div class="col-md-4 ml-auto">
              <label for="message-text" class="pt-3"><strong>Section<:</strong></label>
              <input class="form-control" type="text" placeholder="Section" name="section" required>
            </div>
            <div class="col-md-5 ml-auto">
              <label for="message-text" class="pt-3"><strong>Overall Average:</strong></label>
              <input class="form-control" type="text" placeholder="Overall Average" name="over_all" required>
            </div>
            <div class="col-md-5 ml-auto">
              <label for="message-text" class="pt-3"><strong>Reviewed Date:</strong></label>
              <input class="form-control" type="date" placeholder="Reviewed Date" name="review" required>
            </div>
            <div class="col-md-6 ml-auto">
              <label for="message-text" class="pt-3"><strong>Evaluated By:</strong></label>
              <input class="form-control" type="form" placeholder="Evaluated By" name="eval_by" required>
            </div>
            <div class="col-md-4 ml-auto">
              <label for="message-text" class="pt-3"><strong>School Year:</strong></label>
              <input class="form-control" type="form" placeholder="School Year" name="school_year" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon class="me-1" name="close-circle-sharp"></ion-icon>Close</button>
          <button type="submit" name="add_candidate" class="btn btn-primary"><ion-icon class="me-1" name="checkmark-circle-sharp"></ion-icon>Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include 'assets/body/lower.php';
?>


<script>
  $(document).ready(function() {
    $('#acad').DataTable();
  });
</script>
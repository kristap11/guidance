<?php
include 'includes/sms_db.php';
include 'assets/body/upper.php';
?>
<section class="home-section ms-3 p-3">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
        <div class="row align-items-center">
          <div class="col-5">
            <div class="d-flex align-items-start">
              <ion-icon class="me-2" size="large" style="color:#A7727D" name="person-circle-sharp"></ion-icon>
              <h4 class="text-dark fw-bold">Individual Counseling</h4>
            </div>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Individual Counseling</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card p-3 border-0 overflow-auto mb-3 mt-3 rounded-0 shadow" style="height:650px;">
    <div class="card-body">
      <?php if (isset($_GET['error'])) { ?>
        <p class="alert alert-danger error mt-3" role="alert">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        <p class="alert alert-success success mt-3" role="alert">
          <?php echo $_GET['success']; ?>
        </p>
      <?php } ?>

      <?php if (isset($_GET['errorstud'])) { ?>
        <p class="alert alert-danger errorstud mt-3" role="alert">
          <?php echo $_GET['errorstud']; ?>
        </p>
      <?php } ?>

      <div class="py-3">
        <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal"
          data-bs-target=".inputStudent"><ion-icon class="me-1" name="create-sharp"></ion-icon>Start Counceling</button>
      </div>

      <table id="individual" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Student Number</th>
            <th scope="col">Student Name</th>
            <th scope="col">Counseling Type</th>
            <th scope="col">status</th>
            <th scope="col">Approach</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?Php
          $query = "SELECT * FROM guidance_individual WHERE role = 'counseling'";
          if ($stmt = $conn->query($query)) {
            while ($row = $stmt->fetch_array()) {
              echo "
      <tr>
        <td>$row[indv_id]</td>
        <td>$row[stud_id]</td>
        <td>$row[name] $row[lname]</td>
        <td>$row[course_year_section]</td>
        <td>$row[status]</td>
        <td>$row[approach]</td>
        <td>
          <a class='btn btn-primary' type='button' href='pages/services/view_indv.php?indv_id=$row[indv_id]'><ion-icon class='me-1' name='eye-sharp'></ion-icon>View</a>
          <a class='btn btn-primary ' href='pages/services/indv_pdf.php?indv_id=$row[indv_id]' role='button'><ion-icon name='print-outline'></ion-icon> Print</a>
          </td>
      </tr>";
            }

          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>



<form action="pages/services/get-method.php" method="post">
  <div class="modal fade  inputStudent" onclick="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Start Counseling:</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-secondary">
          <label class="text-dark">Input student's number before proceeding</label><br>
          <div class="row mt-2">
            <div class="col-4">
              <label for="message-text " class="text-dark">Student Number:</label>
              <input type="text" name="stud_id" class="form-control" style="width:300px;" placeholder="ex. 190***22"
                required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <input class="btn btn-primary ms-1" type="submit" name="save" value="enter">
        </div>
      </div>
    </div>
  </div>
</form>

<?php
include 'assets/body/lower.php';
?>

<script>
  $(document).ready(function () {
    $('#individual').DataTable();
  });  
</script>
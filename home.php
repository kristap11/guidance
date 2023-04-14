<?php

include("includes/functions.php");
include('assets/body/upper.php');
?>

<section class="home-section ms-3" style="background-color:#edf2f9;">
  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
  <div class="card p-3 border-0 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-secondary">
        <div class="row align-items-center">
          <div class="col-5">
            <div class="d-flex align-items-start">
              <ion-icon class="me-2" size="large" style="color:#4040a1" name="grid-sharp"></ion-icon>
              <h4 class="text-dark fw-bold">Dashboard</h4>
            </div>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md mt-1">
      <div class="card rounded-0 border-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
        <div class="card-body">
          <h3 class="card-title text-dark">
            <?php
            $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
            $total_student = "SELECT * FROM guidance_profiling";
            $total_student_run =  mysqli_query($conn, $total_student);

            if ($totalstud = mysqli_num_rows($total_student_run)) {

              echo '<h4 class="mb-0 text-dark">' . $totalstud . '</h4>';
            } else {

              echo '<h4 class="mb-0 text-dark">NO DATA </h4>';
            }
            ?>
          </h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text text-dark">Total Number of Student.</p>
            </div>
            <div class="col-auto">
              <ion-icon class="me-3" style="color:#F675A8;" size="large" name="accessibility-sharp"></ion-icon>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md mt-1">
      <div class="card rounded-0 border-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
        <div class="card-body">
          <h3 class="card-title text-dark ">
            <?php
            $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
            $total_student = "SELECT * FROM guidance_status";
            $total_student_run =  mysqli_query($conn, $total_student);

            if ($totalstud = mysqli_num_rows($total_student_run)) {

              echo '<h4 class="mb-0 text-dark">' . $totalstud . '</h4>';
            } else {

              echo '<h4 class="mb-0 text-dark">NO DATA </h4>';
            }
            ?>
          </h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text text-dark">Total Number of Appointment.</p>
            </div>
            <div class="col-auto">
              <ion-icon class="me-3" style="color:#A084DC;" size="large" name="calendar-sharp"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md mt-1">
      <div class="card rounded-0 border-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
        <div class="card-body">
          <h3 class="card-title text-dark">
            <?php
            $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
            $total_student = "SELECT * FROM guidance_individual";
            $total_student_run =  mysqli_query($conn, $total_student);

            if ($totalstud = mysqli_num_rows($total_student_run)) {

              echo '<h4 class="mb-0 text-dark">' . $totalstud . '</h4>';
            } else {

              echo '<h4 class="mb-0 text-dark">NO DATA </h4>';
            }
            ?>
          </h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text text-dark">Total Number of Counseling.</p>
            </div>
            <div class="col-auto">
              <ion-icon class="me-3" style="color:#F29393;" size="large" name="happy"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md mt-1">
      <div class="card rounded-0 border-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
        <div class="card-body">
          <h3 class="card-title text-dark">
            <?php
            $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
            $total_student = "SELECT * FROM guidance_visit_log";
            $total_student_run =  mysqli_query($conn, $total_student);

            if ($totalstud = mysqli_num_rows($total_student_run)) {

              echo '<h4 class="mb-0 text-dark">' . $totalstud . '</h4>';
            } else {

              echo '<h4 class="mb-0 text-dark">NO DATA </h4>';
            }
            ?>
          </h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text text-dark">Total Number of Visitors.</p>
            </div>
            <div class="col-auto">
              <ion-icon class="me-3" style="color:#0081B4;" size="large" name="log-in-sharp"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-7 mt-3">
      <div class="card overflow-auto border-0 rounded-0 shadow " style="height:410px;">
        <div class="card-body">
          <div class="border-bottom border-secondary">
            <h5 class="fw-bold text-dark"><ion-icon class="me-2" size="small" style="color:#FF8B13;" name="git-pull-request-sharp"></ion-icon>Appointment Request</h5>
          </div>
          <?php
          $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
          $sql = "SELECT * FROM guidance_requests";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <label class="fs-5 fw-bold">
                <?php echo $row['course'];
                echo '&nbsp - &nbsp';
                echo $row['year_section'];
                echo '&nbsp';
                echo $row['firstname'];
                echo '&nbsp';
                echo $row['lastname']; ?></label><br>
              <label class="text-muted"><?php echo $row['message'] ?></label><br>
              <div class="d-flex">
                <label>Referral Reason: &nbsp<label class="text-danger"><?php echo $row['referral'] ?></label></label>
                <label class="ms-3">Concern: &nbsp<label class="text-danger"><?php echo $row['concern'] ?></label></label>
              </div>
             
              <div class="border-bottom border-secondary border-1">
                <button id='<?php echo $row["id"] ?>' class='btn btn-sm btn-primary'><ion-icon class="me-1" name="checkmark-circle-sharp"></ion-icon>Accept</button>
                <a href="student/rejected.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger my-2"><ion-icon class="me-1" name="close-circle-sharp"></ion-icon>Reject</a>
              </div>

          <?php

            }
          } else {
            echo "No pending Request";
          }

          mysqli_close($conn);
          ?>
        </div>
      </div>
    </div>
    <div class="col-sm-5 mt-3">
      <div class="card border-0 rounded-0 shadow">
        <div class="card-body">
          <div class="border-bottom border-secondary ">
            <h5 class="fw-bold text-dark"><ion-icon class="me-2" size="small" style="color:#6C00FF;" name="pie-chart-sharp"></ion-icon>Appoitnment Report</h5>
          </div>
          <div class="row">
            <div class="col-sm">
              <table class="table table-bordered mytable">
                <thead>
                  <tr>
                    <th>Reason for Referral</th>
                    <th>Number of Reports</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Bullying</td>

                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_bullying = "SELECT * FROM guidance_status where concern = 'Bullying' ";
                    $total_bullying_run =  mysqli_query($conn, $total_bullying);

                    if ($totalbullying = mysqli_num_rows($total_bullying_run)) {

                      echo '<td>' . $totalbullying . ' </td>';
                    } else {

                      echo '<td>' . $totalbullying . ' </td>';
                    }
                    ?>

                  </tr>
                  <tr>
                    <td>Fear</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_Fear = "SELECT * FROM guidance_status where concern = 'Fear' ";
                    $total_Fear_run =  mysqli_query($conn, $total_Fear);

                    if ($totalFear = mysqli_num_rows($total_Fear_run)) {

                      echo '<td>' . $totalFear . ' </td>';
                    } else {

                      echo '<td>' . $totalFear . ' </td>';
                    }
                    ?>

                  </tr>
                  <tr>
                    <td>Depression</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_Depression = "SELECT * FROM guidance_status where concern = 'Depression' ";
                    $total_Depression_run =  mysqli_query($conn, $total_Depression);

                    if ($totalDepression = mysqli_num_rows($total_Depression_run)) {

                      echo '<td>' . $totalDepression . ' </td>';
                    } else {

                      echo '<td>' . $totalDepression . ' </td>';
                    }
                    ?>
                  </tr>
                  <tr>
                    <td>Mental Health</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_mental = "SELECT * FROM guidance_status where concern = 'Mental Health' ";
                    $total_mental_run =  mysqli_query($conn, $total_mental);

                    if ($totalmental = mysqli_num_rows($total_mental_run)) {

                      echo '<td>' . $totalmental . '</td>';
                    } else {

                      echo '<td>' . $totalmental . '</td>';
                    }
                    ?>
                  </tr>

                  <tr>
                    <td>Lying</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_Lying = "SELECT * FROM guidance_status where concern = 'Lying' ";
                    $total_Lying_run =  mysqli_query($conn, $total_Lying);

                    if ($totalLying = mysqli_num_rows($total_Lying_run)) {

                      echo '<td>' . $totalLying . '</td>';
                    } else {

                      echo '<td>' . $totalLying . '</td>';
                    }
                    ?>
                  </tr>
                  <tr>
                    <td>Stressed</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_Stressed = "SELECT * FROM guidance_status where concern = 'Stressed' ";
                    $total_Stressed_run =  mysqli_query($conn, $total_Stressed);

                    if ($totalStressed = mysqli_num_rows($total_Stressed_run)) {

                      echo '<td>' . $totalStressed . '</td>';
                    } else {

                      echo '<td>' . $totalStressed . '</td>';
                    }
                    ?>
                  </tr>
                  <tr>
                    <td><strong>Total</strong></td>
                    <?php
                    $conn = mysqli_connect('localhost', 'u476821515_SMS', 'Bcpsms12@', 'u476821515_SMS');
                    $total_num = "SELECT * FROM guidance_status  ";
                    $total_num_run =  mysqli_query($conn, $total_num);

                    if ($totalnum = mysqli_num_rows($total_num_run)) {

                      echo '<td><strong>' . $totalnum . '</strong> </td>';
                    } else {

                      echo '<td><strong>' . $totalnum . '</strong> </td>';
                    }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm">
              <canvas id="chartjs-pie" height="250"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card p-3 border-0 overflow-x-auto mb-3 rounded-0 shadow">
    <div class="card-body">
      <div class="border-bottom border-secondary mb-3">
        <h5 class="fw-bold text-dark"><ion-icon class="me-2" size="small" style="color:#C060A1;" name="git-pull-request-sharp"></ion-icon>Reservation Schedule</h5>
      </div>
      <table id="reservation" class="table table-striped border-dark table-bordered">
        <thead>
          <tr>
            
            <th scope="col">Student Name</th>
            <th scope="col">Course</th>
            <th scope="col">Year & Section</th>
            <th scope="col">Referral</th>
            <th scope="col">Concern</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          <?php
          require 'includes/sms_db.php';
          $query = "SELECT * FROM guidance_reservation where status='approved' ORDER BY ID DESC";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>

            <tr>
             
              <td><?php echo $row["firstname"]; echo '&nbsp';
               echo $row["lastname"]; ?></td>
              <td><?php echo $row["course"]; ?></td>
              <td><?php echo $row["year_section"]; ?></td>
              <td><?php echo $row["referral"]; ?></td>
              <td><?php echo $row["concern"]; ?></td>
              <td><?php echo $row["date"]; $row["time"]; ?></td>
              <td>
          <div class="d-flex text-align-centered">
            <a class='btn btn-warning' type='button' href='pages/services/indv_counseling.php?id=<?php echo $row["id"]; ?>'><ion-icon class='me-1' name='create-sharp'></ion-icon>Start Counseling</a>
          </div>
        </td>
            </tr>
          <?php
          }

          ?>

        </tbody>
      </table>
    </div>
    <div class="col">
      <canvas id="chartjs-pie" height="250"></canvas>
    </div>
  </div>
  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->

</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Counseling Schedule</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<!------Pie Graph------->
<script src="assets/dist/js/chart.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-pie"), {
      type: "pie",
      data: {
        labels: ["Bullying", "Fear", "Depressed", "Mental Health", "Lying", "Stressed"],
        datasets: [{
          data: [

            <?php echo $totalbullying ?>,
            <?php echo $totalFear ?>,
            <?php echo $totalDepression ?>,
            <?php echo $totalmental ?>,
            <?php echo $totalLying ?>,
            <?php echo $totalStressed ?>
          ],
          backgroundColor: [
            window.theme.primary,
            window.theme.warning,
            window.theme.danger,
            window.theme.success,
            window.theme.info,
            window.theme.indigo,
          ],
          borderColor: "transparent"
        }]
      },
      options: {
        maintainAspectRatio: true,
        legend: {
          display: true
        }
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#reservation').DataTable();
  });
</script>

<style>
  .custom-tooltip {
    --bs-tooltip-bg: var(--bs-primary);
  }
</style>

<script>
  $(document).ready(function() {
    $('button').click(function() {
      id_emp = $(this).attr('id')
      $.ajax({
        url: "select.php",
        method: 'post',
        data: {
          emp_id: id_emp
        },
        success: function(result) {
          $(".modal-body").html(result);
        }
      });


      $('#myModal').modal("show");
    })
  })
</script>

<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<?php
include 'assets/body/lower.php';
?>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-pie"), {
      type: "pie",
      data: {
        labels: ["Bullying", "Fear", "Depressed", "Mental Health", "Lying", "Stressed"],
        datasets: [{
          data: [

            <?php echo $totalbullying ?>,
            <?php echo $totalFear ?>,
            <?php echo $totalDepression ?>,
            <?php echo $totalmental ?>,
            <?php echo $totalLying ?>,
            <?php echo $totalStressed ?>
          ],
          backgroundColor: [
            window.theme.primary,
            window.theme.warning,
            window.theme.danger,
            window.theme.success,
            window.theme.info,
            window.theme.indigo,
          ],
          borderColor: "transparent"
        }]
      },
      options: {
        maintainAspectRatio: true,
        legend: {
          display: true
        }
      }
    });
  });
</script>


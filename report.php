<?php
include 'assets/body/upper.php';
?>

<section class="home-section ms-3">
   <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
   <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
      <div class="card-body">
         <div class="page-breadcrumb border-bottom border-dark">
            <div class="row align-items-center">
               <div class="col-5">
                  <div class="d-flex align-items-start">
                     <ion-icon class="me-2" size="large" style="color:#1C82AD" name="analytics-sharp"></ion-icon>
                     <h4 class="text-dark fw-bold">Reports</h4>
                  </div>
                  <div class="d-flex align-items-center">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Reports</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="card border-0 mt-3 p-3 rounded-0 shadow">
      <div class="card-body">
         <div class="border-bottom border-secondary mb-3">
            <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#898121" name="chatbubbles-outline"></ion-icon></ion-icon>Individual Counseling Report</h5>
         </div>
         <table id="indv_report" class="table table-striped border-dark table-bordered border-1 mt-3">
            <thead>
               <tr class="tr_data">
                  <th class="th_data">ID</th>
                  <th class="th_data">Student Number</th>
                  <th class="th_data">Student Name</th>
                  <th class="th_data">Counseling Type</th>
                  <th class="th_data">Status</th>
                  <th class="th_data">Approach</th>
               </tr>
            </thead>
            <tbody>
               <?php
               require 'includes/sms_db.php';
               $rows = mysqli_query($conn, "SELECT * FROM guidance_individual")
               ?>
               <?php foreach ($rows as $row) : ?>
                  <tr class="tr_data">
                     <td class="td_data"><?php echo $row["indv_id"]; ?></td>
                     <td class="td_data"><?php echo $row["stud_id"]; ?></td>
                     <td class="td_data"><?php echo $row["name"]; ?></td>
                     <td class="td_data"><?php echo $row["course_year_section"]; ?></td>
                     <td class="td_data"><?php echo $row["status"]; ?></td>
                     <td class="td_data"><?php echo $row["approach"]; ?></td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
         <div class="">
            <label class="text-muted col-form-label">You can download or print this report here:</label>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#print_report">
               Launch demo modal
            </button>
            <a target="_blank" rel="nofollow" class="btn btn-primary " href="pages/report/print_report.php" role="button"><ion-icon name="print-outline"></ion-icon> Generate into PDF</a>
         </div>

      </div>
   </div>

   <div class="card border-0 mt-3 p-3 rounded-0 shadow">
      <div class="card-body">
         <div class="border-bottom border-secondary mb-3">
            <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#C6DCE4;" name="trash-sharp"></ion-icon>Rejected Appointment</h5>
         </div>
         <table id="rejected" class="table table-striped border-dark table-bordered border-1 mt-3">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Referral</th>
                  <th scope="col">Role</th>
                  <th scope="col">Concern</th>
                  <th scope="col">Date&Time Rejected</th>
               </tr>
            </thead>
            <tbody>
               <?php
               require 'includes/sms_db.php';
               $rows = mysqli_query($conn, "SELECT * FROM guidance_reject_table ORDER BY id DESC")
               ?>
               <?php foreach ($rows as $row) : ?>
                  <tr>
                     <td><?php echo $row["stud_emp_id"]; ?></td>
                     <td><?php echo $row["firstname"];
                           echo '&nbsp';
                           echo $row["lastname"]; ?></td>
                     <td><?php echo $row["referral"]; ?></td>
                     <td><?php echo $row["role"]; ?></td>
                     <td><?php echo $row["concern"]; ?></td>
                     <td><?php echo $row["date_time"];  ?></td>


                  </tr>
               <?php endforeach; ?>

            </tbody>
         </table>
      </div>
   </div>

   <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->

</section>

<!-- Modal -->
<div class="modal fade" id="print_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Print Report</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"> </button>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
         </div>
         <div class="modal-body">
            <label for="inputEmail"  class="text-dark fw"><b>Select Date:</b></label>
            <input type="month" class="form-control" name="date" required>
            <br>
            <label for="inputEmail"  class="text-dark fw"><b>Select Approach:</b></label>
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
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>


<?php
include 'assets/body/lower.php';
?>
<!------Chart------->
<script src="assets/dist/js/chart.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
      // Bar Chart
      var barChartData = {
         labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
         datasets: [{
            label: 'Income',
            backgroundColor: 'rgb(79,129,189)',
            borderColor: 'rgba(0, 158, 251, 1)',
            borderWidth: 1,
            data: [15000, 2300, 5500, 17000, 25000, 30000, 2000, 15000, 22000, 34000, 35000, 55000]
         }]
      };

      var ctx = document.getElementById('bargraph').getContext('2d');
      window.myBar = new Chart(ctx, {
         type: 'bar',
         data: barChartData,
         options: {
            responsive: true,
            legend: {
               display: false,
            }
         }
      });

   });
</script>

<!------Rejected------->
<script>
   $(document).ready(function() {
      $('#rejected').DataTable();
   });
</script>

<!------Indv Counseling Report------->
<script>
   $(document).ready(function() {
      $('#indv_report').DataTable();
   });
</script>
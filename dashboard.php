<?php

include 'assets/body/upper.php';
?>

<section class="home-section ms-3">
  <!-------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
<div class="card p-3 border-0 mb-3 rounded-0 shadow">
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
                                    <li class="breadcrumb-item"><a href="studDashboard.php">Home</a></li>
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
        <h3 class="card-title">58</h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text">Total Number of Student.</p>
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
        <h3 class="card-title">36</h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text">Total Number of Appointment.</p>
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
        <h3 class="card-title">32</h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text">Total Number of Counseling.</p>
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
        <h3 class="card-title">78</h3>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <p class="card-text">Total Number of Visitors.</p>   
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
    <div class="card border-0 rounded-0 shadow">
        <div class="card-body">
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
                                    <td>25</td>
                                 </tr>
                                 <tr>
                                    <td>Fear</td>
                                    <td>30</td>
                                 </tr>
                                 <tr>
                                    <td>Depression</td>
                                    <td>10</td>
                                 </tr>
                                 <tr>
                                    <td>Mental Health</td>
                                    <td>20</td>
                                 </tr>
                                 <tr>
                                    <td>Lying</td>
                                    <td>15</td>
                                 </tr>
                                 <tr>
                                    <td>Stressed</td>
                                    <td>30</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Total</strong></td>
                                    <td><strong>130</strong></td>
                                 </tr>
                              </tbody>
                           </table>
                     </div>
        </div>
        
    </div>
  </div>
  <div class="col-sm-5 mt-3">
  <div class="card border-0 rounded-0 shadow">
            <div class="card-body">
                <div class="border-bottom border-secondary ">
                    <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#6C00FF;" name="pie-chart-sharp"></ion-icon>Appoitnment Report</h5>
                </div>
                 <div class="row">
                    
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
          <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#C060A1;" name="git-pull-request-sharp"></ion-icon>Counseling Appointment</h5>
        </div>
        <table class="table table-striped border-dark table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Referral</th>
                <th scope="col">Role</th>
                <th scope="col">Concern</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
              </tr>
            </thead>
         <tbody>
         <?php  
          require 'includes/sms_db.php';
          $query ="SELECT * FROM guidance_reservation ORDER BY time";  
          $result = mysqli_query($conn, $query);  
                          while($row = mysqli_fetch_array($result)) 
                          {  
                            ?>
                                
                               <tr>  
                               <td><?php echo $row["stud_emp_id"]; ?></td>
                               <td><?php echo $row["firstname"]; echo "&nbsp;"; echo $row["lastname"];?></td>
                               <td><?php echo $row["referral"]; ?></td>
                               <td><?php echo $row["role"]; ?></td>
                               <td><?php echo $row["concern"]; ?></td>
                               <td><?php echo $row["date"];  ?></td>
                               <td><?php echo $row["time"];  ?></td>
                               </tr>        
                            <?php
                          }  

                          ?> 

          </tbody>
        </table>   
      </div>
    </div>

  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->

</section>
<?php
include("assets/body/lower.php");
?>

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
            data: [40,25,5,15,15,30],
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
 $(document).ready(function(){  
      $('#reservation').DataTable();  
 });  
 </script>  

 <style>
  .custom-tooltip {
  --bs-tooltip-bg: var(--bs-primary);
}
 </style>

<script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "select.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".modal-body").html(result);
  }});


        $('#myModal').modal("show");
    })
})
  </script>

 <script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
 </script>>
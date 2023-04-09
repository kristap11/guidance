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
                      <ion-icon class="me-2" size="large" style="color:#497174" name="document-text-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Research</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Research</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    <div class="card border-0 rounded-0 shadow">
        <div class="card-body">
        <form action="pdf_session.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="" required>
            </div>
                <button type="number" name="submit" value="submit" class="btn btn-primary">Generate into PDF</button>
        </form>
        </div>
    </div>

    <div class="card p-3 border-0 overflow-x-auto mb-3 rounded-0 shadow">
      <div class="card-body">
        <div class="border-bottom border-secondary mb-3">
          <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#C060A1;" name="git-pull-request-sharp"></ion-icon>Appointment Staus</h5>
        </div>
        <table id="reservation" class="table table-striped border-dark table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Referral</th>
                <th scope="col">Role</th>
                <th scope="col">Concern</th>
                <th scope="col">Date Time Requested</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
         <tbody>
         <?php  
          require 'includes/sms_db.php';
          $query ="SELECT * FROM guidance_status ORDER BY ID DESC";  
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
                               <td><?php echo $row["date_time"];  ?></td>
                               <td >
                             <?php
                                    if ($row["status"] == "approved") {
                                      echo '<label class="bg-success p-1 rounded-5 text-white shadow">' . $row["status"]  . '</label>';

                                    } elseif ($row["status"] == "pending") {
                                      echo '<label class="bg-secondary p-1 rounded-5 text-white ">' . $row["status"]  . '</label>';
                                    }
                                  
                                  ?> 
                                 
                                </td>
                               </tr>        
                            <?php
                          } 
                        

                          ?> 

          </tbody>
        </table>   
      </div>
    </div>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>


<?php
  include 'assets/body/lower.php';
?>

 </script>  

 <script>  
 $(document).ready(function(){  
      $('#reservation').DataTable();  
 });  
 </script>  
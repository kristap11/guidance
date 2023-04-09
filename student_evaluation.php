<?php

  include 'assets/body/upper.php';
?>
<?php include("includes/sms_db.php");  ?>

<section class="home-section ms-3" style="background-color:#edf2f9;">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#AB46D2" name="id-card-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Student Evaluation</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Evaluation</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card p-3 border-0 overflow-auto mb-3 bg-light rounded-0 shadow" style="height:700px;">
          <div class="card-body">
          <a class="btn btn-primary" href="#" role="button"  type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><ion-icon name="cog-sharp"></ion-icon>Start Evaluation</a>


            <div class="mt-3">
              <table id="student_evaluation" class="table table-striped border-dark table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">type</th>
                    <th scope="col">profile</th>
                    <th scope="col">meaning</th>
                    <th scope="col">percentage</th>
                    <th scope="col">View</th>

                  </tr>
                </thead>
                <tbody>
                <?php
            require 'includes/sms_db.php';
            $rows = mysqli_query($conn, "SELECT * FROM guidance_stud_eval")
        ?>
          <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $row["stud_id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["profile"];?></td>
        <td><?php echo $row["meaning"]; ?></td>
        <td><?php echo $row["percentage"];?></td>
        <td><button id='<?php echo $row["id"] ?>' class='btn btn-primary'><ion-icon class='me-1' name='eye-sharp'></ion-icon>View</button></td>
      </tr>
      <?php endforeach; ?>
                </tbody>
              </table> 
          </div>   
      </div>   
    </div>   

  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<!-- Start Evaluation -->
<form action="pages/student_eval/start_evaluation.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-5">
        <label for="exampleFormControlInput1" class="form-label">Student Number:</label>
        <input type="text" name="stud_id" class="form-control" id="exampleFormControlInput1" placeholder="ex. 190*****" required>
        <label for="exampleFormControlInput1" class="form-label mt-3">Student Name:</label>
        <div class="row">
  <div class="col">
    <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
  </div>
  <div class="col">
    <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
  </div>
</div>
      </div>
      <div class="modal-footer">
        
        <input class="btn btn-secondary" type="button" data-bs-dismiss="modal" value="close">
        <input class="btn btn-primary" type="submit" value="Submit">
      </div>
    </div>
  </div>
</div>
</form>


<!-- View Result -->
<div class="modal fade" id="viewResult" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-5">
        <div class="view_result">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php
  include 'assets/body/lower.php';
?>

<script>  
 $(document).ready(function(){  
      $('#student_evaluation').DataTable();  
 });  
 </script>  


<!---- view ---->
<script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "view_type.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".view_result").html(result);
  }});


        $('#viewResult').modal("show");
    })
})

  </script>
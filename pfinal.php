<?php 
  session_start();
    include("includes/sms_db.php"); 
    $type=$_SESSION['type'];
    $query3 = "select * from guidance_types where type='$type'";
    $result = mysqli_query($conn,$query3);
    $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <section class="home-section ms-3 p-3">
<!-------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
<div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class=" me-2" size="large" style="color:#AB46D2" name="id-card-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Student Evaluation</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Student Evaluation</li>
                                    <li class="breadcrumb-item active" aria-current="page">Result</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
<form action="ptest_result.php" method="post">
        <div class="card border-0 rounded-0 shadow">
          <div class="card-body">
            <div class="container">
            <header>
            <div class="row">
            <div class="col-sm-2 ml-5">
              <img src="aimage.php?type=<?php echo $type;?>" width="175" height="250" />
            </div>
            <div class="col-8">
              <div class="row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Student Num#:</label>
              <div class="col-sm-10">
                <input type="text" name="stud_id" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo $_SESSION['stud_id']; ?>"  readonly>
              </div>
              </div>
              <div class="row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Student Name:</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo $_SESSION['fname']; echo' &nbsp;'; echo $_SESSION['lname']; ?>"  readonly>
              </div>
              </div>
              <h2>Student Personality Type is:</h2>  
              <span class="row d-flex ">
              <input type="text" name="type" class="col-sm-6 form-control fw-bold fs-1 border-0" style="width:120px; color:#07177a;" value="<?php echo $_SESSION['type']; ?>"  readonly>
              <input type="text" name="profile" class="col-sm-6 form-control fw-bold fs-1 border-0" style="width:350px; color:#07177a;" value="<?php echo $rows['profile']; ?>"  readonly>
              </span>
              <input type="text" name="meaning" class="form-control text-dark fw-bold fs-3 border-0" value="<?php echo $rows['meaning']; ?>" readonly>
              <input type="text" name="percentage" class="form-control border-0 fw-bold fs-4" value="You belong to <?php echo $rows['percentage']; ?> population" readonly>
            </div>  
        	</div>
            </header>
            <div align="left" style="margin-left: 30px;">
            <textarea class="form-control border-0" name="description" value="<?php echo $rows['description']; ?>" style="height: 120px" readonly><?php echo $rows['description']; ?></textarea>
            <div class="row">
                <input type="text" name="type_name1" class="form-control border-0 fw-bold fs-4" value="<?php echo $rows['type_name1']; ?>" readonly>
                  <div class="col-sm-10">
                    <textarea class="form-control border-0" name="type_1" value="<?php echo $rows['type_1']; ?>" style="height: 100px" readonly><?php echo $rows['type_1']; ?></textarea>
                  </div>
            </div>
            <div class="row">
              <input type="text" name="type_name2" class="form-control border-0 fw-bold fs-4" value="<?php echo $rows['type_name2']; ?>" readonly>
                  <div class="col-sm-10">
                    <textarea class="form-control border-0" name="type_2" value="<?php echo $rows['type_2']; ?>" style="height: 100px" readonly><?php echo $rows['type_2']; ?></textarea>
                  </div>
            </div>
            <div class="row">
              <input type="text" name="type_name3" class="form-control border-0 fw-bold fs-4" value="<?php echo $rows['type_name3']; ?>" readonly>
                  <div class="col-sm-10">
                    <textarea class="form-control border-0" name="type_3" value="<?php echo $rows['type_3']; ?>" style="height: 100px" readonly><?php echo $rows['type_3']; ?></textarea>
                  </div>
            </div>
            <div class="row">
              <input type="text" name="type_name4" class="form-control border-0 fw-bold fs-4" value="<?php echo $rows['type_name4']; ?>" readonly>
                  <div class="col-sm-10">
                    <textarea class="form-control border-0" name="type_4" value="<?php echo $rows['type_4']; ?>" style="height: 100px" readonly><?php echo $rows['type_4']; ?></textarea>
                  </div>
            </div>
            <div class="d-grid gap-2 mb-3 col-6 mx-auto">
              <a class="btn btn-danger" href="student_evaluation.php" role="button"><ion-icon class="me-1" name="alert-circle-sharp"></ion-icon>DON'T SAVE</a>
              <button type="submit" name="submit" value="submit" class="btn btn-primary"><ion-icon class="me-1" name="save-sharp"></ion-icon>SAVE</button>
            </div>
            </div>
            </div>
          </div>
        </div>
</form>       
 <!-------------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->   
 </section>
     
   <!----- ionicons cdn link----->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> 
</body>
</html>









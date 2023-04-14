  <?php
  
    include_once '../../includes/sms_db.php';
    include '../body/upper.php';
  ?>

  <section class="home-section ms-3">
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
                                      <li class="breadcrumb-item"><a href="../../individual.php">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Individual Counseling</li>
                                  </ol>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

    
    <?php
     if(isset($_GET['id'])){

    
      $id=$_GET['id'];
      //$id=4;
      $query = "SELECT * from guidance_reservation where id=?";
        if($stmt=$conn->prepare($query)){
          $stmt->bind_param('i',$id);
          $stmt->execute();
          $result=$stmt->get_result();
          $row=$result->fetch_object();
      ?>
      <form action="indv_session.php" method="post">
      <div class="card border-0 rounded-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
        <div class="card-body">
          <div class="container p-2">
            <div class="row ">
              <label for="staticEmail" class="col-sm-2 text-dark fw-bold col-form-label" >Student Name:</label>
            <div class="col-sm-3">
              <input type="text" name="id" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->id";?>"  readonly>
              <input type="text" class="form-control border-0" style="background:0%;" value="<?php echo "$row->firstname";echo "&nbsp;"; echo "$row->lastname";?>"  readonly>
              <input type="text" name="fname" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->firstname";?>"  readonly>
              <input type="text" name="name" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->lastname";?>"  readonly>
            </div>
            </div>
            <div class="row ">
              <label for="staticEmail" class="col-sm-2 text-dark fw-bold  col-form-label" >Student Num#:</label>
            <div class="col-sm-3">
              <input type="text" name="stud_id" class="form-control border-0" style="background:0%;" value="<?php echo "$row->stud_id";?>"  readonly>
            </div>
            </div>
            <div class="row ">
              <label for="staticEmail" class="col-sm-2 text-dark fw-bold   col-form-label" >Course/Year/Section:</label>
            <div class="col-sm-3">
              <input type="text" name="course_year_section" class="form-control border-0" style="background:0%;" value="<?php echo "$row->course";echo "&nbsp;"; echo "$row->year_section";?>"  readonly>
            </div>
            </div>
            <div class="row ">
             
            <div class="col-sm-3">
              
            </div>
            </div>
          </div>
        </div>
      </div>  
      <div class="card border-0 rounded-0 mt-2 shadow">
        <div class="card-body">
          <div class="container text-dark">
              <div class="mb-3">
                <label for="message-text" class="col-form-label">I. Background of the Case:</label>
                <textarea class="form-control" name="background" rows="6" required></textarea>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">II. Counseling Plan:</label>
                <div class="mb-3 ps-2">
                  <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
                  <select class="form-select-sm" name="approach" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option><a class=" dropdown-item option" value="Behavior Therapy">Behavior Therapy</a></option>
                    <option><a class=" dropdown-item option" value="Cognitive Therapy">Cognitive Therapy</a></option>
                    <option><a class=" dropdown-item option" value="Educational Counseling">Educational Counseling</a></option>
                    <option><a class=" dropdown-item option" value="Holistic Therapy">Holistic Therapy</a></option>
                    <option><a class=" dropdown-item option" value="Mental Health Counseling">Mental Health Counseling</a></option>
                  </select><br>
                  <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
                  <textarea class="form-control" name="goal" id="" rows="6" required></textarea>
                </div>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">III. Comments:</label>
                <textarea class="form-control" name="comment" rows="6" required></textarea>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">IV. Recommendations:</label>
                <textarea class="form-control" name="recommendation" rows="6" required></textarea>
              </div>
              <input type="text" name="role" class="visually-hidden" value="counseling"  readonly>
              <input class="btn btn-primary" name="submit" type="submit" value="Submit">
            </div>
          </div>  
        </div>  
      </form>
    <?php }
     
    ?>

    <?php } elseif(isset($_GET['stud_id'])){

  $stud_id=$_GET['stud_id'];
//$id=4;
$query = "SELECT * from registrar_studentlist where Student_ID=?";
  if($stmt=$conn->prepare($query)){
    $stmt->bind_param('i',$stud_id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_object();
?>
<form action="indv_session.php" method="post">
<div class="card border-0 rounded-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
  <div class="card-body">
    <div class="container p-2">
      <div class="row ">
        <label for="staticEmail" class="col-sm-2 text-dark fw-bold col-form-label" >Student Name:</label>
      <div class="col-sm-3">
        <!-- <input type="text" name="id" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->id";?>"  readonly> -->
        <input type="text" class="form-control border-0" style="background:0%;" value="<?php echo "$row->Firstname";echo "&nbsp;"; echo "$row->Lastname";?>"  readonly>
        <input type="text" name="fname" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->Firstname";?>"  readonly>
        <input type="text" name="name" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->Lastname";?>"  readonly>
      </div>
      </div>
      <div class="row ">
        <label for="staticEmail" class="col-sm-2 text-dark fw-bold  col-form-label" >Student Num#:</label>
      <div class="col-sm-3">
        <input type="text" name="stud_id" class="form-control border-0" style="background:0%;" value="<?php echo "$row->Student_ID";?>"  readonly>
      </div>
      </div>
      <div class="row ">
        <label for="staticEmail" class="col-sm-2 text-dark fw-bold   col-form-label" >Course/Year/Section:</label>
      <div class="col-sm-3">
        <input type="text" name="course_year_section" class="form-control border-0" style="background:0%;" value="<?php echo "$row->Course";echo "&nbsp;"; echo "$row->Section"; echo "&nbsp;"; ?>"  readonly>
      </div>
      </div>
      <div class="row ">
       
      <div class="col-sm-3">
        
      </div>
      </div>
    </div>
  </div>
</div>  
<div class="card border-0 rounded-0 mt-2 shadow">
  <div class="card-body">
    <div class="container text-dark">
        <div class="mb-3">
          <label for="message-text" class="col-form-label">I. Background of the Case:</label>
          <textarea class="form-control" name="background" rows="6" required></textarea>
        </div>
        <div class="mb-3">
          <label for="message-text" class="col-form-label">II. Counseling Plan:</label>
          <div class="mb-3 ps-2">
            <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
            <select class="form-select-sm" name="approach" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option><a class=" dropdown-item option" value="Behavior Therapy">Behavior Therapy</a></option>
              <option><a class=" dropdown-item option" value="Cognitive Therapy">Cognitive Therapy</a></option>
              <option><a class=" dropdown-item option" value="Educational Counseling">Educational Counseling</a></option>
              <option><a class=" dropdown-item option" value="Holistic Therapy">Holistic Therapy</a></option>
              <option><a class=" dropdown-item option" value="Mental Health Counseling">Mental Health Counseling</a></option>
            </select><br>
            <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
            <textarea class="form-control" name="goal" id="" rows="6" required></textarea>
          </div>
        </div>
        <div class="mb-3">
          <label for="message-text" class="col-form-label">III. Comments:</label>
          <textarea class="form-control" name="comment" rows="6" required></textarea>
        </div>
        <div class="mb-3">
          <label for="message-text" class="col-form-label">IV. Recommendations:</label>
          <textarea class="form-control" name="recommendation" rows="6" required></textarea>
        </div>
        <input type="text" name="role" class="visually-hidden" value="counseling"  readonly>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit">
      </div>
    </div>  
  </div>  
</form>
<?php }
?>

<?php
    } elseif(isset($_GET['stud'])){

$stud=$_GET['stud'];
//$id=4;
$query = "SELECT * from guidance_profiling where stud_id=?";
if($stmt=$conn->prepare($query)){
  $stmt->bind_param('i',$stud);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_object();
?>
<form action="indv_session.php" method="post">
<div class="card border-0 rounded-0 shadow" style="background: linear-gradient(to bottom, #ccccff 0%, #ff99cc 100%);">
<div class="card-body">
  <div class="container p-2">
    <div class="row ">
      <label for="staticEmail" class="col-sm-2 text-dark fw-bold col-form-label" >Student Name:</label>
    <div class="col-sm-3">
      <input type="text" name="id" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->id";?>"  readonly>
      <input type="text" class="form-control border-0" style="background:0%;" value="<?php echo "$row->fname";echo "&nbsp;"; echo "$row->lname";?>"  readonly>
      <input type="text" name="fname" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->fname";?>"  readonly>
      <input type="text" name="name" class="visually-hidden form-control border-0" style="background:0%;" value="<?php echo "$row->lname";?>"  readonly>
    </div>
    </div>
    <div class="row ">
      <label for="staticEmail" class="col-sm-2 text-dark fw-bold  col-form-label" >Student Num#:</label>
    <div class="col-sm-3">
      <input type="text" name="stud_id" class="form-control border-0" style="background:0%;" value="<?php echo "$row->stud_id";?>"  readonly>
    </div>
    </div>
    <div class="row ">
      <label for="staticEmail" class="col-sm-2 text-dark fw-bold   col-form-label" >Course/Year/Section:</label>
    <div class="col-sm-3">
      <input type="text" name="course_year_section" class="form-control border-0" style="background:0%;" value="<?php echo "$row->course";echo "&nbsp;"; echo "$row->year_section"; echo "&nbsp;"; ?>"  readonly>
    </div>
    </div>
    <div class="row ">
     
    <div class="col-sm-3">
      
    </div>
    </div>
  </div>
</div>
</div>  
<div class="card border-0 rounded-0 mt-2 shadow">
<div class="card-body">
  <div class="container text-dark">
      <div class="mb-3">
        <label for="message-text" class="col-form-label">I. Background of the Case:</label>
        <textarea class="form-control" name="background" rows="6" required></textarea>
      </div>
      <div class="mb-3">
        <label for="message-text" class="col-form-label">II. Counseling Plan:</label>
        <div class="mb-3 ps-2">
          <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
          <select class="form-select-sm" name="approach" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option><a class=" dropdown-item option" value="Behavior Therapy">Behavior Therapy</a></option>
            <option><a class=" dropdown-item option" value="Cognitive Therapy">Cognitive Therapy</a></option>
            <option><a class=" dropdown-item option" value="Educational Counseling">Educational Counseling</a></option>
            <option><a class=" dropdown-item option" value="Holistic Therapy">Holistic Therapy</a></option>
            <option><a class=" dropdown-item option" value="Mental Health Counseling">Mental Health Counseling</a></option>
          </select><br>
          <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
          <textarea class="form-control" name="goal" id="" rows="6" required></textarea>
        </div>
      </div>
      <div class="mb-3">
        <label for="message-text" class="col-form-label">III. Comments:</label>
        <textarea class="form-control" name="comment" rows="6" required></textarea>
      </div>
      <div class="mb-3">
        <label for="message-text" class="col-form-label">IV. Recommendations:</label>
        <textarea class="form-control" name="recommendation" rows="6" required></textarea>
      </div>
      <input type="text" name="role" class="visually-hidden" value="counseling"  readonly>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit">
    </div>
  </div>  
</div>  
</form>
<?php }
?>

<?php
  }
  ?>



    <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  </section>

  <?php
    include '../body/lower.php';
  ?>

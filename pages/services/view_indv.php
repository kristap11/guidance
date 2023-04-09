<?php
    include_once '../../includes/sms_db.php';
    include '../body/upper.php';
  ?>

  <section class="home-section ms-3 text-dark">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
<div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
      <div class="card-body">
        <div class="page-breadcrumb border-bottom border-dark">
                  <div class="row align-items-center">
                      <div class="col-5">
                      <div class="d-flex align-items-start">
                        <ion-icon class="me-2" size="large" style="color:#A7727D" name="person-circle-sharp"></ion-icon>
                          <h4 class="text-dark fw-bold">Counseling Result</h4>
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
    $indv_id=$_GET['indv_id'];
    //$id=4;
    $query = "SELECT * from guidance_individual where indv_id=?";
      if($stmt=$conn->prepare($query)){
        $stmt->bind_param('i',$indv_id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_object();
  ?> 
      <div class="row">
        <div class="col-7 ">
          <div class="card border-0 p-2 rounded-0 shadow">
            <div class="card-body text-center ">
              <h3 type="text"  class=" fw-bold" style="color:#07177a;"><?php echo "$row->name"; echo "&nbsp;"; echo "$row->lname";?></h3>
              <label type="text" name="stud_id" class=" fw-bold" style="color:#07177a;"><?php echo "$row->stud_id";?></label><br>
              <label type="text" class=" fw-bold" style="color:#07177a;"><?php echo "$row->course_year_section";?></label><br>
              <label type="text" class=" fw-bold" style="color:#07177a;"><?php echo "$row->status";?></label><br>
            </div>
          </div>
        </div>
        <div class="col-5 ">
          <div class="card border-0 p-3 rounded-0 shadow">
            <div class="card-body">
            <button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#exampleModal"><ion-icon class="me-1" name="checkmark-circle-sharp"></ion-icon>follow up</button>
            </div>
          </div>
        </div>
        </div>
        <div class="card border-0 rounded-0 mt-3 shadow">
          <div class="card-body">
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Counseling approach:</label>
              <div class="col-sm-10">
                <input type="text" name="approach" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo "$row->approach";?>"  readonly>
              </div>
              </div>
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Date/Time Counseled:</label>
              <div class="col-sm-10">
                <input type="text" name="date" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo "$row->date";echo "&nbsp;"; echo "$row->time";?>"  readonly>
              </div>
              </div>
            <div class="row">
              <div class="col-sm-6">
                <label class="fw-bold"> Background of the Case:</label>
                <textarea class="form-control" style="height: 200px" name="background" value="" readonly><?php echo "$row->background";?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Counseling Goals:</label>
                <textarea class="form-control" name="goal" style="height: 200px" value="" readonly><?php echo "$row->goal";?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Comments:</label>
                <textarea class="form-control" name="comment" style="height: 200px" value="" readonly><?php echo "$row->comment";?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Recommendation:</label>
                <textarea class="form-control" style="height: 200px" name="recommendation" value="" readonly><?php echo "$row->recommendation";?></textarea>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>

<!-- Modal -->
<form action="follow_up.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Follow up counseling schedule</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <input type="text" name="stud_emp_id" class="visually-hidden form-control" value="<?php echo "$row->stud_id";?>">
      <input type="text" name="firstname" class="visually-hidden form-control" value="<?php echo "$row->name";?>">
      <input type="text" name="lastname" class="visually-hidden form-control" value="<?php echo "$row->lname";?>">
      <input type="text" name="referral" class="visually-hidden form-control" value="follow up">
      <input type="text" name="role" class="visually-hidden form-control" value="follow up">
      <input type="text" name="concern" class="visually-hidden form-control" value="follow up">

      <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" required>
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="time" name="time" class="form-control" id="exampleFormControlInput1" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
  <?php
    include '../body/lower.php';
  ?>

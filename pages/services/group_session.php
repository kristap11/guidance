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
  
    <form action="group_query.php" method="post">
        <div class="card border-0 rounded-0 shadow">
            <div class="card-body">
                <?php
                    if(isset($_POST['submit']))
                        {
                                $stud_id = $_POST['stud_id'];
                                $stud_name = $_POST['stud_name'];
                                $approach= $_POST['approach'];
                                $background = $_POST['background'];
                                $goal= $_POST['goal'];
                                $comment= $_POST['comment'];
                                $recommendation= $_POST['recommendation'];

                            foreach($stud_id as $index => $stud_id)
                            {
                                ?> 
                                    <div class="d-flex border-bottom">
                                        <div class="row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label fw-bold">Student Number:</label>
                                            <div class="col-sm-5">
                                            <input type="text" name="stud_id[]" class="form-control-plaintext" value="<?php echo $stud_id; ?>"  readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="staticEmail" class="col-sm-5 col-form-label fw-bold">Student Name:</label>
                                            <div class="col-sm-5">
                                            <input type="text" name="stud_name[]" class="form-control-plaintext"  value="<?php echo $stud_name[$index]; ?>"  readonly>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                ?>
            </div>
        </div>  
        <div class="card border-0 rounded-0 mt-3 shadow">
          <div class="card-body">
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Counseling approach:</label>
              <div class="col-sm-10">
                <input type="text" name="approach" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo $approach; ?>"  readonly>
              </div>
              </div>
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Date/Time Counseled:</label>
              <div class="col-sm-10">
                <input type="text" name="date" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo date("M d,Y") ; ?>"  readonly>
              </div>
              </div>
            <div class="row">
              <div class="col-sm-6">
                <label class="fw-bold"> Background of the Case:</label>
                <textarea class="form-control" style="height: 200px" name="background" value="<?php echo $background; ?>" readonly><?php echo $background; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Counseling Goals:</label>
                <textarea class="form-control" name="goal" style="height: 200px" value="<?php echo $goal; ?>" readonly><?php echo $goal; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Comments:</label>
                <textarea class="form-control" name="comment" style="height: 200px" value="<?php echo $comment; ?>" readonly><?php echo $comment; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Recommendation:</label>
                <textarea class="form-control" style="height: 200px" name="recommendation" value="<?php echo $recommendation; ?>" readonly><?php echo $recommendation; ?></textarea>
              </div>
            </div>
          </div>
            <div class="text-center p-3">
              <a class="btn btn-danger" href="../../individual.php" role="button">Cancel</a>
              <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>

<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>

        
  <?php
    include '../body/lower.php';
  ?>

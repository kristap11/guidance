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

      <form action="indv_query.php?id=<?php echo $_SESSION['id'] ?>" method="post">
        <div class="card border-0 rounded-0 shadow">
          <div class="card-body">
          <input type="text" name="id" class="visually-hidden form-control fw-bold fs-2 text-center border-0" style="color:#07177a;" value="<?php echo $_SESSION['id']; ?>"  readonly>
          <input type="text" class="form-control fw-bold fs-2 text-center border-0" style="color:#07177a;" value="<?php echo $_SESSION['fname']; echo '&nbsp;'; echo $_SESSION['name'];?>"  readonly>
            <input type="text" name="fname" class="visually-hidden form-control fw-bold fs-2 text-center border-0" style="color:#07177a;" value="<?php echo $_SESSION['fname']; ?>"  readonly>
            <input type="text" name="name" class="visually-hidden form-control fw-bold fs-2 text-center border-0" style="color:#07177a;" value="<?php echo $_SESSION['name']; ?>"  readonly>
            <input type="text" name="stud_id" class="form-control fw-bold text-center border-0"  value="<?php echo $_SESSION['stud_id']; ?>"  readonly>
            <input type="text" name="course_year_section" class="form-control fw-bold text-center border-0"  value="<?php echo $_SESSION['course_year_section']; ?>"  readonly>
            <input type="text" name="status" class="form-control fw-bold text-center border-0"  value="<?php echo $_SESSION['status']; ?>"  readonly>
          </div>
        </div>

        <div class="card border-0 rounded-0 mt-3 shadow">
          <div class="card-body">
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Counseling approach:</label>
              <div class="col-sm-10">
                <input type="text" name="approach" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo $_SESSION['approach'];?>"  readonly>
              </div>
              </div>
              <div class="col row">
                <label for="staticEmail" class="col-sm-2 fw-bold col-form-label">Date/Time Counseled:</label>
              <div class="col-sm-10">
                <input type="text" name="date" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo date("Y/m/d") ;?>"  readonly>
                <input type="text" name="time" class="form-control fw-bold border-0" style="color:#07177a;" value="<?php echo date("h:ia");?>"  readonly>
              </div>
              </div>
            <div class="row">
              <div class="col-sm-6">
                <label class="fw-bold"> Background of the Case:</label>
                <textarea class="form-control" style="height: 200px" name="background" value="<?php echo $_SESSION['background']; ?>" readonly><?php echo $_SESSION['background']; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Counseling Goals:</label>
                <textarea class="form-control" name="goal" style="height: 200px" value="<?php echo $_SESSION['goal']; ?>" readonly><?php echo $_SESSION['goal']; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Comments:</label>
                <textarea class="form-control" name="comment" style="height: 200px" value="<?php echo $_SESSION['comment']; ?>" readonly><?php echo $_SESSION['comment']; ?></textarea>
              </div>
              <div class="col-sm-6">
                <label class="fw-bold"> Recommendation:</label>
                <textarea class="form-control" style="height: 200px" name="recommendation" value="<?php echo $_SESSION['recommendation']; ?>" readonly><?php echo $_SESSION['recommendation']; ?></textarea>
              </div>
            </div>
          </div>
            <div class="text-center p-3">
             <input type="text" name="role" class="visually-hidden" value="<?php echo $_SESSION['roles']; ?>"  readonly>
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

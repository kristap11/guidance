<?php
include '../pages/career/CreatePost.php';
include 'header.php';
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
      <?php
        $rows = mysqli_query($conn, "SELECT * FROM guidance_post WHERE preference = 'Unpin Post' ORDER BY id DESC")
      ?>
    <div class="row ">
      <div class="col-sm-8"> 
      <?php foreach ($rows as $row) : ?>
        <div class="card border-0 rounded-0 shadow mt-2">
        <div class="card-body">
          <img src="../img/<?php echo $row["image"]; ?>" style=" width:300px;" title="<?php echo $row['image']; ?>">
          <h3><?php echo $row["name"]; ?></h3>
          <textarea class="form-control border-0 rounded-0" style="height:150px;" disabled><?php echo $row["description"]; ?></textarea><br>
          <label> * <?php echo $row["category"]; ?></label><br>
          <small class="text-muted"><?php echo $row["date"]; ?></small><br>
      </div>
      </div>
      <?php endforeach; ?>
      </div>

      <?php
        $rows = mysqli_query($conn, "SELECT * FROM guidance_post WHERE preference = 'Pin Post' ORDER BY id DESC")
      ?>
      <div class="col-sm-4">
        <div class="">
            <div class="">
             <h5 class="fw-bold"><ion-icon name="pin-sharp"></ion-icon>Priority Section</h5>
            </div>
        </div>
        <?php foreach ($rows as $row) : ?>
      <div class="card border-0 mt-2 rounded-0 shadow">
        <div class="card-body">
          <img src="../img/<?php echo $row["image"]; ?>" width = 100 title="<?php echo $row['image']; ?>">
          <h4><?php echo $row["name"]; ?></h4>
          <textarea class="form-control rounded-0 border-0 d-flex" style="height:150px;" disabled><?php echo $row["description"]; ?></textarea><br>
          <label> * <?php echo $row["category"]; ?></label><br>
          <small class="text-muted"><?php echo $row["date"]; ?></small><br>
        </div>
      </div>
      <?php endforeach; ?>

      </div>
    </div>


  <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->

</section>
<?php
include("footer.php");
?>
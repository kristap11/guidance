<?php
session_start(); //we need session for the log in thingy XD 
include("../includes/sms_db.php");
include_once '../pages/career/CreatePost.php';
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css" />

    <!-- Fontware CDN Link -->
    <link rel="stylesheet" href="../assets/icons/css/all.min.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
  </head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">GUIDANCE & COUNSELING</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block"><?php echo $_SESSION['username']; ?></h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
      <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="home.php">
              <i><ion-icon class="mt-3" name="grid-sharp"></ion-icon></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="visitlogs.php">
              <i><ion-icon class="mt-3" name="log-in-sharp"></ion-icon></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
              <i><ion-icon  class="mt-3" name="search-sharp"></ion-icon></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
              <i><ion-icon class="mt-3" name="school-sharp"></ion-icon></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
              <i><ion-icon class="mt-3" name="document-text-sharp"></ion-icon></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="report.php">
              <i><ion-icon class="mt-3" name="analytics-sharp"></ion-icon></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        <section class="home-section ms-3" style="background-color:#edf2f9;">
 <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#B6E2A1" name="search-circle-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Career Orientation</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Career Orientation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        


        <div class="card p-3 border-0 overflow-auto mb-3 bg-light rounded-0 shadow" style="height:690px;">
        <div class="card-body">
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Post"><ion-icon class="me-1" name="create-sharp"></ion-icon> Create Post</button>
        <?php if(isset($_GET['edited'])){ ?>
            <p class="alert alert-success edited mt-3" role="alert">
        <?php echo $_GET['edited']; ?></p> <?php } ?>
        <?php if(isset($_GET['failed'])){ ?>
            <p class="alert alert-danger failed mt-3" role="alert">
        <?php echo $_GET['failed']; ?></p> <?php }?>
  <div class="mt-3">
    <table id="career_orientation" class="table table-striped table-bordered border-dark mt-3">
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Preference</th>
      <th scope="col">Date Posted</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM guidance_post ORDER BY id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td>
          <span class="d-inline-block text-truncate" style="max-width: 150px;">
            <?php echo $row["description"]; ?>
          </span>
        </td>
        <td><?php echo $row["category"]; ?></td>
        <td><?php echo $row["preference"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
        <td>
          <div class="d-flex text-align-centered">
            <a href="pages/career/career-orient-edit.php?edit=<?php  echo $row['id'] ?>" class="edit-post-link btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPost">Edit</a>
            <a href="pages/career/deletePost.php?id=<?php echo $row['id'] ?>" class="btn btn-danger ms-1">Delete</a>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

 <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
        </section>

<!---------------- Edit Post ------------- -->       
<div class="modal fade" id="editPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createPost">EDIT POST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="div">
          <form action="pages/career/career-orient-update.php" id="editPostForm" method="POST">
            <input type="hidden" name="id">
          <label for="message-text" class="">Title:</label>
          <input type="#"  class="form-control" placeholder="Enter Job Name" name="title">
          <label for="message-text" class="pt-3">Description:</label>
          <textarea type="#" id=""  class="form-control" style="height:300px;" placeholder="Enter Job Description" name="description"></textarea>
          <div class="d-flex pt-3 align-items-centered">
          <label for="message-text" class="text">Category:</label>
            <div class="pb-2">
              <select class="btn btn-primary btn-sm" name="category">
                <option class="text-light" selected disabled><a class=" dropdown-item option">Choose...</a></option>
                <option><a class=" dropdown-item option" value="Guidance Post">Guidance Post</a></option>
                <option><a class=" dropdown-item option" value="Job Post">Job Post</a></option>
              </select>
            </div>
          </div>
          <div class="d-flex pt-3 align-items-centered">
          <label for="message-text" class="text">Preference:</label>
            <div class="pb-2">
              <select class="btn btn-primary btn-sm" name="preference">
                <option class="text-light" selected disabled><a class="dropdown-item option">Choose...</a></option>
                <option><a class=" dropdown-item option" value="Pin Post">Pin Post</a></option>
                <option><a class=" dropdown-item option" value="Unpin Post">Unpin Post</a></option>
              </select>
            </div>
          </div>
          <div class="d-flex pt-3 align-items-centered">
          <label for="message-text" class="">Insert Image:</label>
          <input type="file" name="image" id=""  class="form-control input-sm" style="width:500px;" placeholder="Choose File...">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="editPostForm">Update</button>
      </div>
    </div>
  </div>
</div>


<!---------------- Create Post ------------- -->    
<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
<div class="modal fade" id="Post" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <ion-icon class="me-1" size="large" name="create-outline"></ion-icon>
        <h1 class="modal-title ms-2 fs-5" id="exampleModalLabel">Create Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="name">Title : </label>
        <input type="#" name="name" id="name"  class="form-control" style="width:300px;" required autofocus> 
        <label for="name">Description : </label>
        <textarea class="form-control" name="description" id="description" rows="6" required autofocus></textarea> 
        <div class="col-md-3">
          <label>Category:</label>
            <select class="form-select-sm" name="category" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option><a class=" dropdown-item option" value="Research">Guidance Post</a></option>
              <option><a class=" dropdown-item option" value="Evaluation">Job Post</a></option>
            </select>
        </div>
        <label for="message-text" class="text">Preference:</label>
        <div class="pb-2">
          <select class="btn btn-primary btn-sm" name="preference">
            <option class="text-light" selected disabled><a class=" dropdown-item option">Choose...</a></option>
            <option><a class=" dropdown-item option" value="Pin Post">Pin Post</a></option>
            <option><a class=" dropdown-item option" value="Unpin Post">Unpin Post</a></option>
          </select>
        </div>
        <label for="image">Image : </label>
        <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon class="me-1" name="close-circle-sharp"></ion-icon>Close</button>
        <button type="submit" name="submit" class="btn btn-primary"><ion-icon class="me-1" name="checkmark-circle-sharp"></ion-icon>Create</button>
      </div>
    </div>
  </div>
</div>
</form>

      </div>
    </main>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/career-orient-edit.js" async></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>

<?php
  include 'assets/body/lower.php';
?>

<script>  
 $(document).ready(function(){  
      $('#career_orientation').DataTable();  
 });  
 </script>  
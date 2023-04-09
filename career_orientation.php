<?php
 //we need session for the log in thingy XD 
include("includes/sms_db.php");
include_once 'pages/career/CreatePost.php';
include 'assets/body/upper.php';
?>
        <section class="home-section ms-3" style="background-color:#edf2f9;">
 <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#B6E2A1" name="search-circle-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Guidance Posting</h4>
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
   

<?php
  include 'assets/body/lower.php';
?>

<script>  
 $(document).ready(function(){  
      $('#career_orientation').DataTable();  
 });  
 </script>  
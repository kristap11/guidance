<?php  
include 'upper.php';
include '../pages/scholarship/scholar_query.php';
 ?>
<section class="home-section ms-3">
 <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
 <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body"> 
      <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#C58940"  name="school-sharp"></ion-icon>
                      <h4 class="text-dark fw-bold">Scholarship</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Scholarship</li>
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
          <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#addFiles"><ion-icon class="me-1" name="folder-sharp"></ion-icon>Add Files</button>
          
        <div class="mt-3">
        <table id="scholar" class="table mt-3 table-striped table-bordered border-dark">
            <thead>
            <th>ID</th>
            <th>Filename</th>
            <th>Category</th>
            <th>size (in mb)</th>
            <th>Downloads</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
            <td><?php echo $file['id']; ?></td>
            <td><?php echo $file['name']; ?></td>
            <td><?php echo $file['category']; ?></td>
            <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
            <td><?php echo $file['downloads']; ?></td>
            <td><a class="btn btn-primary" href="scholarship.php?file_id=<?php echo $file['id'] ?>" role="button"><ion-icon class="me-1" name="download-outline"></ion-icon>Download</a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
        </div>
        </div>
        

 <!-- -----------------------------------------------------------------------edit here---------------------------------------------------------------------------------------- -->
</section>

<!-- Insert File -->
<div class="modal fade" id="addFiles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload files here:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="scholarship.php" method="post" enctype="multipart/form-data" >
      <div class="modal-body">
      <div class="row">
      <label for="message-text"  class="pt-3">Category:</label>
        <div class="pb-2">
          <select class="btn btn-primary btn-sm" name="category">
            <option><a class=" dropdown-item option" value="Research">Research</a></option>
            <option><a class=" dropdown-item option" value="Evaluation">Evaluation</a></option>
            <option><a class=" dropdown-item option" value="Survey">Survey</a></option>
          </select>
        </div>
        <label for="message-text"  class="pt-3">Insert file:</label>
          <input type="file" name="myfile"></input> <br>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon class="me-1" name="close-circle-sharp"></ion-icon>Close</button>
        <button type="submit" name="save" class="btn btn-primary"><ion-icon class="me-1" name="checkmark-circle-sharp"></ion-icon>Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
   include 'lower.php';
?>


<script>  
 $(document).ready(function(){  
      $('#scholar').DataTable();  
 });  
 </script>  
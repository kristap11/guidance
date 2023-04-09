<?php
include 'includes/sms_db.php';
include 'assets/body/upper.php';
?>
  <section class="home-section ms-3 p-3">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
<div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                    <ion-icon class="me-2" size="large" style="color:#A7727D" name="people-circle-sharp"></ion-icon>
                      <h4 class="text-dark fw-bold">Group Counseling</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Group Counseling</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    <div class="card p-3 border-0 overflow-auto mb-3 mt-3 rounded-0 shadow" style="height:650px;">
      <div class="card-body">
          <div class="py-3"> 
          <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target=".inputStudent"><ion-icon class="me-1" name="create-sharp"></ion-icon>Start Counceling</button>
          </div>
    <table id="group" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Student Number</th>
            <th scope="col">Student Name</th>
            <th scope="col">Approach</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?Php
          $query = "SELECT * FROM guidance_group";
          if ($stmt = $conn->query($query)) {
            while ($row = $stmt->fetch_array()) {
              echo "
      <tr>
        <td>$row[group_id]</td>
        <td>$row[stud_id]</td>
        <td>$row[stud_name]</td>
        <td>$row[approach]</td>
        <td>
          <a class='btn btn-primary' type='button' href='pages/services/view_indv.php?group_id=$row[group_id]'><ion-icon class='me-1' name='eye-sharp'></ion-icon>View</a>
        </td>
      </tr>";
            }

          }
          ?>
        </tbody>
      </table>  
      </div>
    </div>
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
        </section>
<!-- START COUNSELING/INPUT STUDENT NUMBER -->
<form action="pages/services/group_counseling.php" method="post">
<div class="modal fade inputStudent" onclick="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-secondary">Start Counseling:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          <div class="modal-body text-secondary">
            <label>Input student's number before proceeding</label><br>
            <a href="javascript:void(0)" class="add-more-form  btn btn-primary"><ion-icon name="add-outline"></ion-icon>Add Student</a><br>
          </div> 
                            <div class="main-form border-bottom">
                            <div class="row mb-2">
                              <div class="col-4 ms-3">
                                <label for="message-text" class="">Student Number:</label>
                                <input type="number" name="stud_id[]"  class="form-control" style="width:300px;" placeholder="ex. 190***22">
                              </div>
                              <div class="col-7 ms-5">
                                <label for="message-text" class="">Student Name:</label>
                                  <div class="d-flex align-items-center">
                                    <input type="text" name="stud_name[]"  class="form-control" style="width:300px;" placeholder="Student Name......">
                                  </div>
                              </div>
                            </div>
                            </div>
                            <div class="paste-new-forms"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input class="btn btn-primary ms-1" type="submit" name="save" value="enter">
      </div>
    </div>
  </div>
</div>
</form>





      
<?php
  include 'assets/body/lower.php';
?>

<script>  
 $(document).ready(function(){  
      $('#group').DataTable();  
 });  
 </script>  

<!---- Rate Scale Questions ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                <div class="row col-md-10">\
                                  <div class="col-5 ms-3">\
                                    <label for="message-text" class="">Student Number:</label>\
                                    <input type="#" name="stud_id[]"  class="form-control" style="width:300px;" placeholder="ex. 190***22">\
                                  </div>\
                                  <div class="col-5 ms-5">\
                                    <label for="message-text" class="">Student Name:</label>\
                                      <div class="d-flex align-items-center">\
                                        <input type="#" name="stud_name[]"  class="form-control" style="width:300px;" placeholder="Student Name......">\
                                      </div>\
                                  </div>\
                                </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
</script>
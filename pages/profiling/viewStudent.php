<?php
    include_once '../../includes/sms_db.php';
    include '../body/upper.php';
?>

<section class="home-section ms-3" style="background-color:#edf2f9;">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="card p-3 border-0 mb-3 rounded-0  mb-2 shadow">
    <div class="card-body">
      <div class="page-breadcrumb border-bottom border-dark">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                      <ion-icon class="me-2" size="large" style="color:#1C82AD" name="people-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Profiling</h4>
                      </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../profiling.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profiling</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

  <?php
    $stud_id=$_GET['stud_id'];
    //$id=4;
    $query = "SELECT * from guidance_profiling where stud_id=?";
      if($stmt=$conn->prepare($query)){
        $stmt->bind_param('i',$stud_id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_object();
  ?>
  <div class="card rounded-0 border-0 shadow">
    <div class="card-body d-flex align-items-center ">
        <div class="p-2">
          <img class="" src="../../assets/images/man.png" width="150" height="150" alt="profile-picture">
        </div>
        <div class="text-dark">          
          <label for="message-text" class="col-form-label"><?php echo "$row->fname";echo "&nbsp";echo "$row->lname";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->stud_id";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->course";echo "&nbsp";echo "$row->year_section";?></label><br>
          <label for="message-text" class="col-form-label"><?php echo "$row->status";?></label><br>
          <div class="">
          <a id='<?php echo "$row->stud_id";?>' class='btn history btn-primary'><ion-icon class='me-1' name="time-sharp"></ion-icon></ion-icon></ion-icon>Counseling History</a>
        <?php
           if ($row->counseling_role == "follow") {
            echo "<button id='$row->stud_id' class='btn btn-warning'><ion-icon class='me-1' name='create-sharp'></ion-icon></ion-icon>Follow-up Conseling</button>";
          } elseif ($row->counseling_role  == "individual") {
           
          }
          
        ?>
        </div>
        </div>
    </div>
  </div>
    <div class="bg-primary text-light mt-3 p-2 shadow">
        <label for="message-text" class="col-form-label">VISITS</label>
    </div>


        <!----- Start of Accordion ---->
  <div class="card  mt-3 border-0 mb-3 bg-light rounded-0 shadow" >
  <div class="card-body">
  <div class="accordion accordion-flush p-2" id="accordionFlushExample">
  <!-------- Personal Information -------------->
  <div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingOne">
      <input class="accordion-button collapsed" value="PERSONAL INFORMATION" type="button" data-bs-toggle="collapse" data-bs-target="#PERSONAL_INFORMATION" aria-expanded="false" aria-controls="flush-collapseOne">
        </input>
    </h2>
  <div id="PERSONAL_INFORMATION" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body ">
    <div class="container">
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Lastname:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->lname";?>" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Firstname:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->fname";?>" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Middlename:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->mname";?>" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nickname:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->nname";?>" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Gender:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->gender";?>" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Permanent Address:</label>
        <div class="col-sm-10">
          <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->per_address";?>" readonly>
        </div>
      </div>


<div class="d-flex align-items-centered" style="margin-left:150px">
    <div class="bg-light rounded-3 p-3">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Date of Birth</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->date_of_birth";?>" readonly>
      </div>
      <div class="input-group p-3 ">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->email";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->contact_number";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Civil Status</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->civil_status";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->religion";?>" readonly>
      </div>
    </div>


    <div class="bg-light rounded-3 ms-3 p-3 ">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Spouse</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->spouse";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Spouse Occupation</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->spuse_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Birth Order</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->birth_order";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">No. of brother/s</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->brother";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">No. of brother/s</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->sister";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Living With</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->living_with";?>" readonly>
      </div>
    </div>
  </div>


  <div class="row d-flex bg-light mt-3 pt-5 align-items-centered rounded-3">  
    <div class="col-6">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of father</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->name_of_father";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_religion";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Educ.Attainment</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_educ";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Occupation</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_company";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->father_email";?>" readonly>
      </div>
    </div>
    <div class="col-6">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Mother</span>
        <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->name_of_mother";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Nationality</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_nationality";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Religion</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_religion";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Educ.Attainment</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_educ";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Occupation</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_occupation";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_company";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->mother_email";?>" readonly>
      </div>
    </div>
  </div> 
    <div class="p-3 mt-3 bg-light rounded-3">
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Guardian</span>
        <input type="text"  class="form-control" value="<?php echo "$row->name_of_gurdian";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Relationship</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_relationship";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_contact";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Email Address</span>
        <input type="text"  class="form-control" value="<?php echo "$row->gurdian_address";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Person to Notify in case of emergency</span>
        <input type="text"  class="form-control" value="<?php echo "$row->emergency_person";?>" readonly>
      </div>
      <div class="input-group p-3">
        <span class="input-group-text" style="background-color:#07177a; color:white;">Contact Num#</span>
        <input type="text"  class="form-control" value="<?php echo "$row->emergency_contact";?>" readonly>
      </div>
    </div>
      </div>
    </div>
  </div>
  </div>

  <!-------- Educational Background -------------->
  <div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingTwo">
      <input class="accordion-button collapsed" value="EDUCATIONAL BACKGROUND" type="button" data-bs-toggle="collapse" data-bs-target="#EDUCATIONAL_BACKGROUND" aria-expanded="false" aria-controls="flush-collapseTwo">
        </input>
    </h2>
    <div id="EDUCATIONAL_BACKGROUND" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          
        <div class="container bg-light p-5 rounded-3">
          <div class="input-group p-3 mb-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Addmision/Registration</span>
            <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->years";?>" readonly>
          </div>
          <h2 class="font-monospace border-bottom border-secondary">Tertiary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_tertiary";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_tertiary";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_tertiary";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_tertiary";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Alternative System</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_als";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_als";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_als";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_als";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Secondary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_name_second";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_second";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_second";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_second";?>" readonly>
                </div>
              </div>
            </div>
          <h2 class="font-monospace border-bottom border-secondary pt-3">Elementary</h2>
            <div class="d-flex align-items-centered">
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">School Name</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->schoo_name_elem";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Address</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->school_add_elem";?>" readonly>
                </div>
              </div>
              <div class="">
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Year Attended/ Graduated</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->year_attended_elem";?>" readonly>
                </div>
                <div class="input-group p-3">
                  <span class="input-group-text" style="background-color:#07177a; color:white;">Honors</span>
                  <input type="text" aria-label="First name" class="form-control" value="<?php echo "$row->honors_elem";?>" readonly>
                </div>
              </div>
            </div>

        </div>
      </div>
  </div>
  </div>

  <!-------- Institotional Affiliation -------------->
  <div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingThree">
      <input class="accordion-button collapsed" value="INSTITUTIONAL AFFILIATION" type="button" data-bs-toggle="collapse" data-bs-target="#INSTITUTIONAL_AFFILIATION" aria-expanded="false" aria-controls="flush-collapseThree">
      </input>
    </h2>
    <div id="INSTITUTIONAL_AFFILIATION" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container bg-light p-3 rounded-3">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Name of Organization</span>
            <input type="text" class="form-control" value="<?php echo "$row->name_of_org";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Affiliation</span>
            <input type="text" class="form-control" value="<?php echo "$row->affilition";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Year</span>
            <input type="text" class="form-control" value="<?php echo "$row->affli_year";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Status</span>
            <input type="text" class="form-control" value="<?php echo "$row->affli_status";?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------- Work Experience -------------->
  <div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingFour">
      <input class="accordion-button collapsed" value="WORK EXPERIENCE" type="button" data-bs-toggle="collapse" data-bs-target="#WORK_EXPERIENCE" aria-expanded="false" aria-controls="flush-collapseFour">
        </input>
    </h2>
    <div id="WORK_EXPERIENCE" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container bg-light p-3 rounded-3">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Company Name</span>
            <input type="text" class="form-control" value="<?php echo "$row->company_name";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Position</span>
            <input type="text" class="form-control" value="<?php echo "$row->position";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">From-to</span>
            <input type="text" class="form-control" value="<?php echo "$row->from_to";?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------- Interest/Talents/Characteristics -------------->
  <div class="accordion-item" style="background-color:#f0f0f0;">
    <h2 class="accordion-header" id="flush-headingFour">
      <input class="accordion-button collapsed" value="INTEREST/TALENTS/CHARACTERISTICS" type="button" data-bs-toggle="collapse" data-bs-target="#INTEREST" aria-expanded="false" aria-controls="flush-collapseFour">
      </input>
    </h2>
    <div id="INTEREST" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="container p-3 bg-light">
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Interest</span>
            <input type="text" class="form-control" value="<?php echo "$row->interest";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Talents</span>
            <input type="text" class="form-control" value="<?php echo "$row->talent";?>" readonly>
          </div>
          <div class="input-group p-3">
            <span class="input-group-text" style="background-color:#07177a; color:white;">Characteristics</span>
            <input type="text" class="form-control" value="<?php echo "$row->characteristic";?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div> <!----- End of Accordion ---->
  </div>
  </div>

  <?php } ?>

  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<!-- View Result -->
<form action="../services/indv_session.php" method="post">
<div class="modal fade" id="viewResult" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-5">
        <div class="view_result">
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" href="#" data-bs-dismiss="modal" role="button">Close</a>
        <button type="submit" value="submit" name="submit" class="btn btn-primary"><ion-icon class="me-1" name="add-circle-sharp"></ion-icon>Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="modal fade" id="viewHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-5">
        <div class="view_history">
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" href="#" data-bs-dismiss="modal" role="button">Close</a>
      </div>
    </div>
  </div>
</div>

<?php
  include '../body/lower.php';
?>

<!---- view ---->
<script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "follow_up.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".view_result").html(result);
  }});


        $('#viewResult').modal("show");
    })
})

  </script>

<script>
$(document).ready(function(){
    $('.history').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "history.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".view_history").html(result);
  }});
        $('#viewHistory').modal("show");
    })
})

  </script>


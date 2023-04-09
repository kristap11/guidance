<?php
    include '../body/upper.php';
?>

<section class="home-section ms-3 " style="background-color:#edf2f9;">
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

<div class="bg-light p-3 shadow mb-3">
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>

<div class="card rounded-0 border-0 shadow">
  <div class="card-body">
  <form id="regiration_form" action="add_profile_query.php"  method="post">
  <fieldset class="container text-dark p-3">
  <h4 class="font-monospace pt-3 border-bottom border-secondary">STUDENT INFORMATION:</h4>
          <div class="row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Student Number:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="stud_id" placeholder="">
            </div>
          </div>
          <div class="row mt-1">
            <label for="inputPassword" class="col-sm-2 col-form-label">Course:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="course" placeholder="" ></input>
            </div>
          </div>
          <div class="row mt-1">
            <label for="inputPassword" class="col-sm-2 col-form-label">Year & Section:</label>
              <div class="col-sm-10">
              <input type="text" name="year_section" class="form-control" placeholder=""></input>
            </div>
          </div>
          <div class="row mt-1">
            <label for="inputPassword" class="col-sm-2 col-form-label">Status:</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Regular" >
                  <label class="form-check-label" for="inlineRadio1">Regular</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Irregular" >
                  <label class="form-check-label" for="inlineRadio2">Irregular</label>
                </div>
              </div>
          </div>

            <h4 class="font-monospace pt-3 border-bottom border-secondary">PERSONAL INFORMATION:</h4>
            <div class="row mt-1">
              <label for="inputPassword" class="col-sm-2 col-form-label">Student Name:</label>
                <div class="col-sm-10">
                  <div class="d-flex align-items-start">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" ></input>
                    <input type="text" class="form-control" name="fname" placeholder="First Name" ></input>
                    <input type="text" class="form-control" name="mname" placeholder="Middle Name" ></input>
                  </div>
              </div>
            </div>
            <div class="row mt-1">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nickname:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nname" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label for="inputPassword" class="col-sm-2 col-form-label">Date of Birth:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="date_of_birth"></input>
                </div>
            </div>
            <div class="row mt-1">
              <label for="inputPassword" class="col-sm-2 col-form-label">Gender:</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Email Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Contact Number:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="contact_number" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Permanent Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="per_address" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Nationality:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nationality" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Civil Status:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="civil_status" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Religion:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="religion" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Name of Spouse(if married):</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="spouse" placeholder="" ></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Spouse's Occupation:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="spuse_occupation" placeholder="" ></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Birth Order:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="birth_order" placeholder=""></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">No. of brother/s:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="brother" placeholder="" ></input>
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">No. of sister/s:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="sister" placeholder="" ></input>
                </div>
            </div>
            <div class="row mt-1">
            <label for="inputPassword" class="col-sm-3 col-form-label">Living with (please choose):</label>
              <div class="col-sm-8">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault1" value="Parents" >
                  <label class="form-check-label" for="inlineRadio1">Parents</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault2" value="Guardian" >
                  <label class="form-check-label" for="inlineRadio2">Guardian</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault3" value="Boarding House">
                  <label class="form-check-label" for="inlineRadio2">Boarding House</label>
                </div>
              </div>
            </div>
          
      <button type="button" name="password" class="next btn btn-sm btn-primary"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button> 
  </fieldset>
  <fieldset class="container p-3 text-dark">
        <h4 class="font-monospace pt-3 border-bottom border-secondary">PERSONAL INFORMATION:</h4>

        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <label class="col-sm-3 col-form-label">Name of Father:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name_of_father" placeholder="">
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Address:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_address" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Nationality:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_nationality" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Religion:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_religion" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Educ. Attainment:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_educ" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Occupation:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_occupation" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Company Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_company" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Birthdate:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_birthdate" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Contact Number/s:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_contact" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Email Address:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="father_email" placeholder="" >
              </div>
            </div>
          </div>

       

<!---- mother ---->
          <div class="col-sm-6">
            <div class="row">
              <label class="col-sm-3 col-form-label">Name of Mother:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name_of_mother" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Address:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_address" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Nationality:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_nationality" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Religion:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_religion" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Educ. Attainment:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_educ" placeholder="">
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Occupation:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_occupation" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Company Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_company" placeholder="">
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Birthdate:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_birthdate" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Contact Number/s:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_contact" placeholder="" >
              </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-3 col-form-label">Email Address:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="mother_email" placeholder="" >
              </div>
            </div>
          </div>
        </div>


            <div class="row mt-4">
              <label class="col-sm-2 col-form-label">Name of Guardian:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name_of_gurdian" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Relationship:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gurdian_relationship" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gurdian_address" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Contact no#:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gurdian_contact" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Email Address of Guardian:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="gurdian_email" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Person to notify in case of emergency:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="emergency_person" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Contact no#:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="emergency_contact" placeholder="" >
                </div>
            </div>

  <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
  <button type="button" name="next" class="next btn btn-primary btn-sm"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button>
  </fieldset>
  <fieldset class="container p-3 text-dark">
  <h4 class="border-bottom border-secondary">Educational Background:</h4>
  <div class="container p-3">
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Please Select if you are:</label>
                <div class="col-sm-10">
                  <div class="div d-inline-flex text-center mt-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="years" id="flexRadioDefault1" value="Freshmen">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Freshmen
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault2" value="Transferee">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Transferee
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault3" value="Second Degree">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Second Degree
                      </label>
                    </div>
                  </div>
                </div>
            </div>
        <h5 class="text-center">Tertiary</h5>
          
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">School Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_name_tertiary" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_add_tertiary" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Year Attended/Graduated:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="year_attended_tertiary" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Honors:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="honors_tertiary" placeholder="" >
                </div>
            </div>

            
       

        <h5 class="text-center pt-3">Alternative Learning System</h5>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">School Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_name_als" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_add_als" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Year Attended/Graduated:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="year_attended_als" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Honors:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="honors_als" placeholder="" >
                </div>
            </div>


        <h5 class="text-center pt-3">Secondary</h5>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">School Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_name_second" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_add_second" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Year Attended/Graduated:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="year_attended_second" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Honors:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="honors_second" placeholder="">
                </div>
            </div>

        <h5 class="text-center pt-3">Elementary</h5>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">School Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="schoo_name_elem" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Address:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="school_add_elem" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Year Attended/Graduated:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="year_attended_elem" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Honors:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="honors_elem" placeholder="" >
                </div>
            </div>
   
      </div>
      <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
      <button type="button" name="next" class="next btn btn-primary btn-sm"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button>
  </fieldset>
  <fieldset class="container p-3 text-dark">
  <h4 class="pt-3 border-bottom border-secondary">Insisutional Affiliation:(Optional)</h4>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Name of Organization:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name_of_org" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Affiliation:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="affilition" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Year:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="affli_year" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Status:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="affli_status" placeholder="">
                </div>
            </div>

  <h4 class="pt-3 border-bottom border-secondary">Work Experience:(Optional)</h4>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Company Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="company_name" placeholder="">
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">Position:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="position" placeholder="" >
                </div>
            </div>
            <div class="row mt-1">
              <label class="col-sm-2 col-form-label">From-To:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="from_to" placeholder="" >
                </div>
            </div>  
      
      <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
      <button type="button" name="next" class="next btn btn-primary btn-sm"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button>
  </fieldset>
  <fieldset class="container p-3 text-dark">
  <h4 class="border-bottom border-secondary pt-3">Interest:</h4>
  <div class="container p-3 ">
        <div class="form-check">
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching TV" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching TV</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Reading Books" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Reading Books</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Collecting Items" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Collecting Items</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Taking care of pets" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Taking care of pets</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Going out w/Friends" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Going out w/Friends</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching Movies" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching Movies</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Shopping" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Shopping</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Eating" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Eating</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Hiking" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Hiking</label>
              </div>
          </div>
        </div>
      </div>
    <h4 class="border-bottom border-secondary pt-3">TALENTS:</h4>
    <div class="container p-3">
        <div class="form-check">
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dramatic" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dramatic</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Singing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Singing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dancing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dancing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Painting" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Painting</label>
          </div>
        </div>
      </div>
      <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
      <button type="button" name="next" class="next btn btn-primary btn-sm"><ion-icon name="caret-forward-sharp"></ion-icon>Next</button>
  </fieldset>
  <fieldset class="container text-dark p-3">
  <h4 class="border-bottom border-secondary pt-3">CHARACTERISTICS:</h2> <h5>(you may check more than one Characteristics.)</h4>
      <div class="container p-3">
        <div class="form-check">
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Friendly" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Friendly</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Jealous" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Jealous</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Industrious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Industrious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Stubborn" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Stubborn</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Patient" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Patient</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Confident" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Confident</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Kind" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Kind</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Pessimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Pessimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Thoughtful" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Thoughtful</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Insecure" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Insecure</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Humble" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Humble</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Independent" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Independent</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Studious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Studious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Talkative" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Talkative</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Optimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Optimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Moody" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Moody</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Understanding" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Understanding</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Dommineering" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Dommineering</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Sensitive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Sensitive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Responsive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Responsive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Selfish" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Selfish</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Spoiled" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Spoiled</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Lazy" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate">Lazy</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Quiet" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Quiet</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Observant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Observant</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Tolerant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Tolerant</label>
              </div>
          </div>
        </div>
        </div>
      </div>
    <button type="button" name="previous" class="previous btn btn-primary btn-sm"><ion-icon name="caret-back-sharp"></ion-icon>Previous</button>
    <button type="submit" name="submit" class="submit btn btn-success btn-sm"><ion-icon name="caret-forward-sharp"></ion-icon>Finished</button>
  </fieldset>
  </form>
  </div>
</div>

  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<?php
  include '../body/lower.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>
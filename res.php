<?php 
  include 'assets/body/upper.php';
?>

<section class="home-section ms-3" style="background-color:#edf2f9;">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
<div class="card border-0 rounded-0 shadow p-3 mb-3">
    <div class="card-body">
        <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                    <div class="d-flex align-items-start">
                     <ion-icon class="me-2" size="large" style="color:#497174" name="document-text-sharp"></ion-icon>
                        <h4 class="text-dark fw-bold">Research/Evaluation/Survey</h4>  
                        </div>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Research/Evaluation/Survey</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

        <div class="row mb-3">
  <div class="col-sm-2 mt-3">
  <div class="card  border-0 rounded-0 shadow " >
    <div class="card-body">
     <h6 class="ps-2 pe-2 pt-2">Create your custom PDF questionnaire using this template.</h6>
                    <div class="col-sm-11 d-flex align-items-center justify-content-center ">
                        <span >
                            <a data-bs-toggle="modal" data-bs-target="#create" target="_blank"><img class="img_temp" src="assets/images/create_temp.png"/></a><br>
                        </span>
                    </div> 
                 </div>
  </div>
  </div>
  <div class="col-sm-10 mt-3">
  <div class="card border-0 p-3 rounded-0 shadow">
            <div class="card-body">
                <div class="border-bottom border-secondary ">
                    <h5 class="fw-bold"><ion-icon class="me-2" size="small" style="color:#6C00FF;" name="newspaper-sharp"></ion-icon>Select Your Template</h5>
                </div>
                 <div class="row">
                 <div class="col-sm-3 text-center mt-2">
                  <span>
                    <a data-bs-toggle="modal" data-bs-target="#rating_scale" target="_blank"><img class="img_temp" src="assets/images/rate_scale.png" ></a><br>
                  </span>
                  <label >Rating Scale Questionnaire</label>
                    </div>
                    <div class="col-sm-3 text-center mt-2">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#open_ended" target="_blank"><img class="img_temp" src="assets/images/open_ended.png" /></a><br>
                        </span>
                        <label >Open Ended Questionnaire</label>
                    </div>
                    <div class="col-sm-3 text-center mt-2">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#close_ended" target="_blank"><img class="img_temp" src="assets/images/closed_ended.png"  /></a><br>
                        </span>
                        <label >Closed Ended Questionnaire </label>
                    </div>
                    <div class="col-sm-3 text-center mt-2">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#dichotomous" target="_blank"><img class="img_temp" src="assets/images/dichotomous.png"  /></a><br>
                        </span>
                        <label >Dichotomous Questionnaire </label>
                    </div>
                    <div class="col-sm-3 text-center mt-2">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#likert_scale" target="_blank"><img class="img_temp" src="assets/images/likert_scale.png"  /></a><br>
                        </span>
                        <label >Likert Questionnaire </label>
                    </div>
                    <div class="col-sm-3 text-center mt-2">
                        <span>
                            <a data-bs-toggle="modal" data-bs-target="#good_moral" target="_blank"><img class="img_temp" src="assets/images/good_moral.jpg" /></a><br>
                        </span>
                        <label>Good Moral</label>
                    </div> 
                 </div>
            </div>
    </div>
    </div>
  </div>

<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<!-- Rate Scale Question -->
<form action="pages/res/rating_scale.php" method="POST">
    <div class="modal fade" id="rating_scale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Rating Scale Questionnaire</h5>  
            
        </div>
        <div class="modal-body">
            <div class="text-center">
                <img src="assets/images/rate_scale.png" style="height:600px;" />
            </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-2">
                                            <br>
                                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Question</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="">Question:</label>
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- Open Ended Questions -->
<form action="pages/res/open_ended.php" method="POST">
    <div class="modal fade" id="open_ended" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Open Ended Questionnaire</h5>
        </div>
        <div class="modal-body">
        <div class="text-center">
        <img src="assets/images/open_ended.png" style="height:600px;" />
        </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-2">
                                            <br>
                                            <a href="javascript:void(0)" class="add-more-form2 float-end btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Question</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="main-form2 mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="">Question:</label>
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-form2"></div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- Closed Ended Questions -->
<form action="pages/res/closed_ended.php" method="POST">
    <div class="modal fade" id="close_ended" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Closed Ended Questionnaire</h5>  
        </div>
        <div class="modal-body">
        <div class="text-center">
        <img src="assets/images/closed_ended.png" style="height:600px;" />
        </div>
        <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-2">
                                            <br>
                                            <a href="javascript:void(0)" class="add-more-form3 float-end btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Question</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="main-form3 mt-3 border-bottom">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="">Question:</label>
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="">A.) Answer</label>
                                            <input type="text" name="answer1[]" class="form-control" required placeholder="Enter Your Anwer Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="">B.) Answer</label>
                                            <input type="text" name="answer2[]" class="form-control" required placeholder="Enter Your Anwer Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="">c.) Answer</label>
                                            <input type="text" name="answer3[]" class="form-control" required placeholder="Enter Your Anwer Here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="">D.) Answer</label>
                                            <input type="text" name="answer4[]" class="form-control" required placeholder="Enter Your Anwer Here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-form3"></div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- Dichotomous Questions -->
<form action="pages/res/Dichotomous.php" method="POST">
    <div class="modal fade" id="dichotomous" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Dichotomous Questionnaire</h5>  
           
        </div>
        <div class="modal-body">
        <div class="text-center">
        <img src="assets/images/dichotomous.png" style="height:600px;" />
        </div>
        <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-2">
                                            <br>
                                            <a href="javascript:void(0)" class="add-more-form4 float-end btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Question</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="main-form4 mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="">Question:</label>
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Name Here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-form4"></div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- Likert Scale Question -->
<form action="pages/res/likert_scale.php" method="POST">
    <div class="modal fade" id="likert_scale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Likert Scale Questionnaire</h5>  
        </div>
        <div class="modal-body">
        <div class="text-center">
        <img src="assets/images/likert_scale.png" style="height:600px;" />
        </div>
        <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-2">
                                            <br>
                                            <a href="javascript:void(0)" class="add-more-form5 float-end btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Question</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="main-form5 mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label for="">Question:</label>
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-form5"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- Good Moral-->
<form action="pages/res/good_moral.php" method="POST">
    <div class="modal fade" id="good_moral" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Good Moral</h5>  
        </div>
        <div class="modal-body">
        <div class="text-center">
        <img src="assets/images/good_moral.jpg" style="height:600px;" />
        </div>
                            <div class="main-form6 mt-3 border-bottom">
                                <div class="">
                                <div class="row g-3">
                                    <div class="col-auto">
                                        <label class="">First Name:</label>
                                        <input name="fname[]" class="form-control" required>
                                    </div>
                                    <div class="col-auto">
                                        <label  class="">Last Name:</label>
                                        <input name="lname" class="form-control" required>
                                    </div>
                                    <div class="col-auto">
                                        <label  class="">Middle Initial:</label>
                                        <input name="initial" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label  class="">Suffix(Optional):</label>
                                        <input name="suffix" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Grade/Year:</label>
                                            <select class="form-select-sm" name="grade_year" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option><a class=" dropdown-item option" value="1st year">1st year</a></option>
                                                <option><a class=" dropdown-item option" value="2nd year">2nd year</a></option>
                                                <option><a class=" dropdown-item option" value="3rd year">3rd year</a></option>
                                                <option><a class=" dropdown-item option" value="4th year">4th year</a></option>
                                                <option><a class=" dropdown-item option" value="Grade 11">Grade 11</a></option>
                                                <option><a class=" dropdown-item option" value="Grade 12">Grade 12</a></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Course/Strand:</label>
                                            <select class="form-select-sm" name="course_strand" id="validationCustom04" required>
                                                <option selected disabled value="">Select...</option>
                                                <option><a class=" dropdown-item option" value="BS Information Technology">BS Information Technology</a></option>
                                                <option><a class=" dropdown-item option" value="BS Hospitality Management">BS Hospitality Management</a></option>
                                                <option><a class=" dropdown-item option" value="BS Office Administration">BS Office Administration</a></option>
                                                <option><a class=" dropdown-item option" value="BS Business Administration">BS Business Administration</a></option>
                                                <option><a class=" dropdown-item option" value="BS Criminology">BS Criminology</a></option>
                                                <option><a class=" dropdown-item option" value="Bachelor of Elementary Education">Bachelor of Elementary Education</a></option>
                                                <option><a class=" dropdown-item option" value="Bachelor of Secondary Education">Bachelor of Secondary Education</a></option>
                                                <option><a class=" dropdown-item option" value="BS Computer Engineering">BS Computer Engineering</a></option>
                                                <option><a class=" dropdown-item option" value="BS Tourism">BS Tourism</a></option>
                                                <option><a class=" dropdown-item option" value="BS Entrepreneurship">BS Entrepreneurship</a></option>
                                                <option><a class=" dropdown-item option" value="BS Accounting Information System">BS Accounting Information System</a></option>
                                                <option><a class=" dropdown-item option" value="BS Psychology">BS Psychology</a></option>
                                                <option><a class=" dropdown-item option" value="BS Information Science">BS Information Science</a></option>
                                                <option><a class=" dropdown-item option" value="General Academic Strand">General Academic Strand</a></option>
                                                <option><a class=" dropdown-item option" value="Accountancy Business and Management">Accountancy Business and Management</a></option>
                                                <option><a class=" dropdown-item option" value="Humanities and Social Science">Humanities and Social Science</a></option>
                                                <option><a class=" dropdown-item option" value="Information and Computer Technology">Information and Computer Technology</a></option>
                                            </select>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-auto mt-2">
                                                <label class="">School Year:</label>
                                                <input type="number" name="year1" class="form-control" placeholder="example: 2010" required>
                                            </div>
                                            <div class="col-auto">
                                                <label  class=""></label>
                                                <input type="number" name="year2" class="form-control" placeholder="example: 2011"  required>
                                            </div>
                                        </div>
                                    </div>
                            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- CREATE -->
<form action="pages/res/create_pdf.php" method="POST">
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Custom Questionnaire</h5>
        </div>
        <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center" style="height:260px;">
                    <div class="carousel-indicators" >
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="width:500px; height:300px;" >
                        <div class="carousel-item active">
                        <img src="assets/images/create_open.png" class="d-block w-100" alt="..." >
                        </div>
                        <div class="carousel-item">
                        <img src="assets/images/create_dichotomous.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/images/create_close.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="" style="color:gray"><ion-icon size="large" name="chevron-back-outline"></ion-icon></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="" style="color:gray"><ion-icon size="large" name="chevron-forward-outline"></ion-icon></span>
                    </button>
                </div>
                                <div class="row">
                                    <div class="row mt-5">
                            <div class="col">
                                <a href="javascript:void(0)" class="add-more-form6  btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Open Ended Question</a>
                                </div>
                                <div class="col">
                                <a href="javascript:void(0)" class="add-more-form7  btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Dichotomous Question</a>
                                </div>
                                <div class="col">
                                <a href="javascript:void(0)" class="add-more-form8  btn btn-warning"><ion-icon name="add-outline"></ion-icon>Add Close Ended Question</a>
                                </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                        <label for="">Title:</label>
                                        <input type="title" name="title" class="form-control" required placeholder="Enter Title Here">
                                        <input type="title" name="open_ended[]" class="form-control visually-hidden">
                                        <input type="text" name="dichotomous[]" class="form-control visually-hidden">
                                        <input type="text" name="close_ended[]" class="form-control visually-hidden">
                                        <input type="text" name="answer1[]" class="form-control visually-hidden">
                                        <input type="text" name="answer2[]" class="form-control visually-hidden">
                                        <input type="text" name="answer3[]" class="form-control visually-hidden">
                                        <input type="text" name="answer4[]" class="form-control visually-hidden">
                                        </div>
                                    </div>
                                 
                                </div>
                            <div class="paste-new-form6 "></div>
                            <div class="paste-new-form7 "></div>
                            <div class="paste-new-form8 "></div>
                           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><ion-icon name="close-circle-sharp"></ion-icon>Close</button>
            <button type="submit" name="save_multiple_data" class="btn btn-primary"><ion-icon name="print-outline"></ion-icon>Generate into PDF</button>
        </div>
        </div>
    </div>
    </div>
</form>

<?php
  include 'assets/body/lower.php';
?>

<style>
    .img_temp{margin:10px; border-radius: 2% ;  border: 1px solid gray; border-bottom:  5px solid #07177a; width:100%; }

    .selected{
    box-shadow:0px 12px 22px 1px #6B728E;
    }

</style>

<script>
    $('.img_temp').click(function(){
    $('.selected').removeClass('selected'); // removes the previous selected class
    $(this).addClass('selected'); // adds the class to the clicked image
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
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                            <label for="">Question:</label>\
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">\
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

<!---- Open Ended Questions ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form2').remove();
            });
            
            $(document).on('click', '.add-more-form2', function () {
                $('.paste-new-form2').append('<div class="main-form2 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                            <label for="">Question:</label>\
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">\
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

<!---- Close Ended Questions ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form3').remove();
            });
            
            $(document).on('click', '.add-more-form3', function () {
                $('.paste-new-form3').append('<div class="main-form3 mt-3 border-bottom">\
                                    <div class="col-md-12">\
                                        <div class="form-group mb-2">\
                                            <label for="">Question:</label>\
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                            <div class="row">\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">A.) Answer</label>\
                                            <input type="text" name="answer1[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">B.) Answer</label>\
                                            <input type="text" name="answer2[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">c.) Answer</label>\
                                            <input type="text" name="answer3[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">D.) Answer</label>\
                                            <input type="text" name="answer4[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="d-flex justify-content-end">\
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

<!---- Dichotomous Questions ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form4').remove();
            });
            
            $(document).on('click', '.add-more-form4', function () {
                $('.paste-new-form4').append('<div class="main-form4 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                            <label for="">Question:</label>\
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Name Here">\
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

<!---- Likert Scale Questions ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn5', function () {
                $(this).closest('.main-form5').remove();
            });
            
            $(document).on('click', '.add-more-form5', function () {
                $('.paste-new-form5').append('<div class="main-form5 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                            <label for="">Question:</label>\
                                            <input type="text" name="question[]" class="form-control" required placeholder="Enter Question Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn5 btn btn-danger"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
</script>

<!---- Create_opened_question ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn6', function () {
                $(this).closest('.main-form6').remove();
            });

            $(document).on('click', '.add-more-form6', function () {
                $('.paste-new-form6').append('<div class="main-form6 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                       \
                                        <label for="">Open Ended Question:</label>\
                                        <input type="title" name="open_ended[]" class="form-control" placeholder="Enter Question Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn6 btn btn-danger"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\ ');
            });

        });
</script>

<!---- Create_Dichotomous_question ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn7', function () {
                $(this).closest('.main-form7').remove();
            });
            
            $(document).on('click', '.add-more-form7', function () {
                $('.paste-new-form7').append('<div class="main-form7 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-10">\
                                        <div class="form-group mb-2">\
                                       \
                                        <label for="">Dichotomous Question:</label>\
                                        <input type="title" name="dichotomous[]" class="form-control" placeholder="Enter Question Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn7 btn btn-danger"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
</script>

<!---- Close_ended_question ----->
<script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn8', function () {
                $(this).closest('.main-form8').remove();
            });
            
            $(document).on('click', '.add-more-form8', function () {
                $('.paste-new-form8').append('<div class="main-form8 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-12">\
                                        <div class="form-group mb-2">\
                                       \
                                        <label for="">Close Ended Question:</label>\
                                        <input type="title" name="close_ended[]" class="form-control" placeholder="Enter Question Here">\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">A.) Answer</label>\
                                            <input type="text" name="answer1[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">B.) Answer</label>\
                                            <input type="text" name="answer2[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">c.) Answer</label>\
                                            <input type="text" name="answer3[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-6">\
                                        <div class="form-group mb-2">\
                                            <label for="">D.) Answer</label>\
                                            <input type="text" name="answer4[]" class="form-control" required placeholder="Enter Your Anwer Here">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-12 text-end">\
                                        <div class="form-group mb-2">\
                                            <button type="button" class="remove-btn8 btn btn-danger"><ion-icon class="me-1" name="remove-circle-sharp"></ion-icon>Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
</script>



<script>  
 $(document).ready(function(){  
      $('#res').DataTable();  
 });  
 </script>  
<?php
session_start();

if(isset($_POST["emp_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");  
    $query = "SELECT * FROM guidance_profiling WHERE stud_id = '".$_POST["emp_id"]."'";  
    $result = mysqli_query($connect, $query);  


    while($row = mysqli_fetch_array($result))  
    {  
     $output .= '  

     <div class="text-dark">
          <div class="row ">
               <label for="staticEmail" class="col-sm-3 text-dark fw-bold col-form-label" >Student name:</label>
               <div class="col-sm-5">
               <input type="text" class="form-control border-0" style="background:0%;" value="'.$row["fname"].' '.$row["lname"].'"  readonly>
               <input type="text" name="id" class="visually-hidden form-control border-0" style="background:0%;" value="'.$row["id"].'"  readonly>
               <input type="text" name="name" class="visually-hidden form-control border-0" style="background:0%;" value="'.$row["fname"].'"  readonly>
               <input type="text" name="lname" class="visually-hidden form-control border-0" style="background:0%;" value="'.$row["lname"].'"  readonly>
               </div>
          </div>
          <div class="row ">
               <label for="staticEmail" class="col-md-3 text-dark fw-bold col-form-label" >Student num#:</label>
               <div class="col-sm-5">
               <input type="text" name="stud_id" class="form-control border-0" style="background:0%;" value='.$row["stud_id"].'  readonly>
               </div>
          </div>
          <div class="row ">
              <label for="staticEmail" class="col-sm-3 text-dark fw-bold col-form-label" >Course:</label>
            <div class="col-sm-5">
              <input type="text" name="course_year_section" class="form-control border-0" style="background:0%;" value="'.$row["course"].' - '.$row["year_section"].'"  readonly>
            </div>
          </div>
          <div class="row ">
               <label for="staticEmail" class="col-sm-3 text-dark fw-bold col-form-label" >Status:</label>
               <div class="col-sm-5">
               <input type="text" name="status" class="form-control border-0" style="background:0%;" value='.$row["status"].'  readonly>
               </div>
          </div>

          <div class="mb-3">
                <label for="message-text" class="col-form-label fw-bold">I. Background of the Case:</label>
                <textarea class="form-control" name="background" rows="6" required></textarea>
          </div>
          <div class="mb-3">
          <label for="message-text" class="col-form-label fw-bold">II. Counseling Plan:</label>
          <div class="mb-3 ps-2">
            <label for="message-text" class="col-form-label me-3">a. Counseling Approach(es):</label>
            <select class="form-select-sm" name="approach" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option><a class=" dropdown-item option" value="Behavior Therapy">Behavior Therapy</a></option>
              <option><a class=" dropdown-item option" value="Cognitive Therapy">Cognitive Therapy</a></option>
              <option><a class=" dropdown-item option" value="Educational Counseling">Educational Counseling</a></option>
              <option><a class=" dropdown-item option" value="Holistic Therapy">Holistic Therapy</a></option>
              <option><a class=" dropdown-item option" value="Mental Health Counseling">Mental Health Counseling</a></option>
            </select><br>
            <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
            <textarea class="form-control" name="goal" id="" rows="6" required></textarea>
          </div>
        </div>
        <div class="mb-3">
                <label for="message-text" class="col-form-label">III. Comments:</label>
                <textarea class="form-control" name="comment" rows="6" required></textarea>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">IV. Recommendations:</label>
                <textarea class="form-control" name="recommendation" rows="6" required></textarea>
          </div>
          <input type="text" name="role" class="visually-hidden" value="follow_up"  readonly>
     </div>
     ';  
}  

echo $output;  

}
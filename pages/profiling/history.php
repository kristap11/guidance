<?php
session_start();

$connect = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");  

if(isset($_POST["emp_id"]))  
{
    $output = '';
    $query = "SELECT * FROM guidance_individual WHERE stud_id = '".$_POST["emp_id"]."' AND role = 'counseling'";  
    $result = mysqli_query($connect, $query);  
    
    if($row = mysqli_fetch_array($result))  
    {  

     $output .= ' 
     <div class="text-dark">
      <h4>Counseling History</h4>
      <div class="row ">
               <label for="staticEmail" class="col-md-4 text-dark col-form-label" >Date/Time Counseled:</label>
               <div class="col-sm-5">
               <label for="staticEmail" class="col-md-7 text-dark col-form-label" >'.$row["date"].' '.$row["time"].'</label>
               </div>
          </div>
     <div class="mb-3">
           <label for="message-text" class="col-form-label fw-bold">I. Background of the Case:</label>
           <textarea class="form-control" name="background" rows="6" readonly>'.$row["background"].'</textarea>
     </div>
     <div class="mb-3">
     <label for="message-text" class="col-form-label fw-bold">II. Counseling Plan:</label>
     <div class="mb-3 ps-2">
       <div class="row ">
               <label for="staticEmail" class="col-md-4 text-dark col-form-label" >a. Counseling Approach(es):</label>
               <div class="col-sm-5">
               <label for="staticEmail" class="col-md-7 text-dark col-form-label" >'.$row["approach"].'</label>
               </div>
          </div>
       <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
       <textarea class="form-control" name="goal" id="" rows="6" readonly>'.$row["goal"].'</textarea>
     </div>
   </div>
   <div class="mb-3">
           <label for="message-text" class="col-form-label">III. Comments:</label>
           <textarea class="form-control" name="comment" rows="6" readonly>'.$row["comment"].'</textarea>
         </div>
         <div class="mb-3">
           <label for="message-text" class="col-form-label">IV. Recommendations:</label>
           <textarea class="form-control" name="recommendation" rows="6" readonly>'.$row["recommendation"].'</textarea>
     </div>
</div>
     ';  
}else{
  echo "No Counseling History";
}

echo $output;  


$output = '';
    $query = "SELECT * FROM guidance_individual WHERE stud_id = '".$_POST["emp_id"]."' AND role = 'follow_up'";  
    $result = mysqli_query($connect, $query);  
    
    while($row = mysqli_fetch_array($result))  
    {  

     $output .= ' 

     <div class="text-dark">
       <h4>Follow-Up Counseling History</h4>
     <div class="mb-3">
           <label for="message-text" class="col-form-label fw-bold">I. Background of the Case:</label>
           <textarea class="form-control" name="background" rows="6" readonly>'.$row["background"].'</textarea>
     </div>
     <div class="mb-3">
     <label for="message-text" class="col-form-label fw-bold">II. Counseling Plan:</label>
     <div class="mb-3 ps-2">
       <div class="row ">
               <label for="staticEmail" class="col-md-4 text-dark col-form-label" >a. Counseling Approach(es):</label>
               <div class="col-sm-5">
               <label for="staticEmail" class="col-md-7 text-dark col-form-label" >'.$row["approach"].'</label>
               </div>
          </div>
       <label for="message-text" class="col-form-label">b. Counseling Goals:</label>
       <textarea class="form-control" name="goal" id="" rows="6" readonly>'.$row["goal"].'</textarea>
     </div>
   </div>
   <div class="mb-3">
           <label for="message-text" class="col-form-label">III. Comments:</label>
           <textarea class="form-control" name="comment" rows="6" readonly>'.$row["comment"].'</textarea>
         </div>
         <div class="mb-3">
           <label for="message-text" class="col-form-label">IV. Recommendations:</label>
           <textarea class="form-control" name="recommendation" rows="6" readonly>'.$row["recommendation"].'</textarea>
     </div>
</div>
     ';  
}  

echo $output;  

}
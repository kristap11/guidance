<?php
session_start();

if(isset($_POST["emp_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");  
    $query = "SELECT * FROM guidance_individual WHERE indv_id = '".$_POST["emp_id"]."'";  
    
    $result = mysqli_query($connect, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output = '  

               <form action="accept.php?id='.$row["indv_id"].' ?>"  method="POST">

               <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" required>
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="time" name="time" class="form-control" id="exampleFormControlInput1" required>
               </div>


               <button class="btn btn-primary btn-sm button-submit" name="submit" type="submit">Submit</button>
               </form

              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  


}
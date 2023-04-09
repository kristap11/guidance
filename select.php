<?php
session_start();

if(isset($_POST["emp_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");  
    $query = "SELECT * FROM guidance_requests WHERE id = '".$_POST["emp_id"]."'";  
    
    $result = mysqli_query($connect, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output = '  

               <form action="student/accept.php?id='.$row["id"].' ?>"  method="POST">

               <div class="mb-3">
               <label for="inputEmail" class="sr-only">Date</label>
               <input name="date" type="date" id="date" class="form-control " placeholder="Date" required autofocus>
               <label for="inputEmail" class="sr-only">Time</label>
               <input name="time" type="time" id="time" min="9:00" max="16:00" class="form-control" placeholder="Date" required autofocus>
               </div>


               <button class="btn btn-primary btn-sm button-submit" name="submit" type="submit">Submit</button>
               </form

              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  


}
?>

<script>
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth() + 1;
    var maxmonth = month + 1;
    var year = date.getUTCFullYear();

    if (month < 10) {
      month = '0' + month;
    }

    if (maxmonth < 10) {
      maxmonth = '0' + maxmonth;
    }

    if (tdate < 10) {
      tdate = '0' + tdate;
    }
    
    var mindate = year + "-" + month + "-" + tdate;
    var maxdate = year + "-" + maxmonth + "-" + tdate;
    document.getElementById("date").setAttribute('min', mindate);
    document.getElementById("date").setAttribute('max', maxdate);
    console.log(mindate, maxdate);
  </script>


<?php
session_start();

if(isset($_POST["emp_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");  
    $query = "SELECT * FROM guidance_stud_eval WHERE id = '".$_POST["emp_id"]."'";  
    $result = mysqli_query($connect, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
     $output .= '  
     <tr>  
          <td width="30%"><label>Student ID</label></td>  
          <td width="70%">'.$row["stud_id"].'</td>  
     </tr>  
     <tr>  
          <td width="30%"><label>Name</label></td>  
          <td width="70%">'.$row["name"].'</td>  
     </tr>  
     <tr>  
          <td width="30%"><label>Personality Type</label></td>  
          <td width="70%">'.$row["type"].'</td>  
     </tr>  
     <tr>  
          <td width="30%"><label>Profile</label></td>  
          <td width="70%">'.$row["profile"].'</td>  
     </tr> 
     <tr>  
          <td width="30%"><label>Meaning</label></td>  
          <td width="70%">'.$row["meaning"].'</td>  
     </tr> 
     <tr>  
          <td width="30%"><label>Percentage</label></td>  
          <td width="70%">'.$row["percentage"].'</td>  
     </tr> 
     <tr>  
          <td width="30%"><label>Description</label></td>  
          <td width="70%">'.$row["description"].'</td>  
     </tr> 
     
     ';  
}  
$output .= "</table></div>";  
$output .= "<a class='btn btn-primary ' href='pages/student_eval/result_pdf.php' role='button'><ion-icon name='print-outline'></ion-icon> Generate into PDF</a>";  
echo $output;  

}
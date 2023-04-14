<?php
include '../../includes/sms_db.php';


if (isset($_POST['save'])) { 
    // retrieve the form data by using the element's name attributes value as key
    $stud_id = $_POST['stud_id'];
    // display the results
    $sql = "SELECT * FROM registrar_studentlist where Student_ID = '$stud_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        header("Location: indv_counseling.php?stud_id=$stud_id");
    }
    else{
        header("Location: ../../individual.php?errorstud='Student number cannot found'");
    }
    
}
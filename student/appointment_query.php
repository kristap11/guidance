<?php

include '../includes/sms_db.php';
        if (isset($_POST['submit'])) {
        
          $stud_emp_id = $_POST['stud_emp_id'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $course = $_POST['course'];
          $year_section = $_POST['year_section'];
          $referral = $_POST['referral'];
          $concern = $_POST['concern'];
          $role = "Student";
          $status = $_POST['status'];

          $message = "$firstname $lastname would like to request a counseling.";

        $sql1 = "INSERT INTO guidance_requests (stud_emp_id,firstname,lastname,course,year_section,referral,concern,message,role,status,date_time) VALUES ('$stud_emp_id', '$firstname' , '$lastname' , '$course' , '$year_section' , '$referral' , '$concern' , '$message' , '$role' , '$status' , Now())";
        $sql2 = "INSERT INTO guidance_status (stud_emp_id,firstname,lastname,course,year_section,referral,concern,message,role,status,date_time) VALUES ('$stud_emp_id', '$firstname' , '$lastname' , '$course' , '$year_section' , '$referral' , '$concern' , '$message' , '$role' , '$status' , Now())";

        // 3. Execute multiple INSERT statements
        $query = $sql1 . ";" . $sql2; // concatenate multiple queries   
        if (mysqli_multi_query($conn, $query)) {
            echo  "
            <script>
                alert('Success');
                document.location.href = '../newAppointment';
            </script>
            ";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
}
        

        }
        
     ?>


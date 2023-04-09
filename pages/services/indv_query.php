<?php
        session_start();
        include '../../includes/sms_db.php';
        if (isset($_POST['submit'])) {
            $id = $_GET['id'];
            $sql2 = "select * from `guidance_profiling` where `guidance_status`.`id` = '$id'";
            $name = $_POST['name'];
            $lname = $_POST['lname'];
            $stud_id = $_POST['stud_id'];
            $course_year_section = $_POST['course_year_section'];
            $status = $_POST['status'];
            $approach= $_POST['approach'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $background = $_POST['background'];
            $goal= $_POST['goal'];
            $comment= $_POST['comment'];
            $recommendation= $_POST['recommendation'];
            $role= $_POST['role'];


        $sql1 = "INSERT INTO guidance_individual(name,lname,stud_id,course_year_section,status,approach,date,time,background,goal,comment,recommendation,role) VALUES ('$name' , '$lname' , '$stud_id' , '$course_year_section' , '$status' , '$approach' , '$date' , '$time' , '$background' , '$goal' , '$comment' , '$recommendation' , '$role')";
        $sql2 = "UPDATE guidance_profiling SET counseling_role = 'follow' WHERE id = '$id';";
        
        // 3. Execute multiple INSERT statements
        $query = $sql1 . ";" . $sql2; // concatenate multiple queries   
        if (mysqli_multi_query($conn, $query)) {
          header ("location: ../../individual");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
}
        

        }
        
     ?>


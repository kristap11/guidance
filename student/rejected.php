<?php
    include('../includes/functions.php');
    $id = $_GET['id'];
    $query = "select * from `guidance_requests` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $stud_emp_id = $row['stud_emp_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $course = $row['course'];
            $year_section = $row['year_section'];
            $referral = $row['referral'];
            $concern = $row['concern'];
            $date_time = $row['date_time'];
            $role = $row['role'];
            $query = "INSERT INTO `guidance_reject_table` (`stud_emp_id`, `id`, `firstname`, `lastname`, `course`, `year_section`, `referral`, `concern` , `date_time` , `role` ) VALUES ('$stud_emp_id', '$id', '$firstname', '$lastname', '$course', '$year_section', '$referral', '$concern' , Now() , '$role' );";
        }
        $query .= "DELETE FROM `guidance_requests` WHERE `guidance_requests`.`id` = '$id';";
        if(multi_query($query)){
            echo
            "
            <script>
                alert('Reservation has been rejected');
                document.location.href = '../home.php';
            </script>
            ";

        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
        header('location:../home.php');
    }

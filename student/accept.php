<?php
    include('../includes/functions.php');
   

    if (isset($_POST['submit'])) { 
    $id = $_GET['id'];
    $query = "select * from `guidance_status` inner join `guidance_requests` where `guidance_status`.`id` = '$id' or `guidance_requests`.`id` = '$id'";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $stud_emp_id = $row['stud_emp_id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $course = $row['course'];
            $year_section = $row['year_section'];
            $referral = $row['referral'];
            $concern = $row['concern'];
            $role = $row['role'];
            $status = "approved";
    
            $date = $_POST['date'];
            $time = $_POST['time'];
            $_SESSION['date'] = $date;
            $_SESSION['time'] = $time;

            $query = "INSERT INTO `guidance_reservation` (`id`, `stud_emp_id` , `firstname`, `lastname`, `course`, `year_section`, `referral`, `concern` , `date` , `time` , `role` , `status`) VALUES ('$id', '$stud_emp_id' , '$firstname', '$lastname', '$course', '$year_section', '$referral', '$concern' , '$date' , '$time' , '$role' , '$status');";

            
        }
        
            $query .= "DELETE FROM `guidance_requests` WHERE `guidance_requests`.`id` = '$id';
                        UPDATE guidance_status SET status = 'approved' WHERE id = '$id'; ";   

        if(multi_query($query)){
        echo
        "
        <script>
            alert('Reservation has been accepted');
            window.history.go(-1);
        </script>
        ";


        }else{
            echo "Unknown error occured. Please try again.";

        }
    }else{
        echo
        "
        <script>
            alert('Error occured.');
            window.history.go(-1);
        </script>
        ";
        
    }
}










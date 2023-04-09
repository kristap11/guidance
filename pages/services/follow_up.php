<?php
include('../../includes/sms_db.php');
if(isset($_POST['submit'])) {
	        $stud_emp_id = $_POST['stud_emp_id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $referral = $_POST['referral'];
            $concern = $_POST['concern'];
            $role = $_POST['role'];
            $date = $_POST['date'];
            $time = $_POST['time'];
        

	$sql = $conn -> prepare ("INSERT INTO guidance_reservation (stud_emp_id,firstname,lastname,referral,concern,role,date,time)VALUES(?,?,?,?,?,?,?,?)");
	$sql->execute(array($stud_emp_id,$firstname,$lastname,$referral,$concern,$role,$date,$time));
        echo
        "
        <script>
            alert('Visit logs has been updated');
            document.location.href = '../../individual.php';
        </script>
        ";

}



<?php
include('../../includes/sms_db.php');
if(isset($_POST['submit'])) {
	$stud_id = $_POST['stud_id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $visit_purpose = $_POST['visit_purpose'];
	$course = $_POST['course'];
	$year_section = $_POST['year_section'];

	$sql = $conn -> prepare ("INSERT INTO guidance_visit_log (stud_id,fname,lname,visit_purpose,course,year_section,date_time)VALUES(?,?,?,?,?,?,Now())");
	$sql->execute(array($stud_id,$fname,$lname,$visit_purpose,$course,$year_section));
        echo
        "
        <script>
            alert('Visit logs has been updated');
            document.location.href = '../../visitlogs.php';
        </script>
        ";

}



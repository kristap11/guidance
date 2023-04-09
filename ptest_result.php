<?php
include('includes/sms_db.php');
if(isset($_POST['submit'])) {
    $stud_id = $_POST['stud_id'];
    $name = $_POST['name'];
	$type = $_POST['type'];
	$profile = $_POST['profile'];
	$meaning = $_POST['meaning'];
    $percentage = $_POST['percentage'];
	$description = $_POST['description'];
    $name = $_POST['name'];

    $type_name1 = $_POST['type_name1'];
    $type_name2 = $_POST['type_name2'];
    $type_name3 = $_POST['type_name3'];
    $type_name4 = $_POST['type_name4'];

    $type_1 = $_POST['type_1'];
    $type_2 = $_POST['type_2'];
    $type_3 = $_POST['type_3'];
    $type_4 = $_POST['type_4'];


	$sql = $conn -> prepare ("INSERT INTO guidance_stud_eval (stud_id,name,type,profile,meaning,percentage,description,type_name1,type_name2,type_name3,type_name4,type_1,type_2,type_3,type_4)
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$sql->execute(array($stud_id,$name,$type,$profile,$meaning,$percentage,$description,$type_name1,$type_name2,$type_name3,$type_name4,$type_1,$type_2,$type_3,$type_4));
        echo
        "
        <script>
            alert('successfully added');
            document.location.href = 'student_evaluation.php';
        </script>
        ";

}



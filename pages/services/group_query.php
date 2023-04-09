<?php
include('../../includes/sms_db.php');
if(isset($_POST['submit'])) {
    $stud_id = $_POST['stud_id'];
	$stud_name = $_POST['stud_name'];
    $approach= $_POST['approach'];
    $background = $_POST['background'];
    $goal= $_POST['goal'];
    $comment= $_POST['comment'];
    $recommendation= $_POST['recommendation'];
    $a = implode(',' , $stud_id );
    $b = implode(',' , $stud_name );

	$sql = $conn -> prepare ("INSERT INTO guidance_group (stud_id,stud_name,approach,background,goal,comment,recommendation)VALUES(?,?,?,?,?,?,?)");
	$sql->execute(array($a,$b,$approach,$background,$goal,$comment,$recommendation));
    echo
    "
    <script>
        alert('Success');
        document.location.href = '../../group.php';
    </script>
    ";
}



<?php
	session_start();

    $stud_id = $_POST['stud_id'];
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $_SESSION['stud_id'] = $stud_id;
	$_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;

    header("Location: ../../mbti1.php");
?>
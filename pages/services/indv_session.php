<?php
	session_start();

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $name = $_POST['name'];
	$stud_id = $_POST['stud_id'];
    $course_year_section = $_POST['course_year_section'];
    $status = $_POST['status'];
    $approach= $_POST['approach'];
    $background = $_POST['background'];
    $goal= $_POST['goal'];
    $comment= $_POST['comment'];
    $recommendation= $_POST['recommendation'];
    $role = $_POST['role'];

    $_SESSION['id'] = $id;
    $_SESSION['fname'] = $fname;
    $_SESSION['name'] = $name;
    $_SESSION['stud_id'] = $stud_id;
	$_SESSION['course_year_section'] = $course_year_section;
    $_SESSION['status'] = $status;
    $_SESSION['approach'] = $approach;
    $_SESSION['background'] = $background;
    $_SESSION['goal'] = $goal;
    $_SESSION['comment'] = $comment;
    $_SESSION['recommendation'] = $recommendation;
    $_SESSION['roles'] = $role;


    header("Location: finalization");
?>
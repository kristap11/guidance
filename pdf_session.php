<?php
session_start();

include 'includes/sms_db.php';

$name = $_POST['name'];
$age = $_POST['age'];

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;



header("Location: pdf.php");
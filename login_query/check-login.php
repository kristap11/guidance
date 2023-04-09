<?php  
session_start();
include 'sms_db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	

	if (empty($username)) {
		header("Location: ../index?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../index?error=Password is Required");
	}else {
        
        $sql = "SELECT * FROM guidance_users WHERE email='$username' AND pass='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['pass'] === $password ) {
        		//$_SESSION['name'] = $row['name'];
        		$_SESSION['ID'] = $row['ID'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['active_time'] = time();
			if ($_SESSION['role'] == 'Counselor') {
        		header("Location: ../home");
			}else if($_SESSION['role'] == 'Super_Admin'){
			        $role = "Super Admin";
				header("Location: ../superadmindashboard");
			}else if($_SESSION['role'] == 'Staff'){
				header("Location: ../dashboard");
			}

        	}else {
        		header("Location: ../index?error=Incorect Username or password");
        	}
        }else {
        	header("Location: ../index?error=Incorect Username or password");
        }

	}
	
}else {
	header("Location: ../index");
}
?>
<?php  

if (isset($_SESSION['email']) && isset($_SESSION['ID'])) {
    
    $sql = "SELECT * FROM guidance_users ORDER BY ID ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} 
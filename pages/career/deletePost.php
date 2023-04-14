<?php
session_start();
define('DBINFO', 'mysql:host=localhost;dbname=u476821515_SMS');
define('DBUSER', 'u476821515_SMS');
define('DBPASS', 'Bcpsms12@');

function performQuery($query)
{
    $conn = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

$id = $_GET['id'];
    
    $query = "DELETE FROM `guidance_post` WHERE `id` = '$id';";
        if(performQuery($query)){
            $_SESSION['stats'] = "Post has been deleted.";
            $_SESSION['stats_code'] = "success";
            header("Location: ../../career_orientation.php");
            //header("Location: ../../career_orientation.php?success='Post has been deleted.'");
        }else{
            $_SESSION['stats'] = "Unknown error occured. Please try again.";
            $_SESSION['stats_code'] = "error";
            header("Location: ../../career_orientation.php");

            //header("Location: ../../career_orientation.php?failed='Unknown error occured. Please try again.'");
        }
?>

<?php
     define('DBINFO','mysql:host=localhost;dbname=u476821515_SMS');
    define('DBUSER','u476821515_SMS');
    define('DBPASS','Bcpsms12@');

    function performQuery($query){
        $conn = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    $id = $_GET['id'];
    
    $query = "DELETE FROM `guidance_post` WHERE `guidance_post`.`id` = '$id';";
        if(performQuery($query)){
             echo
      "
      <script>
        alert('Successfully Deleted');
        document.location.href = '../../career_orientation.php';
      </script>
      ";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>

<?php      
    $host = "localhost";  
    $user = "u476821515_SMS";  
    $password = 'Bcpsms12@';  
    $db_name = "u476821515_SMS"; 
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>  
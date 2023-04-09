<?php

    
    define('DBINFO','mysql:host=localhost;dbname=u476821515_SMS');
    define('DBUSER','u476821515_SMS');
    define('DBPASS','Bcpsms12@');

    function multi_query($query){
        $conn = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $conn = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $conn->query($query);
        return $stmt->fetchAll();
    }

?>



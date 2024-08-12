<?php      
    $server = "localhost";  
    $user = "root";  
    $pass = "";  
    $db_name = "lawrence";  
      
    $con = mysqli_connect($server, $user, $pass, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 